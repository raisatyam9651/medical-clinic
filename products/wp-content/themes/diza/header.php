<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Diza
 * @since Diza 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="//gmpg.org/xfn/11" />
	<?php wp_head(); ?> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<meta name="google-site-verification" content="jg1TcTr01uo6oPXV5ca-R0rh1fpOEcAqHJFeEWPqK-I" />
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper-container" class="<?php echo apply_filters( 'diza_class_wrapper_container', 'wrapper-container' ); ?>">
 
	<?php 
		/**
		* diza_before_theme_header hook
		*
		* @hooked diza_tbay_offcanvas_smart_menu - 10
		* @hooked diza_tbay_the_topbar_mobile - 20
		* @hooked diza_tbay_custom_form_login - 30
		* @hooked diza_tbay_footer_mobile - 40
		*/
		do_action('diza_before_theme_header');
	?>

	<?php get_template_part( 'page-templates/header' ); ?>

	<?php 
		/**
		* diza_after_theme_header hook
		*/
		do_action('diza_after_theme_header');
	?>
	
	<div id="tbay-main-content">