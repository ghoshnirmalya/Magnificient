<?php

    function infi_theme_customizer( $wp_customize ) {

    // Logo upload
        $wp_customize->add_section( 'infi_logo_section' , array(
            'title'       => __( 'Logo', 'infi' ),
            'priority'    => 30,
            'description' => 'Upload a logo to replace the default site name and description in the header',
        ) );
        $wp_customize->add_setting( 'infi_logo',
        array(
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'infi_logo', array(
            'label'        => __( 'Logo', 'infi' ),
            'section'    => 'infi_logo_section',
            'settings'   => 'infi_logo',
        ) ) );

    }

    // Add A Favicon
    function infi_blog_favicon( $wp_customize) {
         $wp_customize->add_section( 'infi_favicon_section' , array(
            'title'       => __( 'Favicon', 'infi' ),
            'priority'    => 30,
            'description' => 'Upload a favicon for your website',
        ) );
        $wp_customize->add_setting( 'infi_favicon',
        array(
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'infi_favicon', array(
            'label'        => __( 'Favicon', 'infi' ),
            'section'    => 'infi_favicon_section',
            'settings'   => 'infi_favicon',
        ) ) );
    }

?>