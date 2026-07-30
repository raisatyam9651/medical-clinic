<?php
/**
 * Recommended plugins
 *
 * @package medical-elementor
 */

if ( ! function_exists( 'medical_elementor_recommended_plugins' ) ) :

    /**
     * Recommend plugins.
     *
     * @since 1.0.0
     */
    function medical_elementor_recommended_plugins() {

        $plugins = array(              
          
            array(
                'name'     => esc_html__( 'Testerwp Ecommerce Companion', 'medical-elementor' ),
                'slug'     => 'testerwp-ecommerce-companion',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'One Click Demo Import', 'medical-elementor' ),
                'slug'     => 'one-click-demo-import',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'Elementor Website Builder', 'medical-elementor' ),
                'slug'     => 'elementor',
                'required' => false,
            ),
             array(
                'name'     => esc_html__( 'ElementsKit Lite', 'medical-elementor' ),
                'slug'     => 'elementskit-lite',
                'required' => false,
            ),
             array(
                'name'     => esc_html__( 'WooCommerce', 'medical-elementor' ),
                'slug'     => 'woocommerce',
                'required' => false,
            ),
        );

        tgmpa( $plugins );

    }

endif;

add_action( 'tgmpa_register', 'medical_elementor_recommended_plugins' );