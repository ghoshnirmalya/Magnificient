<?php
/* ------------------------------------------------------------------------- *
 * Enqueue all the stylesheets here
/* ------------------------------------------------------------------------- */

if( ! function_exists( 'magnificient_enqueue_style' ) ) {
    
	function magnificient_enqueue_style()
	{
        
        // normalize stylesheet
		wp_register_style( 'magnificient-normalize-stylesheet', get_stylesheet_directory_uri() . '/css/normalize.css', array(), '' );
        
		// foundation stylesheet
		wp_register_style( 'magnificient-foundation-stylesheet', get_stylesheet_directory_uri() . '/css/foundation.css', array(), '' );
        
        // wow stylesheet
		wp_register_style( 'magnificient-animate-stylesheet', get_stylesheet_directory_uri() . '/css/animate.css', array(), '' );

		// flexslider stylesheet
		wp_register_style( 'magnificient-flexslider-stylesheet', get_stylesheet_directory_uri() . '/css/flexslider.css', array(), '' );
        
        // swipebox stylesheet
		wp_register_style( 'magnificient-swipebox-stylesheet', get_stylesheet_directory_uri() . '/css/swipebox.css', array(), '' );
        
        // admin stylesheet
		wp_register_style( 'magnificient-admin-stylesheet', get_stylesheet_directory_uri() . '/css/admin.css', array(), '' );

		// Register the main style
		wp_register_style( 'magnificient-stylesheet', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );
		
        wp_enqueue_style( 'magnificient-normalize-stylesheet' );
		wp_enqueue_style( 'magnificient-foundation-stylesheet' );
        wp_enqueue_style( 'magnificient-animate-stylesheet' );
        wp_enqueue_style( 'magnificient-flexslider-stylesheet' );
        wp_enqueue_style( 'magnificient-swipebox-stylesheet' );
		wp_enqueue_style( 'magnificient-stylesheet' );

		if ( is_user_logged_in() ) {
            wp_enqueue_style( 'magnificient-admin-stylesheet' );
        }

	}
    
}

add_action( 'wp_enqueue_scripts', 'magnificient_enqueue_style' );

// adding the conditional wrapper around ie stylesheet
// source: http://code.garyjones.co.uk/ie-conditional-style-sheets-wordpress/
if( ! function_exists( 'magnificient_ie_conditional ' ) ) {
    
	function magnificient_ie_conditional( $tag, $handle ) {
		if ( 'magnificient-ie-only' == $handle )
			$tag = '<!--[if lt IE 9]>' . "\n" . $tag . '<![endif]-->' . "\n";
		return $tag;
	}
    
}

?>