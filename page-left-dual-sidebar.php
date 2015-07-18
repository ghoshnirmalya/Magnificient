<?php
/**
Template Name: Left Dual Sidebar
 **/
?>

<?php get_header(); ?>

    </div>
    <!-- /row -->
</div>
<!-- /container -->

<!-- right-sidebar layout -->

<?php get_template_part( 'templates/single-page', 'cover' ); ?>

        <aside id="sidebar" class="small-12 large-3 columns">
            <?php get_sidebar(); ?>
        </aside><!-- /#sidebar -->
        <aside id="left-dual-sidebar" class="small-12 large-3 columns">
            <?php get_sidebar( 'second' ); ?>
        </aside><!-- /#sidebar -->

        <!-- single-page-content -->
        <div class="small-12 large-6 columns" id="single-page-content" role="main">
            <?php /* Start loop */ ?>
        
            <?php while (have_posts()) : the_post(); ?>
            
            <!-- article -->
            <article <?php post_class('single-card') ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h1 class="entry-title single-post-header-title"><?php the_title(); ?></h1>
                </header>
                    <!-- featured image -->
                    <?php get_template_part( 'templates/featured', 'image' ); ?>
                    <!-- /featured image -->
                <?php get_template_part( 'library/post', 'formats' ); ?>
                <div class="entry-content"><?php the_content(); ?></div>
                <div class="separator"></div>
                <div class="after-post-footer">
                    <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'magnificient'), 'after' => '</p></nav>' )); ?>
                    <?php edit_post_link(); ?>
                </div>
            </article>
            <!-- /article -->
            
            <!-- post navigation -->
            <div class="separator"></div>
            <?php get_template_part( 'templates/post', 'navigation' ); ?>
            <!-- /post navigation -->

            <!-- author -->
            <div class="separator"></div>
            <?php get_template_part( 'templates/author', 'bio' ); ?>
            <!-- /author -->
            
            <!-- related posts -->
            <div class="separator"></div>
            <?php get_template_part( 'templates/related', 'posts' ); ?>
            <!-- /related posts -->
        
            <?php endwhile; // End the loop ?>
        </div>
        <!-- /single-page-content -->
		
<?php get_footer(); ?>