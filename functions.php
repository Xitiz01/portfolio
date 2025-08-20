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

/**
 * Helper function to get testimonial data
 */
function portfolio_get_testimonial_data( $number ) {
	$testimonial = array(
		'content' => get_option( 'testimonial_' . $number . '_content', '' ),
		'name' => get_option( 'testimonial_' . $number . '_name', '' ),
		'position' => get_option( 'testimonial_' . $number . '_position', '' ),
		'image' => get_option( 'testimonial_' . $number . '_image', get_template_directory_uri() . '/assets/img/person/person-f-' . $number . '.webp' ),
		'highlight' => get_option( 'testimonial_' . $number . '_highlight', '' )
	);
	
	return $testimonial;
}

/**
 * Helper function to render a single testimonial
 */
function portfolio_render_testimonial( $number, $delay = 0 ) {
	$testimonial = portfolio_get_testimonial_data( $number );
	
	if ( empty( $testimonial['content'] ) || empty( $testimonial['name'] ) ) {
		return false;
	}
	
	$highlight_class = $testimonial['highlight'] ? ' highlight' : '';
	$delay_attr = $delay > 0 ? ' data-aos-delay="' . $delay . '"' : '';
	
	ob_start();
	?>
	<div class="testimonial-item<?php echo $highlight_class; ?>" data-aos="fade-up"<?php echo $delay_attr; ?>>
		<div class="testimonial-content">
			<div class="quote-pattern">
				<i class="bi bi-quote"></i>
			</div>
			<p><?php echo esc_html( $testimonial['content'] ); ?></p>
			<div class="client-info">
				<div class="client-image">
					<img src="<?php echo esc_url( $testimonial['image'] ); ?>" alt="<?php echo esc_attr( $testimonial['name'] ); ?>">
				</div>
				<div class="client-details">
					<h3><?php echo esc_html( $testimonial['name'] ); ?></h3>
					<span class="position"><?php echo esc_html( $testimonial['position'] ); ?></span>
				</div>
			</div>
		</div>
	</div>
	<?php
	return ob_get_clean();
}

/**
 * Helper function to get contact section data
 */
