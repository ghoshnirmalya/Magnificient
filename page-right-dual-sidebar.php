<?php
/**
Template Name: Right Dual Sidebar
 **/
?>

<?php get_header(); ?>

        <!-- single-page-content -->
        <div class="small-12 large-6 columns" id="single-page-content" role="main">
            <?php /* Start loop */ ?>
        
            <?php while (have_posts()) : the_post(); ?>
            
            <!-- article -->
            <article <?php post_class('single-card') ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h1 class="entry-title single-post-header-title"><?php the_title(); ?></h1>
                    <?php foundationbuddy_entry_meta(); ?>
                </header>
                    <!-- featured image -->
                    <?php get_template_part( 'templates/featured', 'image' ); ?>
                    <!-- /featured image -->
                <?php get_template_part( 'library/post', 'formats' ); ?>
                <div class="entry-content"><?php the_content(); ?></div>
                <div class="separator"></div>
                <div class="after-post-footer">
                    <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'foundationbuddy'), 'after' => '</p></nav>' )); ?>
                    <p class="entry-tags"><?php the_tags(); ?></p>
                    <?php edit_post_link('Edit this Post'); ?>
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
            
            
            <!-- comments -->
            <div class="separator"></div>
            <?php comments_template(); ?>
            <!-- /comments -->
        
            <?php endwhile; // End the loop ?>
        </div>
        <!-- /single-page-content -->

        <aside id="sidebar" class="small-12 large-3 columns">
            <?php get_sidebar(); ?>
        </aside><!-- /#sidebar -->    
        <aside id="sidebar" class="small-12 large-3 columns">
            <?php get_sidebar( 'second' ); ?>
        </aside><!-- /#sidebar -->
		
<?php get_footer(); ?>