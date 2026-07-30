<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctors at Bharat Medical Hall – Expert Consultations and Care</title>
    <meta name="description" content="Meet our expert panel of doctors across multiple specialties at Bharat Medical Hall. Book your appointment today through WhatsApp for convenient, personalized care.">
    <?php include 'header-links.php';?>
    
    <style>
        .thm-breadcrumb li{
            color: #468dcd;
        }
        .container-service {
            box-shadow: 0 0 45px -5px rgba(39, 71, 125, .14);
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            /* background: #F9F9F9; */
        }
        .order-steps {
          margin-top: 20px;
          color: black;
        }
        .order-steps li {
          margin-bottom: 20px;
          font-size: 1.1rem;
        }
        .phone-image{
            max-height:500px
        }
        .doctors-table {
        border: 1px solid #468dcd;
        border-collapse: collapse;
        width: 100%;
    }

    .doctors-table th,
    .doctors-table td {
        border: 3px solid #468dcd;
        padding: 10px;
    }

    .doctors-table-head {
        background-color: #468dcd;
        color: white;
    }

    .doctors-table-body td {
        text-align: left;
    }
    
    .team-three__single .team-three__img:before{
            transform: translateY(0);
            width: 100%;
        }
        .team-three__img:before{
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border-radius: 20px;
            background-image: -moz-linear-gradient(90deg, rgb(21, 54, 58) 0%, rgb(20, 22, 35) 0%, rgba(20, 22, 35, 0) 35%);
            background-image: -webkit-linear-gradient(90deg, rgb(21, 54, 58) 0%, rgb(20, 22, 35) 0%, rgba(20, 22, 35, 0) 35%);
        }
        .team-three__sub-title {
            font-size: 14px;
            color: var(--meciy-white);
            line-height: 17px;
            font-weight: 600;
        }
        .team-three__content{
            transform: scaleY(1.0);
        }
        table thead th:nth-last-child(1) {
            display: none;
        }
        
        table tbody td:nth-last-child(1) {
            display: none;
        }
    
    @media only screen and (max-width: 600px) {
        table thead th:nth-last-child(2),th:nth-last-child(3) {
            display: none;
        }
        
        table tbody td:nth-last-child(2),td:nth-last-child(3) {
            display: none;
        }
        
        .doctors-table td {
            border: 1px solid #468dcd;
            padding: 5px;
            font-size: 12px;
            font-weight: 700;
        }

    }

    </style>
</head>

