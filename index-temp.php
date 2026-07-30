<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Bharat Medical Hall</title>
    <?php include 'header-links.php';?>
    
    <style>
    .wa-icon-fixed{
        position: fixed;
        bottom: 40px;
        left: 40px;
        z-index: 99;
        text-align: center;
        -webkit-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }
    .custom-bottom-mob-nav {
    width: 94%;
    text-align: center;
    position: fixed;
    right: 0;
    bottom: 10px;
    left: 0;
    z-index: 1002;
    margin: auto;
}
.mob-div{
    background: rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(10px);
    /*box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;*/
    box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
    border-radius: 10px;
}
.mob {
        display: none;
    }
    .custom-bottom-mob-nav-a {
    text-decoration: none;
    color: black;
    font-weight: 500;
    font-size: 14px;
}
        .phone-image{
            max-height:600px
        }
        .main-slider .swiper-slide-active .custom-banner{
            transition: transform 7000ms ease, opacity 1500ms ease-in, -webkit-transform 7000ms ease;
            -webkit-transform: scale(1.15);
            transform: scale(1.05);
        }
        @media only screen and (max-width: 600px) {
            .wa-icon-fixed{
                display:none
            }
            .mob {
                display: block;
            }
            .about-one{
                padding: 0px 0 43px;
            } 
            .about-video-mt{
                margin-top:70px;
            }
            .phone-image{
                max-height:400px
            }
        }
         .order-steps {
      margin-top: 20px;
      color: black;
    }
    .order-steps li {
      margin-bottom: 20px; /* Increase space between points */
      font-size: 1.1rem; /* Make text a bit larger */
    }
    </style>
</head>

