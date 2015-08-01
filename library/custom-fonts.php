<?php 
/* ------------------------------------------------------------------------- *
 *  Enqueue all the custom fonts here
/* ------------------------------------------------------------------------- */

if( ! function_exists( 'magnificient_fonts' ) ) {
    
    function magnificient_fonts() {
        wp_register_style( 'magnificient-font-awesome-stylesheet', get_stylesheet_directory_uri() . '/css/font-awesome.css', array(), '' );
        
        wp_enqueue_style('magnificient-open-sans-font', '//fonts.googleapis.com/css?family=Open+Sans:600italic,700italic,800italic,400,300,700');
        wp_enqueue_style( 'magnificient-noto-serif-font', '//fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic,700italic');
        wp_enqueue_style( 'magnificient-font-awesome-stylesheet');
    }
    
}

add_action('wp_print_styles', 'magnificient_fonts');

?>