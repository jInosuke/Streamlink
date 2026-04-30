<?php
/**
 * WordPress Customizer Settings
 * Adds theme options accessible via Appearance > Customize.
 *
 * @package StreamLink
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function streamlink_customize_register( WP_Customize_Manager $wp_customize ) {

    // ── Site Identity: already handled by WP core ──

    // ── StreamLink Theme Options Panel ──
    $wp_customize->add_panel( 'streamlink_options', array(
        'title'    => __( 'StreamLink Options', 'streamlink' ),
        'priority' => 130,
    ) );

    // ─── Hero Section ───
    $wp_customize->add_section( 'streamlink_hero', array(
        'title'    => __( 'Hero Section', 'streamlink' ),
        'panel'    => 'streamlink_options',
        'priority' => 10,
    ) );

    // Hero Headline
    $wp_customize->add_setting( 'streamlink_hero_headline', array(
        'default'           => __( 'The Platform for Creators', 'streamlink' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'streamlink_hero_headline', array(
        'label'   => __( 'Hero Headline', 'streamlink' ),
        'section' => 'streamlink_hero',
        'type'    => 'text',
    ) );

    // Hero Subheadline
    $wp_customize->add_setting( 'streamlink_hero_subheadline', array(
        'default'           => __( 'Connect, share, and monetize your content.', 'streamlink' ),
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'streamlink_hero_subheadline', array(
        'label'   => __( 'Hero Subheadline', 'streamlink' ),
        'section' => 'streamlink_hero',
        'type'    => 'textarea',
    ) );

    // ─── Colours ───
    $wp_customize->add_section( 'streamlink_colors', array(
        'title'    => __( 'Brand Colours', 'streamlink' ),
        'panel'    => 'streamlink_options',
        'priority' => 20,
    ) );

    // Primary Colour
    $wp_customize->add_setting( 'streamlink_color_primary', array(
        'default'           => '#7B4FFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'streamlink_color_primary', array(
        'label'   => __( 'Primary Accent Colour', 'streamlink' ),
        'section' => 'streamlink_colors',
    ) ) );

    // ─── Footer ───
    $wp_customize->add_section( 'streamlink_footer', array(
        'title'    => __( 'Footer', 'streamlink' ),
        'panel'    => 'streamlink_options',
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'streamlink_footer_tagline', array(
        'default'           => __( 'A comprehensive platform for independent creators.', 'streamlink' ),
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'streamlink_footer_tagline', array(
        'label'   => __( 'Footer Tagline', 'streamlink' ),
        'section' => 'streamlink_footer',
        'type'    => 'textarea',
    ) );
}
add_action( 'customize_register', 'streamlink_customize_register' );

/**
 * Binds JS handlers to make Customizer preview reload changes asynchronously.
 */
function streamlink_customize_preview_js() {
    wp_enqueue_script(
        'streamlink-customizer',
        get_template_directory_uri() . '/assets/js/customizer.js',
        array( 'customize-preview' ),
        wp_get_theme()->get( 'Version' ),
        true
    );
}
add_action( 'customize_preview_init', 'streamlink_customize_preview_js' );
