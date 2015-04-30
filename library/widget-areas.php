<?php
if ( ! function_exists( 'infi_sidebar_widgets' ) ) :
function infi_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'infi' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'infi' ),
	  'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="col-md-12 column">',
	  'after_widget' => '</div></article>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'infi' ),
	  'description' => __( 'Drag widgets to this footer container', 'infi' ),
	  'before_widget' => '<article id="%1$s" class="col-md-4 column widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>',
	));
}

add_action( 'widgets_init', 'infi_sidebar_widgets' );
endif;
?>
