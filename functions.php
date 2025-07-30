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
 * Register navigation menus
 */
function portfolio_register_menus() {
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary Menu', 'portfolio' ),
		)
	);
}
add_action( 'init', 'portfolio_register_menus' );

/**
 * Add theme support for various features
 */
function portfolio_theme_setup() {
	// Add theme support for menus
	add_theme_support( 'menus' );
	
	// Add theme support for custom logo
	add_theme_support( 'custom-logo' );
	
	// Add theme support for post thumbnails
	add_theme_support( 'post-thumbnails' );
	
	// Add theme support for HTML5 markup
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
add_action( 'after_setup_theme', 'portfolio_theme_setup' );

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


