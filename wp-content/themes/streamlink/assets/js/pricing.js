/**
 * StreamLink Pricing Page JavaScript
 * Handles plan toggle (monthly/annual) and any WooCommerce add-to-cart interactions.
 *
 * @package StreamLink
 * @since 1.0.0
 */

( function () {
    'use strict';

    // ─────────────────────────────────────────────
    // BILLING TOGGLE: Monthly <-> Annual
    // ─────────────────────────────────────────────
    const toggle = document.querySelector( '.billing-toggle' );

    if ( toggle ) {
        toggle.addEventListener( 'change', function () {
            const isAnnual = this.checked;
            document.querySelectorAll( '.price-monthly' ).forEach( function ( el ) {
                el.style.display = isAnnual ? 'none' : 'block';
            } );
            document.querySelectorAll( '.price-annual' ).forEach( function ( el ) {
                el.style.display = isAnnual ? 'block' : 'none';
            } );
            document.querySelector( '.billing-label--monthly' )
                && document.querySelector( '.billing-label--monthly' ).classList.toggle( 'is-active', ! isAnnual );
            document.querySelector( '.billing-label--annual' )
                && document.querySelector( '.billing-label--annual' ).classList.toggle( 'is-active', isAnnual );
        } );
    }

    // ─────────────────────────────────────────────
    // PLACEHOLDER: WooCommerce AJAX add-to-cart
    // Uses wc_add_to_cart_params localised by PHP if WooCommerce is active.
    // ─────────────────────────────────────────────

} )();
