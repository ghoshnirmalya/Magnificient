<?php
/* ------------------------------------------------------------------------- *
 * Page to show the blog posts. This page is called from 'single.php'
/* ------------------------------------------------------------------------- */
?>
            <?php /* Start loop */ ?>
        
            <?php while (have_posts()) : the_post(); ?>

                <div class="single-page-meta-panel">
                    <header>
                        <?php magnificient_entry_meta(); ?>
                    </header>
                </div>
                <div class="separator"></div>
            
                <!-- article -->
                <article <?php post_class('single-card') ?> id="post-<?php the_ID(); ?>">
                    <?php
                        $format = get_post_format();
                        if ( has_post_format( 'audio' ) || has_post_format( 'gallery' ) || has_post_format( 'image' ) || has_post_format( 'video' ) || has_post_format( 'quote' ) || has_post_format( 'chat' ) || has_post_format( 'link' ) || has_post_format( 'status' ) || has_post_format( 'aside' )  ) {
                            get_template_part( 'library/post', 'formats' );
                        }
                        else {
                    ?>

                            <div class="entry-content"><?php the_content(); ?></div>

                    <?php
                        }
                    ?>

                    <div class="separator"></div>
                    <div class="after-post-footer">
                        <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'magnificient'), 'after' => '</p></nav>' )); ?>
                        <?php edit_post_link('Edit this Post'); ?>
                    </div>
                </article>
                <!-- /article -->
            
                <!-- post tags -->
                <?php if ( get_theme_mod('magnificient_post_tags') == 'yes' || get_theme_mod('magnificient_post_tags') == '' ) {  ?> 
                <div class="separator"></div>
                <?php get_template_part( 'templates/post', 'tags' ); ?>
                <?php } ?>
                <!-- /post tags -->
                
                <!-- post navigation -->
                <?php if ( get_theme_mod('magnificient_post_navigation') == 'yes' || get_theme_mod('magnificient_post_navigation') == '' ) {  ?> 
                <div class="separator"></div>
                <?php get_template_part( 'templates/post', 'navigation' ); ?>
                <?php } ?>
                <!-- /post navigation -->
                
                <!-- author -->
                <?php if ( get_theme_mod('magnificient_author_bio') == 'yes' || get_theme_mod('magnificient_author_bio') == '' ) {  ?> 
                <div class="separator"></div>
                <?php get_template_part( 'templates/author', 'bio' ); ?>
                <?php } ?>
                <!-- /author -->
                
                <!-- related posts -->
                <?php if ( get_theme_mod('magnificient_show_related_posts') == 'tags' || get_theme_mod('magnificient_show_related_posts') == 'category' || get_theme_mod('magnificient_show_related_posts') == '' ) { ?>
                <div class="separator"></div>
                <?php get_template_part( 'templates/related', 'posts' ); ?>
                <?php } ?>
                <!-- /related posts -->
                
                <!-- comments -->
                <div class="separator"></div>
                <?php comments_template(); ?>
                <!-- /comments -->
        
            <?php endwhile; // End the loop ?>