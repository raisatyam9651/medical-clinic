<?php
/**
 * Displays main header
 *
 * @package Medical Appointment
 */
?>

<div class="main-header text-center text-md-left ">
    <div class="container-fluid p-0 ">
        <div class="row m-0">
            <div class="col-lg-3 col-md-3 col-sm-12 header-logo pl-5 d-flex align-items-center ">
                <div class="navbar-brand text-center text-md-left">
                    <?php if ( has_custom_logo() ) : ?>
                        <div class="site-logo"><?php the_custom_logo(); ?></div>
                    <?php endif; ?>
                    <?php $medical_appointment_blog_info = get_bloginfo( 'name' ); ?>
                        <?php if ( ! empty( $medical_appointment_blog_info ) ) : ?>
                            <?php if ( is_front_page() && is_home() ) : ?>
                                <?php if( get_theme_mod('medical_appointment_logo_title_text',true) != ''){ ?>
                                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php } ?>
                            <?php else : ?>
                                <?php if( get_theme_mod('medical_appointment_logo_title_text',true) != ''){ ?>
                                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                <?php } ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php
                            $medical_appointment_description = get_bloginfo( 'description', 'display' );
                            if ( $medical_appointment_description || is_customize_preview() ) :
                        ?>
                        <?php if( get_theme_mod('medical_appointment_theme_description',false) != ''){ ?>
                            <p class="site-description"><?php echo esc_html($medical_appointment_description); ?></p>
                        <?php } ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 header-nav ">
                <div class="row">
                    <div class="col-lg-12 pr-5 header-top">
                        <?php get_template_part('template-parts/topheader/top-bar'); ?>
                    </div>
                    <div class="col-lg-12 header-main align-self-center pr-5 mb-4">
                        <div class="row m-0">
                            <div class="col-lg-8 col-md-4 col-sm-4 col-4 align-self-center">
                                <?php get_template_part('template-parts/navigation/nav'); ?>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-8 align-self-center text-center text-md-right buy-box">
                                <?php if(class_exists('woocommerce')){ ?>
                                    <span class="cart_box">
                                        <?php global $woocommerce; ?>
                                        <a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e( 'shopping cart','medical-appointment' ); ?>"><i class="fas fa-shopping-cart"></i></a>
                                    </span>
                                <?php }?>
                                <span>
                                    <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>">
                                        <i class="fas fa-user"></i>
                                    </a>
                                </span>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-12 align-self-center text-right">
                                  <div class="social-link">
                                    <?php if(get_theme_mod('medical_appointment_facebook_url') != ''){ ?>
                                      <a href="<?php echo esc_url(get_theme_mod('medical_appointment_facebook_url','')); ?>"><i class="<?php echo esc_html( get_theme_mod('medical_appointment_facebook_icon') ); ?>"></i></a>
                                    <?php }?>
                                    <?php if(get_theme_mod('medical_appointment_twitter_url') != ''){ ?>
                                      <a href="<?php echo esc_url(get_theme_mod('medical_appointment_twitter_url','')); ?>"><i class="<?php echo esc_html( get_theme_mod('medical_appointment_twitter_icon') ); ?>"></i></a>
                                    <?php }?>
                                    <?php if(get_theme_mod('medical_appointment_intagram_url') != ''){ ?>
                                      <a href="<?php echo esc_url(get_theme_mod('medical_appointment_intagram_url','')); ?>"><i class="<?php echo esc_html( get_theme_mod('medical_appointment_intagram_icon') ); ?>"></i></a>
                                    <?php }?>
                                    <?php if(get_theme_mod('medical_appointment_linkedin_url') != ''){ ?>
                                      <a href="<?php echo esc_url(get_theme_mod('medical_appointment_linkedin_url','')); ?>"><i class="<?php echo esc_html( get_theme_mod('medical_appointment_linkedin_icon') ); ?>"></i></a>
                                    <?php }?>
                                    <?php if(get_theme_mod('medical_appointment_pintrest_url') != ''){ ?>
                                      <a href="<?php echo esc_url(get_theme_mod('medical_appointment_pintrest_url','')); ?>"><i class="<?php echo esc_html( get_theme_mod('medical_appointment_pintrest_icon') ); ?>"></i></a>
                                    <?php }?>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>