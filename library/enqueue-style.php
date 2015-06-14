<?php
/* ------------------------------------------------------------------------- *
 * Enqueue all the stylesheets here
/* ------------------------------------------------------------------------- */

if( ! function_exists( 'foundationbuddy_enqueue_style' ) ) {
    
	function foundationbuddy_enqueue_style()
	{
        
        // normalize stylesheet
		wp_register_style( 'foundationbuddy-normalize-stylesheet', get_stylesheet_directory_uri() . '/css/normalize.css', array(), '' );
        
		// foundation stylesheet
		wp_register_style( 'foundationbuddy-foundation-stylesheet', get_stylesheet_directory_uri() . '/css/foundation.css', array(), '' );
        
        // wow stylesheet
		wp_register_style( 'foundationbuddy-animate-stylesheet', get_stylesheet_directory_uri() . '/css/animate.css', array(), '' );

		// Register the main style
		wp_register_style( 'foundationbuddy-stylesheet', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );
		
        wp_enqueue_style( 'foundationbuddy-normalize-stylesheet' );
		wp_enqueue_style( 'foundationbuddy-foundation-stylesheet' );
        wp_enqueue_style( 'foundationbuddy-animate-stylesheet' );
		wp_enqueue_style( 'foundationbuddy-stylesheet' );		
	}
    
}

add_action( 'wp_enqueue_scripts', 'foundationbuddy_enqueue_style' );

?>