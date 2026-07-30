<!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/bharat/home/favicon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/bharat/home/favicon.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/bharat/home/favicon.png" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <script defer src="https://app.wacrs.com/install-widget/bundle.js?key=7fb8a899-fa3e-48cc-b1bd-1fae844bc125"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="/assets/vendors/meciy-icons/style.css">
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="/assets/vendors/nice-select/nice-select.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/style25.css" />
    <link rel="stylesheet" href="/assets/css/responsive4.css" />
    <style>
    .btn{
        display:flex !important;
        gap:5px !important;
        width: fit-content !important;
    }
    /*Above are latest afer live*/
    .menu-custom-icon{
        margin-right:5px;
    }
    .bmh-logo{
        width: 200px;
    }
    
    /*Mobile Bottom Bar & Wa Fixed Float*/
    
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

    /*Mobile Bottom Bar & Wa Fixed Float Ends*/
    
    .contact-parent-div{
        background: #fff;
        border-radius: 20px;
        padding:50px;
    }
    .cstm-shadow{
        box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px
    }
    .header-dropdown-icon{
        position: absolute;
    top: 50%;
    right: 0;
    font-family: "Font Awesome 5 Free";
    content: "\f107";
    font-size: 10px;
    color: var(--meciy-gray);
    transform: translateY(-50%);
    font-weight: 700;
    z-index: 1;
    }
    .bdr-rds-20{
        border-radius: 20px;
    }
    .nice-select{
        height: 60px;
        width: 100%;
        border: 1px solid #dfe0e5 !important;
        background-color: transparent;
        padding-left: 20px;
        padding-right: 20px;
        outline: none;
        font-size: 15px;
        color: var(--meciy-gray);
        display: block;
        font-weight: 400;
        border-radius: 10px;
    }
    /*.current{*/
    /*    display: block;*/
    /*    height: 60px;*/
    /*    width: 100%;*/
    /*    align-items: center;*/
    /*    display: flex;*/
    /*}*/
    .list{
        width: 100%;
        border-radius: 10px !important;
    }
    @media only screen and (max-width: 600px) {
        .menu-custom-icon{
            margin-right: 8px;
        }
        .menu-custom-icon{
            filter: brightness(0) invert(1);
        }
        .wa-icon-fixed{
            display:none
        }
        .mob {
            display: block;
        }
        .services-two__img {
            width: 100%;
            max-width: 380px;
            border-radius: 10px 10px 0px 0px;
        }
        .services-two__content{
            border-top-right-radius: 0px;
        }
        .contact-parent-div{
            padding: 40px 20px;
        }
        .bmh-logo{
            width: 160px;
        }
        .main-header-two{
            position: fixed;
        }
        .page-header{
            margin-top: 90px;
        }
        .custom-banner{
            margin-top: 90px;
        }
    }
    </style>
