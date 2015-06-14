<?php get_header(); ?>

    </div>
    <!-- /row -->
</div>
<!-- /container -->

<!-- right-sidebar layout -->

<!-- featured-image -->
<div class="featured-image-cover">
<?php
    if ( has_post_thumbnail() ) {
        the_post_thumbnail();
    } 
?>
</div>
<!-- /featured-image -->

<!-- container -->
    <div class="container" role="document">
        <div class="row">

            <?php get_template_part( 'layouts/blog-page/right', 'sidebar' ); ?>
            <aside id="sidebar" class="small-12 large-4 columns">    
                <?php get_sidebar(); ?>
            </aside><!-- /#sidebar -->

            <!-- /right-sidebar layout -->

<?php get_footer(); ?>