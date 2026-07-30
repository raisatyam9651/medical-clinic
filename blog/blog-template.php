<?php
// Fill in the details for your new blog post below
$pageTitle = "Your Blog Post Title Here";
$metaDescription = "A short summary of your blog post for SEO.";
$publishDate = "2026-07-30";
$canonicalUrl = "https://www.bharatmedicalhall.com/blog/your-url-slug-here.php";
$featuredImage = "/assets/images/blog/default.png";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $metaDescription; ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php include '../header-links.php';?>
    <style>
        body { background-color: #f8f9fa; color: #2d3436; }
        .services-details { padding: 80px 0; background-color: #f2f7fb; }
        .services-details__left { background: #fff; padding: 40px; border-radius: 15px; box-shadow: 0 0 45px -5px rgba(39, 71, 125, .14); }
        .services-details__title { font-size: 36px; font-weight: 700; color: #1a1a1a; margin-bottom: 20px; margin-top: 30px; }
        .wp-block-heading { font-size: 24px; font-weight: 600; color: #1a1a1a; margin-top: 40px; margin-bottom: 15px; }
        .post-content p { font-size: 16px; color: #555; line-height: 1.8; margin-bottom: 20px; }
        .post-content ul, .post-content ol { margin-bottom: 20px; padding-left: 20px; }
        .post-content li { font-size: 16px; color: #555; line-height: 1.8; margin-bottom: 10px; }
        .sidebar { background: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 0 45px -5px rgba(39, 71, 125, .14); margin-bottom: 30px; }
        .sidebar__title { font-size: 24px; font-weight: 700; color: #1a1a1a; margin-bottom: 25px; border-bottom: 2px solid #f2f7fb; padding-bottom: 15px; }
    </style>

<!-- Schema Markup -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalWebPage",
      "name": "<?php echo $pageTitle; ?>",
      "description": "<?php echo $metaDescription; ?>",
      "url": "<?php echo $canonicalUrl; ?>",
      "publisher": { "@type": "Organization", "name": "Bharat Medical Hall" }
    },
    {
      "@type": "Article",
      "headline": "<?php echo $pageTitle; ?>",
      "author": { "@type": "Organization", "name": "Bharat Medical Hall Experts" },
      "publisher": { "@type": "Organization", "name": "Bharat Medical Hall" },
      "datePublished": "<?php echo $publishDate; ?>"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.bharatmedicalhall.com/" },
        { "@type": "ListItem", "position": 2, "name": "Blog", "item": "https://www.bharatmedicalhall.com/blog/" },
        { "@type": "ListItem", "position": 3, "name": "<?php echo $pageTitle; ?>" }
      ]
    }
  ]
}
</script>
</head>
<body>
    <?php include '../header.php';?>
    
    <section class="services-details">
        <div class="container">
            <div class="row">
                <!-- Main Blog Content Column -->
                <div class="col-xl-8 col-lg-8">
                    <div class="services-details__left container-service">
                        
                        <!-- Featured Image -->
                        <div class="services-details__img mb-4">
                            <img src="<?php echo $featuredImage; ?>" alt="<?php echo $pageTitle; ?>" style="width: 100%; border-radius: 10px;" onerror="this.src='https://via.placeholder.com/800x500?text=Blog+Image'">
                        </div>
                        
                        <!-- Main Content Starts Here -->
                        <h1 class="services-details__title"><?php echo $pageTitle; ?></h1>
                        <div class="post-content">
                            
                            <p>Write your introduction here...</p>
                            
                            <h2 class="wp-block-heading">Your First Heading</h2>
                            <p>Write your detailed content here...</p>
                            
                            <!-- Mid Blog CTA -->
                            <div style="background-color: #f1f8ff; padding: 40px; border-radius: 12px; margin: 40px 0; text-align: center; border-left: 6px solid #468dcd; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                                <h3 style="color: #1a1a1a; margin-bottom: 15px; font-size: 24px;">Need Medical Advice?</h3>
                                <p style="font-size: 16px; color: #555; margin-bottom: 25px;">Consult our clinical experts for a thorough evaluation and personalized care.</p>
                                <a href="https://wa.me/+919776001963?text=Hi,%20I%20would%20like%20to%20talk%20with%20an%20expert." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; gap: 10px; background-color: #25D366; color: white; padding: 15px 35px; border-radius: 50px; text-decoration: none; font-weight: 600; font-size: 16px; transition: all 0.3s ease;">
                                    <i class="fab fa-whatsapp" style="font-size: 20px;"></i> Talk with an Expert Today
                                </a>
                            </div>
                            
                            <h2 class="wp-block-heading">Conclusion</h2>
                            <p>Wrap up your article here...</p>
                            
                        </div>
                        <!-- Main Content Ends Here -->
                        
                    </div>
                </div>
                
                <!-- Sidebar Column (Perfectly structured to stay on the right side) -->
                <div class="col-xl-4 col-lg-4">
                    <div class="sidebar" style="position: sticky; top: 120px;">
                        <div class="sidebar__single sidebar__post mb-5">
                            <h3 class="sidebar__title">Recent Posts</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                
                                <li style="display: flex; align-items: center; margin-bottom: 20px; border-bottom: 1px solid #eee; padding-bottom: 15px;">
                                    <div class="sidebar__post-image" style="width: 80px; height: 80px; flex-shrink: 0; margin-right: 15px; border-radius: 10px; overflow: hidden; background-color: #f4f4f4;">
                                        <img src="https://www.bharatmedicalhall.com/blog/wp-content/uploads/2026/03/24-hour-pharmacy-near-me-what-to-look-for-bmh.jpg" alt="24 Hour Pharmacy Near Me – What to Look For" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h4 style="font-size: 16px; margin: 0; line-height: 1.4;"><a href="/blog/24-hour-pharmacy-near-me-what-to-look-for.php" style="color: #222; text-decoration: none;">24 Hour Pharmacy Near Me – What to Look For</a></h4>
                                    </div>
                                </li>
                            
                                <li style="display: flex; align-items: center; margin-bottom: 20px; border-bottom: 1px solid #eee; padding-bottom: 15px;">
                                    <div class="sidebar__post-image" style="width: 80px; height: 80px; flex-shrink: 0; margin-right: 15px; border-radius: 10px; overflow: hidden; background-color: #f4f4f4;">
                                        <img src="https://www.bharatmedicalhall.com/blog/wp-content/uploads/2026/03/medicine-delivery-in-baripada-complete-guide-bmh.jpg" alt="Medicine Delivery in Baripada – Complete Guide" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h4 style="font-size: 16px; margin: 0; line-height: 1.4;"><a href="/blog/medicine-delivery-in-baripada-complete-guide.php" style="color: #222; text-decoration: none;">Medicine Delivery in Baripada – Complete Guide</a></h4>
                                    </div>
                                </li>
                            
                                <li style="display: flex; align-items: center; margin-bottom: 20px; border-bottom: 1px solid #eee; padding-bottom: 15px;">
                                    <div class="sidebar__post-image" style="width: 80px; height: 80px; flex-shrink: 0; margin-right: 15px; border-radius: 10px; overflow: hidden; background-color: #f4f4f4;">
                                        <img src="https://www.bharatmedicalhall.com/blog/wp-content/uploads/2026/03/best-online-pharmacy-in-india-how-to-choose-bmh.jpg" alt="Best Online Pharmacy in India – How to Choose" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h4 style="font-size: 16px; margin: 0; line-height: 1.4;"><a href="/blog/best-online-pharmacy-in-india-how-to-choose.php" style="color: #222; text-decoration: none;">Best Online Pharmacy in India – How to Choose</a></h4>
                                    </div>
                                </li>
                            
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
</html>
