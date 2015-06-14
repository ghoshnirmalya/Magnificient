<?php
/**
Template Name: Left Sidebar
 **/
?>

<?php get_header(); ?>
    
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
				<?php foundationbuddy_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'foundationbuddy'), 'after' => '</p></nav>' )); ?>
			</footer>
		</article>
	<div class="separator"></div>

		<?php comments_template(); ?>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>