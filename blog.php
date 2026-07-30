<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blogs – Bharat Medical Hall</title>
    <meta name="description" content="Read our latest health and medical blogs.">
    <?php include 'header-links.php';?>
    
    <style>
        .thm-breadcrumb li {
            color: #468dcd;
        }
        .blog-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .blog-card:hover {
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }
        .blog-card__image {
            height: 200px;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
            font-size: 50px;
            overflow: hidden;
        }
        .blog-card__image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .blog-card__content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .blog-card__title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #222;
        }
        .blog-card__title a {
            color: inherit;
        }
        .blog-card__title a:hover {
            color: #468dcd;
        }
        .blog-card__read-more {
            margin-top: auto;
            color: #468dcd;
            font-weight: 500;
            display: inline-block;
        }
        .blog-card__read-more i {
            margin-left: 5px;
            font-size: 12px;
        }
    </style>
</head>

<body>

    <?php include 'header.php';?>
    
    <!--Page Header Start-->
    <section class="page-header d-none d-md-block">
        <!-- Using a default solid color or simple banner -->
        <div class="page-header-bg" style="background-color: #f2f7fb;"></div>
        <div class="container">
            <div class="page-header__inner" style="margin-left: 160px; padding-top: 50px; padding-bottom: 50px;">
                <h2 style="color:#468dcd;">Our Blogs</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="https://bharatmedicalhall.com/" style="font-weight:700;color: #468dcd;">Home</a></li>
                    <li><span>/</span></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="d-block d-md-none" style="background-color: #f2f7fb; padding: 40px 20px; text-align: center; margin-top: 90px;">
        <h2 style="color:#468dcd; margin-bottom: 10px;">Our Blogs</h2>
    </div>
    <!--Page Header End-->
    
    <section class="blog-page" style="padding: 80px 0;">
        <div class="container">
            <div class="row">
                
                <?php
                // Read the blog data JSON file
                $json_data = file_get_contents('blog_data.json');
                $blogs = json_decode($json_data, true);

                if ($blogs && is_array($blogs)) {
                    foreach ($blogs as $blog) {
                        $title = htmlspecialchars($blog['title']);
                        $url = htmlspecialchars($blog['url']);
                        $image = htmlspecialchars($blog['image']);
                        
                        echo '<div class="col-xl-4 col-lg-4 col-md-6">';
                        echo '    <div class="blog-card">';
                        echo '        <div class="blog-card__image">';
                        if (!empty($image)) {
                            echo '            <img src="' . $image . '" alt="' . $title . '" onerror="this.style.display=\'none\'; this.nextElementSibling.style.display=\'block\';">';
                            echo '            <i class="fas fa-heartbeat" style="display:none;"></i>';
                        } else {
                            echo '            <i class="fas fa-heartbeat"></i>';
                        }
                        echo '        </div>';
                        echo '        <div class="blog-card__content">';
                        echo '            <h3 class="blog-card__title">';
                        echo '                <a href="' . $url . '">' . $title . '</a>';
                        echo '            </h3>';
                        echo '            <a href="' . $url . '" class="blog-card__read-more">Read More <i class="fas fa-arrow-right"></i></a>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="col-12"><p>No blogs found.</p></div>';
                }
                ?>

            </div>
        </div>
    </section>
    
    <?php include 'footer.php';?>
</body>

</html>
