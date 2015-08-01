<div class="post-format-indicator">
    <i class="fa fa-picture-o"> Gallery</i>
</div>
	<style>
        dl.gallery-item img {
            display: none;
        }
    </style>

    <!-- show the lightbox for other images if any gallery is created but not using the gallery post format -->
    <?php if ( get_post_gallery() ) : $gallery = get_post_gallery( get_the_ID(), false ); ?>
                
        <!-- slider -->   
        <div class="small-12 large-12 columns flexslider" id="slider">        
            <ul class="slides">
            
                <?php foreach( $gallery['src'] AS $src ) {
                    $img_id = magnificient_get_attachment_id_from_src($src);
                    $img_info = magnificient_get_attachment( $img_id );
                    $img_caption = $img_info['caption'];
                ?>
                
                <li>
                    <img src="<?php echo $src; ?>" class="my-custom-class" alt="<?php _e('Gallery image','magnificient'); ?>" />
                    
                    <?php if ($img_caption): ?><p class="flex-caption"><?php echo $img_caption; ?></p><?php endif; ?>
                
                </li>
                <?php } ?>
            </ul>
        </div>    
        <!-- slider -->

        <!-- lightbox -->    
        <div class="small-12 large-12 columns lightbox" id="lightbox-content">
            <div id="lightbox-container">
                <ul class="clearing-thumbs small-block-grid-4">
                
                <?php
                    foreach( $gallery['src'] AS $src ) {
                    $img_id = magnificient_get_attachment_id_from_src($src);
                    $img_info =  magnificient_get_attachment( $img_id );
                    $img_caption = $img_info['caption'];
                ?>
                    
                    <li id="image-gallery-items">
                        <a href="<?php echo $src; ?>" class="swipebox" title="<?php if ($img_caption){ echo $img_caption; } ?>">
                            <img src="<?php echo $src; ?>">
                        </a>
                    </li>   

                    <?php } ?>
                
                </ul>
            </div>
        </div>
        <!-- /lightbox -->

        <!-- lightbox gallery items masonry -->
        <script type="text/javascript">
            jQuery(function($) {

                imagesLoaded( document.querySelector('#lightbox-container'), function( instance ) {

                    $('#lightbox-container').masonry({
                      itemSelector: '#image-gallery-items',
                    });

                });

            });
        </script> 
        <!-- /lightbox gallery items masonry -->

    <?php endif;  ?>
<div class="entry-content gallery"><?php the_content(); ?></div>