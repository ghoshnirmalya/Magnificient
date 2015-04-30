<?php

    if ( post_password_required() ) {
        return;
    }
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>

        <h3 class="comments-title">
            <?php
                printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'infi' ),
                    number_format_i18n( get_comments_number() ), get_the_title() );
            ?>
        </h3>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
        <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'infi' ); ?></h1>
            <div class="nav-previous">
                <?php previous_comments_link( __( '&larr; Older Comments', 'infi' ) ); ?>
            </div>
            <div class="nav-next">
                <?php next_comments_link( __( 'Newer Comments &rarr;', 'infi' ) ); ?>
            </div>
        </nav>
        <?php endif; ?>

        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'      => 'ol',
                    'short_ping' => true,
                    'avatar_size'=> 50,
                ) );
            ?>
        </ol>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'infi' ); ?></h1>
                <div class="nav-previous">
                    <?php previous_comments_link( __( '&larr; Older Comments', 'infi' ) ); ?>
                </div>
                <div class="nav-next">
                    <?php next_comments_link( __( 'Newer Comments &rarr;', 'infi' ) ); ?>
                </div>
            </nav>
        <?php endif; ?>

        <?php if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.', 'infi' ); ?></p>
        <?php endif; ?>

	<?php endif; ?>

    <div class="col-md-6">
    
        <?php comment_form(); ?>
        
    </div>
	

</div>