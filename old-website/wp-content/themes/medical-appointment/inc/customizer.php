<?php
/**
 * Medical Appointment Theme Customizer
 *
 * @link: https://developer.wordpress.org/themes/customize-api/customizer-objects/
 *
 * @package Medical Appointment
 */

if ( ! defined( 'MEDICAL_APPOINTMENT_URL' ) ) {
    define( 'MEDICAL_APPOINTMENT_URL', esc_url( 'https://www.themagnifico.net/themes/medical-appointment-wordpress-theme/', 'medical-appointment') );
}
if ( ! defined( 'MEDICAL_APPOINTMENT_TEXT' ) ) {
    define( 'MEDICAL_APPOINTMENT_TEXT', __( 'Medical Appointment Pro','medical-appointment' ));
}
if ( ! defined( 'MEDICAL_APPOINTMENT_BUY_TEXT' ) ) {
    define( 'MEDICAL_APPOINTMENT_BUY_TEXT', __( 'Buy Medical Appointment Pro','medical-appointment' ));
}

use WPTRT\Customize\Section\Medical_Appointment_Button;

add_action( 'customize_register', function( $manager ) {

    $manager->register_section_type( Medical_Appointment_Button::class );

    $manager->add_section(
        new Medical_Appointment_Button( $manager, 'medical_appointment_pro', [
            'title'       => esc_html( MEDICAL_APPOINTMENT_TEXT,'medical-appointment' ),
            'priority'    => 0,
            'button_text' => __( 'GET PREMIUM', 'medical-appointment' ),
            'button_url'  => esc_url( MEDICAL_APPOINTMENT_URL )
        ] )
    );

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script(
        'medical-appointment-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
        [ 'customize-controls' ],
        $version,
        true
    );

    wp_enqueue_style(
        'medical-appointment-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
        [ 'customize-controls' ],
        $version
    );

} );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function medical_appointment_customize_register($wp_customize){

    // Pro Version
    class Medical_Appointment_Customize_Pro_Version extends WP_Customize_Control {
        public $type = 'pro_options';

        public function render_content() {
            echo '<span>For More <strong>'. esc_html( $this->label ) .'</strong>?</span>';
            echo '<a href="'. esc_url($this->description) .'" target="_blank">';
                echo '<span class="dashicons dashicons-info"></span>';
                echo '<strong> '. esc_html( MEDICAL_APPOINTMENT_BUY_TEXT,'medical-appointment' ) .'<strong></a>';
            echo '</a>';
        }
    }

    // Custom Controls
    function Medical_Appointment_sanitize_custom_control( $input ) {
        return $input;
    }

    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';

    $wp_customize->add_setting('medical_appointment_logo_title_text', array(
        'default' => true,
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'medical_appointment_logo_title_text',array(
        'label'          => __( 'Enable Disable Title', 'medical-appointment' ),
        'section'        => 'title_tagline',
        'settings'       => 'medical_appointment_logo_title_text',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('medical_appointment_theme_description', array(
        'default' => false,
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'medical_appointment_theme_description',array(
        'label'          => __( 'Enable Disable Tagline', 'medical-appointment' ),
        'section'        => 'title_tagline',
        'settings'       => 'medical_appointment_theme_description',
        'type'           => 'checkbox',
    )));

    //Logo
    $wp_customize->add_setting('medical_appointment_logo_max_height',array(
        'default'   => '24',
        'sanitize_callback' => 'medical_appointment_sanitize_number_absint'
    ));
    $wp_customize->add_control('medical_appointment_logo_max_height',array(
        'label' => esc_html__('Logo Width','medical-appointment'),
        'section'   => 'title_tagline',
        'type'      => 'number'
    ));

    // General Settings
     $wp_customize->add_section('medical_appointment_general_settings',array(
        'title' => esc_html__('General Settings','medical-appointment'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('medical_appointment_preloader_hide', array(
        'default' => 0,
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'medical_appointment_preloader_hide',array(
        'label'          => __( 'Show Theme Preloader', 'medical-appointment' ),
        'section'        => 'medical_appointment_general_settings',
        'settings'       => 'medical_appointment_preloader_hide',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting( 'medical_appointment_preloader_bg_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'medical_appointment_preloader_bg_color', array(
        'label' => esc_html__('Preloader Background Color','medical-appointment'),
        'section' => 'medical_appointment_general_settings',
        'settings' => 'medical_appointment_preloader_bg_color'
    )));

    $wp_customize->add_setting( 'medical_appointment_preloader_dot_1_color', array(
        'default' => '#22C7B8',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'medical_appointment_preloader_dot_1_color', array(
        'label' => esc_html__('Preloader First Dot Color','medical-appointment'),
        'section' => 'medical_appointment_general_settings',
        'settings' => 'medical_appointment_preloader_dot_1_color'
    )));

    $wp_customize->add_setting( 'medical_appointment_preloader_dot_2_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'medical_appointment_preloader_dot_2_color', array(
        'label' => esc_html__('Preloader Second Dot Color','medical-appointment'),
        'section' => 'medical_appointment_general_settings',
        'settings' => 'medical_appointment_preloader_dot_2_color'
    )));

    $wp_customize->add_setting('medical_appointment_scroll_hide', array(
        'default' => false,
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'medical_appointment_scroll_hide',array(
        'label'          => __( 'Show Theme Scroll To Top', 'medical-appointment' ),
        'section'        => 'medical_appointment_general_settings',
        'settings'       => 'medical_appointment_scroll_hide',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('medical_appointment_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'medical_appointment_sanitize_choices'
    ));
    $wp_customize->add_control('medical_appointment_scroll_top_position',array(
        'type' => 'radio',
        'section' => 'medical_appointment_general_settings',
        'choices' => array(
            'Right' => __('Right','medical-appointment'),
            'Left' => __('Left','medical-appointment'),
            'Center' => __('Center','medical-appointment')
        ),
    ) );

    // Product Columns
    $wp_customize->add_setting( 'medical_appointment_products_per_row' , array(
       'default'           => '3',
       'transport'         => 'refresh',
       'sanitize_callback' => 'medical_appointment_sanitize_select',
    ) );

    $wp_customize->add_control('medical_appointment_products_per_row', array(
       'label' => __( 'Product per row', 'medical-appointment' ),
       'section'  => 'medical_appointment_general_settings',
       'type'     => 'select',
       'choices'  => array(
           '2' => '2',
           '3' => '3',
           '4' => '4',
       ),
    ) );

     //Woocommerce Single Product page Sidebar
    $wp_customize->add_setting('medical_appointment_woocommerce_single_product_page_sidebar', array(
        'default' => true,
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'medical_appointment_woocommerce_single_product_page_sidebar',array(
        'label'          => __( 'Hide Single Product Page Sidebar', 'medical-appointment' ),
        'section'        => 'medical_appointment_general_settings',
        'settings'       => 'medical_appointment_woocommerce_single_product_page_sidebar',
        'type'           => 'checkbox',
    )));

  $wp_customize->add_setting('medical_appointment_single_product_sidebar_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'medical_appointment_sanitize_choices'
    ));
    $wp_customize->add_control('medical_appointment_single_product_sidebar_layout',array(
        'type' => 'select',
        'label' => __('Woocommerce Single Product Page Sidebar','medical-appointment'),
        'section' => 'medical_appointment_general_settings',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','medical-appointment'),
            'Right Sidebar' => __('Right Sidebar','medical-appointment'),
        ),
    ) );

    //Woocommerce shop page Sidebar
    $wp_customize->add_setting('medical_appointment_woocommerce_shop_page_sidebar', array(
        'default' => true,
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'medical_appointment_woocommerce_shop_page_sidebar',array(
        'label'          => __( 'Hide Shop Page Sidebar', 'medical-appointment' ),
        'section'        => 'medical_appointment_general_settings',
        'settings'       => 'medical_appointment_woocommerce_shop_page_sidebar',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('medical_appointment_shop_page_sidebar_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'medical_appointment_sanitize_choices'
    ));
    $wp_customize->add_control('medical_appointment_shop_page_sidebar_layout',array(
        'type' => 'select',
        'label' => __('Woocommerce Shop Page Sidebar','medical-appointment'),
        'section' => 'medical_appointment_general_settings',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','medical-appointment'),
            'Right Sidebar' => __('Right Sidebar','medical-appointment'),
        ),
    ) );

    $wp_customize->add_setting('medical_appointment_woocommerce_product_sale',array(
        'default' => 'Left',
        'sanitize_callback' => 'medical_appointment_sanitize_choices'
    ));
    $wp_customize->add_control('medical_appointment_woocommerce_product_sale',array(
        'type' => 'radio',
        'section' => 'medical_appointment_general_settings',
        'choices' => array(
            'Right' => __('Right','medical-appointment'),
            'Left' => __('Left','medical-appointment'),
            'Center' => __('Center','medical-appointment')
        ),
    ) );

    //Header
    $wp_customize->add_section('medical_appointment_top_bar',array(
        'title' => esc_html__('Top Bar Option','medical-appointment')
    ));

    $wp_customize->add_setting('medical_appointment_top_bar_email_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_top_bar_email_text',array(
        'label' => esc_html__('Email Text','medical-appointment'),
        'section' => 'medical_appointment_top_bar',
        'setting' => 'medical_appointment_top_bar_email_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_top_bar_email',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_top_bar_email',array(
        'label' => esc_html__('Email Address','medical-appointment'),
        'section' => 'medical_appointment_top_bar',
        'setting' => 'medical_appointment_top_bar_email',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_top_bar_phone_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_top_bar_phone_text',array(
        'label' => esc_html__('Phone Text','medical-appointment'),
        'section' => 'medical_appointment_top_bar',
        'setting' => 'medical_appointment_top_bar_phone_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_top_bar_phone_number',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_top_bar_phone_number',array(
        'label' => esc_html__('Phone Number','medical-appointment'),
        'section' => 'medical_appointment_top_bar',
        'setting' => 'medical_appointment_top_bar_phone_number',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_top_bar_location_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_top_bar_location_text',array(
        'label' => esc_html__('Location Text','medical-appointment'),
        'section' => 'medical_appointment_top_bar',
        'setting' => 'medical_appointment_top_bar_location_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_top_bar_location',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_top_bar_location',array(
        'label' => esc_html__('Our Location','medical-appointment'),
        'section' => 'medical_appointment_top_bar',
        'setting' => 'medical_appointment_top_bar_location',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_top_bar_btn_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_top_bar_btn_text',array(
        'label' => esc_html__('Button Text','medical-appointment'),
        'section' => 'medical_appointment_top_bar',
        'setting' => 'medical_appointment_top_bar_btn_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_top_bar_btn_url',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_top_bar_btn_url',array(
        'label' => esc_html__('Button Url','medical-appointment'),
        'section' => 'medical_appointment_top_bar',
        'setting' => 'medical_appointment_top_bar_btn_url',
        'type'  => 'text'
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_header_setting', array(
        'sanitize_callback' => 'Medical_Appointment_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Medical_Appointment_Customize_Pro_Version ( $wp_customize,'pro_version_header_setting', array(
        'section'     => 'medical_appointment_top_bar',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'medical-appointment' ),
        'description' => esc_url( MEDICAL_APPOINTMENT_URL ),
        'priority'    => 100
    )));

    // Social Link
    $wp_customize->add_section('medical_appointment_social_link',array(
        'title' => esc_html__('Social Links','medical-appointment'),
    ));

    $wp_customize->add_setting('medical_appointment_facebook_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_facebook_icon',array(
        'label' => esc_html__('Facebook Icon','medical-appointment'),
        'section' => 'medical_appointment_social_link',
        'setting' => 'medical_appointment_facebook_icon',
        'type'  => 'text',
        'default' => 'fab fa-facebook-f',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fab fa-facebook-f','medical-appointment')
    ));

    $wp_customize->add_setting('medical_appointment_facebook_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('medical_appointment_facebook_url',array(
        'label' => esc_html__('Facebook Link','medical-appointment'),
        'section' => 'medical_appointment_social_link',
        'setting' => 'medical_appointment_facebook_url',
        'type'  => 'url'
    ));


    $wp_customize->add_setting('medical_appointment_twitter_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_twitter_icon',array(
        'label' => esc_html__('Twitter Icon','medical-appointment'),
        'section' => 'medical_appointment_social_link',
        'setting' => 'medical_appointment_twitter_icon',
        'type'  => 'text',
        'default' => 'fab fa-twitter',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fab fa-twitter','medical-appointment')
    ));

    $wp_customize->add_setting('medical_appointment_twitter_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('medical_appointment_twitter_url',array(
        'label' => esc_html__('Twitter Link','medical-appointment'),
        'section' => 'medical_appointment_social_link',
        'setting' => 'medical_appointment_twitter_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('medical_appointment_intagram_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_intagram_icon',array(
        'label' => esc_html__('Intagram Icon','medical-appointment'),
        'section' => 'medical_appointment_social_link',
        'setting' => 'medical_appointment_intagram_icon',
        'type'  => 'text',
        'default' => 'fab fa-instagram',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fab fa-instagram','medical-appointment')
    ));

    $wp_customize->add_setting('medical_appointment_intagram_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('medical_appointment_intagram_url',array(
        'label' => esc_html__('Intagram Link','medical-appointment'),
        'section' => 'medical_appointment_social_link',
        'setting' => 'medical_appointment_intagram_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('medical_appointment_linkedin_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_linkedin_icon',array(
        'label' => esc_html__('Linkedin Icon','medical-appointment'),
        'section' => 'medical_appointment_social_link',
        'setting' => 'medical_appointment_linkedin_icon',
        'type'  => 'text',
        'default' => 'fab fa-linkedin-in',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fab fa-linkedin-in','medical-appointment')
    ));

    $wp_customize->add_setting('medical_appointment_linkedin_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('medical_appointment_linkedin_url',array(
        'label' => esc_html__('Linkedin Link','medical-appointment'),
        'section' => 'medical_appointment_social_link',
        'setting' => 'medical_appointment_linkedin_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('medical_appointment_pintrest_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_pintrest_icon',array(
        'label' => esc_html__('Pinterest Icon','medical-appointment'),
        'section' => 'medical_appointment_social_link',
        'setting' => 'medical_appointment_pintrest_icon',
        'type'  => 'text',
        'default' => 'fab fa-pinterest-p',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fab fa-pinterest-p','medical-appointment')
    ));

    $wp_customize->add_setting('medical_appointment_pintrest_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('medical_appointment_pintrest_url',array(
        'label' => esc_html__('Pinterest Link','medical-appointment'),
        'section' => 'medical_appointment_social_link',
        'setting' => 'medical_appointment_pintrest_url',
        'type'  => 'url'
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_social_links_setting', array(
        'sanitize_callback' => 'Medical_Appointment_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Medical_Appointment_Customize_Pro_Version ( $wp_customize,'pro_version_social_links_setting', array(
        'section'     => 'medical_appointment_social_link',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'medical-appointment' ),
        'description' => esc_url( MEDICAL_APPOINTMENT_URL ),
        'priority'    => 100
    )));

    //Header
    $wp_customize->add_section('medical_appointment_header',array(
        'title' => esc_html__('Header Option','medical-appointment')
    ));

    

    // Slider
    $wp_customize->add_section('medical_appointment_top_slider',array(
        'title' => esc_html__('Slider Option','medical-appointment')
    ));

    $wp_customize->add_setting('medical_appointment_top_slider_section_setting', array(
        'default' => 1,
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'medical_appointment_top_slider_section_setting',array(
        'label'          => __( 'Enable Disable Slider', 'medical-appointment' ),
        'section'        => 'medical_appointment_top_slider',
        'settings'       => 'medical_appointment_top_slider_section_setting',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('medical_appointment_slider_loop', array(
        'default' => 0,
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'medical_appointment_slider_loop',array(
        'label'          => __( 'On Of Slider Loop', 'medical-appointment' ),
        'section'        => 'medical_appointment_top_slider',
        'settings'       => 'medical_appointment_slider_loop',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('medical_appointment_slider_heading',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_slider_heading',array(
        'label' => esc_html__('Slider Heading','medical-appointment'),
        'section' => 'medical_appointment_top_slider',
        'setting' => 'medical_appointment_slider_heading',
        'type'  => 'text'
    ));

    for ( $medical_appointment_count = 1; $medical_appointment_count <= 3; $medical_appointment_count++ ) {

        $wp_customize->add_setting( 'medical_appointment_top_slider_page' . $medical_appointment_count, array(
            'default'           => '',
            'sanitize_callback' => 'medical_appointment_sanitize_dropdown_pages'
        ) );
        $wp_customize->add_control( 'medical_appointment_top_slider_page' . $medical_appointment_count, array(
            'label'    => __( 'Select Slide Page', 'medical-appointment' ),
            'section'  => 'medical_appointment_top_slider',
            'type'     => 'dropdown-pages'
        ) );
        
    }

    for ($i=1; $i <=5; $i++) {
        $wp_customize->add_setting('medical_appointment_slider_icon'.$i,array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('medical_appointment_slider_icon'.$i,array(
            'label' => esc_html__('Slider Icon ','medical-appointment').$i,
            'section' => 'medical_appointment_top_slider',
            'setting' => 'medical_appointment_slider_icon'.$i,
            'type'  => 'text',
            'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fas fa-calendar-alt','medical-appointment')
        ));
        $wp_customize->add_setting('medical_appointment_slider_icon_text_url' .$i,array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('medical_appointment_slider_icon_text_url' .$i,array(
            'label' => __('Icon URL '  ,'medical-appointment') .$i,
            'section' => 'medical_appointment_top_slider',
            'setting' => 'medical_appointment_slider_icon_text_url' .$i,
            'type'    => 'text'
        ));
    }

    //Opacity
    $wp_customize->add_setting('medical_appointment_slider_opacity_color',array(
      'default'              => '0.5',
      'sanitize_callback' => 'medical_appointment_sanitize_choices'
    ));

    $wp_customize->add_control( 'medical_appointment_slider_opacity_color', array(
    'label'       => esc_html__( 'Slider Image Opacity','medical-appointment' ),
    'section'     => 'medical_appointment_top_slider',
    'type'        => 'select',
    'choices' => array(
      '0' =>  esc_attr('0','medical-appointment'),
      '0.1' =>  esc_attr('0.1','medical-appointment'),
      '0.2' =>  esc_attr('0.2','medical-appointment'),
      '0.3' =>  esc_attr('0.3','medical-appointment'),
      '0.4' =>  esc_attr('0.4','medical-appointment'),
      '0.5' =>  esc_attr('0.5','medical-appointment'),
      '0.6' =>  esc_attr('0.6','medical-appointment'),
      '0.7' =>  esc_attr('0.7','medical-appointment'),
      '0.8' =>  esc_attr('0.8','medical-appointment'),
      '0.9' =>  esc_attr('0.9','medical-appointment')
    ),
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_slider_setting', array(
        'sanitize_callback' => 'Medical_Appointment_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Medical_Appointment_Customize_Pro_Version ( $wp_customize,'pro_version_slider_setting', array(
        'section'     => 'medical_appointment_top_slider',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'medical-appointment' ),
        'description' => esc_url( MEDICAL_APPOINTMENT_URL ),
        'priority'    => 100
    )));
    
    //Services
    $wp_customize->add_section('medical_appointment_services',array(
        'title' => esc_html__('Services Option','medical-appointment'),
        'description' => esc_html__('Here you have to select services which will display perticular services in the home page.','medical-appointment')
    ));

    $wp_customize->add_setting('medical_appointment_services_right_img',array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control( $wp_customize,'medical_appointment_services_right_img',array(
        'label' => __('Section Background Image','medical-appointment'),
        'description' => __('Dimension 1600 * 642','medical-appointment'),
        'section' => 'medical_appointment_services',
        'settings' => 'medical_appointment_services_right_img'
    )));
   
    $wp_customize->add_setting('medical_appointment_services1_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services1_icon',array(
        'label' => esc_html__('Icon','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services1_icon',
        'type'  => 'text',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fas fa-calendar-alt','medical-appointment')
    ));

    $wp_customize->add_setting('medical_appointment_services1_heading',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services1_heading',array(
        'label' => esc_html__('Services Box Heading','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services1_heading',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services1_link',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services1_link',array(
        'label' => esc_html__('Heading Url','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services1_link',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services1_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services1_text',array(
        'label' => esc_html__('Services Box Text','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services1_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services1_phone_number',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services1_phone_number',array(
        'label' => esc_html__('Services Box Phone Number','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services1_phone_number',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services2_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services2_icon',array(
        'label' => esc_html__('Icon','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services2_icon',
        'type'  => 'text',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fas fa-calendar-alt','medical-appointment')
    ));

    $wp_customize->add_setting('medical_appointment_services2_heading',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services2_heading',array(
        'label' => esc_html__('Services Box Heading','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services2_heading',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services2_link',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services2_link',array(
        'label' => esc_html__('Heading Url','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services2_link',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services2_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services2_text',array(
        'label' => esc_html__('Services Box Text','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services2_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services2_button_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services2_button_text',array(
        'label' => esc_html__('Button Text','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services2_button_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services2_button_url',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services2_button_url',array(
        'label' => esc_html__('Button Url','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services2_button_url',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services3_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services3_icon',array(
        'label' => esc_html__('Icon','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services3_icon',
        'type'  => 'text',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fas fa-calendar-alt','medical-appointment')
    ));

    $wp_customize->add_setting('medical_appointment_services3_heading',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services3_heading',array(
        'label' => esc_html__('Services Box Heading','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services3_heading',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services3_link',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services3_link',array(
        'label' => esc_html__('Heading Url','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services3_link',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services3_col_one',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services3_col_one',array(
        'label' => esc_html__('Add Day','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services3_col_one',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services3_col_two',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services3_col_two',array(
        'label' => esc_html__('Add Time','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services3_col_two',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services3_col_three',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services3_col_three',array(
        'label' => esc_html__('Add Day','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services3_col_three',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services3_col_four',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services3_col_four',array(
        'label' => esc_html__('Add Time','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services3_col_four',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services3_col_five',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services3_col_five',array(
        'label' => esc_html__('Add Day','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services3_col_five',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('medical_appointment_services3_col_six',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_appointment_services3_col_six',array(
        'label' => esc_html__('Add Time','medical-appointment'),
        'section' => 'medical_appointment_services',
        'setting' => 'medical_appointment_services3_col_six',
        'type'  => 'text'
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_services_setting', array(
        'sanitize_callback' => 'Medical_Appointment_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Medical_Appointment_Customize_Pro_Version ( $wp_customize,'pro_version_services_setting', array(
        'section'     => 'medical_appointment_services',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'medical-appointment' ),
        'description' => esc_url( MEDICAL_APPOINTMENT_URL ),
        'priority'    => 100
    )));
    
    // Footer
    $wp_customize->add_section('medical_appointment_site_footer_section', array(
        'title' => esc_html__('Footer', 'medical-appointment'),
    ));

    $wp_customize->add_setting('medical_appointment_footer_text_setting', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('medical_appointment_footer_text_setting', array(
        'label' => __('Replace the footer text', 'medical-appointment'),
        'section' => 'medical_appointment_site_footer_section',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('medical_appointment_show_hide_copyright',array(
        'default' => true,
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox'
    ));
    $wp_customize->add_control('medical_appointment_show_hide_copyright',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide Copyright','medical-appointment'),
        'section' => 'medical_appointment_site_footer_section',
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_footer_setting', array(
        'sanitize_callback' => 'Medical_Appointment_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Medical_Appointment_Customize_Pro_Version ( $wp_customize,'pro_version_footer_setting', array(
        'section'     => 'medical_appointment_site_footer_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'medical-appointment' ),
        'description' => esc_url( MEDICAL_APPOINTMENT_URL ),
        'priority'    => 100
    )));

    // Post Settings
     $wp_customize->add_section('medical_appointment_post_settings',array(
        'title' => esc_html__('Post Settings','medical-appointment'),
        'priority'   =>40,
    ));

    $wp_customize->add_setting('medical_appointment_post_page_title',array(
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('medical_appointment_post_page_title',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Title', 'medical-appointment'),
        'section'     => 'medical_appointment_post_settings',
        'description' => esc_html__('Check this box to enable title on post page.', 'medical-appointment'),
    ));

    $wp_customize->add_setting('medical_appointment_post_page_meta',array(
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('medical_appointment_post_page_meta',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Meta', 'medical-appointment'),
        'section'     => 'medical_appointment_post_settings',
        'description' => esc_html__('Check this box to enable meta on post page.', 'medical-appointment'),
    ));

    $wp_customize->add_setting('medical_appointment_post_page_thumb',array(
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('medical_appointment_post_page_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Thumbnail', 'medical-appointment'),
        'section'     => 'medical_appointment_post_settings',
        'description' => esc_html__('Check this box to enable thumbnail on post page.', 'medical-appointment'),
    ));

    $wp_customize->add_setting('medical_appointment_post_page_btn',array(
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('medical_appointment_post_page_btn',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Button', 'medical-appointment'),
        'section'     => 'medical_appointment_post_settings',
        'description' => esc_html__('Check this box to enable button on post page.', 'medical-appointment'),
    ));

    $wp_customize->add_setting('medical_appointment_single_post_thumb',array(
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('medical_appointment_single_post_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Thumbnail', 'medical-appointment'),
        'section'     => 'medical_appointment_post_settings',
        'description' => esc_html__('Check this box to enable post thumbnail on single post.', 'medical-appointment'),
    ));

    $wp_customize->add_setting('medical_appointment_single_post_meta',array(
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('medical_appointment_single_post_meta',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Meta', 'medical-appointment'),
        'section'     => 'medical_appointment_post_settings',
        'description' => esc_html__('Check this box to enable single post meta such as post date, author, category, comment etc.', 'medical-appointment'),
    ));

    $wp_customize->add_setting('medical_appointment_single_post_title',array(
            'sanitize_callback' => 'medical_appointment_sanitize_checkbox',
            'default'           => 1,
    ));
    $wp_customize->add_control('medical_appointment_single_post_title',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Title', 'medical-appointment'),
        'section'     => 'medical_appointment_post_settings',
        'description' => esc_html__('Check this box to enable title on single post.', 'medical-appointment'),
    ));

    $wp_customize->add_setting('medical_appointment_single_post_tags',array(
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('medical_appointment_single_post_tags',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Tags', 'medical-appointment'),
        'section'     => 'medical_appointment_post_settings',
        'description' => esc_html__('Check this box to enable post tags on single post.', 'medical-appointment'),
    ));

    $wp_customize->add_setting('medical_appointment_single_post_comment_title',array(
        'default'=> 'Leave a Reply',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('medical_appointment_single_post_comment_title',array(
        'label' => __('Add Comment Title','medical-appointment'),
        'input_attrs' => array(
        'placeholder' => __( 'Leave a Reply', 'medical-appointment' ),
        ),
        'section'=> 'medical_appointment_post_settings',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('medical_appointment_single_post_comment_btn_text',array(
        'default'=> 'Post Comment',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('medical_appointment_single_post_comment_btn_text',array(
        'label' => __('Add Comment Button Text','medical-appointment'),
        'input_attrs' => array(
            'placeholder' => __( 'Post Comment', 'medical-appointment' ),
        ),
        'section'=> 'medical_appointment_post_settings',
        'type'=> 'text'
    ));

    // Page Settings
    $wp_customize->add_section('medical_appointment_page_settings',array(
        'title' => esc_html__('Page Settings','medical-appointment'),
        'priority'   =>50,
    ));

    $wp_customize->add_setting('medical_appointment_single_page_title',array(
            'sanitize_callback' => 'medical_appointment_sanitize_checkbox',
            'default'           => 1,
    ));
    $wp_customize->add_control('medical_appointment_single_page_title',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Page Title', 'medical-appointment'),
        'section'     => 'medical_appointment_page_settings',
        'description' => esc_html__('Check this box to enable title on single page.', 'medical-appointment'),
    ));

    $wp_customize->add_setting('medical_appointment_single_page_thumb',array(
        'sanitize_callback' => 'medical_appointment_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('medical_appointment_single_page_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Page Thumbnail', 'medical-appointment'),
        'section'     => 'medical_appointment_page_settings',
        'description' => esc_html__('Check this box to enable page thumbnail on single page.', 'medical-appointment'),
    ));
}
add_action('customize_register', 'medical_appointment_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function medical_appointment_customize_partial_blogname(){
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function medical_appointment_customize_partial_blogdescription(){
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function medical_appointment_customize_preview_js(){
    wp_enqueue_script('medical-appointment-customizer', esc_url(get_template_directory_uri()) . '/assets/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'medical_appointment_customize_preview_js');

/*
** Load dynamic logic for the customizer controls area.
*/
function medical_appointment_panels_js() {
    wp_enqueue_style( 'medical-appointment-customizer-layout-css', get_theme_file_uri( '/assets/css/customizer-layout.css' ) );
    wp_enqueue_script( 'medical-appointment-customize-layout', get_theme_file_uri( '/assets/js/customize-layout.js' ), array(), '1.2', true );
}
add_action( 'customize_controls_enqueue_scripts', 'medical_appointment_panels_js' );