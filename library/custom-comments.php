<?php

    function infi_comment_form_fields( $fields ) {
        $commenter = wp_get_current_commenter();

        $req      = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;

        $fields   =  array(
            'author' => '<div class="col-md-12">' .
                        '<div class="row clearfix">' .
                        '<div class="col-md-6">' .
                        '<div class="form-group comment-form-author">' .
                        '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' placeholder="Name (required)"/></div></div>',
            'email'  => '<div class="col-md-6">' .
                        '<div class="form-group comment-form-email">' .
                        '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' placeholder="Email (required)"/></div></div></div>',
            'url'    => '<div class="col-md-12">' .
                        '<div class="row clearfix">' .
                        '<div class="form-group comment-form-url">' .
                        '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" placeholder="Website"/></div></div></div>',
        );

        return $fields;
    }

    function infi_comment_form( $args ) {
        $args['comment_field'] = '<div class="form-group comment-form-comment">
                <textarea class="form-control" id="comment" name="comment" cols="45" rows="4" aria-required="true" placeholder="Write something cool"></textarea>
            </div>';
        return $args;
    }
    
    function infi_comment_button() {
        echo '<button class="btn btn-lg btn-default" type="submit">' . __( 'Submit' ) . '</button>';
    }

?>
