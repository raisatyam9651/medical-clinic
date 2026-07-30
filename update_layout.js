const fs = require('fs');
const path = require('path');

const blogDir = path.join(__dirname, 'blog');
const jsonFile = path.join(__dirname, 'blog_data.json');

// Read recent posts
let recentPostsHtml = '';
try {
    const blogData = JSON.parse(fs.readFileSync(jsonFile, 'utf8'));
    const recentPosts = blogData.slice(0, 3);
    
    recentPosts.forEach(post => {
        let postUrl = post.url;
        let postImage = post.image || '';
        let postTitle = post.title;
        
        recentPostsHtml += `
            <li style="display: flex; align-items: center; margin-bottom: 20px; border-bottom: 1px solid #eee; padding-bottom: 15px;">
                <div class="sidebar__post-image" style="width: 80px; height: 80px; flex-shrink: 0; margin-right: 15px; border-radius: 10px; overflow: hidden; background-color: #f4f4f4;">
                    <img src="${postImage}" alt="${postTitle}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="sidebar__post-content">
                    <h4 style="font-size: 16px; margin: 0; line-height: 1.4;"><a href="${postUrl}" style="color: #222; text-decoration: none;">${postTitle}</a></h4>
                </div>
            </li>
        `;
    });
} catch (e) {
    console.error("Error reading blog_data.json:", e);
}

// Update all files in blog folder
const files = fs.readdirSync(blogDir);

files.forEach(file => {
    if (!file.endsWith('.php')) return;
    
    const filePath = path.join(blogDir, file);
    const content = fs.readFileSync(filePath, 'utf8');
    
    // Extract Title
    const titleMatch = content.match(/<h1 class="services-details__title">([\s\S]*?)<\/h1>/);
    const title = titleMatch ? titleMatch[1].trim() : '';
    
    // Extract Image
    const imageMatch = content.match(/<div class="services-details__img mb-4"><img src="(.*?)" alt=".*?"><\/div>/);
    const imageSrc = imageMatch ? imageMatch[1] : '';
    
    // Extract Body Content
    // We match from `<div class="post-content">` to the closing div of services-details__left
    // Let's use a more robust regex or just split
    const postContentSplit = content.split('<div class="post-content">');
    if (postContentSplit.length < 2) {
        console.log(`Skipping ${file}, post-content not found.`);
        return;
    }
    
    let bodyPart = postContentSplit[1];
    // Find where the post content ends. The original template has 5 closing divs before </section>
    // So we can just split by `</div>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </section>`
    const endSplit = bodyPart.split(/<\/div>\s*<\/div>\s*<\/div>\s*<\/div>\s*<\/div>\s*<\/section>/);
    let bodyContent = endSplit[0].trim();
    // bodyContent still has one closing </div> for post-content which we should strip
    if (bodyContent.endsWith('</div>')) {
        bodyContent = bodyContent.slice(0, -6).trim();
    }
    
    // Generate new PHP file content
    const newContent = `<!DOCTYPE html>
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
            padding: 40px;
            border-radius: 15px;
        }
        .services-details__title {
            margin-bottom: 20px;
            color: #468dcd;
            font-size: 36px;
            font-weight: 700;
        }
        .post-content img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .sidebar {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 45px -5px rgba(39, 71, 125, .05);
        }
        .sidebar__title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #222;
            position: relative;
            padding-bottom: 15px;
        }
        .sidebar__title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: #468dcd;
        }
        .sidebar__post-content h4 a:hover {
            color: #468dcd !important;
        }
        /* Hide broken star ratings that cause extra spacing */
        .kk-star-ratings {
            display: none !important;
        }
        /* Style FAQ sections */
        .schema-faq-section, .rank-math-list-item {
            background: #fff;
            border: 1px solid #e1e8ed;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
        }
        .schema-faq-question, .rank-math-question {
            font-size: 20px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 12px;
            display: block;
            border-bottom: 2px solid #f2f7fb;
            padding-bottom: 10px;
        }
        .schema-faq-answer, .rank-math-answer {
            color: #555;
            line-height: 1.6;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <?php include '../header.php';?>
    
    <section class="services-details" style="padding: 80px 0; background-color: #f2f7fb;">
        <div class="container">
            <div class="row">
                <!-- Main Blog Content -->
                <div class="col-xl-8 col-lg-8">
                    <div class="services-details__left container-service">
                        ${imageSrc ? `<div class="services-details__img mb-4"><img src="${imageSrc}" alt="${title}" style="width: 100%; border-radius: 10px;"></div>` : ''}
                        <h1 class="services-details__title">${title}</h1>
                        <div class="post-content">
                            ${bodyContent}
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4">
                    <div class="sidebar" style="position: sticky; top: 120px;">
                        <div class="sidebar__single sidebar__post mb-5">
                            <h3 class="sidebar__title">Recent Posts</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                ${recentPostsHtml}
                            </ul>
                        </div>
                        
                        <div class="sidebar__single sidebar__cta" style="background-color: #468dcd; padding: 40px 30px; border-radius: 15px; text-align: center; color: #fff; box-shadow: 0 10px 30px rgba(70, 141, 205, 0.3);">
                            <i class="fas fa-user-md" style="font-size: 60px; margin-bottom: 20px;"></i>
                            <h3 style="color: #fff; margin-bottom: 15px; font-size: 28px; font-weight: 700;">Need Medical Advice?</h3>
                            <p style="color: rgba(255,255,255,0.9); margin-bottom: 25px; font-size: 16px;">Consult our experienced pharmacists and doctors today.</p>
                            <a href="/contact" class="thm-btn" style="background-color: #fff; color: #468dcd; padding: 12px 30px; border-radius: 8px; text-transform: uppercase; font-weight: 700; display: inline-block; text-decoration: none; transition: all 0.3s ease;">Book Appointment</a>
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

    fs.writeFileSync(filePath, newContent);
    console.log(`Updated layout for ${file}`);
});
