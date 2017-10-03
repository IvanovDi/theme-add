<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Addrian
 * @since Addrian 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'addrian' ),
                number_format_i18n( get_comments_number() ), get_the_title() );
            ?>
        </h2>

<!--        --><?php //addrian_comment_nav(); ?>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 56,
            ) );
            ?>
        </ol><!-- .comment-list -->

<!--        --><?php //addrian_comment_nav(); ?>

    <?php endif; // have_comments() ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>
        <p class="no-comments"><?php _e( 'Comments are closed.', 'addrian' ); ?></p>
    <?php endif; ?>

    <?php
    $comments_args = array(
        'fields' => array(
            'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . esc_html__( 'Full Name', 'wptuts' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></div>',
            'email'  => '<div class="form-group comment-form-email"><label for="email">' . esc_html__( 'Email Address', 'wptuts' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                '<input id="email" class="form-control" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></div>',
        ),
        'class_submit' => 'btn btn-default',
        'submit_field' => '<div class="section_sub_btn">%1$s %2$s</div>',
        'comment_field' => '<div class="comment-form-comment"><label for="comment">' . esc_html_x( 'Message', 'wptuts' ) . '</label> <textarea id="comment" class="form-textarea" name="comment" rows="3" cols="103" aria-required="true"></textarea></div>'
    );
    ?>

    <?php comment_form($comments_args); ?>

</div><!-- .comments-area -->
