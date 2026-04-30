<?php
/**
 * StreamLink Entertainment Theme Functions
 *
 * @package StreamLink
 * @since 1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// ─────────────────────────────────────────────
// 1. THEME SETUP
// ─────────────────────────────────────────────
function streamlink_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 50,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Navigation menus
    register_nav_menus( array(
        'primary'        => __( 'Primary Menu', 'streamlink' ),
        'footer-business' => __( 'Footer Business Links', 'streamlink' ),
        'footer-support'  => __( 'Footer Support Links', 'streamlink' ),
    ) );

    // Global content width
    $GLOBALS['content_width'] = 1280;
}
add_action( 'after_setup_theme', 'streamlink_theme_setup' );


// ─────────────────────────────────────────────
// 2. ENQUEUE STYLES & SCRIPTS
// ─────────────────────────────────────────────
function streamlink_enqueue_assets() {
    $version = wp_get_theme()->get( 'Version' );

    // Main stylesheet
    wp_enqueue_style(
        'streamlink-style',
        get_stylesheet_uri(),
        array(),
        $version
    );

    // Editor styles
    add_editor_style( 'assets/css/editor-style.css' );

    // Main JavaScript
    wp_enqueue_script(
        'streamlink-scripts',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        $version,
        true
    );

    // Pass data to JS
    wp_localize_script( 'streamlink-scripts', 'streamlinkData', array(
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'streamlink_nonce' ),
        'homeUrl' => esc_url( home_url( '/' ) ),
    ) );

    // Comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'streamlink_enqueue_assets' );


// ─────────────────────────────────────────────
// 3. PRICING PAGE SCRIPTS (WooCommerce)
// ─────────────────────────────────────────────
function streamlink_enqueue_pricing_scripts() {
    if ( is_page_template( 'page-pricing.php' ) ) {
        wp_enqueue_script(
            'streamlink-pricing',
            get_template_directory_uri() . '/assets/js/pricing.js',
            array(),
            wp_get_theme()->get( 'Version' ),
            true
        );

        if ( class_exists( 'WooCommerce' ) ) {
            wp_localize_script( 'streamlink-pricing', 'wc_add_to_cart_params', array(
                'ajax_url' => admin_url( 'admin-ajax.php' ),
                'cart_url' => wc_get_cart_url(),
            ) );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'streamlink_enqueue_pricing_scripts' );


// ─────────────────────────────────────────────
// 4. WIDGET AREAS / SIDEBARS
// ─────────────────────────────────────────────
function streamlink_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'streamlink' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in the sidebar.', 'streamlink' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget Area', 'streamlink' ),
        'id'            => 'footer-widgets',
        'description'   => __( 'Add widgets here to appear in the footer.', 'streamlink' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'streamlink_widgets_init' );


// ─────────────────────────────────────────────
// 5. INCLUDE ADDITIONAL FILES
// ─────────────────────────────────────────────
$streamlink_includes = array(
    '/inc/template-tags.php',
    '/inc/template-functions.php',
    '/inc/customizer.php',
    '/inc/widgets.php',
);

foreach ( $streamlink_includes as $file ) {
    $filepath = get_template_directory() . $file;
    if ( file_exists( $filepath ) ) {
        require_once $filepath;
    }
}

// WooCommerce compatibility
if ( class_exists( 'WooCommerce' ) ) {
    $woo_file = get_template_directory() . '/inc/woocommerce.php';
    if ( file_exists( $woo_file ) ) {
        require_once $woo_file;
    }
}
