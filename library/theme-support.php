<?php

/* ------------------------------------------------------------------------- *
 *  This file adds the items that are supported by this theme.
/* ------------------------------------------------------------------------- */

/* ------------------------------------------------------------------------- *
 *  Add theme support
/* ------------------------------------------------------------------------- */

if( ! function_exists( 'magnificient_theme_support' ) ) {
    
    function magnificient_theme_support() {
        
        // Add language supports.
        load_theme_textdomain('magnificient', get_template_directory() . '/languages');

        // Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
        add_theme_support('post-thumbnails');
        
        // set_post_thumbnail_size(150, 150, false);
        add_image_size('magnificient-fd-lrg', 1024, 99999);
        add_image_size('magnificient-fd-med', 768, 99999);
        add_image_size('magnificient-fd-sm', 320, 9999);

        // rss things
        add_theme_support( 'automatic-feed-links' );
        
        // Declare WooCommerce support
		add_theme_support( 'woocommerce' );

        // Add post formats support. http://codex.wordpress.org/Post_Formats
        add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );

        // Add menu support. http://codex.wordpress.org/Function_Reference/register_nav_menus
        add_theme_support( 'menus' );
        register_nav_menus(array(
            'primary' => __( 'Primary Navigation', 'magnificient' ),
            'footer' => __( 'Footer Navigation', 'magnificient' )
        ));

        // Add custom background support
        add_theme_support( 'custom-background',
            array(
                'default-image' => '',  // background image default
                'default-color' => 'ededed', // background color default (dont add the #)
                'wp-head-callback' => '_custom_background_cb',
                'admin-head-callback' => '',
                'admin-preview-callback' => ''
            )
        );
        
        //Add custom width support
        if ( ! isset( $content_width ) ) {
            $content_width = 600;
        }
        
        //Add editor style
        $font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Lato:300,400,700' );
        add_editor_style( $font_url );
        
        //Title tag compatibility for older versions of WordPress
        add_theme_support( 'title-tag' );
    }
    
}

add_action('after_setup_theme', 'magnificient_theme_support'); /* end magnificient theme support */

?>