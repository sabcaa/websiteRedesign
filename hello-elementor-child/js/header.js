// Header interactions: search overlay + mobile menu toggle

document.addEventListener( 'DOMContentLoaded', function () {

    // --- Search overlay ---
    const searchToggle  = document.getElementById( 'search-toggle' );
    const searchOverlay = document.getElementById( 'search-overlay' );
    const searchClose   = document.getElementById( 'search-close' );
    const searchInput   = searchOverlay ? searchOverlay.querySelector( 'input[type="search"]' ) : null;

    if ( searchToggle && searchOverlay ) {
        searchToggle.addEventListener( 'click', function () {
            searchOverlay.classList.add( 'is-open' );
            searchOverlay.setAttribute( 'aria-hidden', 'false' );
            searchToggle.setAttribute( 'aria-expanded', 'true' );
            if ( searchInput ) searchInput.focus();
        } );
    }

    function closeSearch() {
        searchOverlay.classList.remove( 'is-open' );
        searchOverlay.setAttribute( 'aria-hidden', 'true' );
        searchToggle.setAttribute( 'aria-expanded', 'false' );
    }

    if ( searchClose ) {
        searchClose.addEventListener( 'click', closeSearch );
    }

    if ( searchOverlay ) {
        searchOverlay.addEventListener( 'click', function ( e ) {
            if ( e.target === searchOverlay ) closeSearch();
        } );
    }

    document.addEventListener( 'keydown', function ( e ) {
        if ( e.key === 'Escape' && searchOverlay && searchOverlay.classList.contains( 'is-open' ) ) {
            closeSearch();
        }
    } );

    // --- Mobile menu toggle ---
    const mobileToggle = document.getElementById( 'mobile-menu-toggle' );
    const primaryNav   = document.getElementById( 'primary-nav' );

    if ( mobileToggle && primaryNav ) {
        mobileToggle.addEventListener( 'click', function () {
            const isOpen = primaryNav.classList.toggle( 'is-open' );
            mobileToggle.setAttribute( 'aria-expanded', isOpen ? 'true' : 'false' );
            mobileToggle.setAttribute( 'aria-label', isOpen ? 'Close menu' : 'Open menu' );
        } );
    }

} );
