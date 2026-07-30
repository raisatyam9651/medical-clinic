<?php
/**
 * Medical Appointment functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Medical Appointment
 */

include get_theme_file_path( 'vendor/wptrt/autoload/src/Medical_Appointment_Loader.php' );

$Medical_Appointment_Loader = new \WPTRT\Autoload\Medical_Appointment_Loader();

$Medical_Appointment_Loader->medical_appointment_add( 'WPTRT\\Customize\\Section', get_theme_file_path( 'vendor/wptrt/customize-section-button/src' ) );

$Medical_Appointment_Loader->medical_appointment_register();

if ( ! function_exists( 'medical_appointment_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function medical_appointment_setup() {

		load_theme_textdomain( 'medical-appointment', get_template_directory() . '/languages' );

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		*/
		add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

		add_theme_support( 'woocommerce' );
		add_theme_support( "responsive-embeds" );
		add_theme_support( "align-wide" );
		add_theme_support( "wp-block-styles" );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

        add_image_size('medical-appointment-featured-header-image', 2000, 660, true);

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary','medical-appointment' ),
	        'footer'=> esc_html__( 'Footer Menu','medical-appointment' ),
        ) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'medical_appointment_custom_background_args', array(
			'default-color' => 'f7ebe5',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 50,
			'width'       => 50,
			'flex-width'  => true,
		) );

		add_editor_style( array( '/editor-style.css' ) );
	}
