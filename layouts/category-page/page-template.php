<?php
/* ------------------------------------------------------------------------- *
 * Page to show the author posts. This page is called from 'category.php'
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
            
            <div class="separator"></div>
            
            <?php /* Display navigation to next/previous pages when applicable */ ?>
            <?php if ( function_exists('magnificient_pagination') ) { magnificient_pagination(); } else if ( is_paged() ) { ?>
                <nav id="post-nav">
                    <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'magnificient' ) ); ?></div>
                    <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'magnificient' ) ); ?></div>
                </nav>
            <?php } ?>