<?php
/**
 * 404 Not Found Template
 *
 * @package StreamLink
 * @since 1.0.0
 */

get_header();
?>

<main id="main-content" class="site-main error-404 not-found">
    <div class="container">

        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Oops! That page cannot be found.', 'streamlink' ); ?></h1>
        </header>

        <div class="page-content">
            <p>
                <?php esc_html_e( "It looks like nothing was found at this location. Maybe try one of the links below or a search?", 'streamlink' ); ?>
            </p>

            <?php get_search_form(); ?>

            <div class="widget-area">
                <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
            </div>
        </div><!-- .page-content -->

        <div class="error-cta">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                <?php esc_html_e( '&larr; Back to Home', 'streamlink' ); ?>
            </a>
        </div>

    </div><!-- .container -->
</main><!-- #main-content -->

<?php
get_footer();
