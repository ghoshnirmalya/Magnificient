<?php
/* ------------------------------------------------------------------------- *
 * Page to show the index posts. This page is called from 'index.php'
/* ------------------------------------------------------------------------- */
?>
            <div class="row-woocommerce">
                <article id="woocommerce">

                    <?php /* Start loop */ ?>


                    <?php while ( woocommerce_content() ) : the_post(); ?>

                        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                            <header>
                                <h2 class="entry-title single-post-header-title"><?php the_title(); ?></h2>
                            </header>

                            <?php do_action( 'magnificient_page_before_entry_content' ); ?>

                            <div class="entry-content">

                                <?php the_content(); ?>

                            </div>
                            <footer>

                                <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'magnificient' ), 'after' => '</p></nav>' ) ); ?>

                                <p><?php the_tags(); ?></p>
                            </footer>
                        </article>

                    <?php endwhile;?>

                </article>
            </div>