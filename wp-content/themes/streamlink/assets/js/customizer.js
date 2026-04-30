/**
 * StreamLink Customizer Preview JS
 * Binds live preview updates for customizer settings without a full page reload.
 *
 * @package StreamLink
 * @since 1.0.0
 */

( function ( $ ) {
    'use strict';

    // Hero Headline
    wp.customize( 'streamlink_hero_headline', function ( value ) {
        value.bind( function ( newVal ) {
            $( '.hero-title' ).text( newVal );
        } );
    } );

    // Hero Subheadline
    wp.customize( 'streamlink_hero_subheadline', function ( value ) {
        value.bind( function ( newVal ) {
            $( '.hero-subtitle' ).text( newVal );
        } );
    } );

    // Footer Tagline
    wp.customize( 'streamlink_footer_tagline', function ( value ) {
        value.bind( function ( newVal ) {
            $( '.footer-tagline' ).text( newVal );
        } );
    } );

} )( jQuery );
