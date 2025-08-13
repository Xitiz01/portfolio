<?php
/**
 * Portfolio Theme Options - Main File
 *
 * @package Portfolio
 */

// Include all section files
require get_template_directory() . '/inc/theme-options/hero-section.php';
require get_template_directory() . '/inc/theme-options/about-section.php';
require get_template_directory() . '/inc/theme-options/counter-section.php';
require get_template_directory() . '/inc/theme-options/skills-section.php';
require get_template_directory() . '/inc/theme-options/resume-section.php';
require get_template_directory() . '/inc/theme-options/portfolio-section.php';
require get_template_directory() . '/inc/theme-options/services-section.php';
require get_template_directory() . '/inc/theme-options/testimonials-section.php';
require get_template_directory() . '/inc/theme-options/contact-section.php';

/**
 * Enqueue WordPress media library for theme options
 */
function portfolio_enqueue_media_library() {
	$screen = get_current_screen();
	if ( $screen && $screen->id === 'toplevel_page_portfolio-theme-options' ) {
		wp_enqueue_media();
	}
}
add_action( 'admin_enqueue_scripts', 'portfolio_enqueue_media_library' );

/**
 * Add admin menu for theme options
 */
function portfolio_admin_menu() {
	add_menu_page(
		'Portfolio Theme Options',
		'Portfolio Options',
		'manage_options',
		'portfolio-theme-options',
		'portfolio_theme_options_page',
		'dashicons-admin-customizer',
		60
	);
}
add_action( 'admin_menu', 'portfolio_admin_menu' );

/**
 * Theme options page callback
 */
function portfolio_theme_options_page() {
	// Check user capabilities
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	// Save options if form is submitted
	if ( isset( $_POST['portfolio_save_options'] ) && wp_verify_nonce( $_POST['portfolio_options_nonce'], 'portfolio_save_options' ) ) {
		portfolio_save_theme_options();
	}

	// Get current tab
	$current_tab = isset( $_GET['tab'] ) ? sanitize_text_field( $_GET['tab'] ) : 'hero';
	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		
		<h2 class="nav-tab-wrapper">
			<!-- Hero Section -->
			<a href="?page=portfolio-theme-options&tab=hero" class="nav-tab <?php echo $current_tab === 'hero' ? 'nav-tab-active' : ''; ?>">
				Hero Section
			</a>
			<!-- About Section -->
			<a href="?page=portfolio-theme-options&tab=about" class="nav-tab <?php echo $current_tab === 'about' ? 'nav-tab-active' : ''; ?>">
				About Section
			</a>
			<!-- Counter Section -->
			<a href="?page=portfolio-theme-options&tab=counter" class="nav-tab <?php echo $current_tab === 'counter' ? 'nav-tab-active' : ''; ?>">
				Counter Section
			</a>
			<!-- Skills Section -->
			<a href="?page=portfolio-theme-options&tab=skills" class="nav-tab <?php echo $current_tab === 'skills' ? 'nav-tab-active' : ''; ?>">
				Skills Section
			</a>
			<!-- Resume Section -->
			<a href="?page=portfolio-theme-options&tab=resume" class="nav-tab <?php echo $current_tab === 'resume' ? 'nav-tab-active' : ''; ?>">
				Resume Section
			</a>
			<!-- Portfolio Section -->
			<a href="?page=portfolio-theme-options&tab=portfolio" class="nav-tab <?php echo $current_tab === 'portfolio' ? 'nav-tab-active' : ''; ?>">
				Portfolio Section
			</a>
			<!-- Services Section -->
			<a href="?page=portfolio-theme-options&tab=services" class="nav-tab <?php echo $current_tab === 'services' ? 'nav-tab-active' : ''; ?>">
				Services Section
			</a>
			<!-- Testimonials Section -->
			<a href="?page=portfolio-theme-options&tab=testimonials" class="nav-tab <?php echo $current_tab === 'testimonials' ? 'nav-tab-active' : ''; ?>">
				Testimonials Section
			</a>
			<!-- Contact Section -->
			<a href="?page=portfolio-theme-options&tab=contact" class="nav-tab <?php echo $current_tab === 'contact' ? 'nav-tab-active' : ''; ?>">
				Contact Section
			</a>
		</h2>

		<form method="post" action="">
			<?php wp_nonce_field( 'portfolio_save_options', 'portfolio_options_nonce' ); ?>
			
			<?php
			switch ( $current_tab ) {
				case 'hero':
					portfolio_hero_tab_content();
					break;
				case 'about':
					portfolio_about_tab_content();
					break;
				case 'counter':
					portfolio_counter_tab_content();
					break;
				case 'skills':
					portfolio_skills_tab_content();
					break;
				case 'resume':
					portfolio_resume_tab_content();
					break;
				case 'portfolio':
					portfolio_portfolio_tab_content();
					break;
				case 'services':
					portfolio_services_tab_content();
					break;
				case 'testimonials':
					portfolio_testimonials_tab_content();
					break;
				case 'contact':
					portfolio_contact_tab_content();
					break;
				default:
					portfolio_hero_tab_content();
					break;
			}
			?>

			<p class="submit">
				<input type="submit" name="portfolio_save_options" class="button-primary" value="Save Options">
			</p>
		</form>
	</div>
	<?php
}

/**
 * Save theme options - calls individual section save functions
 */
function portfolio_save_theme_options() {
	// Call individual section save functions
	portfolio_save_hero_options();
	portfolio_save_about_options();
	portfolio_save_counter_options();
	portfolio_save_skills_options();
	portfolio_save_resume_options();
	portfolio_save_portfolio_options();
	portfolio_save_services_options();
	portfolio_save_testimonials_options();
	portfolio_save_contact_options();
	
	// Show success message
	add_action( 'admin_notices', function() {
		echo '<div class="notice notice-success is-dismissible"><p>Theme options saved successfully!</p></div>';
	} );
} 