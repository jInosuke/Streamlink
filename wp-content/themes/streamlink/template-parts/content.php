<?php
/**
 * Template Part: Default Post Content
 * Used in loops to display a post excerpt (index, home, archive).
 *
 * @package StreamLink
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-card__thumbnail">
            <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                <?php the_post_thumbnail( 'medium_large' ); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="post-card__body">

        <header class="entry-header">
            <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>

            <div class="entry-meta">
                <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
                    <?php echo esc_html( get_the_date() ); ?>
                </time>
                <span class="sep">&middot;</span>
                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                    <?php echo esc_html( get_the_author() ); ?>
                </a>
            </div>
        </header>

        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>

        <footer class="entry-footer">
            <a href="<?php the_permalink(); ?>" class="read-more btn btn-ghost btn-sm">
                <?php esc_html_e( 'Read More', 'streamlink' ); ?>
                <span class="screen-reader-text"><?php the_title(); ?></span>
            </a>
        </footer>

    </div><!-- .post-card__body -->

</article><!-- #post-<?php the_ID(); ?> -->
