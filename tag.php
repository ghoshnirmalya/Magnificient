<?php get_header(); ?>

    </div>
    <!-- /row -->
</div>
<!-- /container -->

<!-- right-sidebar layout -->

<?php get_template_part( 'templates/tag-page', 'cover' ); ?>

<!-- container -->
    <div class="container" role="document">
        <div class="row">

            <?php get_template_part( 'layouts/tag-page/page', 'template' ); ?>
            <aside id="sidebar" class="small-12 large-4 columns">    
                <?php get_sidebar(); ?>
            </aside><!-- /#sidebar -->

            <!-- /right-sidebar layout -->

<?php get_footer(); ?>