<body>

    <?php include 'header.php';?>
    
    <a target="_blank" class="wa-icon-fixed" href="https://api.whatsapp.com/send?phone=919776001963&text=Hi%2C%20I%20am%20contacting%20from%20the%20website." data-abc="true">
        <img src="assets/images/bharat/whatsapp-icon.webp" style="width:50px">
    </a>
    
    <section class="mob">
        <div class="container">
            <div class="navbar-fixed-bottom hidden-md hidden-sm hidden-lg col-xs-12 custom-bottom-mob-nav">
                <div class="mob-div hidden-md hidden-sm hidden-lg col-xs-12">
                    <div class="row no-gutters pt-1" style="height: 66px;">
                        <div class="col-3 p-0 custom-bottom-mob-nav-single-btn">
                            <div class="d-flex justify-content-center align-items-center flex-column ">
                                <a class="custom-bottom-mob-nav-a" href="index" data-abc="true"> <img src="assets/images/bharat/home.png" width="25" alt="Call">
                                   <br> Home
                                </a>
                            </div>
                        </div>
                        <div class="col-3 p-0 custom-bottom-mob-nav-single-btn">
                            <div class="d-flex justify-content-center align-items-center flex-column ">
                                <a class="custom-bottom-mob-nav-a" href="https://api.whatsapp.com/send?phone=919776001963&text=Hi%2C%20I%20am%20contacting%20from%20the%20website." data-abc="true">
                                    <img src="assets/images/bharat/whatsapp.png" width="25" alt="Whatsapp">
                                   <br> WhatsApp &nbsp;
                                </a>
                            </div>
                        </div>
                        <div class="col-3 p-0 custom-bottom-mob-nav-single-btn">
                            <div class="d-flex justify-content-center align-items-center flex-column ">
                                <a class="custom-bottom-mob-nav-a" href="tel:+919437039969" data-abc="true"> <img src="assets/images/bharat/phone-call.png" width="25" alt="Call">
                                     <br> Call Now
                                </a>
                            </div>
                        </div>
                        <div class="col-3 p-0 custom-bottom-mob-nav-single-btn">
                            <div class="d-flex justify-content-center align-items-center flex-column ">
                                <a class="custom-bottom-mob-nav-a" href="contact" data-abc="true"> <img src="assets/images/bharat/appointment.png" width="25" alt="Call">
                                      <br>  Contact
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

       <!--Main Slider Start-->
       <section class="main-slider">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
    "el": "#main-slider-pagination",
    "type": "bullets",
    "clickable": true
    },
    "navigation": {
    "nextEl": "#main-slider__swiper-button-next",
    "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
    "delay": 5000
    }}'>
            <div class="swiper-wrapper">

                <!--<div class="swiper-slide">-->
                <!--    <div class="image-layer"-->
                <!--        style="background-image: url(assets/images/bharat/home/banners/banner1.webp);"></div>-->
                    <!-- /.image-layer -->

                <!--    <div class="container">-->
                <!--        <div class="row">-->
                <!--            <div class="col-xl-12">-->
                <!--                <div class="main-slider__content">-->
                <!--                    <div class="main-slider__shape-one float-bob-x">-->
                <!--                    </div>-->
                <!--                    <h2 class="main-slider__title">Your Trusted <br>  Healthcare Partner-->
                <!--                    </h2>-->
                <!--                    <div class="main-slider__btn-box">-->
                <!--                        <a href="#" class="thm-btn main-slider__btn-one">Learn More-->
                <!--                            <i class="icon-right-arrow1"></i></a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                
                <div class="swiper-slide">
                    <div class="d-none d-md-block">
                        <img class="custom-banner" style="width: 100%;height: 100%;" src="assets/images/bharat/home/banners/banner1-indian.webp" alt="">
                    </div>
                    <div class="d-block d-md-none">
                        <img class="custom-banner" style="width: 100%;height: 100%;" src="assets/images/bharat/home/banners/banner1-indian-mob.webp" alt="">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="d-none d-md-block">
                        <img class="custom-banner" style="width: 100%;height: 100%;" src="assets/images/bharat/home/banners/banner-2-updated.webp" alt="">
                    </div>
                    <div class="d-block d-md-none">
                        <img class="custom-banner" style="width: 100%;height: 100%;" src="assets/images/bharat/home/banners/Banner-2-updated-mob.webp" alt="">
                    </div>
                    <!-- /.image-layer -->

                    <!--<div class="container">-->
                    <!--    <div class="row">-->
                    <!--        <div class="col-xl-12">-->
                    <!--            <div class="main-slider__content">-->
                    <!--                <div class="main-slider__shape-one float-bob-x">-->
                    <!--                </div>-->
                    <!--                <h2 class="main-slider__title">Quality Medicines, <br> Trusted Healthcare Solutions-->
                    <!--                </h2>-->
                    <!--                <div class="main-slider__btn-box">-->
                    <!--                    <a href="#" class="thm-btn main-slider__btn-one">Learn More-->
                    <!--                        <i class="icon-right-arrow1"></i></a>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
                
                <div class="swiper-slide">
                    <div class="d-none d-md-block">
                        <img class="custom-banner" style="width: 100%;height: 100%;" src="assets/images/bharat/home/banners/banner-new-3.webp" alt="">
                    </div>
                    <div class="d-block d-md-none">
                        <img class="custom-banner" style="width: 100%;height: 100%;" src="assets/images/bharat/home/banners/banner-3-mob.webp" alt="">
                    </div>
                </div>

                <!--<div class="swiper-slide">-->
                <!--    <div class="image-layer"-->
                <!--        style="background-image: url(assets/images/bharat/home/banners/banner3.webp);"></div>-->
                    <!-- /.image-layer -->

                <!--    <div class="container">-->
                <!--        <div class="row">-->
                <!--            <div class="col-xl-12">-->
                <!--                <div class="main-slider__content">-->
                <!--                    <div class="main-slider__shape-one float-bob-x">-->
                <!--                    </div>-->
                <!--                    <h2 class="main-slider__title">Reliable Pharmacy, <br> Expert Care Always-->
                <!--                    </h2>-->
                <!--                    <div class="main-slider__btn-box">-->
                <!--                        <a href="#" class="thm-btn main-slider__btn-one">Learn More-->
                <!--                            <i class="icon-right-arrow1"></i></a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->



            </div>


            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-right-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow1"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="container">
                <div class="row d-flex flex-column-reverse flex-sm-row">
                    <div class="col-xl-6">
                        <div class="about-one__left about-video-mt">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img cstm-shadow">
                                    <img src="assets/images/bharat/home/about-updated.webp" alt="">
                                </div>
                                <div class="about-one__img-two">
                                    <img src="assets/images/resources/about-one-img-2.jpg" alt="">
                                    <div class="about-one__experience">
                                        <div class="about-one__experience-year">
                                            <h3 class="odometer" data-count="12">00</h3>
                                            <span class="about-one__experience-year-plus">+</span>
                                        </div>
                                        <div class="about-one__experience-text-box">
                                            <p class="about-one__experience-text">Years <br> Experience</p>
                                        </div>
                                        <div class="about-one__icon-like">
                                            <img src="assets/images/icon/about-one-icon-like.png" alt="">
                                        </div>
                                        <div class="about-one__icon-like-2">
                                            <img src="assets/images/icon/about-one-icon-like.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="about-one__video-link">
                                    <a href="https://www.youtube.com/watch?v" class="video-popup">
                                        <div class="about-one__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="about-one__big-text">about us</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title section-title-two text-left">
                                <span class="section-title-three__tagline" style="text-transform: capitalize;">about us</span>
                                <h2 class="section-title__title">Welcome to <br><span style="color:#468dcd">Bharat Medical Hall</span></h2>
                            </div>
                            <p class="about-one__text-1">Bharat Medical Hall is your reliable source for reliable pharmaceuticals and medical equipment. We prioritize excellence and ensure that all our products meet strict quality standards, offering you authentic and trustworthy healthcare solutions.</p>
                                <br>
                                <p class="about-one__text-1">Our knowledgeable staff is here to guide you through our extensive inventory, making healthcare accessible and convenient. Experience dependable service tailored to your well-being at Bharat Medical Hall.</p>
                            <div class="about-two__points-box">
                                <ul class="list-unstyled about-two__points">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-checked"></span>
                                        </div>
                                        <div class="text">
                                            <h5>Strict Quality Check</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-checked"></span>
                                        </div>
                                        <div class="text">
                                            <h5>Smart Stock Control</h5>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled about-two__points about-two__points--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-checked"></span>
                                        </div>
                                        <div class="text">
                                            <h5>Drug Expertise</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-checked"></span>
                                        </div>
                                        <div class="text">
                                            <h5>Legal Adherence</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-three">
                <div class="container">
                    <div class="row">
                        <!--Feature Three Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-three__single">
                                <img style="width: 80px;height: 100%;" class="about-card-img" src="assets/images/bharat/home/icons/healthcare-2.png" alt="">
                                <div class="feature-three__content">
                                    <p class="feature-three__sub-title">Quality Assurance</p>
                                    <h4 class="feature-three__title"><a>Authentic, reliable <br>
                                            healthcare products</a></h4>
                                </div>
                            </div>
                        </div>
                        <!--Feature Three Single End-->
                        <!--Feature Three Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-three__single">
                                <img style="width: 80px;height: 100%;" class="about-card-img" src="assets/images/bharat/home/icons/scooter.png" alt="">
                                <div class="feature-three__content">
                                    <p class="feature-three__sub-title">Home Delivery Service</p>
                                    <h4 class="feature-three__title"><a>Convenient, timely<br> at-home delivery.</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!--Feature Three Single End-->
                        <!--Feature Three Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <div class="feature-three__single">
                                <img style="width: 80px;height: 100%;" class="about-card-img" src="assets/images/bharat/home/icons/guidance.png" alt="">
                                <div class="feature-three__content">
                                    <p class="feature-three__sub-title">Expert Consultations</p>
                                    <h4 class="feature-three__title"><a>Trusted guidance<br> by specialists.</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!--Feature Three Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Counter Two Start-->
        <section class="counter-two">
            <div class="container">
                <ul class="list-unstyled counter-two__list" style="box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;border-radius:20px;">
                    
                    <li class="counter-two__single wow fadeInUp" data-wow-delay="200ms">
                        <div class="counter-two__icon">
                            <span class="icon-patient"></span>
                        </div>
                        <h3 class="odometer" data-count="999999">00</h3><h3 style="display:inline">+</h3>
                        <p class="counter-two__text">Total Patients</p>
                    </li>
                    <li class="counter-two__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="counter-two__icon">
                            <span class="icon-medal"></span>
                        </div>
                        <h3 class="odometer" data-count="41">00</h3><h3 style="display:inline">+</h3>
                        <p class="counter-two__text">Years</p>
                    </li>
                    <li class="counter-two__single wow fadeInUp" data-wow-delay="500ms">
                        <div class="counter-two__icon">
                            <span class="icon-psychologist-1"></span>
                        </div>
                        <h3 class="odometer" data-count="20">00</h3><h3 style="display:inline">+</h3>
                        <p class="counter-two__text">Doctors</p>
                    </li>
                </ul>
            </div>
        </section>
        <!--Counter Two End-->

        <!--Services Two Start-->
        <section class="services-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="services-two__left">
                            <div class="section-title section-title-two text-left">
                                <span class="section-title__tagline">Our Services</span>
                                <h2 class="section-title__title">Our Services</h2>
                            </div>
                            <p class="services-two__text-1">Our services encompass comprehensive pharmaceutical solutions, including prescription and over-the-counter medications, medical consultations, and advanced diagnostic testing. With precision in inventory management, we ensure timely access to essential drugs.</p>
                            <div class="services-two__single wow fadeInUp justify-content-center align-items-center" data-wow-delay="100ms">
                                <div class="services-two__img">
                                    <img class="img-fluid d-none d-md-block" src="assets/images/bharat/home/Pharmacy_1_11zon.webp" alt="">
                                    <img class="img-fluid d-block d-md-none" src="assets/images/bharat/home/Pharmacy-image-Mob.webp" alt="">
                                </div>
                                <div class="services-two__content cstm-shadow">
                                    <h3 class="services-two__title"><a href="#">Pharmacy Sahitya</a></h3>
                                    <p class="services-two__text-2">We provide an extensive range of authentic pharmaceuticals and health essentials. Access a variety of...</p>
                                    <a href="#" class="services-two__read-more">Read More <i class="icon-right-arrow1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="services-two__right">
                            <div class="services-two__single wow fadeInUp justify-content-center align-items-center" data-wow-delay="200ms">
                                <div class="services-two__img">
                                    <img class="img-fluid d-none d-md-block" src="assets/images/bharat/home/Chikitsa-Paramarsa_8_11zon.webp" alt="">
                                    <img class="img-fluid d-block d-md-none" src="assets/images/bharat/home/Chikitsa-Paramarsa-image-Mob.webp" alt="">
                                </div>
                                <div class="services-two__content cstm-shadow">
                                    <h3 class="services-two__title"><a href="#">Chikitsa Paramarsa</a></h3>
                                    <p class="services-two__text-2">Our team of specialized doctors offers expert consultations across 25+ medical fields...</p>
                                    <a href="#" class="services-two__read-more">Read More <i class="icon-right-arrow1"></i></a>
                                </div>
                            </div>
                            <div class="services-two__single wow fadeInUp justify-content-center align-items-center" data-wow-delay="300ms">
                                <div class="services-two__img">
                                    <img class="img-fluid d-none d-md-block" src="assets/images/bharat/home/Pathology-Diagnostics_5_11zon.webp" alt="">
                                    <img class="img-fluid d-block d-md-none" src="assets/images/bharat/home/Pathology-Diagnostics-image-Mob.webp" alt="">
                                </div>
                                <div class="services-two__content cstm-shadow">
                                    <h3 class="services-two__title"><a href="#">Pathology & Diagnostics</a></h3>
                                    <p class="services-two__text-2">Our diagnostic services include comprehensive lab tests with home sample collection for convenience...</p>
                                    <a href="#" class="services-two__read-more">Read More <i class="icon-right-arrow1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Two End-->
        
        <!--Whatsapp Order-->
        
        <section class="team-three pt-5">
            <div class="container">
                <div class="section-title-three text-center d-block d-md-none" style="text-align:left !important;">
                    <span class="section-title-three__tagline">How to Order Medicines</span>
                    <h2 class="section-title-three__title">Easy <span style="color:#468dcd">Medicine Ordering </span> on WhatsApp</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <img src="assets/images/bharat/home/bmh-wa-book-now.webp" alt="WhatsApp Phone" class="phone-image img-fluid">
                    </div>
                    <div class="col-md-8">
                        <div class="section-title-three text-center d-none d-md-block" style="text-align:left !important;">
                            <span class="section-title-three__tagline">How to Order Medicines</span>
                            <h2 class="section-title-three__title">Easy <span style="color:#468dcd">Medicine Ordering </span> on WhatsApp</h2>
                        </div>
                        <ul class="order-steps list-unstyled">
                          <li><span style="color:#468dcd;font-weight:600;font-size:18px;">Step 1: </span><span>📜</span> Send your prescription or list of required medications to our WhatsApp number.</li>
                          <li><span style="color:#468dcd;font-weight:600;font-size:18px;">Step 2: </span><span>🔢</span> Provide any specific details or preferences regarding your order.</li>
                          <li><span style="color:#468dcd;font-weight:600;font-size:18px;">Step 3: </span><span>📄</span> Our pharmacist will confirm the availability and total cost.</li>
                          <li><span style="color:#468dcd;font-weight:600;font-size:18px;">Step 4: </span><span>📦</span> Once confirmed, your medicines will be packaged and ready for delivery.</li>
                          <li><span style="color:#468dcd;font-weight:600;font-size:18px;">Step 5: </span><span>✔️</span> Receive your medications at your doorstep without any hassle.</li>
                        </ul>
                        <p style="font-weight: 500;font-size: 18px;color: black;">
                            <span style="color:#468dcd;font-weight:600;font-size:18px;">Quick and Easy:</span> No need to download another app or visit the pharmacy. Just order your medicines from the comfort of your home with WhatsApp.
                        </p>
                        <a target="_blank" href="" class="btn text-white my-4" style="background:#25D366;border-radius: 8px;padding: 10px;" data-abc="true">
                            <img style="max-width: 25px;" src="assets/images/bharat/home/whatsapp.png"> Order Your Medicines Now</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!--Whatsapp Order Ends-->

        <!--Team Three Start-->
        <section class="team-three pt-5">
            <div class="container">
                <div class="section-title-three text-center">
                    <span class="section-title-three__tagline">Our Experts</span>
                    <h2 class="section-title-three__title">Meet Our <span style="color:#468dcd">Expert Members</span></h2>
                </div>
                <div class="row">
                    <!--Team Three Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-three__single">
                            <div class="team-three__img-box">
                                <div class="team-three__img">
                                    <img src="assets/images/bharat/home/doctor-1_1_11zon.webp" alt="">
                                    <div class="team-three__content">
                                        <div class="team-three__info">
                                            <h4 class="team-three__name"><a href="#">Dr. Mamta Sahoo</a>
                                            </h4>
                                            <p class="team-three__sub-title">Prof. & HOD (ENT) PRM Medical College, Baripada</p>
                                        </div>
                                        <!-- <div class="team-three__review">
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star-1"></span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Three Single End-->
                    <!--Team Three Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-three__single mar-t-30">
                            <div class="team-three__img-box">
                                <div class="team-three__img">
                                    <img src="assets/images/bharat/home/doctor-2_2_11zon.webp" alt="">
                                    <div class="team-three__content">
                                        <div class="team-three__info">
                                            <h4 class="team-three__name"><a href="#">Dr. S. R. Sahoo</a>
                                            </h4>
                                            <p class="team-three__sub-title">(Professor) PRMMCH, Baripada,<br> (Ex. Asso. Prof.) SUM Hospital, Bhubaneswar, Odisha</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Three Single End-->
                    <!--Team Three Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-three__single">
                            <div class="team-three__img-box">
                                <div class="team-three__img">
                                    <img src="assets/images/bharat/home/doctor-4_4_11zon.webp" alt="">
                                    <div class="team-three__content">
                                        <div class="team-three__info">
                                            <h4 class="team-three__name"><a href="#">Dr. Sonia Aggarwal</a>
                                            </h4>
                                            <p class="team-three__sub-title">(Professor) PRMMCH, Baripada, <br>(Ex. Asso. Prof.) SUM Hospital, Bhubaneswar, Odisha</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Three Single End-->
                    <!--Team Three Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="team-three__single mar-t-30">
                            <div class="team-three__img-box">
                                <div class="team-three__img">
                                    <img src="assets/images/bharat/home/doctor-3_3_11zon.webp" alt="">
                                    <div class="team-three__content">
                                        <div class="team-three__info">
                                            <h4 class="team-three__name"><a href="#">DR. K.N. BISOI</a>
                                            </h4>
                                            <p class="team-three__sub-title">SENIOR CONSULTANT SURGEON</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Three Single End-->
                </div>
            </div>
        </section>
        <!--Team Three End-->

         <!--CTA Start-->
         <section class="video-one">
            <div class="container">
                <div class="video-one__inner">
                    <div class="video-one__bg cstm-shadow"
                        style="background-image: url(assets/images/bharat/home/Call-to-action_5_11zon.webp);border-radius: 20px;"></div>
                    <div class="video-one__content">
                        <div class="video-one__content-inner cstm-shadow d-flex flex-column justify-content-center align-items-center d-sm-block">
                            <div class="video-one__video-link">
                                <a href="https://www.youtube.com/watch?v=" class="video-popup">
                                    <div class="about-one__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <h3 class="video-one__title">Book an <span style="color:#468dcd">Appointment</span></h3>
                            <p class="video-one__text" style="font-weight:500">Easily schedule your medical consultations or diagnostic tests through WhatsApp. Simply message us at <span style="color:#468dcd"><a href="tel:+919437039969">9437039969</a></span>, and our team will confirm your appointment. Choose from in-person or online options, ensuring convenience and personalized care at Bharat Medical Hall.</p>
                            <div class="video-one__btn-box">
                                <a href="contact" style="border-radius:8px">Make an Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA End-->

        <!--Testimonial Three Start-->
        <section class="testimonial-three">
            <div class="testimonial-three__bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="testimonial-three__left">
                            <div class="section-title-three text-left">
                                <span class="section-title-three__tagline">Testimonials</span>
                                <h2 class="section-title-three__title">Reliable Healthcare with Exceptional Service</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="testimonial-three__right">
                            <div class="testimonial-three__carousel thm-owl__carousel owl-theme owl-carousel"
                                data-owl-options='{
                                "items": 1,
                                "margin": 38,
                                "smartSpeed": 700,
                                "loop":true,
                                "autoplay": 6000,
                                "nav":true,
                                "dots":false,
                                "navText": ["<span class=\"icon-down\"></span>","<span class=\"icon-right1\"></span>"],
                                "responsive":{
                                    "0":{
                                        "items":1
                                    },
                                    "768":{
                                        "items":2
                                    },
                                    "992":{
                                        "items": 2
                                    }
                                }

                            }'>
                                <!--Testimonial Three Single Start-->
                                <div class="item">
                                    <div class="testimonila-three__single">
                                        <div class="testimonila-three__single-inner">
                                            <div class="testimonila-three__single-bg"></div>
                                            <div class="testimonila-three__shape-1">
                                                <img src="assets/images/shapes/testimonial-three-shape-1.png" alt="">
                                            </div>
                                            <p class="testimonila-three__text-2">"Bharat Medical Hall is my go-to pharmacy for all health essentials. Their prompt delivery service and knowledgeable staff make a huge difference. Highly recommended!"</p>
                                            <div class="testimonila-three__client-info-box">
                                                <div class="testimonila-three__client-img-box">
                                                    <div class="testimonila-three__client-img">
                                                        <div class="testimonila-three__client-img-inner">
                                                            <img src="assets/images/bharat/home/google.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="testimonila-three__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonila-three__client-content">
                                                    <h4 class="testimonila-three__client-name">Suresh K.</h4>
                                                    <p class="testimonila-three__client-sub-title">Patient</p>
                                                    <div class="testimonila-three__client-review">
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star-1"></span>
                                                        <span class="icon-star-1"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Three Single End-->
                                <!--Testimonial Three Single Start-->
                                <div class="item">
                                    <div class="testimonila-three__single">
                                        <div class="testimonila-three__single-inner">
                                            <div class="testimonila-three__single-bg"></div>
                                            <div class="testimonila-three__shape-1">
                                                <img src="assets/images/shapes/testimonial-three-shape-1.png" alt="">
                                            </div>
                                            <p class="testimonila-three__text-2">"I trust Bharat Medical Hall for their quality and reliable medicines. They make ordering so easy, especially with WhatsApp. Their service is excellent!"</p>
                                            <div class="testimonila-three__client-info-box">
                                                <div class="testimonila-three__client-img-box">
                                                    <div class="testimonila-three__client-img">
                                                        <div class="testimonila-three__client-img-inner">
                                                            <img src="assets/images/bharat/home/google.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="testimonila-three__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonila-three__client-content">
                                                    <h4 class="testimonila-three__client-name">Meena P.</h4>
                                                    <p class="testimonila-three__client-sub-title">Patient</p>
                                                    <div class="testimonila-three__client-review">
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star-1"></span>
                                                        <span class="icon-star-1"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Three Single End-->
                                <!--Testimonial Three Single Start-->
                                <div class="item">
                                    <div class="testimonila-three__single">
                                        <div class="testimonila-three__single-inner">
                                            <div class="testimonila-three__single-bg"></div>
                                            <div class="testimonila-three__shape-1">
                                                <img src="assets/images/shapes/testimonial-three-shape-1.png" alt="">
                                            </div>
                                            <p class="testimonila-three__text-2">Great experience with their diagnostic services. Home sample collection was very convenient, and I received my reports quickly on WhatsApp. Efficient and professional!"</p>
                                            <div class="testimonila-three__client-info-box">
                                                <div class="testimonila-three__client-img-box">
                                                    <div class="testimonila-three__client-img">
                                                        <div class="testimonila-three__client-img-inner">
                                                            <img src="assets/images/bharat/home/google.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="testimonila-three__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonila-three__client-content">
                                                    <h4 class="testimonila-three__client-name">Ankit R.</h4>
                                                    <p class="testimonila-three__client-sub-title">Patient</p>
                                                    <div class="testimonila-three__client-review">
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star-1"></span>
                                                        <span class="icon-star-1"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Three Single End-->
                                <!--Testimonial Three Single Start-->
                                <div class="item">
                                    <div class="testimonila-three__single">
                                        <div class="testimonila-three__single-inner">
                                            <div class="testimonila-three__single-bg"></div>
                                            <div class="testimonila-three__shape-1">
                                                <img src="assets/images/shapes/testimonial-three-shape-1.png" alt="">
                                            </div>
                                            <p class="testimonila-three__text-2">"The staff at Bharat Medical Hall are friendly and helpful. They provided excellent guidance for my prescriptions, and their home delivery service is a big plus!"</p>
                                            <div class="testimonila-three__client-info-box">
                                                <div class="testimonila-three__client-img-box">
                                                    <div class="testimonila-three__client-img">
                                                        <div class="testimonila-three__client-img-inner">
                                                            <img src="assets/images/bharat/home/google.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="testimonila-three__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonila-three__client-content">
                                                    <h4 class="testimonila-three__client-name">Rashmi T.</h4>
                                                    <p class="testimonila-three__client-sub-title">Patient</p>
                                                    <div class="testimonila-three__client-review">
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star-1"></span>
                                                        <span class="icon-star-1"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Three Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Three End-->

         <!--Blog Three Start-->
         <section class="blog-three">
            <div class="container">
                <div class="section-title-three text-center">
                    <span class="section-title-three__tagline">Our Excellence</span>
                    <h2 class="section-title-three__title">Our Latest <span style="color:#468dcd">News & Blogs</span></h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-three__left">
                            <div class="blog-three__right-img" style="border-radius:15px 15px 0px 0px;">
                                <img src="assets/images/bharat/home/blog1.webp" alt="">
                            </div>
                            <div class="blog-three__right-content cstm-shadow">
                                <p class="blog-three__middle-admin-date">By Admin <span>/ Sep 16,2024</span></p>
                                <h3 class="blog-three__title-one"><a href="#">Top 10 Essential Over-The-Counter Medications for Your Home First Aid Kit</a></h3>
                                <ul class="blog-three__meta list-unstyled">
                                    <li>
                                        <a href="#"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-book-reader"></i>Read More</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-three__middle">
                            <div class="blog-three__middle-single cstm-shadow">
                                <p class="blog-three__middle-admin-date">By Admin <span>/ Sep 16,2024</span></p>
                                <h3 class="blog-three__title-one"><a href="#">How to Safely Dispose of Expired Medications</a></h3>
                                <ul class="blog-three__meta list-unstyled">
                                    <li>
                                        <a href="#"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-book-reader"></i>Read More</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-three__middle-single cstm-shadow">
                                <p class="blog-three__middle-admin-date">By Admin <span>/ Sep 16,2024</span></p>
                                <h3 class="blog-three__title-one"><a href="#">Senior Care: Managing Medication for the Elderly</a></h3>
                                <ul class="blog-three__meta list-unstyled">
                                    <li>
                                        <a href="#"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-book-reader"></i>Read More</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-three__right">
                            <div class="blog-three__right-img" style="border-radius:15px 15px 0px 0px;">
                                <img src="assets/images/bharat/home/blog2.webp" alt="">
                            </div>
                            <div class="blog-three__right-content cstm-shadow">
                                <p class="blog-three__middle-admin-date">By Admin <span>/ Sep 16,2024</span></p>
                                <h3 class="blog-three__title-one"><a href="#">Travel Medications: Preparing Your Health Kit for a Trip</a></h3>
                                <ul class="blog-three__meta list-unstyled">
                                    <li>
                                        <a href="#"><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-book-reader"></i>Read More</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Three End-->

        <?php include 'contact-form.php';?>

        <?php include 'footer.php';?>
</body>

</html>