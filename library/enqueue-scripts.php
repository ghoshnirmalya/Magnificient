<?php

if ( ! function_exists( 'infi_scripts' ) ) :
	function infi_scripts() {

	// Enqueue Main Stylesheet
	wp_enqueue_style( 'Main Stylesheet', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
        
    // Enqueue Custom Stylesheet
	wp_enqueue_style( 'Custom Stylesheet', get_stylesheet_directory_uri() . '/assets/css/custom.css' );

	wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.0', true );

	// Enqueue all registered scripts
	wp_enqueue_script( 'bootstrap' );

	}

	add_action( 'wp_enqueue_scripts', 'infi_scripts' );
endif;

?>
