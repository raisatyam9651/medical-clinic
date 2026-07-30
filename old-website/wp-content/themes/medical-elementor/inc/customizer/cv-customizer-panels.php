<?php
/**
 * Medical Elementor manage the Customizer panels.
 *
 * @subpackage medical-elementor
 * @since 1.0 
 */

/**
 * General Settings Panel
 */
Kirki::add_panel( 'medical_elementor_general_panel', array(
	'priority' => 10,
	'title'    => __( 'General Settings', 'medical-elementor' ),
) );

/**
 * Medical Elementor Options
 */
Kirki::add_panel( 'medical_elementor_options_panel', array(
	'priority' => 20,
	'title'    => __( 'Medical Elementor Theme Options', 'medical-elementor' ),
) );