<?php
/**
 * Template Functions
 * Functions that alter or add to the standard template hooks.
 *
 * @package StreamLink
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function streamlink_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'wp_head', 'streamlink_pingback_header' );

/**
 * Add body classes for layout awareness.
 */
function streamlink_body_classes( $classes ) {
    if ( is_singular() ) {
        $classes[] = 'single-view';
    }
    if ( streamlink_is_sidebar_active() ) {
        $classes[] = 'has-sidebar';
    } else {
        $classes[] = 'no-sidebar';
    }
    return $classes;
}
add_filter( 'body_class', 'streamlink_body_classes' );

/**
 * Customise the "Read More" excerpt link.
 */
function streamlink_excerpt_more( $more ) {
    return sprintf(
        '&hellip; <a class="read-more" href="%s">%s</a>',
        esc_url( get_permalink() ),
        esc_html__( 'Read more', 'streamlink' )
    );
}
add_filter( 'excerpt_more', 'streamlink_excerpt_more' );

/**
 * Set a consistent excerpt length.
 */
function streamlink_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'streamlink_excerpt_length', 999 );

/**
 * Remove the WordPress admin bar top margin so the sticky header lines up correctly.
 */
function streamlink_remove_admin_bar_style() {
    remove_action( 'wp_head', '_admin_bar_bump_cb' );
}
add_action( 'get_header', 'streamlink_remove_admin_bar_style' );
