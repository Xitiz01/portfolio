<?php
/**
 * portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package portfolio
 */

if ( ! defined( 'PORTFOLIO_VERSION' ) ) {
	/**
	 * Define the version of the theme
	 * 
	 * @since 1.0.0
	 * @return void
	 */
	// Replace the version number of the theme on each release.
	$theme = wp_get_theme();
	define( 'PORTFOLIO_VERSION', $theme->get('Version') );
}
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * WP Hooked
 */
require get_template_directory() . '/inc/wp-hooked.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

