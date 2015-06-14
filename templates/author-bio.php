<div class="entry-author panel">
    <div class="row">
        <div class="large-9 columns">
            <h4><?php the_author_posts_link(); ?></h4>
            <p class="cover-description"><?php the_author_meta('description'); ?></p>
        </div>
        <div class="large-3 columns">
            <?php echo get_avatar( get_the_author_meta('user_email'), 95 ); ?>
        </div>
    </div>
</div>