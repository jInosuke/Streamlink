<?php
/**
 * Template Tags
 * Custom helper functions used in templates.
 *
 * @package StreamLink
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Prints HTML with meta information: post date and author.
 */
if ( ! function_exists( 'streamlink_posted_on' ) ) {
    function streamlink_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

        $time_string = sprintf(
            $time_string,
            esc_attr( get_the_date( DATE_W3C ) ),
            esc_html( get_the_date() )
        );

        printf(
            '<span class="posted-on">%s</span><span class="byline"> %s <span class="author vcard"><a href="%s">%s</a></span></span>',
            $time_string,
            esc_html__( 'by', 'streamlink' ),
            esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
            esc_html( get_the_author() )
        );
    }
}

/**
 * Prints HTML with category and tag info for the current post.
 */
if ( ! function_exists( 'streamlink_entry_footer' ) ) {
    function streamlink_entry_footer() {
        if ( 'post' === get_post_type() ) {
            $categories = get_the_category_list( ', ' );
            if ( $categories ) {
                printf( '<span class="cat-links">%s %s</span>',
                    esc_html__( 'Categories:', 'streamlink' ),
                    $categories
                );
            }
            $tags = get_the_tag_list( '', ', ' );
            if ( $tags ) {
                printf( '<span class="tags-links">%s %s</span>',
                    esc_html__( 'Tags:', 'streamlink' ),
                    $tags
                );
            }
        }

        if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
            echo '<span class="comments-link">';
            comments_popup_link( __( 'Leave a comment', 'streamlink' ), __( '1 Comment', 'streamlink' ), __( '% Comments', 'streamlink' ) );
            echo '</span>';
        }

        edit_post_link(
            sprintf( wp_kses( __( 'Edit <span class="screen-reader-text">%s</span>', 'streamlink' ), array( 'span' => array( 'class' => array() ) ) ), wp_kses_post( get_the_title() ) ),
            '<span class="edit-link">',
            '</span>'
        );
    }
}

/**
 * Returns true if the current page should show a sidebar.
 */
if ( ! function_exists( 'streamlink_is_sidebar_active' ) ) {
    function streamlink_is_sidebar_active() {
        return is_active_sidebar( 'sidebar-1' ) && ( is_single() || is_page() || is_home() || is_archive() || is_search() );
    }
}