<body>

    <?php include 'header.php';?>
    
        <!--Page Header Start-->
        <section class="page-header d-none d-md-block">
            <div class="page-header-bg" style="background-image: url(assets/images/bharat/chikitsa-paramarsa/dextop-banner.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner" style="margin-left: -160px;">
                    <h2 style="color:#468dcd;">Chikitsa Paramarsa</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="https://bharatmedicalhall.com/" style="font-weight:700;color: #468dcd;">Home</a></li>
                        <li><span>/</span></li>
                        <li>Chikitsa Paramarsa</li>
                    </ul>
                </div>
            </div>
        </section>
        
        <div class="d-block d-md-none">
            <img class="custom-banner" style="width: 100%;height: 100%;" src="assets/images/bharat/chikitsa-paramarsa/mobile-banner.jpg" alt="">
        </div>
        <!--Page Header End-->
    
        <!--Services Details Start-->
        <section class="services-details">
            <div class="container container-service">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="services-details__left">
                            <div class="services-details__img">
                                <img src="assets/images/bharat/chikitsa-paramarsa/hero-sec.jpg" alt="">
                            </div>
                            <h3 class="services-details__title">Expert <span style="color: #468dcd;font-weight: 600;">Doctor Services</span> at Bharat Medical Hall</h3>
                            <!--<p class="services-details__text-1">Welcome to Bharat Medical Hall! We have been serving Baripada since 1986, so you can trust us for all your medical needs. We offer a wide range of both allopathic and Ayurvedic medicines, as well as many over-the-counter products. Our goal is to make sure you can find what you need for your health.</p>-->
                            <!--<p class="services-details__text-2">We care about our community and want everyone to stay healthy. That’s why we provide free health screenings and medication counselling every month. Our pharmacy is open daily from 8 AM to 10 PM, so you can get your medicines whenever you need them. Come visit us and see our well-stocked shelves!</p>-->
                            <ul class="services-details__points list-unstyled">
                                <li>
                                    <div class="d-sm-block d-none">
                                        <span class="icon-checked" style="font-size: 25px;color: #468dcd;"></span>
                                    </div>
                                    <div class="text">
                                        <p><span style="color: #468dcd;font-weight: 600;">Multi-Specialty Care:</span> We provide access to some of the best doctors in Baripada, offering consultations in various specialties such as cardiology, ENT, dermatology, and more.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-sm-block d-none">
                                        <span class="icon-checked" style="font-size: 25px;color: #468dcd;"></span>
                                    </div>
                                    <div class="text">
                                        <p><span style="color: #468dcd;font-weight: 600;">Expert Team:</span> Our panel includes experienced doctors from renowned institutions, ensuring top-quality medical care locally.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-sm-block d-none">
                                        <span class="icon-checked" style="font-size: 25px;color: #468dcd;"></span>
                                    </div>
                                    <div class="text">
                                        <p><span style="color: #468dcd;font-weight: 600;">Personalized Consultations:</span> We prioritize your health by offering personalized care plans and consultations tailored to your medical needs.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-sm-block d-none">
                                        <span class="icon-checked" style="font-size: 25px;color: #468dcd;"></span>
                                    </div>
                                    <div class="text">
                                        <p><span style="color: #468dcd;font-weight: 600;">Convenient Appointments:</span> Book appointments through WhatsApp for hassle-free scheduling.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-sm-block d-none">
                                        <span class="icon-checked" style="font-size: 25px;color: #468dcd;"></span>
                                    </div>
                                    <div class="text">
                                        <p><span style="color: #468dcd;font-weight: 600;">Trusted by the Community:</span> We have built our reputation by providing consistent, quality care and ensuring the best healthcare experience for our patients.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-sm-block d-none">
                                        <span class="icon-checked" style="font-size: 25px;color: #468dcd;"></span>
                                    </div>
                                    <div class="text">
                                        <p><span style="color: #468dcd;font-weight: 600;">Diagnostic Support:</span> All consultations are supported with in-house diagnostic facilities for a complete healthcare solution.</p>
                                    </div>
                                </li>
                            </ul>

                            
                            
                            <div class="section-title-three text-center d-block d-md-none mt-4" style="text-align:left !important;">
                                <span class="section-title-three__tagline">How to Book Appointment</span>
                                <h2 class="section-title-three__title">Book <span style="color:#468dcd">Your Appointment</span> Easily</h2>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=918093110888&text=Hello%20Bharat%20Medical%20Hall%2C%20I%20would%20like%20to%20inquire%20about%20your%20appointment%20services.%20Please%20assist%20me.">
                                        <img src="assets/images/bharat/chikitsa-paramarsa/Chikitsa-Paramarsa-cta-image.webp" alt="WhatsApp Phone" class="phone-image img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="section-title-three text-center d-none d-md-block" style="text-align:left !important;">
                                        <span class="section-title-three__tagline">How to Book Appointment</span>
                                        <h5>Book <span style="color:#468dcd">Your Appointment</span> Easily</h5>
                                    </div>
                                    <ul class="order-steps list-unstyled">
                                      <li><span style="color:#468dcd;font-weight:600;font-size:18px;">Step 1: </span><span>📜</span> Send a WhatsApp message with the doctor’s name and your preferred timing.</li>
                                      <li><span style="color:#468dcd;font-weight:600;font-size:18px;">Step 2: </span><span>🔢</span> Our support team will confirm availability and schedule your appointment.</li>
                                      <li><span style="color:#468dcd;font-weight:600;font-size:18px;">Step 3: </span><span>📦</span> Receive a confirmation message and a reminder before your appointment time.</li>
                                      <li><span style="color:#468dcd;font-weight:600;font-size:18px;">Important: </span><span>✔️</span> For urgent cases, mention it in your message so that we can prioritize your request.</li>
                                    </ul>
                                   
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=918093110888&text=Hello%20Bharat%20Medical%20Hall%2C%20I%20would%20like%20to%20inquire%20about%20your%20appointment%20services.%20Please%20assist%20me." class="btn text-white mb-4" style="background:#25D366;border-radius: 8px;padding: 10px;" data-abc="true">
                                        <img style="max-width: 25px;" src="assets/images/bharat/home/whatsapp.png"> Book Your Appointment Now</a>
                                </div>
                            </div>
                
                            <h3 class="services-details__title">Disclaimer on <span style="color: #468dcd;font-weight: 600;">Timings</span> and <span style="color: #468dcd;font-weight: 600;">Availability</span></h3>
                            
                            <ul class="services-details__points list-unstyled">
                                <li>
                                    <div class="d-sm-block d-none">
                                        <span class="icon-checked" style="font-size: 25px;color: #468dcd;"></span>
                                    </div>
                                    <div class="text">
                                        <p><span style="color: #468dcd;font-weight: 600;">Flexible Doctor Timings:</span> Doctor timings may vary due to emergency cases or other professional commitments.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-sm-block d-none">
                                        <span class="icon-checked" style="font-size: 25px;color: #468dcd;"></span>
                                    </div>
                                    <div class="text">
                                        <p><span style="color: #468dcd;font-weight: 600;">Appointment Confirmation:</span> We recommend confirming your appointment a day in advance to avoid inconvenience.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-sm-block d-none">
                                        <span class="icon-checked" style="font-size: 25px;color: #468dcd;"></span>
                                    </div>
                                    <div class="text">
                                        <p><span style="color: #468dcd;font-weight: 600;">Rescheduling Assistance:</span> In case of unavailability, our team will assist you in rescheduling your appointment or finding an alternative doctor.</p>
                                    </div>
                                </li>
                            </ul>

                            
                            <!--<div class="services-details__img-2">-->
                            <!--    <img src="assets/images/bharat/pharmacy-sahitya/BMH-infography.webp" alt="">-->
                            <!--</div>-->
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="services-details__sidebar">
                            <!--<div class="services-details__sidebar-single services-details__sidebar-search">-->
                            <!--    <h3 class="services-details__sidebar-title">Search</h3>-->
                            <!--    <form action="#" class="services-details__sidebar-search-form">-->
                            <!--        <input type="search" placeholder="Search...">-->
                            <!--        <button type="submit"><i class="icon-magnifying-glass"></i></button>-->
                            <!--    </form>-->
                            <!--</div>-->
                            <div class="services-details__sidebar-single services-details__sidebar-category">
                                <h3 class="services-details__sidebar-title">Services Category</h3>
                                <ul class="services-details__sidebar-category-list list-unstyled">
                                    <li>
                                        <a href="pharmacy-sahitya#">Pharmacy Sahitya<span
                                                class="icon-right-arrow1"></span></a>
                                    </li>
                                    <li class="active">
                                        <a href="chikitsa-paramarsa#">Chikitsa Paramarsa<span
                                                class="icon-right-arrow1"></span></a>
                                    </li>
                                    <li>
                                        <a href="#">Pathology & Diagnostics
                                            <!--<span class="icon-right-arrow1"></span>-->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="services-details__sidebar-single services-details__have-your-question">
                                <h3 class="services-details__sidebar-title">Have Any Question?</h3>
                                <div class="services-details__comment-form">
                                    <form class="services-details__form contact-form-validated" action='https://app.formester.com/forms/c7d759ad-a452-4fef-90a3-ac1278797608/submissions' 
                                        method='POST'>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="services-details__input-box">
                                                    <input type="text" placeholder="Your Name" name="name" required>
                                                    <div class="services-details__input-box-icon">
                                                        <!--<span class="icon-user"></span>-->
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="services-details__input-box">
                                                    <input type="email" placeholder="Your Email Address" name="email">
                                                    <div class="services-details__input-box-icon">
                                                        <i class="fas fa-envelope"></i>
                                                        <!--<span class="icon-user"></span>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="services-details__input-box">
                                                    <input type="tel" oninput="limitNumberLength(this, 9+1)" placeholder="Your Phone Number" name="phone" required>
                                                    <div class="services-details__input-box-icon">
                                                        <!--<span class="icon-phone-call"></span>-->
                                                        <i class="fas fa-phone-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!--<div class="row">-->
                                        <!--    <div class="col-xl-12">-->
                                        <!--        <div class="services-details__input-box">-->
                                        <!--            <select id="area" class="border-0 bg-white" name="service" required>-->
                                        <!--              <option value="Select Service">Select Service</option>-->
                                        <!--              <option value="Pharmacy Sahitya">Pharmacy Sahitya</option>-->
                                        <!--              <option value="Chikitsa Paramarsa">Chikitsa Paramarsa</option>-->
                                        <!--              <option value="Pathology & Diagnostics">Pathology & Diagnostics</option>-->
                                        <!--            </select>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="services-details__input-box text-message-box">
                                                    <textarea name="message" placeholder="Your Message"></textarea>
                                                    <div class="services-details__input-box-icon-2">
                                                        <!--<span class="icon-message"></span>-->
                                                        <i class="fas fa-comment-dots"></i>
                                                    </div>
                                                </div>
                                                <div class="services-details__btn-box">
                                                    <button type="submit" class="services-details__btn">Submit
                                                        Now<span class="icon-right"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="result"></div>
                                </div>
                            </div>
                            <div class="services-details__sidebar-single services-details__sidebar-download">
                                <h3 class="services-details__sidebar-title text-center">Book Appointment</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="assets/images/bharat/chikitsa-paramarsa/Chikitsa-Paramarsa-cta-image.webp" alt="WhatsApp Phone" class="phone-image img-fluid">
                                </div>
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=918093110888&text=Hello%20Bharat%20Medical%20Hall%2C%20I%20would%20like%20to%20inquire%20about%20your%20appointment%20services.%20Please%20assist%20me." class="btn text-white mt-4" style="background:#25D366;border-radius: 8px;padding: 10px;width:100%" data-abc="true">
                                    <img style="max-width: 25px;" src="assets/images/bharat/home/whatsapp.png"> 
                                    Book Your Appointment Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Details End-->
        

        <!--Team Three Start-->
        <section class="blog-three">
            <div class="container">
                <div class="section-title-three text-center">
                    <span class="section-title-three__tagline">Our Experts</span>
                    <h2 class="section-title-three__title">Meet Our <span style="color:#468dcd">Expert Doctors</span></h2>
                </div>
                
                <div class="portfolio-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                        "items": 1,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "nav":false,
                        "dots":false,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1
                            },
                            "768":{
                                "items":2
                            },
                            "992":{
                                "items": 3
                            },
                            "1200":{
                                "items": 4
                            }
                        }
    
                    }'>
                    <!--Portfolio One Single Start-->
                        <div class="item">
                            <div class="team-three__single">
                                <div class="team-three__img-box">
                                    <div class="team-three__img">
                                        <img src="assets/images/bharat/home/doctors/Doctor-3_3_11zon.webp" alt="">
                                        <div class="team-three__content">
                                            <div class="team-three__info">
                                                <h4 class="team-three__name"><a href="#">Dr. Bibekananda Panda</a>
                                                </h4>
                                                <p class="team-three__sub-title">CARE Hospital, BBSR.- M.D, (Ped.), DNB, Pediatric and Transplant Nephrology</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="team-three__single ">
                                <div class="team-three__img-box">
                                    <div class="team-three__img">
                                        <img src="assets/images/bharat/home/doctors/Doctor-5_5_11zon.webp" alt="">
                                        <div class="team-three__content">
                                            <div class="team-three__info">
                                                <h4 class="team-three__name"><a href="#">Dr. J.B. Kanwar</a>
                                                </h4>
                                                <p class="team-three__sub-title">(Professor) Institute of Medical Science & SUM Hospital. MD (Medicine). DM (Endocrinology), SGPG</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="team-three__single">
                                <div class="team-three__img-box">
                                    <div class="team-three__img">
                                        <img src="assets/images/bharat/home/doctors/Doctor-4_4_11zon.webp" alt="">
                                        <div class="team-three__content">
                                            <div class="team-three__info">
                                                <h4 class="team-three__name"><a href="#">Dr. Chandan Kumar Satpathy</a>
                                                </h4>
                                                <p class="team-three__sub-title">S.C.B. M.C.H Cuttack - MBBS ,MD (Skin &V.D)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="team-three__single ">
                                <div class="team-three__img-box">
                                    <div class="team-three__img">
                                        <img src="assets/images/bharat/home/doctors/Doctor-6_6_11zon.webp" alt="">
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
                        
                        
                        
                         <div class="item">
                            <div class="team-three__single">
                                <div class="team-three__img-box">
                                    <div class="team-three__img">
                                        <img src="assets/images/bharat/home/doctors/Doctor-1_1_11zon.webp" alt="">
                                        <div class="team-three__content">
                                            <div class="team-three__info">
                                                <h4 class="team-three__name"><a href="#">Dr. Giridhari Jena </a>
                                                </h4>
                                                <p class="team-three__sub-title">CARE Hospital, BBSR. – M.D., D.M. (Cardio), FSCAI, FAHA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio One Single End-->
                        
                        <!--Portfolio One Single Start-->
                        
                        <!--Portfolio One Single Start-->
                        <div class="item">
                            <div class="team-three__single ">
                                <div class="team-three__img-box">
                                    <div class="team-three__img">
                                        <img src="assets/images/bharat/home/doctors/Doctor-7_7_11zon.webp" alt="">
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
                        <!--Portfolio One Single End-->
                        
                        <!--Portfolio One Single End-->
                        <!--Portfolio One Single Start-->
                        <div class="item">
                            <div class="team-three__single">
                                <div class="team-three__img-box">
                                    <div class="team-three__img">
                                        <img src="assets/images/bharat/home/doctors/Doctor-2_2_11zon.webp" alt="">
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
                        <!--Portfolio One Single End-->
                        
                        <!--Portfolio One Single Start-->
                        <div class="item">
                            <div class="team-three__single ">
                                <div class="team-three__img-box">
                                    <div class="team-three__img">
                                        <img src="assets/images/bharat/home/doctors/doctor-8_8_11zon.webp" alt="">
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
                        <!--Portfolio One Single End-->
                    </div>
                
                
                <table class="doctors-table mt-5">
                    <thead class="doctors-table-head">
                        <tr>
                            <th>Doctor Name</th>
                            <th>Speciality</th>
                            <th>Education</th>
                            <th>Designation</th>
                            <th>Timings</th>
                        </tr>
                    </thead>
                    <tbody class="doctors-table-body">
                        <tr>
                            <td>Dr. Sujit Ranjan Sahoo</td>
                            <td>Dentist (Danta Chikitsa)</td>
                            <td>M.D.S, Prof. & HOD</td>
                            <td>Ex. Asso. Prof., SUM Hospital, BBSR</td>
                            <td>Mon-Fri: 10 AM - 2 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. Sonia Aggarwal</td>
                            <td>Dentist (Danta Chikitsa)</td>
                            <td>M.D.S (Endodontics)</td>
                            <td>Dental Surgeon, DHH, Baripada</td>
                            <td>Tue, Thu: 2 PM - 6 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. A.K. Das</td>
                            <td>Orthodontist (Orthodontia)</td>
                            <td>B.D.S (Indore), D.Ortho (Calicut)</td>
                            <td>Specialist in Orthodontics</td>
                            <td>Mon, Wed: 10 AM - 1 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. J.B. Kanwar</td>
                            <td>Diabetic & Thyroid</td>
                            <td>M.D (Medicine), DM (Endocrinology), SGPGI</td>
                            <td>Professor, SUM Hospital, BBSR</td>
                            <td>Mon-Fri: 9 AM - 1 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. Mamta Sahoo</td>
                            <td>E.N.T. (Kana, Nak, Gola)</td>
                            <td>Prof. & HOD (E.N.T)</td>
                            <td>PRM Medical College</td>
                            <td>Tue, Thu: 4 PM - 8 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. Rajesh Kar</td>
                            <td>E.N.T. (Kana, Nak, Gola)</td>
                            <td>MBBS, MS, DNB</td>
                            <td>SCB Medical College, Cuttack</td>
                            <td>Mon, Wed: 11 AM - 3 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. Suchitra Panigrahi</td>
                            <td>Ophthalmologist (Chakshu)</td>
                            <td>MBBS, MS Ophthalmology</td>
                            <td>Phaco & Laser Specialist, AIIMS</td>
                            <td>Mon, Fri: 2 PM - 6 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. Sudhanshu Sekhar Nath</td>
                            <td>Gynecologist (Mahila Chikitsa)</td>
                            <td>M.S. (O&G)</td>
                            <td>Asst. Prof., PRM Medical College</td>
                            <td>Mon-Fri: 9 AM - 1 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. Giridhari Jena</td>
                            <td>Cardiologist (Hridaya)</td>
                            <td>MD, DM, FSCAI, FAHA</td>
                            <td>Interventional Cardiologist</td>
                            <td>Mon-Sat: 9 AM - 12 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. Bibekananda Panda</td>
                            <td>Nephrologist (Vrakkarogi)</td>
                            <td>MD, DMB Nephrology</td>
                            <td>Clinical Director & HOD, Care Hospital</td>
                            <td>Tue, Thu: 10 AM - 2 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. Madhumita Nayak</td>
                            <td>Pulmonologist (Swasa Chikitsa)</td>
                            <td>MD Pulmo Med</td>
                            <td>Asst. Prof., PRM Medical College</td>
                            <td>Mon, Wed, Fri: 10 AM - 3 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. Pradyut Ranjan Bhuyan</td>
                            <td>Neurologist (Nervous System)</td>
                            <td>MBBS, MD (Medicine), DNB (Neurology)</td>
                            <td>Manipal Hospital, BBSR</td>
                            <td>Tue, Fri: 1 PM - 4 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. Rashmi Ranjan Mohanty</td>
                            <td>Orthopedic (Haddi)</td>
                            <td>MS Orthopedic (Utkal)</td>
                            <td>Asst. Professor, PRM Medical College</td>
                            <td>Mon, Thu: 11 AM - 2 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. Thakura Soren</td>
                            <td>Medicine Specialist (General Medicine)</td>
                            <td></td>
                            <td></td>
                            <td>Mon-Sat: 9 AM - 1 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. Chandan Kumar Satpathy</td>
                            <td>Skin & V.D. (Charma)</td>
                            <td>MBBS, MD (Skin & VD)</td>
                            <td>PRM Medical College</td>
                            <td>Mon-Fri: 1 PM - 5 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. K.N. Bisoi</td>
                            <td>Surgeon (Shalyachikitsa)</td>
                            <td></td>
                            <td></td>
                            <td>Mon, Wed: 10 AM - 1 PM</td>
                        </tr>
                        <tr>
                            <td>Dr. U.P. Biswal</td>
                            <td>Neuropsychiatrist (Manasik Rog)</td>
                            <td></td>
                            <td></td>
                            <td>Tue, Thu: 11 AM - 3 PM</td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </section>
        <!--Team Three End-->
        
        <section class="faq-one">
            <div class="container">
                <div class="section-title section-title-two text-center">
                    <span class="section-title__tagline">Why Choose Us</span>
                    <h2 class="section-title__title">Why Choose <span style="color:#468dcd">Bharat Medical Hall?</span></h2>
                </div>
                <div class="row">
                    <!--Feature One Single Start-->
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__single">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title">Trusted Local Provider</h3>
                            </div>
                            <div class="feature-one__text-box">
                                <!--<p class="feature-one__text">Over 35 years of dedication to the health of Baripada residents.</p>-->
                                <ul class="feature-one__list">
                                    <li>With over 35 years of unwavering dedication to the health and well-being of Baripada residents.</li>
                                    <li>Family-owned business that values community trust and personal care.</li>
                                    <li>Renowned for our reliability and unwavering consistency in all of our comprehensive health services.</li>
                                </ul>
                                <div class="feature-one__read-more">
                                    <a href="about">Read More</a>
                                </div>
                            </div>
                            <div class="w-100 m-auto d-flex align-items-center justify-content-center">
                                <div class="feature-one__icon">
                                    <!--<span class="icon-consulting"></span>-->
                                    <img style="width: 80px;height: auto;filter: brightness(0) invert(1);" class="about-card-img" src="assets/images/bharat/pharmacy-sahitya/trust.png" alt="">
                                </div>
                            </div>
                            <!--<div class="feature-one__count"></div>-->
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__single">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title">Comprehensive Health Services</h3>
                            </div>
                            <div class="feature-one__text-box">
                                <!--<p class="feature-one__text">Over 35 years of dedication to the health of Baripada residents.</p>-->
                                <ul class="feature-one__list">
                                    <li>Everything from medications to specialist consultations available under one roof.</li>
                                    <li>Streamlined access to health services makes us a one-stop health destination.</li>
                                    <li>Continuous expansion of services to meet the growing health needs of our community.</li>
                                </ul>
                                <div class="feature-one__read-more">
                                    <a href="about">Read More</a>
                                </div>
                            </div>
                            <div class="w-100 m-auto d-flex align-items-center justify-content-center">
                                <div class="feature-one__icon">
                                    <!--<span class="icon-consulting"></span>-->
                                    <img style="width: 80px;height: auto;filter: brightness(0) invert(1);" class="about-card-img" src="assets/images/bharat/home/icons/healthcare-2.png" alt="">
                                </div>
                            </div>
                            <!--<div class="feature-one__count"></div>-->
                        </div>
                    </div>
                    
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__single">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title">Expert Medical Staff</h3>
                            </div>
                            <div class="feature-one__text-box">
                                <!--<p class="feature-one__text">Over 35 years of dedication to the health of Baripada residents.</p>-->
                                <ul class="feature-one__list">
                                    <li>Staff includes highly trained pharmacists and medical consultants.</li>
                                    <li>Regular training and updates ensure staff stays knowledgeable about the latest health care practices.</li>
                                    <li>Friendly and professional service tailored to individual health needs.</li>
                                </ul>
                                <div class="feature-one__read-more">
                                    <a href="about">Read More</a>
                                </div>
                            </div>
                            <div class="w-100 m-auto d-flex align-items-center justify-content-center">
                                <div class="feature-one__icon">
                                    <!--<span class="icon-consulting"></span>-->
                                    <img style="width: 80px;height: auto;filter: brightness(0) invert(1);" class="about-card-img" src="assets/images/bharat/pharmacy-sahitya/expert-doctor.png" alt="">
                                </div>
                            </div>
                            <!--<div class="feature-one__count"></div>-->
                        </div>
                    </div>
                    
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__single">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title">State of the Art Diagnostics</h3>
                            </div>
                            <div class="feature-one__text-box">
                                <!--<p class="feature-one__text">Over 35 years of dedication to the health of Baripada residents.</p>-->
                                <ul class="feature-one__list">
                                    <li>Advanced diagnostic tools for accurate and timely health assessments.</li>
                                    <li>In-house laboratory services that reduce wait times for test results.</li>
                                    <li>Regular updates and maintenance of medical equipment to ensure top-notch service.</li>
                                </ul>
                                <div class="feature-one__read-more">
                                    <a href="about">Read More</a>
                                </div>
                            </div>
                            <div class="w-100 m-auto d-flex align-items-center justify-content-center">
                                <div class="feature-one__icon">
                                    <!--<span class="icon-consulting"></span>-->
                                     <img style="width: 80px;height: auto;filter: brightness(0) invert(1);" class="about-card-img" src="assets/images/bharat/pharmacy-sahitya/diagnostic.png" alt="">
                                </div>
                            </div>
                            <!--<div class="feature-one__count"></div>-->
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--Pricing One End-->
        
        <!--FAQ Start-->
        <section class="faq-one" style="background-color: #468dcd;">
            <div class="container">
                <div class="section-title section-title-two text-center">
                    <span class="section-title__tagline text-white">FAQs</span>
                    <h2 class="section-title__title text-white">Frequently Asked Questions</h2>
                </div>
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="faq-one__left">
                            <div class="faq-one__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="faq-one__img">
                                    <img class="cstm-shadow bdr-rds-20" src="assets/images/bharat/home/cross-img.jpg" alt="">
                                </div>
                                <div class="faq-one__img-2">
                                    <img src="assets/images/bharat/chikitsa-paramarsa/faq-small-img.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="faq-one__right">
                            <div class="faq-one__faq">
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion active cstm-shadow bdr-rds-20">
                                        <div class="accrodion-title bdr-rds-20">
                                            <h4>How can I book an appointment with a doctor at Bharat Medical Hall?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>You can book appointments by sending a WhatsApp message to our <a style="font-weight: 600" target="_blank" href="https://api.whatsapp.com/send?phone=918093110888&text=Hello%20Bharat%20Medical%20Hall%2C%20I%20would%20like%20to%20inquire%20about%20your%20Consultations%20services.%20Please%20assist%20me.">WhatsApp number</a> with the doctor’s name and your preferred time. We’ll confirm the appointment details.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    
                                    <div class="accrodion cstm-shadow bdr-rds-20">
                                        <div class="accrodion-title bdr-rds-20">
                                            <h4>Can I walk in for a consultation without an appointment?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>While walk-ins are possible, we recommend booking appointments in advance to avoid waiting times, as availability may vary.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    
                                    <!--<div class="accrodion cstm-shadow bdr-rds-20">-->
                                    <!--    <div class="accrodion-title bdr-rds-20">-->
                                    <!--        <h4>Do you offer home delivery for medicines?</h4>-->
                                    <!--    </div>-->
                                    <!--    <div class="accrodion-content">-->
                                    <!--        <div class="inner">-->
                                    <!--            <p>Absolutely! From 9 AM to 9 PM, we deliver your medicines with no minimum order requirement. Just WhatsApp us, and we’ll take care of the rest!</p>-->
                                    <!--        </div><!-- /.inner -->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    
                                    <div class="accrodion cstm-shadow bdr-rds-20">
                                        <div class="accrodion-title bdr-rds-20">
                                            <h4>What are the consultation fees for specialists?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Consultation fees vary depending on the specialist. Please contact our support team for detailed information about fees for each doctor.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ End-->
    
    <?php include 'contact-form.php';?>

    <?php include 'footer.php';?>
</body>

</html>