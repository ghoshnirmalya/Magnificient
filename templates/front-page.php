<?php
/**
 * The template for displaying posts in the index page when the masonry option for the front-page is set to 'yes'.
 **/
?>

    </div>
    <!-- /row -->
</div>
<!-- /container -->

<!-- header-image -->
    <?php get_template_part( 'templates/logo', 'container' ); ?>
<!-- /header-image -->

<!-- container -->
    <div class="container" role="document">
        <div class="row">
            
            <!-- content -->
            <div class="small-12 large-12 columns" id="content" role="main">

                <!-- container -->
                <div id="container">
                    <?php if ( have_posts() ) : ?>
                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <!-- the number of columns for the front page -->
                            <!-- three-column layout -->
                            <div id="front-page-post-container">
                                <?php get_template_part( 'content', get_post_format() ); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php get_template_part( 'content', 'none' ); ?>
                    <?php endif; // end have_posts() check ?>   
                </div>
                <!-- /container -->
                <div class="separator"></div>
                <!-- pagination -->
                <?php /* Display navigation to next/previous pages when applicable */ ?>
                <?php if ( function_exists('magnificient_pagination') ) { magnificient_pagination(); } else if ( is_paged() ) { ?>
                    <nav id="post-nav">
                        <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'magnificient' ) ); ?></div>
                        <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'magnificient' ) ); ?></div>
                    </nav>
                <?php } ?>
                <!-- /pagination -->

            </div>
            <!-- /content -->