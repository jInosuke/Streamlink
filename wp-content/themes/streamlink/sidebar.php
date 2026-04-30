<?php
/**
 * Sidebar Template
 * Called by get_sidebar() in templates that support a sidebar.
 *
 * @package StreamLink
 * @since 1.0.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return; // Don't render sidebar markup if no widgets are added.
}
?>

<aside id="secondary" class="widget-area sidebar" role="complementary"
       aria-label="<?php esc_attr_e( 'Sidebar', 'streamlink' ); ?>">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
