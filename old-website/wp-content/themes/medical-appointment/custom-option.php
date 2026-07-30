<?php

    $medical_appointment_theme_css= "";

    /*--------------------------- Scroll to top positions -------------------*/

    $medical_appointment_scroll_position = get_theme_mod( 'medical_appointment_scroll_top_position','Right');
    if($medical_appointment_scroll_position == 'Right'){
        $medical_appointment_theme_css .='#button{';
            $medical_appointment_theme_css .='right: 20px;';
        $medical_appointment_theme_css .='}';
    }else if($medical_appointment_scroll_position == 'Left'){
        $medical_appointment_theme_css .='#button{';
            $medical_appointment_theme_css .='left: 20px;';
        $medical_appointment_theme_css .='}';
    }else if($medical_appointment_scroll_position == 'Center'){
        $medical_appointment_theme_css .='#button{';
            $medical_appointment_theme_css .='right: 50%;left: 50%;';
        $medical_appointment_theme_css .='}';
    }

    /*--------------------------- Slider Opacity -------------------*/

    $medical_appointment_theme_lay = get_theme_mod( 'medical_appointment_slider_opacity_color','');
    if($medical_appointment_theme_lay == '0'){
        $medical_appointment_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $medical_appointment_theme_css .='opacity:0';
        $medical_appointment_theme_css .='}';
        }else if($medical_appointment_theme_lay == '0.1'){
        $medical_appointment_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $medical_appointment_theme_css .='opacity:0.1';
        $medical_appointment_theme_css .='}';
        }else if($medical_appointment_theme_lay == '0.2'){
        $medical_appointment_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $medical_appointment_theme_css .='opacity:0.2';
        $medical_appointment_theme_css .='}';
        }else if($medical_appointment_theme_lay == '0.3'){
        $medical_appointment_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $medical_appointment_theme_css .='opacity:0.3';
        $medical_appointment_theme_css .='}';
        }else if($medical_appointment_theme_lay == '0.4'){
        $medical_appointment_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $medical_appointment_theme_css .='opacity:0.4';
        $medical_appointment_theme_css .='}';
        }else if($medical_appointment_theme_lay == '0.5'){
        $medical_appointment_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $medical_appointment_theme_css .='opacity:0.5';
        $medical_appointment_theme_css .='}';
        }else if($medical_appointment_theme_lay == '0.6'){
        $medical_appointment_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $medical_appointment_theme_css .='opacity:0.6';
        $medical_appointment_theme_css .='}';
        }else if($medical_appointment_theme_lay == '0.7'){
        $medical_appointment_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $medical_appointment_theme_css .='opacity:0.7';
        $medical_appointment_theme_css .='}';
        }else if($medical_appointment_theme_lay == '0.8'){
        $medical_appointment_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $medical_appointment_theme_css .='opacity:0.8';
        $medical_appointment_theme_css .='}';
        }else if($medical_appointment_theme_lay == '0.9'){
        $medical_appointment_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $medical_appointment_theme_css .='opacity:0.9';
        $medical_appointment_theme_css .='}';
        }

    /*--------------------------- Woocommerce Product Sale Positions -------------------*/

    $medical_appointment_product_sale = get_theme_mod( 'medical_appointment_woocommerce_product_sale','Right');
    if($medical_appointment_product_sale == 'Right'){
        $medical_appointment_theme_css .='.woocommerce ul.products li.product .onsale{';
            $medical_appointment_theme_css .='left: auto; right: 15px;';
        $medical_appointment_theme_css .='}';
    }else if($medical_appointment_product_sale == 'Left'){
        $medical_appointment_theme_css .='.woocommerce ul.products li.product .onsale{';
            $medical_appointment_theme_css .='left: 15px; right: auto;';
        $medical_appointment_theme_css .='}';
    }else if($medical_appointment_product_sale == 'Center'){
        $medical_appointment_theme_css .='.woocommerce ul.products li.product .onsale{';
            $medical_appointment_theme_css .='right: 50%;left: 50%;';
        $medical_appointment_theme_css .='}';
    }