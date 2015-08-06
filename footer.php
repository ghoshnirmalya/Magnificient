<?php
/**
 * The template for displaying the footer.
 **/
?>
                </div><!-- Row End -->
            </div><!-- Container End -->
            <!-- /container -->

        </section>

        <a class="exit-off-canvas"></a>

    </div>
</div>

<!-- footer-menu -->
<nav class="top-bar footer-menu" data-topbar>
	    
    <!-- title-area -->
    <ul class="title-area">
        <li class="name"></li><!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span><i class="fa fa-arrow-down"></i> <?php _e('Menu','magnificient'); ?></span></a></li>
    </ul>
    <!-- /title-area -->
	
    <?php if ( has_nav_menu('footer') ): ?>    
    
        <!-- top-bar-section -->
        <section class="top-bar-section footer-menu">
	       <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'depth' => 0, 'items_wrap' => '<ul class="left">%3$s</ul>', 'fallback_cb' => 'magnificient_menu_fallback', 'walker' => new magnificient_walker( array( 'in_top_bar' => true, 'item_type' => 'li', 'menu_type' => 'main-menu' ) ), ) ); ?>
        </section>
        <!-- /top-bar-section -->

    <?php endif; ?>
        
</nav>
<!-- /footer-menu -->

<!-- footer-links -->
<footer class="full-width footer-links" role="contentinfo">
    
    <!-- back to top -->
    <a href="#0" class="back-to-top">Top</a>
    <!-- /back to top -->

    <!-- footer-widget -->
    <div class="full-width footer-widget">
        <div class="row">
            <div class="large-3 columns">
                <?php dynamic_sidebar("Footer-1"); ?>
            </div>
            <div class="large-3 columns">
                <?php dynamic_sidebar("Footer-2"); ?>
            </div>
            <div class="large-3 columns">
                <?php dynamic_sidebar("Footer-3"); ?>
            </div>
            <div class="large-3 columns">
                <?php dynamic_sidebar("Footer-4"); ?>
            </div>
        </div>
    </div>
    <!-- /footer-widget -->
    
</footer>
<!-- /footer-links -->

<footer class="full-width copyright" role="contentinfo">
    <!-- love-magnificient -->
	<div class="row love-magnificient">
		<div class="large-6 columns">
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'> &copy; <?php bloginfo( 'name' ); ?></a>
		</div>
        
        <div class="large-6 columns copyright-right">
            <p><?php _e('Powered by','magnificient'); ?> <a href="http://wordpress.org" rel="nofollow"> WordPress</a></p>
		</div>
        
	</div>
    <!-- /love-magnificient -->
</footer>
<a class="exit-off-canvas"></a>

    </div>
</div>

<?php wp_footer(); ?>
	
</body>
</html>