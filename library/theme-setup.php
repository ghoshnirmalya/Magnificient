<?php
// Theme setup
if ( ! function_exists( 'infi_setup' ) ) :
    function infi_setup(){
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'infi'),
        ) );
        
        if ( ! isset( $content_width ) )
        $content_width = 600;

        
    }
endif;
?>