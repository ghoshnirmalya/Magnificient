<?php get_header(); ?>
<?php if ( get_header_image() ) : ?>
<div class="row header-image-row">
    <div class="col-md-12 column">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
        </a>
    </div>
</div>
<?php endif; // End header image check. ?>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                
                <!-- the loop -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                    <!-- single post body -->
                    <div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        
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