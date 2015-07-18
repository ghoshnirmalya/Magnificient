<?php
/**
 * The default tempalte for pages.
 **/
?>

<?php get_header(); ?>
	
	</div>
    <!-- /row -->
</div>
<!-- /container -->

<!-- right-sidebar layout -->

<?php get_template_part( 'templates/single-page', 'cover' ); ?>

<!-- container -->
    <div class="container" role="document">
        <div class="row">

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" id="page-content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class('page-card') ?> id="post-<?php the_ID(); ?>">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<div class="after-post-footer">
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'magnificient'), 'after' => '</p></nav>' )); ?>
				<?php edit_post_link(); ?>
			</div>
		</article>
	   <div class="separator"></div>
        <?php if( is_single() ) { ?>
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
        <?php } ?>
	<?php endwhile; // End the loop ?>

	</div>
	<aside id="sidebar" class="small-12 large-4 columns">
        <?php get_sidebar(); ?>
    </aside><!-- /#sidebar -->
		
<?php get_footer(); ?>