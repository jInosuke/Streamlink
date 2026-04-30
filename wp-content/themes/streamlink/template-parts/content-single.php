<?php
/**
 * Template Part: Single Post Content
 * Used by single.php.
 *
 * @package StreamLink
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post-article' ); ?>>

    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <div class="entry-meta">
            <span class="posted-on">
                <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
                    <?php echo esc_html( get_the_date() ); ?>
                </time>
            </span>
            <span class="byline">
                <?php esc_html_e( 'by', 'streamlink' ); ?>
                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                    <?php echo esc_html( get_the_author() ); ?>
                </a>
            </span>
            <?php
            $categories = get_the_category_list( ', ' );
            if ( $categories ) {
                echo '<span class="cat-links">' . esc_html__( 'In: ', 'streamlink' ) . $categories . '</span>';
            }
            ?>
        </div>
    </header>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="entry-thumbnail featured-image">
            <?php the_post_thumbnail( 'large', array( 'class' => 'featured-img' ) ); ?>
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

    <footer class="entry-footer">
        <?php
        $tags = get_the_tag_list( '<span class="tags-links">' . __( 'Tags: ', 'streamlink' ), ', ', '</span>' );
        if ( $tags ) {
            echo $tags;
        }
        ?>
    </footer>

</article><!-- #post-<?php the_ID(); ?> -->
