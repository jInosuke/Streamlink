<?php
/**
 * Comments Template
 * Called by comments_template() in single.php and page.php.
 *
 * @package StreamLink
 * @since 1.0.0
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>

        <h2 class="comments-title">
            <?php
            $comments_count = get_comments_number();
            printf(
                esc_html( _n( '%1$s Comment on &ldquo;%2$s&rdquo;', '%1$s Comments on &ldquo;%2$s&rdquo;', $comments_count, 'streamlink' ) ),
                number_format_i18n( $comments_count ),
                wp_kses_post( get_the_title() )
            );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'      => 'ol',
                'short_ping' => true,
            ) );
            ?>
        </ol><!-- .comment-list -->

        <?php the_comments_navigation(); ?>

    <?php endif; // have_comments() ?>

    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'streamlink' ); ?></p>
    <?php endif; ?>

    <?php
    comment_form( array(
        'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
        'title_reply_after'  => '</h3>',
    ) );
    ?>

</div><!-- #comments -->
