<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package fortunato
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function fortunato_body_classes( $classes ) {
	$sidebarOpen = get_theme_mod('fortunato_theme_options_sidebaropen', '');
	
	// Adds a class in the user wants the sidebar open by default
	if ($sidebarOpen == 1) {
		$classes[] = 'sidebar-open-default';
	}
	
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'fortunato_body_classes' );

/**
* Add a pingback url auto-discovery header for singularly identifiable articles.
*/
function fortunato_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'fortunato_pingback_header' );
