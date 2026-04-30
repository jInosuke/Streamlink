<?php
/**
 * Template Part: Page Content
 * Used by page.php and front-page.php.
 *
 * @package StreamLink
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php
        if ( ! is_front_page() ) {
            the_title( '<h1 class="entry-title">', '</h1>' );
        }
        ?>
    </header>

    <?php if ( has_post_thumbnail() && ! is_front_page() ) : ?>
        <div class="entry-thumbnail">
            <?php the_post_thumbnail( 'large' ); ?>
        </div>
    <?php endif; ?>

    <div class="entry-content">
        <?php
        the_content();
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'streamlink' ),
            'after'  => '</div>',
        ) );
        ?>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
