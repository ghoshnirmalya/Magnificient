<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->

<!-- head -->
<head>
    
    <!-- meta -->
	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Feed -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo esc_url( home_url() ); ?>/feed/">

<?php wp_head(); ?>

</head>
<!-- /head -->

<!-- body -->
<body <?php body_class('antialiased'); ?>>
 
    <!-- header -->
    <header class="contain-to-grid">

        <!-- primary-menu -->
        <nav class="top-bar primary-menu" data-topbar>

            <!-- title-area -->
            <ul class="title-area">
                <li class="name"></li><!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span><i class="fa fa-arrow-down"></i> <?php _e('Menu','foundationbuddy'); ?></span></a></li>
            </ul>
            <!-- /title-area -->

            <!-- top-bar-section -->
            <section class="top-bar-section">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'depth' => 0, 'items_wrap' => '<ul class="left">%3$s</ul>', 'fallback_cb' => 'foundationbuddy_menu_fallback', 'walker' => new foundationbuddy_walker( array( 'in_top_bar' => true, 'item_type' => 'li', 'menu_type' => 'main-menu' ) ), ) ); ?>
                
                <!-- search bar -->
                <ul class="right" >
                    <li class="has-dropdown">
                        <a href="#"><i class="fa fa-search"></i></a>
                        <ul class="dropdown">
                            <li>
                                <div class="search-expand">
                                    <div class="search-expand-inner">
                                        <?php get_search_form(); ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul> 
                <!-- /search bar -->
                                
            </section>
            <!-- /top-bar-section -->

        </nav>
        <!-- primary-menu -->

        <div class="row">
            <div class="large-6 columns">
                <!-- logo-container-section -->
                <section class="logo-container-section">

                    <!-- logo-container -->
                    <?php get_template_part( 'templates/logo', 'container' ); ?>
                    <!-- /logo-container -->

                </section>
                <!-- /logo-container-section -->
            </div>
        </div>

        <!-- secondary-menu -->
        <nav class="top-bar secondary-menu" data-topbar role="navigation">

            <!-- title-area -->
            <ul class="title-area">
                <li class="name"></li><!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span><i class="fa fa-arrow-down"></i> <?php _e('Menu','foundationbuddy'); ?></span></a></li>
            </ul>
            <!-- /title-area -->
        
            <!-- top-bar-section -->
            <section class="top-bar-section secondary-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'additional', 'container' => false, 'depth' => 0, 'items_wrap' => '<ul class="left">%3$s</ul>', 'fallback_cb' => 'foundationbuddy_menu_fallback', 'walker' => new foundationbuddy_walker( array( 'in_top_bar' => true, 'item_type' => 'li', 'menu_type' => 'main-menu' ) ), ) ); ?>
            </section>
            <!-- /top-bar-section -->

        </nav>
        <!-- /secondary-menu -->

    </header>
    <!-- header -->
    
    <!-- Start the main container -->
    <!-- container -->
    <div class="container" role="document">
        <div class="row">