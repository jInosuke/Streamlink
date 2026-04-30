<?php
/**
 * Front Page Template
 * Used when a static page is set as the site front page in Settings > Reading.
 * Routes to the Home page template or displays the blog index.
 *
 * @package StreamLink
 * @since 1.0.0
 */

get_header();
?>

<main id="main-content" class="site-main front-page">
    <?php
    // If a static front page has been set, use the page template part.
    // Otherwise, fall through to the standard loop.
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', 'page' );
        endwhile;
    endif;
    ?>
</main><!-- #main-content -->

<?php
get_footer();
