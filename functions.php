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
 * Theme Options
 */
require get_template_directory() . '/inc/theme-options.php';

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

/**
 * Enable SVG upload support
 */
function portfolio_enable_svg_upload( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'portfolio_enable_svg_upload' );

/**
 * Sanitize SVG files on upload
 */
function portfolio_sanitize_svg( $file ) {
	if ( $file['type'] === 'image/svg+xml' ) {
		if ( ! function_exists( 'simplexml_load_file' ) ) {
			return $file;
		}

		// Check if file is actually an SVG
		$file_content = file_get_contents( $file['tmp_name'] );
		if ( $file_content === false ) {
			return $file;
		}

		// Remove any PHP code from SVG
		$file_content = preg_replace( '/<\?php.*?\?>/s', '', $file_content );
		$file_content = preg_replace( '/<\?.*?\?>/s', '', $file_content );
		$file_content = preg_replace( '/<script.*?<\/script>/s', '', $file_content );

		// Validate SVG structure
		libxml_use_internal_errors( true );
		$svg = simplexml_load_string( $file_content );
		libxml_clear_errors();

		if ( $svg === false ) {
			$file['error'] = __( 'Invalid SVG file format.', 'portfolio' );
			return $file;
		}

		// Write sanitized content back to file
		file_put_contents( $file['tmp_name'], $file_content );
	}

	return $file;
}
add_filter( 'wp_handle_upload_prefilter', 'portfolio_sanitize_svg' );

/**
 * Add SVG support to media library
 */
function portfolio_fix_svg_thumb_display() {
	echo '
	<style>
	td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { 
		width: 100% !important; 
		height: auto !important; 
	}
	</style>
	';
}
add_action( 'admin_head', 'portfolio_fix_svg_thumb_display' );

