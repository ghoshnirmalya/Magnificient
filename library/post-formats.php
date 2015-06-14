<?php $meta = get_post_custom($post->ID); ?>

<!-- audio post format -->
<?php if ( has_post_format( 'audio' ) ): // Audio ?>
	
<?php endif; ?>
<!-- /audio post format -->

<!-- gallery post format -->
<?php if ( has_post_format( 'gallery' ) ):  // Gallery ?>

    <!-- show a slider if the post format selected is 'Gallery' -->
    <?php $images = foundationbuddy_post_images(); if ( !empty($images) ): ?>
        
        <!-- slider -->
        
            <!-- orbit-container -->
            <div class="orbit-container">
                <div class="small-12 large-12 columns slider" id="slider-content-<?php the_ID(); ?>">
                    <ul class="slides" data-orbit>
                        <?php foreach ( $images as $image ): ?>
                            <li>
                                <?php $imageid = wp_get_attachment_image_src($image->ID,'large'); ?>
                                <img src="<?php echo $imageid[0]; ?>" alt="<?php echo $image->post_title; ?>">

                                <?php if ( $image->post_excerpt ): ?>
                                    <div class="orbit-caption"><?php echo $image->post_excerpt; ?></div>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!-- /orbit-container -->
            
        <!-- /slider -->

        <!-- lightbox -->
            
            <div class="small-12 large-12 columns lightbox" id="lightbox-content">
                <div class="js-masonry" data-masonry-options='{ "columnWidth": 0, "itemSelector": "#masonry-image-gallery-items" }'>
                    <ul class="clearing-thumbs small-block-grid-4">
                    <!-- Lightbox is known to have issues with using the masonry plugin. If you still want to use it, uncomment the previous line and comment the line above this comment.
                    <ul class="clearing-thumbs small-block-grid-4" data-clearing> -->
                        <?php foreach ( $images as $image ): ?>
                            <?php $imageid = wp_get_attachment_image_src($image->ID,'large'); ?>
                            <li id="masonry-image-gallery-items">
                                <a href="<?php echo $imageid[0]; ?>">
                                    <img <?php if ( $image->post_excerpt ): ?>data-caption="<?php echo $image->post_excerpt; ?>" <?php endif; ?> src="<?php echo $imageid[0]; ?>">
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
    
        <!-- /lightbox -->

    <?php endif; ?>

    <!-- show the lightbox for other images if any gallery is created but not using the gallery post format -->
    <?php if ( get_post_gallery() ) : $gallery = get_post_gallery( get_the_ID(), false );
        
        //first show a slider for all the images and then show a masonry layout all images
        //<!-- slider -->
        
            echo '<div class="small-12 large-12 columns slider" id="slider-content"> ';        
            echo "<ul data-orbit>";
            foreach( $gallery['src'] AS $src ) {
                $img_id = foundationbuddy_get_attachment_id_from_src($src);
                $img_info =  foundationbuddy_get_attachment( $img_id );
    ?>        
                <li>
                    <img src="<?php echo $src; ?>" class="my-custom-class" alt="<?php _e('Gallery image','foundationbuddy'); ?>" />
                    <?php if ($img_info['caption']): ?>
                        <div class="orbit-caption">
                            <?php echo $img_info['caption']; ?>
                        </div>
                    <?php endif; ?>
                </li>
    <?php
            }
            echo "</ul>";
            echo "</div>";
            
    ?>
        <!-- slider -->

    <!-- lightbox -->

        <?php
                echo '<div class="small-12 large-12 columns lightbox" id="lightbox-content"> ';
        ?>
                <div class="js-masonry" data-masonry-options='{ "columnWidth": 0, "itemSelector": "#masonry-image-gallery-items" }'>
        <?php
            echo '<ul class="clearing-thumbs small-block-grid-4">';
            /* Lightbox is known to have issues with using the masonry plugin. If you still want to use it, uncomment the previous line and comment the line above this comment. */
            //echo '<ul class="clearing-thumbs small-block-grid-4" data-clearing>';


            foreach( $gallery['src'] AS $src ) {
                $img_id = foundationbuddy_get_attachment_id_from_src($src);
                $img_info =  foundationbuddy_get_attachment( $img_id );
        ?>
                    <li id="masonry-image-gallery-items"><a href="<?php echo $src; ?>"><img data-caption="<?php if ($img_info['caption']){ echo $img_info['caption']; } ?>" src="<?php echo $src; ?>"></a></li>   

                    <?php
                }
            echo "</ul>";
            echo "</div></div>";

        //<!-- lightbox -->
    endif;  ?>
    
<?php endif; ?>
<!-- /gallery post format -->

<!-- image post format -->
<?php if ( has_post_format( 'image' ) ):// Image ?>

	<div class="post-format-image">
		<figure class="figure">
			<?php if ( has_post_thumbnail() ) {	
				the_post_thumbnail('thumb-large'); 
				$caption = get_post(get_post_thumbnail_id())->post_excerpt;
				if ( isset($caption) && $caption ) echo '<figcaption>'.$caption.'</figcaption>';
			} ?>
		</figure>
	</div>
	
<?php endif; ?>
<!-- /images post format -->

<!-- video post format -->
<?php if ( has_post_format( 'video' ) ): // Video ?>
	
<?php endif; ?>
<!-- /video post format -->

<!-- quote post format -->
<?php if ( has_post_format( 'quote' ) ): // Quote ?>

<?php endif; ?>
<!-- /quote post format -->

<!-- chat post format -->
<?php if ( has_post_format( 'chat' ) ): // Chat ?>
	
<?php endif; ?>
<!-- /chat post format -->

<!-- link post format -->
<?php if ( has_post_format( 'link' ) ): // Link ?>
	
<?php endif; ?>
<!-- /link post format -->

<!-- status post format -->
<?php if ( has_post_format( 'status' ) ): // Link ?>
	
<?php endif; ?>
<!-- /status post format -->