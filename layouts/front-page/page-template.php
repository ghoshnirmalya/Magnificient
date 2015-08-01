<?php
/* ------------------------------------------------------------------------- *
 * Page to show the index posts. This page is called from 'index.php'
/* ------------------------------------------------------------------------- */
?>
            <?php if ( have_posts() ) : ?>
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; // end have_posts() check ?>

            <!-- pagination -->
            <?php /* Display navigation to next/previous pages when applicable */ ?>

            <div class="separator"></div>
            
            <?php if ( function_exists('magnificient_pagination') ) { magnificient_pagination(); } else if ( is_paged() ) { ?>

                <nav id="post-nav">
                    <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'magnificient' ) ); ?></div>
                    <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'magnificient' ) ); ?></div>
                </nav>

            <?php } ?>
            <!-- /pagination -->