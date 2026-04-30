<?php
/**
 * Archive Template
 * Displays category, tag, author, date, and other archive pages.
 *
 * @package StreamLink
 * @since 1.0.0
 */

get_header();
?>

<main id="main-content" class="site-main archive-page">
    <div class="container">

        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' );
                ?>
            </header><!-- .page-header -->

            <div class="posts-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                <?php endwhile; ?>
            </div>

            <?php the_posts_pagination( array(
                'prev_text' => __( '&larr; Previous', 'streamlink' ),
                'next_text' => __( 'Next &rarr;', 'streamlink' ),
            ) ); ?>

        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>

    </div><!-- .container -->
</main><!-- #main-content -->

<?php
get_sidebar();
get_footer();
