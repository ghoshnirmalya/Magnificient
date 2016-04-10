<?php
/**
 * The template for displaying woocommerce posts having the right-sidebar layout.
 **/
?>
        <!-- single-page-content -->
        <div class="small-12 large-8 columns" id="single-page-content" role="main">
            <div class="row-woocommerce">
                <article id="woocommerce">

                    <?php /* Start loop */ ?>

                    <?php while ( woocommerce_content() ) : the_post(); ?>
                        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                            <header>
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </header>
                            <?php do_action( 'magnificient_page_before_entry_content' ); ?>
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>
                            <footer>
                                <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'magnificient' ), 'after' => '</p></nav>' ) ); ?>
                                <p><?php the_tags(); ?></p>
                            </footer>
                            <?php do_action( 'magnificient_page_before_comments' ); ?>
                            <?php comments_template(); ?>
                            <?php do_action( 'magnificient_page_after_comments' ); ?>
                        </article>
                    <?php endwhile;?>

                </article>
            </div>
        </div>
        <!-- /single-page-content -->
