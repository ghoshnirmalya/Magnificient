<?php 
/* ------------------------------------------------------------------------- *
 *  Enqueue all the custom fonts here
/* ------------------------------------------------------------------------- */

if( ! function_exists( 'foundationbuddy_fonts' ) ) {
    
    function foundationbuddy_fonts() {
        wp_register_style('foundationbuddy-open-sans-font', 'http://fonts.googleapis.com/css?family=Open+Sans:600italic,700italic,800italic,400,300,700');
        wp_register_style('foundationbuddy-noto-serif-font', 'http://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic,700italic');
        wp_register_style( 'foundationbuddy-font-awesome-stylesheet', get_stylesheet_directory_uri() . '/css/font-awesome.css', array(), '' );
        
        wp_enqueue_style( 'foundationbuddy-open-sans-font');
        wp_enqueue_style( 'foundationbuddy-noto-serif-font');
        wp_enqueue_style( 'foundationbuddy-font-awesome-stylesheet');
    }
    
}

add_action('wp_print_styles', 'foundationbuddy_fonts');

?>