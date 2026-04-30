<?php
/**
 * Single Post Template
 * Displays a single blog post.
 *
 * @package StreamLink
 * @since 1.0.0
 */

get_header();
?>

<main id="main-content" class="site-main single-post">
    <div class="container">

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-article' ); ?>>

                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

                    <div class="entry-meta">
                        <span class="posted-on">
                            <?php esc_html_e( 'Published', 'streamlink' ); ?>
                            <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
                                <?php echo esc_html( get_the_date() ); ?>
                            </time>
                        </span>
                        <span class="byline">
                            <?php esc_html_e( 'by', 'streamlink' ); ?>
                            <span class="author vcard">
                                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                                    <?php echo esc_html( get_the_author() ); ?>
                                </a>
                            </span>
                        </span>
                    </div><!-- .entry-meta -->
                </header><!-- .entry-header -->

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="entry-thumbnail">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content( sprintf(
                        wp_kses(
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'streamlink' ),
                            array( 'span' => array( 'class' => array() ) )
                        ),
                        wp_kses_post( get_the_title() )
                    ) );

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'streamlink' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <?php
                    $categories = get_the_category_list( ', ' );
                    $tags       = get_the_tag_list( '', ', ' );
                    if ( $categories ) {
                        echo '<span class="cat-links">' . esc_html__( 'Categories: ', 'streamlink' ) . $categories . '</span>';
                    }
                    if ( $tags ) {
                        echo '<span class="tags-links">' . esc_html__( 'Tags: ', 'streamlink' ) . $tags . '</span>';
                    }
                    ?>
                </footer><!-- .entry-footer -->

            </article><!-- #post-<?php the_ID(); ?> -->

            <!-- Post Navigation -->
            <nav class="post-navigation" aria-label="<?php esc_attr_e( 'Post Navigation', 'streamlink' ); ?>">
                <?php
                the_post_navigation( array(
                    'prev_text' => '<span class="nav-label">' . __( '&larr; Previous Post', 'streamlink' ) . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-label">' . __( 'Next Post &rarr;', 'streamlink' ) . '</span> <span class="nav-title">%title</span>',
                ) );
                ?>
            </nav>

            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>

    </div><!-- .container -->
</main><!-- #main-content -->

<?php
get_sidebar();
get_footer();
