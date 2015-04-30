<?php

if ( ! function_exists( 'infi_theme_support' ) ) :
function infi_theme_support() {

	// Add menu support
	add_theme_support( 'menus' );
    
    //Featured thumbnails for posts
    add_theme_support( 'post-thumbnails' );
    
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );

	// RSS
	add_theme_support( 'automatic-feed-links' );
    
    //Custom background
    add_theme_support( 'custom-background', array(
            'default-color'          => '#83AAEE',
            'default-image'          => '',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => '',
            'admin-preview-callback' => ''
        ) );
    
    //Title tag compatibility for older versions of WP
    add_theme_support( 'title-tag' );

}

add_action( 'after_setup_theme', 'infi_theme_support' );
endif;
?>