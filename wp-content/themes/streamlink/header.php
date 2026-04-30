<?php
/**
 * The header for the StreamLink Entertainment theme.
 * Called by get_header() in every template file.
 *
 * @package StreamLink
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

    <a class="skip-link screen-reader-text" href="#main-content">
        <?php esc_html_e( 'Skip to content', 'streamlink' ); ?>
    </a>

    <header id="masthead" class="site-header">
        <div class="container header-inner">

            <!-- Branding / Logo -->
            <div class="site-branding">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-logo-text">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                <?php endif; ?>
            </div><!-- .site-branding -->

            <!-- Primary Navigation -->
            <nav id="site-navigation" class="main-navigation"
                 aria-label="<?php esc_attr_e( 'Primary Menu', 'streamlink' ); ?>">

                <button class="menu-toggle"
                        aria-controls="primary-menu"
                        aria-expanded="false"
                        aria-label="<?php esc_attr_e( 'Toggle navigation', 'streamlink' ); ?>">
                    <span class="hamburger-bar"></span>
                    <span class="hamburger-bar"></span>
                    <span class="hamburger-bar"></span>
                </button>

                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => false,
                ) );
                ?>
            </nav><!-- #site-navigation -->

            <!-- Header CTA -->
            <div class="header-cta">
                <a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="btn btn-primary btn-sm">
                    <?php esc_html_e( 'Get Started', 'streamlink' ); ?>
                </a>
            </div>

        </div><!-- .container -->
    </header><!-- #masthead -->
