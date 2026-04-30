<?php
/**
 * Search Results Template
 *
 * @package StreamLink
 * @since 1.0.0
 */

get_header();
?>

<main id="main-content" class="site-main search-results">
    <div class="container">

        <header class="page-header">
            <h1 class="page-title">
                <?php
                printf(
                    esc_html__( 'Search Results for: %s', 'streamlink' ),
                    '<span>' . get_search_query() . '</span>'
                );
                ?>
            </h1>
        </header><!-- .page-header -->

        <?php if ( have_posts() ) : ?>

            <div class="posts-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', 'search' ); ?>
                <?php endwhile; ?>
            </div>

            <?php the_posts_pagination(); ?>

        <?php else : ?>

            <div class="no-results">
                <p><?php esc_html_e( 'No results found. Try a different search term.', 'streamlink' ); ?></p>
                <?php get_search_form(); ?>
            </div>

        <?php endif; ?>

    </div><!-- .container -->
</main><!-- #main-content -->

<?php
get_sidebar();
get_footer();
