<?php
//Adding custom fonts
if ( ! function_exists( 'infi_custom_fonts' ) ) :
    function infi_custom_fonts() {

        wp_register_style('infi-varela-font', 'http://fonts.googleapis.com/css?family=Varela+Round');
        wp_register_style('infi-noto-serif-font', 'http://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic,700italic');
        
        wp_enqueue_style( 'infi-varela-font');
        wp_enqueue_style( 'infi-noto-serif-font');
    
    }

    add_action('wp_print_styles', 'infi_custom_fonts');
endif;
?>