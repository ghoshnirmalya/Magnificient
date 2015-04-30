<?php if ( is_dynamic_sidebar() ) : ?>
    <?php do_action( 'infi_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'infi_after_sidebar' ); ?>
<?php endif; ?>
<?php if ( dynamic_sidebar() ) : ?>
    
<?php endif; ?>