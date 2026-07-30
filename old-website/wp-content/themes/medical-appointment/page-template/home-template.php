<?php
/**
 * Template Name: Home Template
 */

get_header(); ?>

<main id="skip-content">
  <section id="top-slider" class="pb-4" slider-loop="<?php echo esc_html(get_theme_mod('medical_appointment_slider_loop')); ?> ">
    <div class="container-fluid p-0">
      <div class="box-slider">
        <?php if(get_theme_mod('medical_appointment_top_slider_section_setting') != ''){ ?>
        <?php $medical_appointment_slide_pages = array();
          for ( $medical_appointment_count = 1; $medical_appointment_count <= 3; $medical_appointment_count++ ) {
            $medical_appointment_mod = intval( get_theme_mod( 'medical_appointment_top_slider_page' . $medical_appointment_count ));
            if ( 'page-none-selected' != $medical_appointment_mod ) {
              $medical_appointment_slide_pages[] = $medical_appointment_mod;
            }
          }
          if( !empty($medical_appointment_slide_pages) ) :
            $medical_appointment_args = array(
              'post_type' => 'page',
              'post__in' => $medical_appointment_slide_pages,
              'orderby' => 'post__in'
            );
            $medical_appointment_query = new WP_Query( $medical_appointment_args );
            if ( $medical_appointment_query->have_posts() ) :
              $i = 1;
        ?>
        <div class="owl-carousel" role="listbox">
          <?php  while ( $medical_appointment_query->have_posts() ) : $medical_appointment_query->the_post(); ?>
            <div class="slider-box mx-5">
              <img src="<?php the_post_thumbnail_url('full'); ?>"/>
              <div class="slider-inner-box">
                <h2 class=" text-center my-3"><?php echo esc_html(get_theme_mod('medical_appointment_slider_heading')); ?>
                </h2>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php $medical_appointment_excerpt = the_excerpt(); echo esc_html( medical_appointment_string_limit_words( $medical_appointment_excerpt,15 ) ); ?></p>
                <div class="icon-box">
                  <?php 
                    for($icon_i=1; $icon_i<=5; $icon_i++) { ?>
                      <?php if(get_theme_mod('medical_appointment_slider_icon'.$icon_i)!=''){ ?>
                        <span class="box-icon">
                          <i class=" <?php echo esc_attr(get_theme_mod('medical_appointment_slider_icon'.$icon_i,'fas fa-calendar-alt')); ?>"></i>
                          <a href="<?php echo esc_url(get_theme_mod('medical_appointment_slider_icon_text_url'.$icon_i)); ?>"><?php esc_html_e('More','medical-appointment'); ?></a>
                        </span>
                      <?php } ?>
                  <?php } ?> 
                </div>
              </div>
            </div>
          <?php $i++; endwhile;
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <?php } ?>
      </div>
    </div>
  </section>

  <section class="services pt-5 mb-5">
    <div class="container-fluid p-0 pr-5 main-cont">
      <div class="row m-0">
        <div class="col-lg-3 col-md-3 col-sm-12 col-12 left-image">
          <?php if(get_theme_mod('medical_appointment_services_right_img') !=''){?>
            <img src="<?php echo esc_url(get_theme_mod('medical_appointment_services_right_img')); ?>">
          <?php } ?>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-12">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-0">
              <?php if(get_theme_mod('medical_appointment_services1_icon') !='' || get_theme_mod('medical_appointment_services1_heading') !='' || get_theme_mod('medical_appointment_services1_link') !='' || get_theme_mod('medical_appointment_services1_text') !='' || get_theme_mod('medical_appointment_services1_phone_number') !='' ){?>
                <div class="ser-box1 text-center">
                  <i class="my-5 <?php echo esc_attr(get_theme_mod('medical_appointment_services1_icon','fas fa-calendar-alt')); ?>"></i>
                  <h4 class="mb-3"><a href="<?php echo esc_url(get_theme_mod('medical_appointment_services1_link')); ?>"><?php echo esc_html(get_theme_mod('medical_appointment_services1_heading')); ?></a></h4>
                  <hr>
                  <p class="text mb-4 pb-2"><?php echo esc_html(get_theme_mod('medical_appointment_services1_text')); ?><p>
                  <p class="button pb-5"><a  href="tel:<?php echo esc_html(get_theme_mod('medical_appointment_services1_phone_number')); ?>"><?php echo esc_html(get_theme_mod('medical_appointment_services1_phone_number')); ?></a></p>
                </div>
              <?php } ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-0">
              <?php if(get_theme_mod('medical_appointment_services2_icon') !='' || get_theme_mod('medical_appointment_services2_heading') !='' || get_theme_mod('medical_appointment_services2_link') !='' || get_theme_mod('medical_appointment_services2_text') !='' || get_theme_mod('medical_appointment_services2_button_text') !='' || get_theme_mod('medical_appointment_services2_button_url') !='' ){?>
                <div class="ser-box2 text-center">
                  <i class="my-5 <?php echo esc_attr(get_theme_mod('medical_appointment_services2_icon','fas fa-calendar-alt')); ?>"></i>
                  <h4 class="mb-3"><a href="<?php echo esc_url(get_theme_mod('medical_appointment_services2_link')); ?>"><?php echo esc_html(get_theme_mod('medical_appointment_services2_heading')); ?></a></h4>
                  <hr>
                  <p class="text mb-4 pb-2"><?php echo esc_html(get_theme_mod('medical_appointment_services2_text')); ?><p>
                  <p class="button pb-5"><a  href="<?php echo esc_url(get_theme_mod('medical_appointment_services2_button_url')); ?>"><?php echo esc_html(get_theme_mod('medical_appointment_services2_button_text')); ?></a></p>
                </div>
              <?php } ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-0">
              <?php if(get_theme_mod('medical_appointment_services3_icon') !='' || get_theme_mod('medical_appointment_services3_heading') !='' || get_theme_mod('medical_appointment_services3_link') !='' || get_theme_mod('medical_appointment_services3_col_one') !='' || get_theme_mod('medical_appointment_services3_col_two') !='' || get_theme_mod('medical_appointment_services3_col_three') !='' || get_theme_mod('medical_appointment_services3_col_four') !='' || get_theme_mod('medical_appointment_services3_col_five') !='' || get_theme_mod('medical_appointment_services3_col_six') !='' ){?>
                <div class="ser-box3 text-center">
                  <i class="my-5 <?php echo esc_attr(get_theme_mod('medical_appointment_services3_icon','fas fa-calendar-alt')); ?>"></i>
                  <h4 class="mb-3"><a href="<?php echo esc_url(get_theme_mod('medical_appointment_services3_link')); ?>"><?php echo esc_html(get_theme_mod('medical_appointment_services3_heading')); ?></a></h4>
                  <hr>
                  <div class="pt-4 pb-5">
                    <table class="time-tab ">
                      <tr>
                        <td><?php echo esc_html(get_theme_mod('medical_appointment_services3_col_one')); ?></td>
                        <td><?php echo esc_html(get_theme_mod('medical_appointment_services3_col_two')); ?></td>
                      </tr>
                      <tr>
                        <td><?php echo esc_html(get_theme_mod('medical_appointment_services3_col_three')); ?></td>
                        <td><?php echo esc_html(get_theme_mod('medical_appointment_services3_col_four')); ?></td>
                      </tr>
                      <tr>
                        <td><?php echo esc_html(get_theme_mod('medical_appointment_services3_col_five')); ?></td>
                        <td><?php echo esc_html(get_theme_mod('medical_appointment_services3_col_six')); ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="page-content">
    <div class="container">
      <div class="">
        <?php
          if ( have_posts() ) :
            while ( have_posts() ) : the_post();
              the_content();
            endwhile;
          endif;
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>