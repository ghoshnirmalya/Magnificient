<?php
/* ------------------------------------------------------------------------- *
 *  Contains specific redirection for each post format
/* ------------------------------------------------------------------------- */
?>

<?php $meta = get_post_custom($post->ID); ?>

<?php if ( has_post_format( 'audio' ) ): // Audio ?>
    <!-- audio post format -->
    <?php get_template_part( 'templates/post', 'formats/format-audio' ); ?>
    <!-- /audio post format --> 
<?php endif; ?>

<?php if ( has_post_format( 'gallery' ) ):  // Gallery ?>
    <!-- gallery post format -->
    <?php get_template_part( 'templates/post', 'formats/format-gallery' ); ?>
    <!-- /gallery post format --> 
<?php endif; ?>

<?php if ( has_post_format( 'image' ) ):// Image ?>
    <!-- image post format -->
    <?php get_template_part( 'templates/post', 'formats/format-image' ); ?>
    <!-- /image post format -->	
<?php endif; ?>

<?php if ( has_post_format( 'video' ) ): // Video ?>
	<!-- video post format -->
    <?php get_template_part( 'templates/post', 'formats/format-video' ); ?>
    <!-- /video post format -->
<?php endif; ?>

<?php if ( has_post_format( 'quote' ) ): // Quote ?>
    <!-- quote post format -->
    <?php get_template_part( 'templates/post', 'formats/format-quote' ); ?>
    <!-- /quote post format -->
<?php endif; ?>

<?php if ( has_post_format( 'chat' ) ): // Chat ?>
	<!-- chat post format -->
    <?php get_template_part( 'templates/post', 'formats/format-chat' ); ?>
    <!-- /chat post format -->
<?php endif; ?>

<?php if ( has_post_format( 'link' ) ): // Link ?>
	<!-- status post format -->
    <?php get_template_part( 'templates/post', 'formats/format-link' ); ?>
    <!-- /status post format -->
<?php endif; ?>

<?php if ( has_post_format( 'status' ) ): // status ?>
    <!-- status post format -->
    <?php get_template_part( 'templates/post', 'formats/format-status' ); ?>
	<!-- /status post format -->
<?php endif; ?>

<?php if ( has_post_format( 'aside' ) ): // aside ?>
    <!-- aside post format -->
    <?php get_template_part( 'templates/post', 'formats/format-aside' ); ?>
    <!-- /aside post format -->
<?php endif; ?>