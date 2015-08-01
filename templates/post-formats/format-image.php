<div class="post-format-indicator">
    <i class="fa fa-file-image-o"> Image</i>
</div>
	<div class="post-format-image">
		<figure class="figure">
			
            <?php if ( has_post_thumbnail() ) {	
				the_post_thumbnail('thumb-large'); 
				$caption = get_post(get_post_thumbnail_id())->post_excerpt;
				if ( isset($caption) && $caption ) echo '<figcaption>'.$caption.'</figcaption>';
			} ?>
            
		</figure>
	</div>
<div class="entry-content image"><?php the_content(); ?></div>