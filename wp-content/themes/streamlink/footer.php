<?php
/**
 * The footer for the StreamLink Entertainment theme.
 * Called by get_footer() in every template file.
 *
 * @package StreamLink
 * @since 1.0.0
 */
?>

    <footer id="colophon" class="site-footer">
        <div class="container">

            <!-- Footer Top: Branding + Navigation Columns -->
            <div class="footer-top">

                <div class="footer-brand">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <span class="footer-site-name"><?php bloginfo( 'name' ); ?></span>
                    <?php endif; ?>
                    <p class="footer-tagline"><?php bloginfo( 'description' ); ?></p>
                </div>

                <nav class="footer-nav footer-nav--business"
                     aria-label="<?php esc_attr_e( 'Business Links', 'streamlink' ); ?>">
                    <h4 class="footer-nav-title"><?php esc_html_e( 'Company', 'streamlink' ); ?></h4>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer-business',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ) );
                    ?>
                </nav>

                <nav class="footer-nav footer-nav--support"
                     aria-label="<?php esc_attr_e( 'Support Links', 'streamlink' ); ?>">
                    <h4 class="footer-nav-title"><?php esc_html_e( 'Support', 'streamlink' ); ?></h4>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer-support',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ) );
                    ?>
                </nav>

            </div><!-- .footer-top -->

            <!-- Footer Bottom: Copyright -->
            <div class="footer-bottom">
                <p class="footer-copyright">
                    &copy; <?php echo esc_html( date( 'Y' ) ); ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php bloginfo( 'name' ); ?>
                    </a>.
                    <?php esc_html_e( 'All rights reserved.', 'streamlink' ); ?>
                </p>
                <p class="footer-legal">
                    <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">
                        <?php esc_html_e( 'Privacy Policy', 'streamlink' ); ?>
                    </a>
                    &middot;
                    <a href="<?php echo esc_url( home_url( '/terms' ) ); ?>">
                        <?php esc_html_e( 'Terms of Service', 'streamlink' ); ?>
                    </a>
                </p>
            </div><!-- .footer-bottom -->

        </div><!-- .container -->
    </footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
