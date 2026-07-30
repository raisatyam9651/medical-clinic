<?php
/**
 * Medical Elementor manage the Customizer options of general panel.
 *
 * @subpackage medical-elementor
 * @since 1.0 
 */
Kirki::add_field(
	'medical_elementor_config', array(
		'type'        => 'checkbox',
		'settings'    => 'medical_elementor_home_posts',
		'label'       => esc_attr__( 'Checked to hide latest posts in homepage.', 'medical-elementor' ),
		'section'     => 'static_front_page',
		'default'     => true,
	)
);
