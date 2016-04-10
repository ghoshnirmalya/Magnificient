<?php
/*********************
Start all the functions
at once for magnificient.
*********************/

// start all the functions
add_action('after_setup_theme','magnificient_startup');

if( ! function_exists( 'magnificient_startup ' ) ) {

	function magnificient_startup() {

	    // remove WP version from RSS
	    add_filter('the_generator', 'magnificient_rss_version');

	    // remove pesky injected css for recent comments widget
	    add_filter( 'wp_head', 'magnificient_remove_wp_widget_recent_comments_style', 1 );

	    // clean up gallery output in wp
	    add_filter('gallery_style', 'magnificient_gallery_style');

	    // enqueue base scripts and styles
	    add_action('wp_enqueue_scripts', 'magnificient_scripts_and_styles', 999);

	    // ie conditional wrapper
	    add_filter( 'style_loader_tag', 'magnificient_ie_conditional', 10, 2 );

	    // additional post related cleaning
	    add_filter( 'img_caption_shortcode', 'magnificient_cleaner_caption', 10, 3 );
	    add_filter('get_image_tag_class', 'magnificient_image_tag_class', 0, 4);
	    add_filter('get_image_tag', 'magnificient_image_editor', 0, 4);
	    add_filter( 'the_content', 'magnificient_img_unautop', 30 );

	} /* end magnificient_startup */

}


/**********************
WP_HEAD GOODNESS
The default WordPress head is
a mess. Let's clean it up.

Thanks for Bones
http://themble.com/bones/
**********************/



// remove WP version from RSS
if( ! function_exists( 'magnificient_rss_version ' ) ) {

	function magnificient_rss_version() { return ''; }

}

// remove WP version from scripts
if( ! function_exists( 'magnificient_remove_wp_ver_css_js ' ) ) {

	function magnificient_remove_wp_ver_css_js( $src ) {
	    if ( strpos( $src, 'ver=' ) )
	        $src = remove_query_arg( 'ver', $src );
	    return $src;
	}

}

// remove injected CSS for recent comments widget
if( ! function_exists( 'magnificient_remove_wp_widget_recent_comments_style ' ) ) {

	function magnificient_remove_wp_widget_recent_comments_style() {
	   if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
	      remove_filter('wp_head', 'wp_widget_recent_comments_style' );
	   }
	}

}

// remove injected CSS from gallery
if( ! function_exists( 'magnificient_gallery_style ' ) ) {

	function magnificient_gallery_style($css) {
	  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
	}

}


/*********************
Post related cleaning
*********************/
/* Customized the output of caption, you can remove the filter to restore back to the WP default output. Courtesy of DevPress. http://devpress.com/blog/captions-in-wordpress/ */
if( ! function_exists( 'magnificient_cleaner_caption ' ) ) {

	function magnificient_cleaner_caption( $output, $attr, $content ) {

		/* We're not worried abut captions in feeds, so just return the output here. */
		if ( is_feed() )
			return $output;

		/* Set up the default arguments. */
		$defaults = array(
			'id' => '',
			'align' => 'alignnone',
			'width' => '',
			'caption' => ''
		);

		/* Merge the defaults with user input. */
		$attr = shortcode_atts( $defaults, $attr );

		/* If the width is less than 1 or there is no caption, return the content wrapped between the [caption]< tags. */
		if ( 1 > $attr['width'] || empty( $attr['caption'] ) )
			return $content;

		/* Set up the attributes for the caption <div>. */
		$attributes = ' class="figure ' . esc_attr( $attr['align'] ) . '"';

		/* Open the caption <div>. */
		$output = '<figure' . $attributes .'>';

		/* Allow shortcodes for the content the caption was created for. */
		$output .= do_shortcode( $content );

		/* Append the caption text. */
		$output .= '<figcaption>' . $attr['caption'] . '</figcaption>';

		/* Close the caption </div>. */
		$output .= '</figure>';

		/* Return the formatted, clean caption. */
		return $output;

	} /* end magnificient_cleaner_caption */

}

// Clean the output of attributes of images in editor. Courtesy of SitePoint. http://www.sitepoint.com/wordpress-change-img-tag-html/
if( ! function_exists( 'magnificient_image_tag_class ' ) ) {

	function magnificient_image_tag_class($class, $id, $align, $size) {
		$align = 'align' . esc_attr($align);
		return $align;
	} /* end magnificient_image_tag_class */

}

// Remove width and height in editor, for a better responsive world.
if( ! function_exists( 'magnificient_image_editor ' ) ) {

	function magnificient_image_editor($html, $id, $alt, $title) {
		return preg_replace(array(
				'/\s+width="\d+"/i',
				'/\s+height="\d+"/i',
				'/alt=""/i'
			),
			array(
				'',
				'',
				'',
				'alt="' . $title . '"'
			),
			$html);
	} /* end magnificient_image_editor */

}

// Wrap images with figure tag. Courtesy of Interconnectit http://interconnectit.com/2175/how-to-remove-p-tags-from-images-in-wordpress/
if( ! function_exists( 'magnificient_img_unautop ' ) ) {

	function magnificient_img_unautop($pee) {
	    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<figure>$1</figure>', $pee);
	    return $pee;
	} /* end magnificient_img_unautop */

}

?>
