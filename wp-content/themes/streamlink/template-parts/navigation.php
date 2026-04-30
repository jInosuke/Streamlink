<?php
/**
 * Template Part: Posts Navigation
 * Reusable navigation for looped views.
 * Usage: get_template_part( 'template-parts/navigation' );
 *
 * @package StreamLink
 * @since 1.0.0
 */
?>

<nav class="posts-navigation" aria-label="<?php esc_attr_e( 'Posts Navigation', 'streamlink' ); ?>">
    <div class="nav-links">
        <div class="nav-previous">
            <?php previous_posts_link( __( '&larr; Older posts', 'streamlink' ) ); ?>
        </div>
        <div class="nav-next">
            <?php next_posts_link( __( 'Newer posts &rarr;', 'streamlink' ) ); ?>
        </div>
    </div>
</nav>