endif;
add_action( 'after_setup_theme', 'medical_appointment_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medical_appointment_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'medical_appointment_content_width', 1170 );
}
add_action( 'after_setup_theme', 'medical_appointment_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medical_appointment_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'medical-appointment' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'medical-appointment' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Woocommerce Single Product Page Sidebar', 'medical-appointment' ),
		'id'            => 'woocommerce-single-product-page-sidebar',
		'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Woocommerce Shop Page Sidebar', 'medical-appointment' ),
		'id'            => 'woocommerce-shop-page-sidebar',
		'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'medical-appointment' ),
		'id'            => 'medical-appointment-footer1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'medical-appointment' ),
		'id'            => 'medical-appointment-footer2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'medical-appointment' ),
		'id'            => 'medical-appointment-footer3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'medical_appointment_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function medical_appointment_scripts() {

	require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

	wp_enqueue_style(
		'raleway',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' ),
		array(),
		'1.0'
	);
	
	wp_enqueue_style(
		'poppins',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' ),
		array(),
		'1.0'
	);

	wp_enqueue_style( 'medical-appointment-block-editor-style', get_theme_file_uri('/assets/css/block-editor-style.css') );

	// load bootstrap css
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');

    wp_enqueue_style( 'owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css');

		wp_enqueue_style( 'medical-appointment-style', get_stylesheet_uri() );
		require get_parent_theme_file_path( '/custom-option.php' );
		wp_add_inline_style( 'medical-appointment-style',$medical_appointment_theme_css );

		wp_style_add_data('medical-appointment-basic-style', 'rtl', 'replace');

	// fontawesome
	wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() .'/assets/css/fontawesome/css/all.css' );

    wp_enqueue_script('medical-appointment-theme-js', get_template_directory_uri() . '/assets/js/theme-script.js', array('jquery'), '', true );

    wp_enqueue_script('owl.carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'medical_appointment_scripts' );

/**
 * Enqueue Preloader.
 */
function medical_appointment_preloader() {

  $medical_appointment_theme_color_css = '';
  $medical_appointment_preloader_bg_color = get_theme_mod('medical_appointment_preloader_bg_color');
  $medical_appointment_preloader_dot_1_color = get_theme_mod('medical_appointment_preloader_dot_1_color');
  $medical_appointment_preloader_dot_2_color = get_theme_mod('medical_appointment_preloader_dot_2_color');
  $medical_appointment_logo_max_height = get_theme_mod('medical_appointment_logo_max_height');

  	if(get_theme_mod('medical_appointment_logo_max_height') == '') {
		$medical_appointment_logo_max_height = '24';
	}

	if(get_theme_mod('medical_appointment_preloader_bg_color') == '') {
		$medical_appointment_preloader_bg_color = '#ffffff';
	}
	if(get_theme_mod('medical_appointment_preloader_dot_1_color') == '') {
		$medical_appointment_preloader_dot_1_color = '#22C7B8';
	}
	if(get_theme_mod('medical_appointment_preloader_dot_2_color') == '') {
		$medical_appointment_preloader_dot_2_color = '#000000';
	}
	$medical_appointment_theme_color_css = '
		.custom-logo-link img{
			max-height: '.esc_attr($medical_appointment_logo_max_height).'px;
	 	}
		.loading{
			background-color: '.esc_attr($medical_appointment_preloader_bg_color).';
		 }
		 @keyframes loading {
		  0%,
		  100% {
		  	transform: translatey(-2.5rem);
		    background-color: '.esc_attr($medical_appointment_preloader_dot_1_color).';
		  }
		  50% {
		  	transform: translatey(2.5rem);
		    background-color: '.esc_attr($medical_appointment_preloader_dot_2_color).';
		  }
		}
	';
    wp_add_inline_style( 'medical-appointment-style',$medical_appointment_theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'medical_appointment_preloader' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/*dropdown page sanitization*/
function medical_appointment_sanitize_dropdown_pages( $page_id, $setting ) {
	$page_id = absint( $page_id );
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function medical_appointment_sanitize_checkbox( $input ) {
  // Boolean check
  return ( ( isset( $input ) && true == $input ) ? true : false );
}

function medical_appointment_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function medical_appointment_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

//SELECT
function medical_appointment_sanitize_select( $input, $setting ){
    $input = sanitize_key($input);
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

/*radio button sanitization*/
function medical_appointment_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function medical_appointment_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'medical_appointment_loop_columns');
if (!function_exists('medical_appointment_loop_columns')) {
	function medical_appointment_loop_columns() {
		$columns = get_theme_mod( 'medical_appointment_products_per_row', 3 );
		return $columns; // 3 products per row
	}
}


/**
 * Get CSS
 */

function medical_appointment_getpage_css($hook) {
	if ( 'appearance_page_medical-appointment-info' != $hook ) {
		return;
	}
	wp_enqueue_style( 'medical-appointment-demo-style', get_template_directory_uri() . '/assets/css/demo.css' );
}
add_action( 'admin_enqueue_scripts', 'medical_appointment_getpage_css' );

if ( ! defined( 'MEDICAL_APPOINTMENT_CONTACT_SUPPORT' ) ) {
define('MEDICAL_APPOINTMENT_CONTACT_SUPPORT',__('https://wordpress.org/support/theme/medical-appointment/','medical-appointment'));
}
if ( ! defined( 'MEDICAL_APPOINTMENT_REVIEW' ) ) {
define('MEDICAL_APPOINTMENT_REVIEW',__('https://wordpress.org/support/theme/medical-appointment/reviews/','medical-appointment'));
}
if ( ! defined( 'MEDICAL_APPOINTMENT_LIVE_DEMO' ) ) {
define('MEDICAL_APPOINTMENT_LIVE_DEMO',__('https://themagnifico.net/demo/medical-appointment/','medical-appointment'));
}
if ( ! defined( 'MEDICAL_APPOINTMENT_GET_PREMIUM_PRO' ) ) {
define('MEDICAL_APPOINTMENT_GET_PREMIUM_PRO',__('https://www.themagnifico.net/themes/medical-appointment-wordpress-theme/','medical-appointment'));
}
if ( ! defined( 'MEDICAL_APPOINTMENT_PRO_DOC' ) ) {
define('MEDICAL_APPOINTMENT_PRO_DOC',__('https://www.themagnifico.net/eard/wathiqa/medical-appointment-doc/','medical-appointment'));
}

add_action('admin_menu', 'medical_appointment_themepage');
function medical_appointment_themepage(){

	$medical_appointment_theme_test = wp_get_theme();

	$medical_appointment_theme_info = add_theme_page( __('Theme Options','medical-appointment'), __(' Theme Options','medical-appointment'), 'manage_options', 'medical-appointment-info.php', 'medical_appointment_info_page' );
}

function medical_appointment_info_page() {
	$medical_appointment_theme_user = wp_get_current_user();
	$medical_appointment_theme = wp_get_theme();
	?>
	<div class="wrap about-wrap medical-appointment-add-css">
		<div>
			<h1>
				<?php esc_html_e('Welcome To ','medical-appointment'); ?><?php echo esc_html( $medical_appointment_theme ); ?>
			</h1>
			<div class="feature-section three-col">
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php esc_html_e("Contact Support", "medical-appointment"); ?></h3>
						<p><?php esc_html_e("Thank you for trying Medical Appointment , feel free to contact us for any support regarding our theme.", "medical-appointment"); ?></p>
						<p><a target="_blank" href="<?php echo esc_url( MEDICAL_APPOINTMENT_CONTACT_SUPPORT ); ?>" class="button button-primary get">
							<?php esc_html_e("Contact Support", "medical-appointment"); ?>
						</a></p>
					</div>
				</div>
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php esc_html_e("Checkout Premium", "medical-appointment"); ?></h3>
						<p><?php esc_html_e("Our premium theme comes with extended features like demo content import , responsive layouts etc.", "medical-appointment"); ?></p>
						<p><a target="_blank" href="<?php echo esc_url( MEDICAL_APPOINTMENT_GET_PREMIUM_PRO ); ?>" class="button button-primary get">
							<?php esc_html_e("Get Premium", "medical-appointment"); ?>
						</a></p>
					</div>
				</div>
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php esc_html_e("Review", "medical-appointment"); ?></h3>
						<p><?php esc_html_e("If You love Medical Appointment theme then we would appreciate your review about our theme.", "medical-appointment"); ?></p>
						<p><a target="_blank" href="<?php echo esc_url( MEDICAL_APPOINTMENT_REVIEW ); ?>" class="button button-primary get">
							<?php esc_html_e("Review", "medical-appointment"); ?>
						</a></p>
					</div>
				</div>
			</div>
		</div>
		<hr>

		<h2><?php esc_html_e("Free Vs Premium","medical-appointment"); ?></h2>
		<div class="medical-appointment-button-container">
			<a target="_blank" href="<?php echo esc_url( MEDICAL_APPOINTMENT_PRO_DOC ); ?>" class="button button-primary get">
				<?php esc_html_e("Checkout Documentation", "medical-appointment"); ?>
			</a>
			<a target="_blank" href="<?php echo esc_url( MEDICAL_APPOINTMENT_LIVE_DEMO ); ?>" class="button button-primary get">
				<?php esc_html_e("View Theme Demo", "medical-appointment"); ?>
			</a>
		</div>


		<table class="wp-list-table widefat">
			<thead class="table-book">
				<tr>
					<th><strong><?php esc_html_e("Theme Feature", "medical-appointment"); ?></strong></th>
					<th><strong><?php esc_html_e("Basic Version", "medical-appointment"); ?></strong></th>
					<th><strong><?php esc_html_e("Premium Version", "medical-appointment"); ?></strong></th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php esc_html_e("Header Background Color", "medical-appointment"); ?></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Custom Navigation Logo Or Text", "medical-appointment"); ?></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Hide Logo Text", "medical-appointment"); ?></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>

				<tr>
					<td><?php esc_html_e("Premium Support", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Fully SEO Optimized", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Recent Posts Widget", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>

				<tr>
					<td><?php esc_html_e("Easy Google Fonts", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Pagespeed Plugin", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Only Show Header Image On Front Page", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Show Header Everywhere", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Custom Text On Header Image", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Full Width (Hide Sidebar)", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Only Show Upper Widgets On Front Page", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Replace Copyright Text", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Upper Widgets Colors", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Navigation Color", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Post/Page Color", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Blog Feed Color", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Footer Color", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Sidebar Color", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Background Color", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Importable Demo Content	", "medical-appointment"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
			</tbody>
		</table>
		<div class="medical-appointment-button-container">
			<a target="_blank" href="<?php echo esc_url( MEDICAL_APPOINTMENT_GET_PREMIUM_PRO ); ?>" class="button button-primary get">
				<?php esc_html_e("Go Premium", "medical-appointment"); ?>
			</a>
		</div>
	</div>
	<?php
}

//Admin Notice For Getstart
function medical_appointment_custom_admin_notice() {
    ?>
    <div class="notice notice-success is-dismissible" style="background: #f7f9f9; padding: 20px 10px; display: flex;">
    	<div class="tm-admin-image">
    		<img style="width: 100%;max-width: 320px;line-height: 40px;display: inline-block;vertical-align: top;border: 2px solid #ddd;border-radius: 4px;" src="<?php echo esc_url(get_stylesheet_directory_uri()) .'/screenshot.png'; ?>" />
    	</div>
    	<div class="tm-admin-content" style="padding-left: 30px; align-self: center">
    		<style type="text/css">
    			.blink_text {
					 animation-name: blinker;
					 animation-duration: 1s;
					 animation-timing-function: linear;
					 animation-iteration-count: infinite;
				}
				@keyframes blinker {  
					 0% { opacity: 1.0; }
					 50% { opacity: 0.0; }
					 100% { opacity: 1.0; }
				}
    		</style>
    		<h2 style="font-weight: 400;line-height: 1.3;color: #f15b26; margin: 0px;"><?php esc_html_e('Thank You For Choosing ', 'medical-appointment'); ?><span class="blink_text" style="color: #4cc2c0;"><?php echo wp_get_theme(); ?></span><h2>
    		<p style="color: #3c434a; font-weight: 400; margin-bottom: 30px;"><?php _e('Get Started With Theme By Clicking On Getting Started.', 'medical-appointment'); ?><p>
        	<a class="admin-notice-btn" style="font-size: 14px;font-weight: 400; min-height: 46px; line-height: 3.14285714; border-radius: 3px;padding: 15px 36px;background: #f15b26; color: #fff; text-decoration: none;" href="<?php echo esc_url( admin_url( 'themes.php?page=medical-appointment-info.php' )); ?>"><?php esc_html_e( 'Get started', 'medical-appointment' ) ?></a>
        	<a class="admin-notice-btn" style="margin-left: 10px;font-weight: 400; font-size: 14px; min-height: 46px; line-height: 3.14285714; border-radius: 3px;padding: 15px 36px;background: #f15b26; color: #fff; text-decoration: none;" target="_blank" href="<?php echo esc_url( MEDICAL_APPOINTMENT_PRO_DOC ); ?>"><?php esc_html_e( 'Documentation', 'medical-appointment' ) ?></a>
        	<span style="padding-top: 15px; display: inline-block; padding-left: 8px;">
        	<span class="dashicons dashicons-admin-links"></span>
        	<a class="admin-notice-btn"	 target="_blank" href="<?php echo esc_url( MEDICAL_APPOINTMENT_LIVE_DEMO ); ?>"><?php esc_html_e( 'View Demo', 'medical-appointment' ) ?></a>
        	</span>
    	</div>
    </div>
    <?php
}
add_action('admin_notices', 'medical_appointment_custom_admin_notice');



