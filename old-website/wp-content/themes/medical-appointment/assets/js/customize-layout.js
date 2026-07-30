/*
** Scripts within the customizer controls window.
*/

(function( $ ) {
	wp.customize.bind( 'ready', function() {

	/*
	** Reusable Functions
	*/
		var optPrefix = '#customize-control-medical_appointment_options-';
		
		// Label
		function medical_appointment_customizer_label( id, title ) {

			// Site Identity

			if ( id === 'custom_logo' || id === 'site_icon' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-medical_appointment_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// General Setting

			if ( id === 'medical_appointment_scroll_hide' || id === 'medical_appointment_preloader_hide' || id === 'medical_appointment_scroll_top_position' || id === 'medical_appointment_products_per_row' || id === 'medical_appointment_woocommerce_product_sale')  {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-medical_appointment_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Colors

			if ( id === 'medical_appointment_theme_color' || id === 'background_color' || id === 'background_image' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-medical_appointment_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Header Image

			if ( id === 'header_image' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-medical_appointment_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			//  Header

			if ( id === 'medical_appointment_top_bar_email_text'  || id === 'medical_appointment_top_bar_phone_text' || id === 'medical_appointment_top_bar_location_text' || id === 'medical_appointment_top_bar_btn_text' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-medical_appointment_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			//  Social Icon

			if ( id === 'medical_appointment_facebook_icon' || id === 'medical_appointment_twitter_icon' || id === 'medical_appointment_intagram_icon' || id === 'medical_appointment_linkedin_icon' || id === 'medical_appointment_pintrest_icon' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-medical_appointment_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			//  Types Of Kitchen

			if ( id === 'medical_appointment_services_right_img' || id === 'medical_appointment_services1_icon' || id === 'medical_appointment_services2_icon' || id === 'medical_appointment_services3_icon' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-medical_appointment_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Slider

			if ( id === 'medical_appointment_top_slider_section_setting' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-medical_appointment_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Slider Porduct

			if ( id === 'medical_appointment_banner_left_product_category' || id === 'medical_appointment_banner_right_product_category' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-medical_appointment_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Footer

			if ( id === 'medical_appointment_footer_text_setting' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-medical_appointment_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Post Setting

			if ( id === 'medical_appointment_post_page_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-medical_appointment_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Single Post Setting

			if ( id === 'medical_appointment_single_post_thumb' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-medical_appointment_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Single Post Comment Setting

			if ( id === 'medical_appointment_single_post_comment_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-medical_appointment_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Page Setting

			if ( id === 'medical_appointment_single_page_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-medical_appointment_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}
			
		}


	/*
	** Tabs
	*/

	    // Site Identity
		medical_appointment_customizer_label( 'custom_logo', 'Logo Setup' );
		medical_appointment_customizer_label( 'site_icon', 'Favicon' );

		// General Setting
		medical_appointment_customizer_label( 'medical_appointment_scroll_hide', 'Scroll To Top' );
		medical_appointment_customizer_label( 'medical_appointment_preloader_hide', 'Preloader' );
		medical_appointment_customizer_label( 'medical_appointment_scroll_top_position', 'Scroll to top Position' );
		medical_appointment_customizer_label( 'medical_appointment_products_per_row', 'Woocommerce Setting' );
		medical_appointment_customizer_label( 'medical_appointment_woocommerce_product_sale', 'Woocommerce Product Sale Positions' );

		// Colors
		medical_appointment_customizer_label( 'medical_appointment_theme_color', 'Theme Color' );
		medical_appointment_customizer_label( 'background_color', 'Colors' );
		medical_appointment_customizer_label( 'background_image', 'Image' );

		//Header Image
		medical_appointment_customizer_label( 'header_image', 'Header Image' );

		// Top Bar
		medical_appointment_customizer_label( 'medical_appointment_top_bar_email_text', 'Email' );
		medical_appointment_customizer_label( 'medical_appointment_top_bar_phone_text', 'Phone' );
		medical_appointment_customizer_label( 'medical_appointment_top_bar_location_text', 'Location' );
		medical_appointment_customizer_label( 'medical_appointment_top_bar_btn_text', 'Button' );

		//social Icons
		medical_appointment_customizer_label( 'medical_appointment_facebook_icon', 'Facebook' );
		medical_appointment_customizer_label( 'medical_appointment_twitter_icon', 'Twitter' );
		medical_appointment_customizer_label( 'medical_appointment_intagram_icon', 'Intagram' );
		medical_appointment_customizer_label( 'medical_appointment_linkedin_icon', 'Linkedin' );
		medical_appointment_customizer_label( 'medical_appointment_pintrest_icon', 'Pinterest' );

		// Services
		medical_appointment_customizer_label( 'medical_appointment_services_right_img', 'Background Image' );
		medical_appointment_customizer_label( 'medical_appointment_services1_icon', 'Services 1' );
		medical_appointment_customizer_label( 'medical_appointment_services2_icon', 'Services 2' );
		medical_appointment_customizer_label( 'medical_appointment_services3_icon', 'Services 3' );

		//Slider
		medical_appointment_customizer_label( 'medical_appointment_top_slider_section_setting', 'Slider' );
		
		// Slider Porduct
		medical_appointment_customizer_label( 'medical_appointment_banner_left_product_category', 'Left Product Category' );
		medical_appointment_customizer_label( 'medical_appointment_banner_right_product_category', 'Right Product Category' );

		//Footer
		medical_appointment_customizer_label( 'medical_appointment_footer_text_setting', 'Footer' );

		//Single Post Setting
		medical_appointment_customizer_label( 'medical_appointment_single_post_thumb', 'Single Post Setting' );
		medical_appointment_customizer_label( 'medical_appointment_single_post_comment_title', 'Single Post Comment' );

		// Post Setting
		medical_appointment_customizer_label( 'medical_appointment_post_page_title', 'Post Setting' );

		// Page Setting
		medical_appointment_customizer_label( 'medical_appointment_single_page_title', 'Page Setting' );
	

	}); // wp.customize ready

})( jQuery );
