<?php
/**
Template Name: Custom Archives
 **/
?>

<?php get_header(); ?>

    <!-- Row for main content area -->
    <!-- page-content -->
	<div class="small-12 large-8 columns" id="page-content" role="main">
	
	<?php if ( have_posts() ) : ?>
	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
            <?php
                $myposts = get_posts('numberposts=-1&offset=$debut');
                foreach($myposts as $post) :
            ?>
			     <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endforeach; ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
	<?php endif; // end have_posts() check ?>
	
    <!-- pagination -->
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('foundationbuddy_pagination') ) { foundationbuddy_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationbuddy' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationbuddy' ) ); ?></div>
		</nav>
	<?php } ?>
    <!-- /pagination -->

	</div>
    <!-- /page-content -->

    <!-- sidebar -->
	<aside id="sidebar" class="small-12 large-4 columns">
        <?php get_sidebar(); ?>
    </aside><!-- /#sidebar -->
	<!-- /sidebar -->

<?php get_footer(); ?>