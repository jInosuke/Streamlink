<?php
/**
 * Blog Index Template
 * Displays when "Posts page" is set in Settings > Reading, or when viewing the blog listing.
 *
 * @package StreamLink
 * @since 1.0.0
 */

get_header();
?>

<main id="main-content" class="site-main blog-index">
    <div class="container">

        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Latest Posts', 'streamlink' ); ?></h1>
        </header>

        <div class="posts-grid">
            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                <?php endwhile; ?>

                <?php the_posts_pagination( array(
                    'prev_text' => __( '&larr; Previous', 'streamlink' ),
                    'next_text' => __( 'Next &rarr;', 'streamlink' ),
                ) ); ?>

            <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>
        </div>

    </div><!-- .container -->
</main><!-- #main-content -->

<?php
get_sidebar();
get_footer();
