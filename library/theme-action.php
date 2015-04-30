<?php

add_action( 'after_setup_theme', 'infi_setup' );

add_action('customize_register', 'infi_theme_customizer');
    
add_action('customize_register', 'infi_blog_favicon');
    
add_action('comment_form', 'infi_comment_button' );

?>