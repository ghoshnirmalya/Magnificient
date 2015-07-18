<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 **/
?>

<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
    
    <!-- header -->
	<header>
        
        <!-- index-post-thumbnail -->
        <figure id="index-post-thumbnail"><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('large'); } ?></a></figure>
        <!-- /index-post-thumbnail -->
        
        <!-- post-entry-meta -->
        <div class="post-entry-meta">
		  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		  <?php magnificient_entry_meta(); ?>
        </div>
        <!-- /post-entry-meta -->
        
	</header>
    <!-- /header -->
    
    <!-- entry-content -->
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
    <!-- /entry-content -->
    
</article>
<!-- /article -->