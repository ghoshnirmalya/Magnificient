<!-- featured-image -->
<div class="featured-image-cover">
<?php
    if ( has_post_thumbnail() ) { 
    	$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		$thumb_url = $thumb_url_array[0];
?>
		<style type="text/css">	
			.featured-image-cover {
				background-image: url('<?php echo $thumb_url; ?>');
			}
		</style>
    <?php
    } else { ?>
        <style type="text/css">	
			.featured-image-cover {
				background: rgba(174, 211, 211, 0.6);
			}
		</style>
	<?php
    }
?>

	<div class="featured-image-overlay">
	<div class="featured-image-post-title">
        <h1 class="entry-title single-post-header-title"><?php echo single_tag_title( '', true ); ?></h1>
        
    </div>
    </div>
</div>
<!-- /featured-image -->

