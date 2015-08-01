<div class="post-format-indicator">
    <i class="fa fa-music"> Music</i>
</div>
    <div class="post-format-image">
        <figure class="figure">
            
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumb-large'); } ?>
            
        </figure>
    </div>
<div class="entry-content audio"><?php the_content(); ?></div>