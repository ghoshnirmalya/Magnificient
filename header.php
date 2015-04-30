<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>  
    <head>
        <meta charset="utf-8">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- stylesheet -->
        <link href="<?php echo get_stylesheet_uri() ?>" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <link rel="Shortcut Icon" type="image/x-icon" href='<?php echo esc_url( get_theme_mod( 'infi_favicon' ) ); ?>'>

        <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(' '); ?>>
      <?php if (has_nav_menu('primary')): ?>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="row clearfix">
                    <div class="container">
                        <?php
                            $args = array(
                                'theme_location' => 'primary',
                                'depth'		 => 0,
                                'container'	 => false,
                                'menu_class'	 => 'nav navbar-nav',
                                'walker'	 => new BootstrapNavMenuWalker()
                            );
                            wp_nav_menu($args);
                        ?>
                    </div>
                </div>

            </div>
        </nav>
        <?php endif; ?>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="logo-wrap">
                        <?php if ( get_theme_mod( 'infi_logo' ) ) : ?>
                        <div class='logo'>
                            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'infi_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                        </div>
                        <?php else : ?>
                        <hgroup>
                            <h1 class='site-title text-center'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                            <h2 class='site-description text-center'><?php bloginfo( 'description' ); ?></h2>
                        </hgroup>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">