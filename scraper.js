const axios = require('axios');
const cheerio = require('cheerio');
const fs = require('fs');
const path = require('path');

const baseUrl = 'https://www.bharatmedicalhall.com/blog/';
const postsDir = path.join(__dirname, 'posts');
const jsonFile = path.join(__dirname, 'blog_data.json');

// Ensure the posts directory exists
if (!fs.existsSync(postsDir)) {
    fs.mkdirSync(postsDir);
}

// Ensure the blog images directory exists in assets
const imagesDir = path.join(__dirname, 'assets', 'images', 'bharat', 'blogs');
if (!fs.existsSync(imagesDir)) {
    fs.mkdirSync(imagesDir, { recursive: true });
}

let allPosts = [];
let scrapedUrls = new Set();
let postLinks = new Set();

async function getPostLinks(pageUrl) {
    try {
        console.log(`Fetching page: ${pageUrl}`);
        const response = await axios.get(pageUrl);
        const $ = cheerio.load(response.data);
        
        let foundLinks = 0;
        
        // Find article links. Usually they are inside h2 tags with class entry-title, or main-title
        $('h2 a, .entry-title a').each((i, el) => {
            let href = $(el).attr('href');
            if (href && href.includes('/blog/') && !href.includes('/page/')) {
                postLinks.add(href);
                foundLinks++;
            }
        });

        // If rankmath or elementor, sometimes links are just any a tag in the loop
        if (foundLinks === 0) {
            $('article a').each((i, el) => {
                let href = $(el).attr('href');
                if (href && href.includes('/blog/') && !href.includes('/page/') && !href.includes('/category/') && !href.includes('/author/')) {
                    postLinks.add(href);
                }
            });
        }
    } catch (e) {
        console.error(`Error fetching page ${pageUrl}:`, e.message);
    }
}

async function scrapePost(url) {
    if (scrapedUrls.has(url)) return;
    scrapedUrls.add(url);
    
    try {
        console.log(`Scraping post: ${url}`);
        const response = await axios.get(url);
        const $ = cheerio.load(response.data);
        
        const title = $('h1').first().text().trim() || $('h2.entry-title').first().text().trim() || $('title').text().replace('- Bharat Medical Hall', '').trim();
        let imageSrc = $('.wp-post-image').attr('src') || $('article img').first().attr('src') || '';
        
        // Extract content
        let contentHtml = $('.entry-content').html() || $('article').html();
        if (!contentHtml) {
            console.log(`No content found for ${url}`);
            return;
        }

        // Clean up the URL to get the slug
        let urlObj = new URL(url);
        let slug = urlObj.pathname.replace(/\/blog\//, '').replace(/\/$/, '');
        if (!slug) slug = 'index';
        
        let localImage = '';
        if (imageSrc) {
            // we'll just keep the remote URL or local fallback in JSON
            localImage = imageSrc;
        }

        // Basic HTML cleanup for content
        let $content = cheerio.load(contentHtml);
        $content('script').remove();
        $content('style').remove();
        $content('img').addClass('img-fluid'); // Bootstrap responsive class
        
        let bodyContent = $content.html();
        
        // Generate PHP file
        const phpContent = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>${title}</title>
    <?php include '../header-links.php';?>
    <style>
        .container-service {
            box-shadow: 0 0 45px -5px rgba(39, 71, 125, .14);
            background: #fff;
            padding: 20px;
            border-radius: 15px;
        }
        .services-details__title {
            margin-bottom: 20px;
            color: #468dcd;
        }
        .post-content img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php include '../header.php';?>
    
    <section class="services-details" style="padding: 80px 0;">
        <div class="container container-service">
            <div class="row">
                <div class="col-xl-12">
                    <div class="services-details__left">
                        ${imageSrc ? `<div class="services-details__img mb-4"><img src="${imageSrc}" alt="${title}"></div>` : ''}
                        <h1 class="services-details__title">${title}</h1>
                        <div class="post-content">
                            ${bodyContent}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include '../contact-form.php';?>
    <?php include '../footer.php';?>
</body>
</html>`;

        const filename = `${slug}.php`;
        fs.writeFileSync(path.join(postsDir, filename), phpContent);
        
        allPosts.push({
            title: title,
            url: `posts/${slug}`,
            image: imageSrc
        });
        
    } catch (e) {
        console.error(`Error scraping post ${url}:`, e.message);
    }
}

async function run() {
    // 1. Get all pages
    await getPostLinks(baseUrl);
    for (let i = 2; i <= 10; i++) {
        await getPostLinks(`${baseUrl}page/${i}/`);
    }
    
    console.log(`Found ${postLinks.size} posts to scrape...`);
    
    // 2. Scrape each post
    const linksArray = Array.from(postLinks);
    for (const link of linksArray) {
        await scrapePost(link);
    }
    
    // 3. Save JSON
    fs.writeFileSync(jsonFile, JSON.stringify(allPosts, null, 2));
    console.log(`Done! Scraped ${allPosts.length} posts.`);
}

run();
