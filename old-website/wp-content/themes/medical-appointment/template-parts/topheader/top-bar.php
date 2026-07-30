<?php
/**
 * Displays main header
 *
 * @package Medical Appointment
 */
?>

<div class="topbar text-center text-md-left py-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 align-self-center ">
                <?php if(get_theme_mod('medical_appointment_top_bar_email') != '' || get_theme_mod('medical_appointment_top_bar_email_text') != '' ){ ?>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 align-self-center top-icons">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 align-self-center content-box">
                            <p class="mb-0"><?php echo esc_html(get_theme_mod('medical_appointment_top_bar_email_text','')); ?></p>
                            <a href="mailto:<?php echo esc_html(get_theme_mod('medical_appointment_top_bar_email','')); ?>"><p class="mb-0"><?php echo esc_html(get_theme_mod('medical_appointment_top_bar_email','')); ?></p></a>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 align-self-center">
                <?php if(get_theme_mod('medical_appointment_top_bar_phone_number') != '' || get_theme_mod('medical_appointment_top_bar_phone_text') != '' ){ ?>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 align-self-center top-icons">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 align-self-center content-box">
                            <a class="call-num" href="tel:<?php echo esc_html(get_theme_mod('medical_appointment_top_bar_phone_number','')); ?>"><p class="mb-0"><?php echo esc_html(get_theme_mod('medical_appointment_top_bar_phone_number','')); ?></p></a>
                            <p class="phone-text mb-0"><?php echo esc_html(get_theme_mod('medical_appointment_top_bar_phone_text','')); ?></p>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 align-self-center">
                <?php if(get_theme_mod('medical_appointment_top_bar_location') != '' || get_theme_mod('medical_appointment_top_bar_location_text') != '' ){ ?>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 align-self-center top-icons">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 align-self-center content-box">
                            <p class="mb-0"><?php echo esc_html(get_theme_mod('medical_appointment_top_bar_location_text','')); ?></p>
                            <p class="location mb-0"><?php echo esc_html(get_theme_mod('medical_appointment_top_bar_location','')); ?></p>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 align-self-center text-center text-md-right">
                <div class="header-btn">  
                    <?php if ( get_theme_mod('medical_appointment_top_bar_btn_text') != "" ) {?>
                        <a href="<?php echo esc_url(get_theme_mod('medical_appointment_top_bar_btn_url')); ?>"><?php echo esc_html(get_theme_mod('medical_appointment_top_bar_btn_text')); ?></a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>