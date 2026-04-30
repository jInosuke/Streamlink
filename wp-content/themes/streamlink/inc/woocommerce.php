<?php
/**
 * WooCommerce Compatibility
 * Functions and hooks for WooCommerce integration in StreamLink.
 *
 * @package StreamLink
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Declare WooCommerce support.
 */
function streamlink_woocommerce_setup() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 450,
        'single_image_width'    => 600,
        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 1,
            'max_rows'        => 6,
            'default_columns' => 3,
            'min_columns'     => 1,
            'max_columns'     => 6,
        ),
    ) );

    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'streamlink_woocommerce_setup' );

/**
 * Remove WooCommerce default wrapper — use our own container.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

function streamlink_woocommerce_wrapper_before() {
    echo '<main id="main-content" class="site-main woocommerce-page"><div class="container">';
}
add_action( 'woocommerce_before_main_content', 'streamlink_woocommerce_wrapper_before', 10 );

function streamlink_woocommerce_wrapper_after() {
    echo '</div></main>';
}
add_action( 'woocommerce_after_main_content', 'streamlink_woocommerce_wrapper_after', 10 );

/**
 * Remove the WooCommerce sidebar on shop pages (StreamLink uses full-width layouts).
 */
function streamlink_woocommerce_sidebar() {
    // Intentionally empty — no sidebar on WooCommerce pages.
}
add_action( 'woocommerce_sidebar', 'streamlink_woocommerce_sidebar', 10 );
