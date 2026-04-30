/**
 * StreamLink Entertainment — Main JavaScript
 *
 * @package StreamLink
 * @since 1.0.0
 */

( function () {
    'use strict';

    // ─────────────────────────────────────────────
    // 1. MOBILE MENU TOGGLE
    // ─────────────────────────────────────────────
    const menuToggle = document.querySelector( '.menu-toggle' );
    const primaryMenu = document.querySelector( '#primary-menu' );

    if ( menuToggle && primaryMenu ) {
        menuToggle.addEventListener( 'click', function () {
            const isExpanded = this.getAttribute( 'aria-expanded' ) === 'true';
            this.setAttribute( 'aria-expanded', String( ! isExpanded ) );
            primaryMenu.classList.toggle( 'is-open' );
            document.body.classList.toggle( 'menu-open' );
        } );

        // Close menu when clicking outside
        document.addEventListener( 'click', function ( e ) {
            if ( ! e.target.closest( '.main-navigation' ) ) {
                menuToggle.setAttribute( 'aria-expanded', 'false' );
                primaryMenu.classList.remove( 'is-open' );
                document.body.classList.remove( 'menu-open' );
            }
        } );

        // Close menu on Escape key
        document.addEventListener( 'keydown', function ( e ) {
            if ( e.key === 'Escape' ) {
                menuToggle.setAttribute( 'aria-expanded', 'false' );
                primaryMenu.classList.remove( 'is-open' );
                document.body.classList.remove( 'menu-open' );
                menuToggle.focus();
            }
        } );
    }

    // ─────────────────────────────────────────────
    // 2. STICKY HEADER
    // ─────────────────────────────────────────────
    const header = document.querySelector( '#masthead' );

    if ( header ) {
        const headerHeight = header.offsetHeight;

        window.addEventListener( 'scroll', function () {
            if ( window.scrollY > headerHeight ) {
                header.classList.add( 'is-sticky' );
            } else {
                header.classList.remove( 'is-sticky' );
            }
        }, { passive: true } );
    }

    // ─────────────────────────────────────────────
    // 3. SMOOTH SCROLL FOR ANCHOR LINKS
    // ─────────────────────────────────────────────
    document.querySelectorAll( 'a[href^="#"]' ).forEach( function ( anchor ) {
        anchor.addEventListener( 'click', function ( e ) {
            const targetId = this.getAttribute( 'href' );
            if ( targetId === '#' ) return;

            const target = document.querySelector( targetId );
            if ( target ) {
                e.preventDefault();
                target.scrollIntoView( { behavior: 'smooth', block: 'start' } );
            }
        } );
    } );

    // ─────────────────────────────────────────────
    // 4. INTERSECTION OBSERVER — FADE IN ON SCROLL
    // ─────────────────────────────────────────────
    if ( 'IntersectionObserver' in window ) {
        const fadeEls = document.querySelectorAll( '.fade-in' );

        const observer = new IntersectionObserver( function ( entries ) {
            entries.forEach( function ( entry ) {
                if ( entry.isIntersecting ) {
                    entry.target.classList.add( 'is-visible' );
                    observer.unobserve( entry.target );
                }
            } );
        }, { threshold: 0.15 } );

        fadeEls.forEach( function ( el ) {
            observer.observe( el );
        } );
    }

} )();
