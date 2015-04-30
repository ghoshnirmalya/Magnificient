<?php

    //Custom Comment Form
    add_filter( 'comment_form_default_fields', 'infi_comment_form_fields' );

    add_filter( 'comment_form_defaults', 'infi_comment_form' );

    add_filter( 'embed_oembed_html', 'add_video_wmode_transparent', 10, 3);
?>