<?php
/**
 * Search Form Template
 * Overrides the default WordPress search form output.
 *
 * @package StreamLink
 * @since 1.0.0
 */

$unique_id = esc_attr( uniqid( 'search-form-' ) );
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="<?php echo $unique_id; ?>" class="screen-reader-text">
        <?php esc_html_e( 'Search for:', 'streamlink' ); ?>
    </label>
    <input
        type="search"
        id="<?php echo $unique_id; ?>"
        class="search-field"
        placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'streamlink' ); ?>"
        value="<?php echo get_search_query(); ?>"
        name="s"
    />
    <button type="submit" class="search-submit">
        <span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'streamlink' ); ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
    </button>
</form>
