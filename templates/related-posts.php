
    
    <!-- sort related posts by category -->
    
        <?php
            // get other posts from this category only as related posts //
            $backup = $post;  // backup the current object
            $categories = get_the_category($post->ID);
            if ($categories) {
                $category_ids = array();
                foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                $args = array ( 'category__in' => $category_ids, 'post__not_in' => array($post->ID), 'showposts'=>3, 'ignore_sticky_posts'=>1 );
                $my_query = new wp_query( $args );
        ?>
        <?php if( $my_query->have_posts() ) { ?>
                <!-- if related posts exists then only show the tab -->
                <section id="relatedposts">
                    <h3>Related posts</h3>
                    <div class="row relatedpostpadding category">
        <?php } ?>
        <?php
                while( $my_query->have_posts() ) {
                    $my_query->the_post();
        ?>
        <div class="large-4 columns relatedpostssingle">
            <a rel="external" href="<?php the_permalink()?>">
                <div class="related-post-image">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } else { ?>
                    <img src="<?php echo get_template_directory_uri() . '/images/defaults/default-background.jpg' ?>" alt="<?php _e('Default Fallback','magnificient'); ?>" class="img-responsive"/>
                    <?php } ?>
                </div>
                <br />
                <?php the_title(); ?>
            </a>
        </div>
                        
        <?php 
                }
        ?>
        <?php if( $my_query->have_posts() ) { ?>
            <!-- /if related posts exists then only show the tab -->
                    </div>
                </section>
        <?php } ?>
                    
        <?php
            }
            $post = $backup;
            wp_reset_query();
        ?>   
    
    <!-- /sort related posts by category -->
    