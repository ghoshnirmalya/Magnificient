<?php

/* ------------------------------------------------------------------------- *
 *  Prevent YouTube videos from overlapping content
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'maginficient_add_video_wmode_transparent' ) ) {
    
    function maginficient_add_video_wmode_transparent($html, $url, $attr) {
        if ( strpos( $html, "<embed src=" ) !== false )
           { return str_replace('</param><embed', '</param><param name="wmode" value="opaque"></param><embed wmode="opaque" ', $html); }
        elseif ( strpos ( $html, 'feature=oembed' ) !== false )
           { return str_replace( 'feature=oembed', 'feature=oembed&wmode=opaque', $html ); }
        else
           { return $html; }
    }
    
}

add_filter( 'embed_oembed_html', 'maginficient_add_video_wmode_transparent', 10, 3);


/* ------------------------------------------------------------------------- *
 *  Custoom excerpt more
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'maginficient_excerpt_more' ) ) {
    
    function maginficient_excerpt_more( $more ) {
        //return '...';
        return '... <br><br> <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More ', 'maginficient') . '</a>';
    }
    
}

add_filter('excerpt_more', 'maginficient_excerpt_more');


/* ------------------------------------------------------------------------- *
 *  Add custom reply link
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'maginficient_add_comment_author_to_reply_link' ) ) {
    
    function maginficient_add_comment_author_to_reply_link($link, $args, $comment){
        $comment = get_comment( $comment );

        // If no comment author is blank, use 'Anonymous'
        if ( empty($comment->comment_author) ) {
            if (!empty($comment->user_id)){
                $user=get_userdata($comment->user_id);
                $author=$user->user_login;
            } else {
                $author = __('Anonymous', 'maginficient');
            }
        } else {
            $author = $comment->comment_author;
        }

        // Replace Reply Link with "Reply to &lt;Author First Name>"
        $reply_link_text = $args['reply_text'];
        $link = str_replace($reply_link_text, '<i class="fa fa-reply"></i> Reply to ' . $author, $link);

        return $link;
    }
    
}

add_filter('comment_reply_link', 'maginficient_add_comment_author_to_reply_link', 10, 3);


/* ------------------------------------------------------------------------- *
 *  Custom attachment post
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'maginficient_get_attachment' ) ) {
    
    function maginficient_get_attachment( $attachment_id ) {
        $attachment = get_post( $attachment_id );
        return array(
            'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
            'caption' => $attachment->post_excerpt,
            'description' => $attachment->post_content,
            'href' => get_permalink( $attachment->ID ),
            'src' => $attachment->guid,
            'title' => $attachment->post_title
        );
    }
    
}


/* ------------------------------------------------------------------------- *
 *  Get images attached to post
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'maginficient_post_images' ) ) {
    
    function maginficient_post_images( $args=array() ) {
        global $post;
        $defaults = array(
            'numberposts'       => -1,
            'order'             => 'ASC',
            'orderby'           => 'menu_order',
            'post_mime_type'    => 'image',
            'post_parent'       =>  $post->ID,
            'post_type'         => 'attachment',
        );
        $args = wp_parse_args( $args, $defaults );
        return get_posts( $args );
    }
    
}


/* ------------------------------------------------------------------------- *
 *  Get image id from image src
/* ------------------------------------------------------------------------- */
if ( ! function_exists( 'maginficient_get_attachment_id_from_src' ) ) {
    
    function maginficient_get_attachment_id_from_src ($image_src) {
        global $wpdb;
        $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
        $id = $wpdb->get_var($query);
        return $id;
    }

}

/* ------------------------------------------------------------------------- *
 *  Get total published post count
/* ------------------------------------------------------------------------- */
if ( ! function_exists( 'maginficient_get_total_published_post_count' ) ) {
    
    function maginficient_get_total_published_post_count () {
        $published_posts_count = wp_count_posts()->publish;
        return $published_posts_count;
    }

}


/* ------------------------------------------------------------------------- *
/*  WooCommerce
/* ------------------------------------------------------------------------- */

/* ------------------------------------------------------------------------- *
/*  Outer wrapper (Default Fallback if woocommerce.php is not found)
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'maginficient_woocommerce_wrapper_start' ) ) {

    function maginficient_woocommerce_wrapper_start() {
        echo '<div class="small-12 large-8 columns woocommerce-card" id="single-page-content" role="main">';
        echo '<div class="row-woocommerce"><article id="woocommerce">';
    }
    
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
add_action('woocommerce_before_main_content', 'maginficient_woocommerce_wrapper_start', 10);


/* ------------------------------------------------------------------------- *
/*  Inner wrapper (Default Fallback if woocommerce.php is not found)
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'maginficient_woocoomerce_wrapper_end' ) ) {

    function maginficient_woocoomerce_wrapper_end() {
        echo '</article></div>';
        echo '</div>';
    }
    
}

remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_after_main_content', 'maginficient_woocoomerce_wrapper_end', 10);


/* ------------------------------------------------------------------------- *
/*  Sidebar
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'maginficient_woocoomerce_sidebar' ) ) {

    function maginficient_woocoomerce_sidebar() {
        //echo '<div class="sidebar">';
        //get_template_part( 'layouts/blog-page/left', 'sidebar' );
        //echo '</div>';
        
        echo '<aside id="sidebar" class="small-12 large-4 columns">';
        get_sidebar();
        echo '</aside>';
    }
    
}

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
add_action( 'woocommerce_sidebar', 'maginficient_woocoomerce_sidebar', 10 );


/* ------------------------------------------------------------------------- *
/*  Related products count
/* ------------------------------------------------------------------------- */

if ( ! function_exists( 'maginficient_related_products_limit' ) ) {

    function maginficient_related_products_limit() {
      global $product;

        $args['posts_per_page'] = 6;
        return $args;
    }
    
}

if ( ! function_exists( 'maginficient_related_products_args' ) ) {
    
    function maginficient_related_products_args( $args ) {

        $args['posts_per_page'] = 4; // 4 related products
        $args['columns'] = 2; // arranged in 2 columns
        return $args;
    }
}

add_filter( 'woocommerce_output_related_products_args', 'maginficient_related_products_args' );

?>