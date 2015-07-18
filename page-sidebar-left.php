<?php
/**
Template Name: Left Sidebar
 **/
?>

<?php get_header(); ?>

	</div>
    <!-- /row -->
</div>
<!-- /container -->

<!-- right-sidebar layout -->

<?php get_template_part( 'templates/single-page', 'cover' ); ?>
    
    <aside id="left-sidebar" class="small-12 large-4 columns">
        <?php get_sidebar(); ?>
    </aside><!-- /#sidebar -->

    <!-- Row for main content area -->
	<div class="small-12 large-8 columns" id="page-content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class('page-card') ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<div class="after-post-footer">
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'magnificient'), 'after' => '</p></nav>' )); ?>
				<?php edit_post_link(); ?>
			</div>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>