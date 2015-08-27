<?php
// return entry meta information for posts, used by multiple loops, you can override this function by defining them first in your child theme's functions.php file
if ( ! function_exists( 'magnificient_entry_meta' ) ) {
    
    function magnificient_entry_meta() {
        echo '<span class="byline author"><a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a> &#46; </span>';
        echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate><a href="'. get_permalink( ) .'">'. get_the_time('F jS, Y') .'</a> &#46; </time>';
        echo '<span class="entry-category">'. the_category( '&bull;' ) .'</span>';
        echo '<span class="entry-tags">'. the_tags( ' &#46; ', ' &#46; ', '' ) .'</span>';
    }
    
}

?>