function portfolio_get_contact_data() {
	$contact_data = array(
		'section_title' => get_option( 'contact_section_title', 'Contact' ),
		'section_description' => get_option( 'contact_section_description', 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit' ),
		'info_description' => get_option( 'contact_info_description', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.' ),
		'location' => array(
			'title' => get_option( 'contact_location_title', 'Our Location' ),
			'address_1' => get_option( 'contact_location_address_1', 'A108 Adam Street' ),
			'address_2' => get_option( 'contact_location_address_2', 'New York, NY 535022' )
		),
		'phone' => array(
			'title' => get_option( 'contact_phone_title', 'Phone Number' ),
			'primary' => get_option( 'contact_phone_1', '+1 5589 55488 55' ),
			'secondary' => get_option( 'contact_phone_2', '' )
		),
		'email' => array(
			'title' => get_option( 'contact_email_title', 'Email Address' ),
			'primary' => get_option( 'contact_email_1', 'info@example.com' ),
			'secondary' => get_option( 'contact_email_2', '' )
		),
		'form' => array(
			'title' => get_option( 'contact_form_title', 'Get In Touch' ),
			'description' => get_option( 'contact_form_description', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.' ),
			'shortcode' => get_option( 'contact_form_shortcode', '' ),
			'action' => get_option( 'contact_form_action', 'forms/contact.php' )
		)
	);
	
	return $contact_data;
}

/**
 * Helper function to render contact information section
 */
function portfolio_render_contact_info() {
	$contact_data = portfolio_get_contact_data();
	
	ob_start();
	?>
	<div class="info-box">
		<h3>Contact Info</h3>
		<p><?php echo esc_html( $contact_data['info_description'] ); ?></p>

		<div class="info-item">
			<div class="icon-box">
				<i class="bi bi-geo-alt"></i>
			</div>
			<div class="content">
				<h4><?php echo esc_html( $contact_data['location']['title'] ); ?></h4>
				<p><?php echo esc_html( $contact_data['location']['address_1'] ); ?></p>
				<p><?php echo esc_html( $contact_data['location']['address_2'] ); ?></p>
			</div>
		</div>

		<div class="info-item">
			<div class="icon-box">
				<i class="bi bi-telephone"></i>
			</div>
			<div class="content">
				<h4><?php echo esc_html( $contact_data['phone']['title'] ); ?></h4>
				<p><?php echo esc_html( $contact_data['phone']['primary'] ); ?></p>
				<?php if ( ! empty( $contact_data['phone']['secondary'] ) ) : ?>
					<p><?php echo esc_html( $contact_data['phone']['secondary'] ); ?></p>
				<?php endif; ?>
			</div>
		</div>

		<div class="info-item">
			<div class="icon-box">
				<i class="bi bi-envelope"></i>
			</div>
			<div class="content">
				<h4><?php echo esc_html( $contact_data['email']['title'] ); ?></h4>
				<p><?php echo esc_html( $contact_data['email']['primary'] ); ?></p>
				<?php if ( ! empty( $contact_data['email']['secondary'] ) ) : ?>
					<p><?php echo esc_html( $contact_data['email']['secondary'] ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php
	return ob_get_clean();
}

/**
 * Helper function to render contact form section
 */
function portfolio_render_contact_form() {
	$contact_data = portfolio_get_contact_data();
	
	ob_start();
	?>
	<div class="contact-form">
		<h3><?php echo esc_html( $contact_data['form']['title'] ); ?></h3>
		<p><?php echo esc_html( $contact_data['form']['description'] ); ?></p>

		<?php if ( ! empty( $contact_data['form']['shortcode'] ) ) : ?>
			<?php echo do_shortcode( $contact_data['form']['shortcode'] ); ?>
		<?php else : ?>
			<form action="<?php echo esc_url( $contact_data['form']['action'] ); ?>" method="post" class="php-email-form">
				<div class="row gy-4">
					<div class="col-md-6">
						<input type="text" name="name" class="form-control" placeholder="Your Name" required="">
					</div>
					<div class="col-md-6">
						<input type="email" class="form-control" name="email" placeholder="Your Email" required="">
					</div>
					<div class="col-12">
						<input type="text" class="form-control" name="subject" placeholder="Subject" required="">
					</div>
					<div class="col-12">
						<textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
					</div>
					<div class="col-12 text-center">
						<div class="loading">Loading</div>
						<div class="error-message"></div>
						<div class="sent-message">Your message has been sent. Thank you!</div>
						<button type="submit" class="btn">Send Message</button>
					</div>
				</div>
			</form>
		<?php endif; ?>
	</div>
	<?php
	return ob_get_clean();
}

/**
 * Helper function to get services section data
 */
function portfolio_get_services_data() {
	$services_data = array(
		'section_title' => get_option( 'services_section_title', 'Services' ),
		'section_description' => get_option( 'services_section_description', 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit' ),
		'header' => array(
			'heading_1' => get_option( 'services_header_heading_1', 'Innovative business' ),
			'heading_2' => get_option( 'services_header_heading_2', 'performance solutions' ),
			'summary' => get_option( 'services_header_summary', 'We integrate forward-thinking strategies, creative approaches, and state-of-the-art technologies to deliver exceptional customer experiences that drive growth and engage target markets.' ),
			'button_text' => get_option( 'services_header_button_text', 'View All Services' ),
			'button_url' => get_option( 'services_header_button_url', 'services.html' )
		),
		'services' => array()
	);
	
	// Get individual service data
	for ( $i = 1; $i <= 6; $i++ ) {
		$service = array(
			'title' => get_option( 'service_' . $i . '_title', '' ),
			'highlight' => get_option( 'service_' . $i . '_highlight', '' ),
			'description' => get_option( 'service_' . $i . '_description', '' ),
			'icon' => get_option( 'service_' . $i . '_icon', '' ),
			'url' => get_option( 'service_' . $i . '_url', 'service-details.html' )
		);
		
		if ( ! empty( $service['title'] ) ) {
			$services_data['services'][$i] = $service;
		}
	}
	
	return $services_data;
}

/**
 * Helper function to render a single service card
 */
function portfolio_render_service_card( $service_number, $delay = 0 ) {
	$service_data = array(
		'title' => get_option( 'service_' . $service_number . '_title', '' ),
		'highlight' => get_option( 'service_' . $service_number . '_highlight', '' ),
		'description' => get_option( 'service_' . $service_number . '_description', '' ),
		'icon' => get_option( 'service_' . $service_number . '_icon', '' ),
		'url' => get_option( 'service_' . $service_number . '_url', 'service-details.html' )
	);
	
	if ( empty( $service_data['title'] ) ) {
		return false;
	}
	
	$delay_attr = $delay > 0 ? ' data-aos-delay="' . $delay . '"' : '';
	
	ob_start();
	?>
	<div class="col-lg-4 col-md-6" data-aos="fade-up"<?php echo $delay_attr; ?>>
		<div class="service-card position-relative z-1">
			<div class="service-icon">
				<?php if ( ! empty( $service_data['icon'] ) ) : ?>
					<img src="<?php echo esc_url( $service_data['icon'] ); ?>" alt="<?php echo esc_attr( $service_data['title'] ); ?>" style="width: 64px; height: 64px; object-fit: contain;">
				<?php else : ?>
					<?php
					// Default icons for each service
					$default_icons = array(
						1 => 'bi bi-palette',
						2 => 'bi bi-gem',
						3 => 'bi bi-megaphone',
						4 => 'bi bi-code-slash',
						5 => 'bi bi-graph-up',
						6 => 'bi bi-camera-video'
					);
					$default_icon = isset( $default_icons[$service_number] ) ? $default_icons[$service_number] : 'bi bi-star';
					?>
					<i class="<?php echo esc_attr( $default_icon ); ?>"></i>
				<?php endif; ?>
			</div>
			<a href="<?php echo esc_url( $service_data['url'] ); ?>" class="card-action d-flex align-items-center justify-content-center rounded-circle">
				<i class="bi bi-arrow-up-right"></i>
			</a>
			<h3>
				<a href="<?php echo esc_url( $service_data['url'] ); ?>">
					<?php 
					$title_parts = explode( ' ', $service_data['title'] );
					$highlight_found = false;
					foreach ( $title_parts as $part ) {
						if ( strtolower( $part ) === strtolower( $service_data['highlight'] ) && ! $highlight_found ) {
							echo '<span>' . esc_html( $part ) . '</span>';
							$highlight_found = true;
						} else {
							echo esc_html( $part ) . ' ';
						}
					}
					?>
				</a>
			</h3>
			<p><?php echo esc_html( $service_data['description'] ); ?></p>
		</div>
	</div>
	<?php
	return ob_get_clean();
}

/**
 * Helper function to render services header section
 */
function portfolio_render_services_header() {
	$header_data = array(
		'heading_1' => get_option( 'services_header_heading_1', 'Innovative business' ),
		'heading_2' => get_option( 'services_header_heading_2', 'performance solutions' ),
		'summary' => get_option( 'services_header_summary', 'We integrate forward-thinking strategies, creative approaches, and state-of-the-art technologies to deliver exceptional customer experiences that drive growth and engage target markets.' ),
		'button_text' => get_option( 'services_header_button_text', 'View All Services' ),
		'button_url' => get_option( 'services_header_button_url', 'services.html' )
	);
	
	ob_start();
	?>
	<div class="service-header">
		<div class="row align-items-center">
			<div class="col-lg-8 col-md-12">
				<div class="service-intro">
					<h2 class="service-heading">
						<div><?php echo esc_html( $header_data['heading_1'] ); ?></div>
						<div><span><?php echo esc_html( $header_data['heading_2'] ); ?></span></div>
					</h2>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="service-summary">
					<p><?php echo esc_html( $header_data['summary'] ); ?></p>
					<a href="<?php echo esc_url( $header_data['button_url'] ); ?>" class="service-btn">
						<?php echo esc_html( $header_data['button_text'] ); ?>
						<i class="bi bi-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php
	return ob_get_clean();
}

