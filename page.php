<?php get_header(); ?>
    <div class="container">
        <div class="row clearfix">
            <?php if ( ! is_dynamic_sidebar() ) : ?>
                
                <div class="col-md-12 column">
            
            <?php 
                endif; 
                if ( is_dynamic_sidebar() ) :        
            ?>
                
                    <div class="col-md-8 column">
                
            <?php
                endif;
            ?>
                <!-- the loop -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                    <!-- single post body -->
                    <div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        
                        <!-- the title of the post -->
                        <?php the_title( '<h1 class="post-title text-center">', '</h1>' ); ?>

                        <div class="post-meta text-center">
                            
                            <!-- the avatr of author -->
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>

                            <!-- the link of the author -->
                            <?php the_author_posts_link(); ?> |

                            <!-- the date -->
                            <?php the_time( get_option( 'date_format' ) ); ?> |

                            <!-- the category -->
                            <?php the_category( ', ' ); ?>
                        
                        </div>

                        <div class="post-body">
                            
                            <!--the body of the post -->
                            <?php the_content(); ?> 
                        
                        </div>
                        
                        <div class="post-tags">
                        
                            <!-- the tags for the post -->
                            <?php the_tags(); ?>
                            
                        </div>
                                                
                    </div>
                    <!-- /single post body -->
                
                    <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                    <!-- /the loop -->
                
                    <!-- comments template -->
                    <?php comments_template(); ?> 
                    
                    <!-- link other posts -->
                    <?php wp_link_pages(); ?>

            </div>
            <div class="col-md-4 column sidebar">
                <?php get_sidebar(); ?>
            </div>
            
        </div>
    </div>
<?php get_footer(); ?>