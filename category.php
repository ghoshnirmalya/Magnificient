<?php get_header(); ?>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                
                <h1 class="text-center page-header-dialogue"><b>All posts under "<?php the_category( ' ' ); ?>"</b></h1>
                
                <!-- the loop -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                    <!-- single post body -->
                    <div class="post" id="post-<?php the_ID(); ?> ">
                        
                        <?php 
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            } 
                        ?>
                        
                        <!-- the title of the post -->
                        <a href="<?php the_permalink(); ?>" class="post-title">
                            <?php the_title( '<h1>', '</h1>' ); ?>
                        </a>

                        <div class="post-meta">
                            
                            <!-- the avatr of author -->
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>

                            <!-- the link of the author -->
                            <?php the_author_posts_link(); ?> |

                            <!-- the date -->
                            <?php the_date(); ?> |

                            <!-- the category -->
                            <?php the_category( ', ' ); ?>
                        
                        </div>

                        <div class="post-excerpt">
                            
                            <!--the excerpt of the post -->
                            <?php the_excerpt(); ?> 
                        
                        </div>
                                                
                    </div>
                    <!-- /single post body -->
                
                    <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                    <!-- /the loop -->

            </div>
        </div>
    </div>
<?php get_footer(); ?>