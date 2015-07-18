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
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo esc_url( home_url('/') ); ?>/feed/">

<?php wp_head(); ?>

</head>
<!-- /head -->

<!-- body -->
<body <?php body_class('antialiased'); ?>>

    <div class="off-canvas-wrap " data-offcanvas>
        <div class="inner-wrap">
            <nav class="tab-bar">

              <?php if ( has_nav_menu('primary') ): ?>
              
                <section class="left-small">
                  <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
                </section>
              
              <?php endif; ?>
              
              <section class="middle tab-bar-section">
                <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?><span class="muted"> <?php bloginfo( 'description' ); ?> </span></a></h1>
              </section>

            </nav>

            <?php if ( has_nav_menu('primary') ): ?>

              <aside class="left-off-canvas-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'depth' => 0, 'items_wrap' => '<ul class="off-canvas-list">%3$s</ul>', 'fallback_cb' => 'magnificient_menu_fallback', 'walker' => new magnificient_offcanvas_walker( array( 'in_top_bar' => true, 'item_type' => 'li', 'menu_type' => 'main-menu' ) ), ) ); ?>
              </aside>

            <?php endif; ?>

            <section class="main-section">
                <!-- content goes here -->
                <!-- Start the main container -->
                <!-- container -->
                <div class="container" role="document">
                    <div class="row">     