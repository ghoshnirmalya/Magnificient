<?php

    //Prevent YouTube Videos From Overlapping Content
    function add_video_wmode_transparent($html, $url, $attr) {
        if ( strpos( $html, "<embed src=" ) !== false )
           { return str_replace('</param><embed', '</param><param name="wmode" value="opaque"></param><embed wmode="opaque" ', $html); }
        elseif ( strpos ( $html, 'feature=oembed' ) !== false )
           { return str_replace( 'feature=oembed', 'feature=oembed&wmode=opaque', $html ); }
        else
           { return $html; }
    }

    //Custom Excerpt
    function infi_excerpt_length( $length ) {
        return 20;
    }

    add_filter( 'excerpt_length', 'infi_excerpt_length', 999 );

    function infi_excerpt_more( $more ) {
        //return '...';
        return '... <br><br> <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More ', 'infi') . '</a>';
    }

    add_filter('excerpt_more', 'infi_excerpt_more');

        //Use SVG Images
    function infi_mime_types($mimes) {
      $mimes['svg'] = 'image/svg+xml';
      return $mimes;
    }

    add_filter('upload_mimes', 'infi_mime_types');

    //WordPress Admin Area SVG Fix (https://css-tricks.com/snippets/wordpress/allow-svg-through-wordpress-media-uploader/)
    function infi_custom_admin_head() {
      $css = '';

      $css = 'td.media-icon img[src$=".svg"] { width: 100% !important; height: auto !important; }';

      echo '<style type="text/css">'.$css.'</style>';
    }

    add_action('admin_head', 'infi_custom_admin_head');

?>