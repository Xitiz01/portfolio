<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

/**
 * Helper function to get hero section options with defaults
 */
function get_hero_option( $option_name, $default = '' ) {
	return get_option( 'hero_' . $option_name, $default );
}

get_header();
?>
<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section">

  <?php if ( get_hero_option( 'show_background_circles', true ) ) : ?>
  <div class="background-elements">
	<div class="bg-circle circle-1"></div>
	<div class="bg-circle circle-2"></div>
  </div>
  <?php endif; ?>

  <div class="hero-content">

	<div class="container">
	  <div class="row align-items-center">

		<div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
		  <div class="hero-text">
			
			<h1><?php echo esc_html( get_hero_option( 'first_name', 'Kshitiz' ) ); ?><span class="accent-text"><?php echo esc_html( get_hero_option( 'last_name', 'Khanal' ) ); ?></span></h1>
			<h2><?php echo esc_html( get_hero_option( 'job_title', 'Software Engineer' ) ); ?></h2>
			
			<p class="lead">I'm a <span class="typed" data-typed-items="<?php 
				// Get skills from database - use the same approach as admin panel
				$hero_typed_skills = get_option( 'hero_typed_skills', array( 'Software Engineer', 'Web Developer', 'Brand Strategist', 'Creative Director' ) );
				
				// Ensure we have an array and filter out empty values
				if ( is_array( $hero_typed_skills ) ) {
					$clean_skills = array_filter( $hero_typed_skills );
					if ( ! empty( $clean_skills ) ) {
						echo esc_attr( implode( ', ', $clean_skills ) );
					} else {
						// If all skills are empty, use defaults
						echo 'Software Engineer, Web Developer, Brand Strategist, Creative Director';
					}
				} else {
					// Fallback to defaults if not an array
					echo 'Software Engineer, Web Developer, Brand Strategist, Creative Director';
				}
			?>"></span></p>
			<p class="description"><?php echo esc_html( get_hero_option( 'description', 'Passionate about creating exceptional digital experiences that blend innovative design with functional development. Let\'s bring your vision to life.' ) ); ?></p>

			<div class="hero-actions">
			  <?php 
			  $primary_link = get_hero_option( 'primary_button_link', '#portfolio' );
			  $secondary_link = get_hero_option( 'secondary_button_link', '#contact' );
			  ?>
			  <a href="<?php echo esc_attr( $primary_link ); ?>" class="btn btn-primary"><?php echo esc_html( get_hero_option( 'primary_button_text', 'View My Work' ) ); ?></a>
			  <a href="<?php echo esc_attr( $secondary_link ); ?>" class="btn btn-outline"><?php echo esc_html( get_hero_option( 'secondary_button_text', 'Get In Touch' ) ); ?></a>
			</div>

			<div class="social-links">
			  <?php 
			  $social_link_1_url = get_hero_option( 'social_link_1', '' );
			  $social_link_1_icon = get_hero_option( 'social_link_1_icon', '' );
			  if ( ! empty( $social_link_1_url ) || ! empty( $social_link_1_icon ) ) : ?>
				<a href="<?php echo esc_attr( $social_link_1_url ); ?>">
					<?php if ( $social_link_1_icon ) : ?>
						<?php 
						$icon_extension = pathinfo( $social_link_1_icon, PATHINFO_EXTENSION );
						if ( strtolower( $icon_extension ) === 'svg' ) : ?>
							<img src="<?php echo esc_url( $social_link_1_icon ); ?>" alt="Social Link 1" style="width: 24px; height: 24px; filter: brightness(0) invert(1);">
						<?php else : ?>
							<img src="<?php echo esc_url( $social_link_1_icon ); ?>" alt="Social Link 1" style="width: 24px; height: 24px;">
						<?php endif; ?>
					<?php else : ?>
						<i class="bi bi-link-45deg"></i>
					<?php endif; ?>
				</a>
			  <?php endif; ?>

			  <?php 
			  $social_link_2_url = get_hero_option( 'social_link_2', '' );
			  $social_link_2_icon = get_hero_option( 'social_link_2_icon', '' );
			  if ( ! empty( $social_link_2_url ) || ! empty( $social_link_2_icon ) ) : ?>
				<a href="<?php echo esc_attr( $social_link_2_url ); ?>">
					<?php if ( $social_link_2_icon ) : ?>
						<?php 
						$icon_extension = pathinfo( $social_link_2_icon, PATHINFO_EXTENSION );
						if ( strtolower( $icon_extension ) === 'svg' ) : ?>
							<img src="<?php echo esc_url( $social_link_2_icon ); ?>" alt="Social Link 2" style="width: 24px; height: 24px; filter: brightness(0) invert(1);">
						<?php else : ?>
							<img src="<?php echo esc_url( $social_link_2_icon ); ?>" alt="Social Link 2" style="width: 24px; height: 24px;">
						<?php endif; ?>
					<?php else : ?>
						<i class="bi bi-link-45deg"></i>
					<?php endif; ?>
				</a>
			  <?php endif; ?>

			  <?php 
			  $social_link_3_url = get_hero_option( 'social_link_3', '' );
			  $social_link_3_icon = get_hero_option( 'social_link_3_icon', '' );
			  if ( ! empty( $social_link_3_url ) || ! empty( $social_link_3_icon ) ) : ?>
				<a href="<?php echo esc_attr( $social_link_3_url ); ?>">
					<?php if ( $social_link_3_icon ) : ?>
						<?php 
						$icon_extension = pathinfo( $social_link_3_icon, PATHINFO_EXTENSION );
						if ( strtolower( $icon_extension ) === 'svg' ) : ?>
							<img src="<?php echo esc_url( $social_link_3_icon ); ?>" alt="Social Link 3" style="width: 24px; height: 24px; filter: brightness(0) invert(1);">
						<?php else : ?>
							<img src="<?php echo esc_url( $social_link_3_icon ); ?>" alt="Social Link 3" style="width: 24px; height: 24px;">
						<?php endif; ?>
					<?php else : ?>
						<i class="bi bi-link-45deg"></i>
					<?php endif; ?>
				</a>
			  <?php endif; ?>

			  <?php 
			  $social_link_4_url = get_hero_option( 'social_link_4', '' );
			  $social_link_4_icon = get_hero_option( 'social_link_4_icon', '' );
			  if ( ! empty( $social_link_4_url ) || ! empty( $social_link_4_icon ) ) : ?>
				<a href="<?php echo esc_attr( $social_link_4_url ); ?>">
					<?php if ( $social_link_4_icon ) : ?>
						<?php 
						$icon_extension = pathinfo( $social_link_4_icon, PATHINFO_EXTENSION );
						if ( strtolower( $icon_extension ) === 'svg' ) : ?>
							<img src="<?php echo esc_url( $social_link_4_icon ); ?>" alt="Social Link 4" style="width: 24px; height: 24px; filter: brightness(0) invert(1);">
						<?php else : ?>
							<img src="<?php echo esc_url( $social_link_4_icon ); ?>" alt="Social Link 4" style="width: 24px; height: 24px;">
						<?php endif; ?>
					<?php else : ?>
						<i class="bi bi-link-45deg"></i>
					<?php endif; ?>
				</a>
			  <?php endif; ?>
			</div>
		  </div>
		</div>

		<div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
		  <div class="hero-visual">
			<div class="profile-container">
			  <div class="profile-background"></div>
			  <?php 
			  $profile_image = get_option( 'hero_profile_image', get_template_directory_uri() . '/assets/img/profile/profile-2.webp' );
			  $profile_alt = get_hero_option( 'first_name', 'Kshitiz' ) . ' ' . get_hero_option( 'last_name', 'Khanal' );
			  ?>
			  <img src="<?php echo esc_url( $profile_image ); ?>" alt="<?php echo esc_attr( $profile_alt ); ?>" class="profile-image">
			</div>
		  </div>
		</div>

	  </div>
	</div>
  </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

	<div class="row">
	  <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="200">
		<div class="profile-card">
		  <div class="profile-header">
			<div class="profile-image">
			  <img src="<?php echo esc_url( get_option( 'profile_image', get_template_directory_uri() . '/assets/img/profile/profile-square-3.webp' ) ); ?>" alt="Profile Image" class="img-fluid">
			</div>
			<div class="profile-badge">
			  <i class="bi bi-check-circle-fill"></i>
			</div>
		  </div>

		  <div class="profile-content">
			<h3><?php echo esc_html( get_option( 'profile_name', 'Marcus Thompson' ) ); ?></h3>
			<p class="profession"><?php echo esc_html( get_option( 'profile_profession', 'Creative Director & Developer' ) ); ?></p>

			<div class="contact-links">
			  <a href="mailto:<?php echo esc_attr( get_option( 'profile_email', 'marcus@example.com' ) ); ?>" class="contact-item">
				<i class="bi bi-envelope"></i>
				<?php echo esc_html( get_option( 'profile_email', 'marcus@example.com' ) ); ?>
			  </a>
			  <a href="tel:<?php echo esc_attr( get_option( 'profile_phone', '+1 (555) 123-4567' ) ); ?>" class="contact-item">
				<i class="bi bi-telephone"></i>
				<?php echo esc_html( get_option( 'profile_phone', '+1 (555) 123-4567' ) ); ?>
			  </a>
			  <?php 
			  $location_url = get_option( 'profile_location_url', '' );
			  if ( ! empty( $location_url ) ) {
				  $href = esc_url( $location_url );
				  $target = '_blank';
			  } else {
				  $href = 'https://maps.google.com/?q=' . urlencode( get_option( 'profile_location', 'San Francisco, CA' ) );
				  $target = '_blank';
			  }
			  ?>
			  <a href="<?php echo $href; ?>" target="<?php echo $target; ?>" class="contact-item">
				<i class="bi bi-geo-alt"></i>
				<?php echo esc_html( get_option( 'profile_location', 'San Francisco, CA' ) ); ?>
			  </a>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
		<div class="about-content">
		  <div class="section-header">
			<span class="badge-text"><?php echo esc_html( get_option( 'about_badge_text', 'Get to Know Me' ) ); ?></span>
			<h2><?php echo esc_html( get_option( 'about_title', 'Passionate About Creating Digital Experiences' ) ); ?></h2>
		  </div>

		  <div class="description">
			<?php echo wp_kses_post( wpautop( get_option( 'about_content', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.

Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.' ) ) ); ?>
		  </div>

		  <div class="stats-grid">
			<div class="stat-item">
			  <div class="stat-number"><?php echo esc_html( get_option( 'stats_projects', '150+' ) ); ?></div>
			  <div class="stat-label">Projects Completed</div>
			</div>
			<div class="stat-item">
			  <div class="stat-number"><?php echo esc_html( get_option( 'stats_experience', '5+' ) ); ?></div>
			  <div class="stat-label">Years Experience</div>
			</div>
			<div class="stat-item">
			  <div class="stat-number"><?php echo esc_html( get_option( 'stats_satisfaction', '98%' ) ); ?></div>
			  <div class="stat-label">Client Satisfaction</div>
			</div>
		  </div>

		  <div class="details-grid">
			<div class="detail-row">
			  <div class="detail-item">
				<span class="detail-label">Specialization</span>
				<span class="detail-value"><?php echo esc_html( get_option( 'detail_specialization', 'UI/UX Design & Development' ) ); ?></span>
			  </div>
			  <div class="detail-item">
				<span class="detail-label">Experience Level</span>
				<span class="detail-value"><?php echo esc_html( get_option( 'detail_experience_level', 'Senior Professional' ) ); ?></span>
			  </div>
			</div>
			<div class="detail-row">
			  <div class="detail-item">
				<span class="detail-label">Education</span>
				<span class="detail-value"><?php echo esc_html( get_option( 'detail_education', 'Computer Science, MIT' ) ); ?></span>
			  </div>
			  <div class="detail-item">
				<span class="detail-label">Languages</span>
				<span class="detail-value"><?php echo esc_html( get_option( 'detail_languages', 'English, Spanish, French' ) ); ?></span>
			  </div>
			</div>
		  </div>

		  <div class="cta-section">
			<a href="<?php echo esc_url( get_option( 'cta_resume_url', '#' ) ); ?>" class="btn btn-primary">
			  <i class="bi bi-download"></i>
			  <?php echo esc_html( get_option( 'cta_resume_text', 'Download Resume' ) ); ?>
			</a>
			<a href="<?php echo esc_url( get_option( 'cta_talk_url', '#contact' ) ); ?>" class="btn btn-outline">
			  <i class="bi bi-chat-dots"></i>
			  <?php echo esc_html( get_option( 'cta_talk_text', 'Let\'s Talk' ) ); ?>
			</a>
		  </div>
		</div>
	  </div>
	</div>

  </div>

</section><!-- /About Section -->

<!-- Stats Section -->
<section id="stats" class="stats section light-background">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

	<div class="row justify-content-center">
	  <div class="col-lg-10">
		<?php if ( get_option( 'counter_section_title' ) || get_option( 'counter_section_description' ) ) : ?>
		<div class="section-title text-center mb-5" data-aos="fade-up">
		  <?php if ( get_option( 'counter_section_title' ) ) : ?>
		  <h2><?php echo esc_html( get_option( 'counter_section_title', 'Statistics' ) ); ?></h2>
		  <?php endif; ?>
		  <?php if ( get_option( 'counter_section_description' ) ) : ?>
		  <p><?php echo esc_html( get_option( 'counter_section_description', 'Our achievements and milestones' ) ); ?></p>
		  <?php endif; ?>
		</div>
		<?php endif; ?>

		<div class="stats-wrapper">
		  <div class="stats-item" data-aos="zoom-in" data-aos-delay="150">
			<div class="icon-wrapper">
			  <i class="<?php echo esc_attr( get_option( 'counter_1_icon', 'bi bi-emoji-smile' ) ); ?>"></i>
			</div>
			<span data-purecounter-start="0" data-purecounter-end="<?php echo esc_attr( get_option( 'counter_1_number', '232' ) ); ?>" data-purecounter-duration="1" class="purecounter"></span>
			<p><?php echo esc_html( get_option( 'counter_1_label', 'Happy Clients' ) ); ?></p>
		  </div><!-- End Stats Item -->

		  <div class="stats-item" data-aos="zoom-in" data-aos-delay="200">
			<div class="icon-wrapper">
			  <i class="<?php echo esc_attr( get_option( 'counter_2_icon', 'bi bi-journal-richtext' ) ); ?>"></i>
			</div>
			<span data-purecounter-start="0" data-purecounter-end="<?php echo esc_attr( get_option( 'counter_2_number', '521' ) ); ?>" data-purecounter-duration="1" class="purecounter"></span>
			<p><?php echo esc_html( get_option( 'counter_2_label', 'Projects' ) ); ?></p>
		  </div><!-- End Stats Item -->

		  <div class="stats-item" data-aos="zoom-in" data-aos-delay="250">
			<div class="icon-wrapper">
			  <i class="<?php echo esc_attr( get_option( 'counter_3_icon', 'bi bi-headset' ) ); ?>"></i>
			</div>
			<span data-purecounter-start="0" data-purecounter-end="<?php echo esc_attr( get_option( 'counter_3_number', '1463' ) ); ?>" data-purecounter-duration="1" class="purecounter"></span>
			<p><?php echo esc_html( get_option( 'counter_3_label', 'Hours Of Support' ) ); ?></p>
		  </div><!-- End Stats Item -->

		  <div class="stats-item" data-aos="zoom-in" data-aos-delay="300">
			<div class="icon-wrapper">
			  <i class="<?php echo esc_attr( get_option( 'counter_4_icon', 'bi bi-people' ) ); ?>"></i>
			</div>
			<span data-purecounter-start="0" data-purecounter-end="<?php echo esc_attr( get_option( 'counter_4_number', '15' ) ); ?>" data-purecounter-duration="1" class="purecounter"></span>
			<p><?php echo esc_html( get_option( 'counter_4_label', 'Hard Workers' ) ); ?></p>
		  </div><!-- End Stats Item -->
		</div>
	  </div>
	</div>

  </div>

</section><!-- /Stats Section -->

<!-- Skills Section -->
<section id="skills" class="skills section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
	<h2><?php echo esc_html( get_option( 'skills_section_title', 'Skills' ) ); ?></h2>
	<p><?php echo esc_html( get_option( 'skills_section_description', 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit' ) ); ?></p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

	<div class="row">
	  <div class="col-lg-6">
		<div class="skills-category" data-aos="fade-up" data-aos-delay="200">
		  <h3><?php echo esc_html( get_option( 'frontend_category_title', 'Front-end Development' ) ); ?></h3>
		  <div class="skills-animation">
			<?php
			// Frontend Skill 1
			$frontend_skill_1_name = get_option( 'frontend_skill_1_name', 'HTML/CSS' );
			$frontend_skill_1_percentage = get_option( 'frontend_skill_1_percentage', '95' );
			$frontend_skill_1_description = get_option( 'frontend_skill_1_description', 'Expert level knowledge of semantic HTML5 and modern CSS3 techniques' );
			
			if ( ! empty( $frontend_skill_1_name ) ) :
			?>
			<div class="skill-item">
			  <div class="d-flex justify-content-between align-items-center">
				<h4><?php echo esc_html( $frontend_skill_1_name ); ?></h4>
				<span class="skill-percentage"><?php echo esc_html( $frontend_skill_1_percentage ); ?>%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo esc_attr( $frontend_skill_1_percentage ); ?>" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			  <div class="skill-tooltip"><?php echo esc_html( $frontend_skill_1_description ); ?></div>
			</div>
			<?php endif; ?>

			<?php
			// Frontend Skill 2
			$frontend_skill_2_name = get_option( 'frontend_skill_2_name', 'JavaScript' );
			$frontend_skill_2_percentage = get_option( 'frontend_skill_2_percentage', '85' );
			$frontend_skill_2_description = get_option( 'frontend_skill_2_description', 'Strong proficiency in ES6+, DOM manipulation, and modern frameworks' );
			
			if ( ! empty( $frontend_skill_2_name ) ) :
			?>
			<div class="skill-item">
			  <div class="d-flex justify-content-between align-items-center">
				<h4><?php echo esc_html( $frontend_skill_2_name ); ?></h4>
				<span class="skill-percentage"><?php echo esc_html( $frontend_skill_2_percentage ); ?>%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo esc_attr( $frontend_skill_2_percentage ); ?>" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			  <div class="skill-tooltip"><?php echo esc_html( $frontend_skill_2_description ); ?></div>
			</div>
			<?php endif; ?>

			<?php
			// Frontend Skill 3
			$frontend_skill_3_name = get_option( 'frontend_skill_3_name', 'React' );
			$frontend_skill_3_percentage = get_option( 'frontend_skill_3_percentage', '80' );
			$frontend_skill_3_description = get_option( 'frontend_skill_3_description', 'Experience with React hooks, state management, and component architecture' );
			
			if ( ! empty( $frontend_skill_3_name ) ) :
			?>
			<div class="skill-item">
			  <div class="d-flex justify-content-between align-items-center">
				<h4><?php echo esc_html( $frontend_skill_3_name ); ?></h4>
				<span class="skill-percentage"><?php echo esc_html( $frontend_skill_3_percentage ); ?>%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo esc_attr( $frontend_skill_3_percentage ); ?>" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			  <div class="skill-tooltip"><?php echo esc_html( $frontend_skill_3_description ); ?></div>
			</div>
			<?php endif; ?>
		  </div>
		</div><!-- End Frontend Skills -->
	  </div>

	  <div class="col-lg-6">
		<div class="skills-category" data-aos="fade-up" data-aos-delay="300">
		  <h3><?php echo esc_html( get_option( 'backend_category_title', 'Back-end Development' ) ); ?></h3>
		  <div class="skills-animation">
			<?php
			// Backend Skill 1
			$backend_skill_1_name = get_option( 'backend_skill_1_name', 'Node.js' );
			$backend_skill_1_percentage = get_option( 'backend_skill_1_percentage', '75' );
			$backend_skill_1_description = get_option( 'backend_skill_1_description', 'Server-side JavaScript development with Express and REST APIs' );
			
			if ( ! empty( $backend_skill_1_name ) ) :
			?>
			<div class="skill-item">
			  <div class="d-flex justify-content-between align-items-center">
				<h4><?php echo esc_html( $backend_skill_1_name ); ?></h4>
				<span class="skill-percentage"><?php echo esc_html( $backend_skill_1_percentage ); ?>%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo esc_attr( $backend_skill_1_percentage ); ?>" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			  <div class="skill-tooltip"><?php echo esc_html( $backend_skill_1_description ); ?></div>
			</div>
			<?php endif; ?>

			<?php
			// Backend Skill 2
			$backend_skill_2_name = get_option( 'backend_skill_2_name', 'Python' );
			$backend_skill_2_percentage = get_option( 'backend_skill_2_percentage', '70' );
			$backend_skill_2_description = get_option( 'backend_skill_2_description', 'Python development with Django and data analysis tools' );
			
			if ( ! empty( $backend_skill_2_name ) ) :
			?>
			<div class="skill-item">
			  <div class="d-flex justify-content-between align-items-center">
				<h4><?php echo esc_html( $backend_skill_2_name ); ?></h4>
				<span class="skill-percentage"><?php echo esc_html( $backend_skill_2_percentage ); ?>%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo esc_attr( $backend_skill_2_percentage ); ?>" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			  <div class="skill-tooltip"><?php echo esc_html( $backend_skill_2_description ); ?></div>
			</div>
			<?php endif; ?>

			<?php
			// Backend Skill 3
			$backend_skill_3_name = get_option( 'backend_skill_3_name', 'SQL' );
			$backend_skill_3_percentage = get_option( 'backend_skill_3_percentage', '65' );
			$backend_skill_3_description = get_option( 'backend_skill_3_description', 'Database design, optimization, and complex queries' );
			
			if ( ! empty( $backend_skill_3_name ) ) :
			?>
			<div class="skill-item">
			  <div class="d-flex justify-content-between align-items-center">
				<h4><?php echo esc_html( $backend_skill_3_name ); ?></h4>
				<span class="skill-percentage"><?php echo esc_html( $backend_skill_3_percentage ); ?>%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo esc_attr( $backend_skill_3_percentage ); ?>" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			  <div class="skill-tooltip"><?php echo esc_html( $backend_skill_3_description ); ?></div>
			</div>
			<?php endif; ?>
		  </div>
		</div><!-- End Backend Skills -->
	  </div>
	</div>

  </div>

</section><!-- /Skills Section -->

<!-- Resume Section -->
<section id="resume" class="resume section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
	<h2><?php echo esc_html( get_option( 'resume_section_title', 'Resume' ) ); ?></h2>
	<p><?php echo esc_html( get_option( 'resume_section_description', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.' ) ); ?></p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

	<div class="row gy-4">
	  <!-- Left column with summary and contact -->
	  <div class="col-lg-4">
		<div class="resume-side" data-aos="fade-right" data-aos-delay="100">
		  <div class="profile-img mb-4">
			<?php 
			$profile_image = get_option( 'resume_profile_image', get_template_directory_uri() . '/assets/img/profile/profile-square-2.webp' );
			if ( ! empty( $profile_image ) ) : ?>
				<img src="<?php echo esc_url( $profile_image ); ?>" alt="Profile" class="img-fluid rounded">
			<?php endif; ?>
		  </div>

		  <h3>Professional Summary</h3>
		  <p><?php echo esc_html( get_option( 'resume_professional_summary', 'Driven software architect with expertise in developing scalable, high-performance enterprise solutions. Passionate about leveraging cutting-edge technologies to solve complex business challenges.' ) ); ?></p>

		  <h3 class="mt-4">Contact Information</h3>
		  <ul class="contact-info list-unstyled">
			<?php if ( get_option( 'resume_address' ) ) : ?>
				<li><i class="bi bi-geo-alt"></i> <?php echo esc_html( get_option( 'resume_address' ) ); ?></li>
			<?php endif; ?>
			<?php if ( get_option( 'resume_email' ) ) : ?>
				<li><i class="bi bi-envelope"></i> <?php echo esc_html( get_option( 'resume_email' ) ); ?></li>
			<?php endif; ?>
			<?php if ( get_option( 'resume_phone' ) ) : ?>
				<li><i class="bi bi-phone"></i> <?php echo esc_html( get_option( 'resume_phone' ) ); ?></li>
			<?php endif; ?>
			<?php if ( get_option( 'resume_linkedin' ) ) : ?>
				<li><i class="bi bi-linkedin"></i> <?php echo esc_html( get_option( 'resume_linkedin' ) ); ?></li>
			<?php endif; ?>
		  </ul>

		  <div class="skills-animation mt-4">
			<h3>Technical Skills</h3>
			<?php
			// Technical Skill 1
			$skill_1_name = get_option( 'resume_skill_1_name', 'Web Development' );
			$skill_1_percentage = get_option( 'resume_skill_1_percentage', '95' );
			if ( ! empty( $skill_1_name ) && ! empty( $skill_1_percentage ) ) : ?>
			<div class="skill-item">
			  <div class="d-flex justify-content-between">
				<span><?php echo esc_html( $skill_1_name ); ?></span>
				<span><?php echo esc_html( $skill_1_percentage ); ?>%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo esc_attr( $skill_1_percentage ); ?>" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			</div>
			<?php endif; ?>

			<?php
			// Technical Skill 2
			$skill_2_name = get_option( 'resume_skill_2_name', 'UI/UX Design' );
			$skill_2_percentage = get_option( 'resume_skill_2_percentage', '85' );
			if ( ! empty( $skill_2_name ) && ! empty( $skill_2_percentage ) ) : ?>
			<div class="skill-item">
			  <div class="d-flex justify-content-between">
				<span><?php echo esc_html( $skill_2_name ); ?></span>
				<span><?php echo esc_html( $skill_2_percentage ); ?>%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo esc_attr( $skill_2_percentage ); ?>" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			</div>
			<?php endif; ?>

			<?php
			// Technical Skill 3
			$skill_3_name = get_option( 'resume_skill_3_name', 'Cloud Architecture' );
			$skill_3_percentage = get_option( 'resume_skill_3_percentage', '90' );
			if ( ! empty( $skill_3_name ) && ! empty( $skill_3_percentage ) ) : ?>
			<div class="skill-item">
			  <div class="d-flex justify-content-between">
				<span><?php echo esc_html( $skill_3_name ); ?></span>
				<span><?php echo esc_html( $skill_3_percentage ); ?>%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo esc_attr( $skill_3_percentage ); ?>" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			</div>
			<?php endif; ?>

			<?php
			// Technical Skill 4
			$skill_4_name = get_option( 'resume_skill_4_name', 'Project Management' );
			$skill_4_percentage = get_option( 'resume_skill_4_percentage', '80' );
			if ( ! empty( $skill_4_name ) && ! empty( $skill_4_percentage ) ) : ?>
			<div class="skill-item">
			  <div class="d-flex justify-content-between">
				<span><?php echo esc_html( $skill_4_name ); ?></span>
				<span><?php echo esc_html( $skill_4_percentage ); ?>%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo esc_attr( $skill_4_percentage ); ?>" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			</div>
			<?php endif; ?>
		  </div>
		</div>
	  </div>

	  <!-- Right column with experience and education -->
	  <div class="col-lg-8 ps-4 ps-lg-5">
		<!-- Experience Section -->
		<div class="resume-section" data-aos="fade-up">
		  <h3><i class="bi bi-briefcase me-2"></i>Professional Experience</h3>

		  <?php
		  // Experience 1
		  $exp_1_title = get_option( 'resume_experience_1_title', 'Senior Software Architect' );
		  $exp_1_period = get_option( 'resume_experience_1_period', '2022 - Present' );
		  $exp_1_company = get_option( 'resume_experience_1_company', 'Tech Innovations Inc.' );
		  $exp_1_description = get_option( 'resume_experience_1_description', 'Lead the architectural design and implementation of enterprise-scale applications. Mentor team of 12 developers and establish technical best practices. Drive adoption of microservices architecture and cloud-native solutions. Reduce system downtime by 75% through improved architecture and monitoring.' );
		  
		  if ( ! empty( $exp_1_title ) && ! empty( $exp_1_company ) ) : ?>
		  <div class="resume-item">
			<h4><?php echo esc_html( $exp_1_title ); ?></h4>
			<?php if ( ! empty( $exp_1_period ) ) : ?>
				<h5><?php echo esc_html( $exp_1_period ); ?></h5>
			<?php endif; ?>
			<p class="company"><i class="bi bi-building"></i> <?php echo esc_html( $exp_1_company ); ?></p>
			<?php if ( ! empty( $exp_1_description ) ) : ?>
				<p><?php echo esc_html( $exp_1_description ); ?></p>
			<?php endif; ?>
		  </div>
		  <?php endif; ?>

		  <?php
		  // Experience 2
		  $exp_2_title = get_option( 'resume_experience_2_title', 'Lead Developer' );
		  $exp_2_period = get_option( 'resume_experience_2_period', '2019 - 2022' );
		  $exp_2_company = get_option( 'resume_experience_2_company', 'Digital Solutions Corp.' );
		  $exp_2_description = get_option( 'resume_experience_2_description', 'Spearheaded development of company\'s flagship product reaching 1M+ users. Implemented CI/CD pipeline reducing deployment time by 60%. Managed team of 8 developers across multiple projects. Increased code test coverage from 45% to 90%.' );
		  
		  if ( ! empty( $exp_2_title ) && ! empty( $exp_2_company ) ) : ?>
		  <div class="resume-item">
			<h4><?php echo esc_html( $exp_2_title ); ?></h4>
			<?php if ( ! empty( $exp_2_period ) ) : ?>
				<h5><?php echo esc_html( $exp_2_period ); ?></h5>
			<?php endif; ?>
			<p class="company"><i class="bi bi-building"></i> <?php echo esc_html( $exp_2_company ); ?></p>
			<?php if ( ! empty( $exp_2_description ) ) : ?>
				<p><?php echo esc_html( $exp_2_description ); ?></p>
			<?php endif; ?>
		  </div>
		  <?php endif; ?>
		</div>

		<!-- Education Section -->
		<div class="resume-section" data-aos="fade-up" data-aos-delay="100">
		  <h3><i class="bi bi-mortarboard me-2"></i>Education</h3>

		  <?php
		  // Education 1
		  $edu_1_degree = get_option( 'resume_education_1_degree', 'Master of Science in Computer Science' );
		  $edu_1_period = get_option( 'resume_education_1_period', '2017 - 2019' );
		  $edu_1_school = get_option( 'resume_education_1_school', 'Stanford University' );
		  $edu_1_description = get_option( 'resume_education_1_description', 'Specialized in Artificial Intelligence and Machine Learning. Graduated with honors.' );
		  
		  if ( ! empty( $edu_1_degree ) && ! empty( $edu_1_school ) ) : ?>
		  <div class="resume-item">
			<h4><?php echo esc_html( $edu_1_degree ); ?></h4>
			<?php if ( ! empty( $edu_1_period ) ) : ?>
				<h5><?php echo esc_html( $edu_1_period ); ?></h5>
			<?php endif; ?>
			<p class="school"><i class="bi bi-mortarboard"></i> <?php echo esc_html( $edu_1_school ); ?></p>
			<?php if ( ! empty( $edu_1_description ) ) : ?>
				<p><?php echo esc_html( $edu_1_description ); ?></p>
			<?php endif; ?>
		  </div>
		  <?php endif; ?>

		  <?php
		  // Education 2
		  $edu_2_degree = get_option( 'resume_education_2_degree', 'Bachelor of Science in Software Engineering' );
		  $edu_2_period = get_option( 'resume_education_2_period', '2013 - 2017' );
		  $edu_2_school = get_option( 'resume_education_2_school', 'MIT' );
		  $edu_2_description = get_option( 'resume_education_2_description', 'Dean\'s List all semesters. Led university\'s coding club.' );
		  
		  if ( ! empty( $edu_2_degree ) && ! empty( $edu_2_school ) ) : ?>
		  <div class="resume-item">
			<h4><?php echo esc_html( $edu_2_degree ); ?></h4>
			<?php if ( ! empty( $edu_2_period ) ) : ?>
				<h5><?php echo esc_html( $edu_2_period ); ?></h5>
			<?php endif; ?>
			<p class="school"><i class="bi bi-mortarboard"></i> <?php echo esc_html( $edu_2_school ); ?></p>
			<?php if ( ! empty( $edu_2_description ) ) : ?>
				<p><?php echo esc_html( $edu_2_description ); ?></p>
			<?php endif; ?>
		  </div>
		  <?php endif; ?>
		</div>

		<!-- Certifications Section -->
		<div class="resume-section" data-aos="fade-up" data-aos-delay="200">
		  <h3><i class="bi bi-award me-2"></i>Certifications</h3>

		  <?php
		  // Certification 1
		  $cert_1_name = get_option( 'resume_certification_1_name', 'AWS Certified Solutions Architect - Professional' );
		  $cert_1_year = get_option( 'resume_certification_1_year', '2023' );
		  
		  if ( ! empty( $cert_1_name ) ) : ?>
		  <div class="resume-item">
			<h4><?php echo esc_html( $cert_1_name ); ?></h4>
			<?php if ( ! empty( $cert_1_year ) ) : ?>
				<h5><?php echo esc_html( $cert_1_year ); ?></h5>
			<?php endif; ?>
		  </div>
		  <?php endif; ?>

		  <?php
		  // Certification 2
		  $cert_2_name = get_option( 'resume_certification_2_name', 'Google Cloud Professional Architect' );
		  $cert_2_year = get_option( 'resume_certification_2_year', '2022' );
		  
		  if ( ! empty( $cert_2_name ) ) : ?>
		  <div class="resume-item">
			<h4><?php echo esc_html( $cert_2_name ); ?></h4>
			<?php if ( ! empty( $cert_2_year ) ) : ?>
				<h5><?php echo esc_html( $cert_2_year ); ?></h5>
			<?php endif; ?>
		  </div>
		  <?php endif; ?>
		</div>
	  </div>
	</div>

  </div>

</section><!-- /Resume Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
	<h2><?php echo esc_html( get_option( 'portfolio_section_title', 'Portfolio' ) ); ?></h2>
	<p><?php echo esc_html( get_option( 'portfolio_section_description', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.' ) ); ?></p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

	<div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

	  <div class="row">
		<div class="col-lg-3 filter-sidebar">
		  <div class="filters-wrapper" data-aos="fade-right" data-aos-delay="150">
			<ul class="portfolio-filters isotope-filters">
			  <?php
			  $portfolio_categories = get_option( 'portfolio_categories', array(
				  array( 'name' => 'Photography', 'slug' => 'photography' ),
				  array( 'name' => 'Design', 'slug' => 'design' ),
				  array( 'name' => 'Automotive', 'slug' => 'automotive' ),
				  array( 'name' => 'Nature', 'slug' => 'nature' )
			  ) );
			  
			  // First category is always "All Projects"
			  if ( ! empty( $portfolio_categories ) ) : ?>
				  <li data-filter="*" class="filter-active">All Projects</li>
				  <?php foreach ( $portfolio_categories as $category ) : ?>
					  <li data-filter=".filter-<?php echo esc_attr( $category['slug'] ); ?>"><?php echo esc_html( $category['name'] ); ?></li>
				  <?php endforeach; ?>
			  <?php endif; ?>
			</ul>
		  </div>
		</div>

		<div class="col-lg-9">
		  <div class="row gy-4 portfolio-container isotope-container" data-aos="fade-up" data-aos-delay="200">

			<?php
			$portfolio_projects = get_option( 'portfolio_projects', array(
				array(
					'title' => 'Capturing Moments',
					'category' => 'photography',
					'image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-portrait-1.webp',
					'lightbox_image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-portrait-1.webp',
					'description' => 'Photography project showcasing beautiful moments',
					'link' => 'portfolio-details.html'
				),
				array(
					'title' => 'Woodcraft Design',
					'category' => 'design',
					'image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-2.webp',
					'lightbox_image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-2.webp',
					'description' => 'Web design project for woodcraft business',
					'link' => 'portfolio-details.html'
				),
				array(
					'title' => 'Classic Beauty',
					'category' => 'automotive',
					'image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-portrait-2.webp',
					'lightbox_image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-portrait-2.webp',
					'description' => 'Automotive photography project',
					'link' => 'portfolio-details.html'
				),
				array(
					'title' => 'Natural Growth',
					'category' => 'nature',
					'image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-portrait-4.webp',
					'lightbox_image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-portrait-4.webp',
					'description' => 'Nature photography project',
					'link' => 'portfolio-details.html'
				),
				array(
					'title' => 'Urban Stories',
					'category' => 'photography',
					'image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-5.webp',
					'lightbox_image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-5.webp',
					'description' => 'Urban photography storytelling',
					'link' => 'portfolio-details.html'
				),
				array(
					'title' => 'Digital Experience',
					'category' => 'design',
					'image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-6.webp',
					'lightbox_image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-6.webp',
					'description' => 'Digital design experience project',
					'link' => 'portfolio-details.html'
				)
			) );
			
			$initial_projects = get_option( 'portfolio_initial_projects', 6 );
			$total_projects = count( $portfolio_projects );
			
			// Randomize the projects for the initial display
			$shuffled_projects = $portfolio_projects;
			shuffle( $shuffled_projects );
			
			if ( ! empty( $shuffled_projects ) ) :
				// Show all projects initially (they will be filtered by JavaScript)
				foreach ( $shuffled_projects as $index => $project ) :
					// Get category name for display
					$category_name = '';
					foreach ( $portfolio_categories as $cat ) {
						if ( $cat['slug'] === $project['category'] ) {
							$category_name = $cat['name'];
							break;
						}
					}
					
					// Add data attributes for filtering and view more functionality
					$is_initial = $index < $initial_projects ? 'true' : 'false';
					?>
					<div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-<?php echo esc_attr( $project['category'] ); ?>" 
						 data-initial="<?php echo $is_initial; ?>" 
						 data-index="<?php echo $index; ?>"
						 style="<?php echo $index >= $initial_projects ? 'display: none;' : ''; ?>">
					  <div class="portfolio-wrap">
						<?php if ( ! empty( $project['image'] ) ) : ?>
							<img src="<?php echo esc_url( $project['image'] ); ?>" class="img-fluid" alt="<?php echo esc_attr( $project['title'] ); ?>" loading="lazy">
						<?php endif; ?>
						<div class="portfolio-info">
						  <div class="content">
							<?php if ( ! empty( $category_name ) ) : ?>
								<span class="category"><?php echo esc_html( $category_name ); ?></span>
							<?php endif; ?>
							<?php if ( ! empty( $project['title'] ) ) : ?>
								<h4><?php echo esc_html( $project['title'] ); ?></h4>
							<?php endif; ?>
							<div class="portfolio-links">
							  <?php if ( ! empty( $project['lightbox_image'] ) ) : ?>
								  <a href="<?php echo esc_url( $project['lightbox_image'] ); ?>" class="glightbox" title="<?php echo esc_attr( $project['title'] ); ?>"><i class="bi bi-plus-lg"></i></a>
							  <?php endif; ?>
							  <?php if ( ! empty( $project['link'] ) ) : ?>
								  <a href="<?php echo esc_url( $project['link'] ); ?>" title="More Details"><i class="bi bi-arrow-right"></i></a>
							  <?php endif; ?>
							</div>
						  </div>
						</div>
					  </div>
					</div><!-- End Portfolio Item -->
					<?php
				endforeach;
			endif;
			?>

		  </div><!-- End Portfolio Container -->
		  
		  <!-- View More Button (only visible on All Projects tab) -->
		  <?php if ( $total_projects > $initial_projects ) : ?>
		  <div class="text-center mt-4" id="portfolio-view-more-container" style="display: none;">
			<button type="button" class="btn btn-primary" id="portfolio-view-more-btn">
				View More Projects
			</button>
		  </div>
		  <?php endif; ?>
		</div>
	  </div>

	</div>

  </div>

</section><!-- /Portfolio Section -->

<!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
	<h2><?php echo esc_html( get_option( 'services_section_title', 'Services' ) ); ?></h2>
	<p><?php echo esc_html( get_option( 'services_section_description', 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit' ) ); ?></p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

	<div class="service-header">
	  <div class="row align-items-center">
		<div class="col-lg-8 col-md-12">
		  <div class="service-intro">
			<h2 class="service-heading">
			  <div><?php echo esc_html( get_option( 'services_header_heading_1', 'Innovative business' ) ); ?></div>
			  <div><span><?php echo esc_html( get_option( 'services_header_heading_2', 'performance solutions' ) ); ?></span></div>
			</h2>
		  </div>
		</div>
		<div class="col-lg-4 col-md-12">
		  <div class="service-summary">
			<p><?php echo esc_html( get_option( 'services_header_summary', 'We integrate forward-thinking strategies, creative approaches, and state-of-the-art technologies to deliver exceptional customer experiences that drive growth and engage target markets.' ) ); ?></p>
			<a href="<?php echo esc_url( get_option( 'services_header_button_url', 'services.html' ) ); ?>" class="service-btn">
			  <?php echo esc_html( get_option( 'services_header_button_text', 'View All Services' ) ); ?>
			  <i class="bi bi-arrow-right"></i>
			</a>
		  </div>
		</div>
	  </div>
	</div>

	<div class="row justify-content-center">
	  <?php
	  // Service 1
	  $service_1_title = get_option( 'service_1_title', 'Creative branding' );
	  $service_1_highlight = get_option( 'service_1_highlight', 'branding' );
	  $service_1_description = get_option( 'service_1_description', 'Nulla facilisi. Maecenas eget magna neque. Suspendisse potenti. Curabitur eleifend nisi non magna vulputate, vel condimentum libero tempus. Proin consectetur feugiat diam.' );
	  $service_1_icon = get_option( 'service_1_icon', '' );
	  $service_1_url = get_option( 'service_1_url', 'service-details.html' );
	  
	  if ( ! empty( $service_1_title ) ) :
	  ?>
	  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
		<div class="service-card position-relative z-1">
		  <div class="service-icon">
			<?php if ( ! empty( $service_1_icon ) ) : ?>
			  <img src="<?php echo esc_url( $service_1_icon ); ?>" alt="<?php echo esc_attr( $service_1_title ); ?>" style="width: 64px; height: 64px; object-fit: contain;">
			<?php else : ?>
			  <i class="bi bi-palette"></i>
			<?php endif; ?>
		  </div>
		  <a href="<?php echo esc_url( $service_1_url ); ?>" class="card-action d-flex align-items-center justify-content-center rounded-circle">
			<i class="bi bi-arrow-up-right"></i>
		  </a>
		  <h3>
			<a href="<?php echo esc_url( $service_1_url ); ?>">
			  <?php 
			  $title_parts = explode( ' ', $service_1_title );
			  $highlight_found = false;
			  foreach ( $title_parts as $part ) {
				if ( strtolower( $part ) === strtolower( $service_1_highlight ) && ! $highlight_found ) {
				  echo '<span>' . esc_html( $part ) . '</span>';
				  $highlight_found = true;
				} else {
				  echo esc_html( $part ) . ' ';
				}
			  }
			  ?>
			</a>
		  </h3>
		  <p><?php echo esc_html( $service_1_description ); ?></p>
		</div>
	  </div>
	  <?php endif; ?>

	  <?php
	  // Service 2
	  $service_2_title = get_option( 'service_2_title', 'Design systems' );
	  $service_2_highlight = get_option( 'service_2_highlight', 'systems' );
	  $service_2_description = get_option( 'service_2_description', 'Praesent euismod varius tellus, vel bibendum nunc interdum at. Donec vehicula diam vel metus venenatis convallis. Aliquam erat volutpat. Etiam viverra magna sit amet.' );
	  $service_2_icon = get_option( 'service_2_icon', '' );
	  $service_2_url = get_option( 'service_2_url', 'service-details.html' );
	  
	  if ( ! empty( $service_2_title ) ) :
	  ?>
	  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
		<div class="service-card position-relative z-1">
		  <div class="service-icon">
			<?php if ( ! empty( $service_2_icon ) ) : ?>
			  <img src="<?php echo esc_url( $service_2_icon ); ?>" alt="<?php echo esc_attr( $service_2_title ); ?>" style="width: 64px; height: 64px; object-fit: contain;">
			<?php else : ?>
			  <i class="bi bi-gem"></i>
			<?php endif; ?>
		  </div>
		  <a href="<?php echo esc_url( $service_2_url ); ?>" class="card-action d-flex align-items-center justify-content-center rounded-circle">
			<i class="bi bi-arrow-up-right"></i>
		  </a>
		  <h3>
			<a href="<?php echo esc_url( $service_2_url ); ?>">
			  <?php 
			  $title_parts = explode( ' ', $service_2_title );
			  $highlight_found = false;
			  foreach ( $title_parts as $part ) {
				if ( strtolower( $part ) === strtolower( $service_2_highlight ) && ! $highlight_found ) {
				  echo '<span>' . esc_html( $part ) . '</span>';
				  $highlight_found = true;
				} else {
				  echo esc_html( $part ) . ' ';
				}
			  }
			  ?>
			</a>
		  </h3>
		  <p><?php echo esc_html( $service_2_description ); ?></p>
		</div>
	  </div>
	  <?php endif; ?>

	  <?php
	  // Service 3
	  $service_3_title = get_option( 'service_3_title', 'Marketing strategies' );
	  $service_3_highlight = get_option( 'service_3_highlight', 'strategies' );
	  $service_3_description = get_option( 'service_3_description', 'Vivamus tempor velit id magna dictum, sed fermentum nisi faucibus. Integer nec pretium sapien. Fusce tincidunt ligula et purus consequat, ac pellentesque nulla eleifend.' );
	  $service_3_icon = get_option( 'service_3_icon', '' );
	  $service_3_url = get_option( 'service_3_url', 'service-details.html' );
	  
	  if ( ! empty( $service_3_title ) ) :
	  ?>
	  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
		<div class="service-card position-relative z-1">
		  <div class="service-icon">
			<?php if ( ! empty( $service_3_icon ) ) : ?>
			  <img src="<?php echo esc_url( $service_3_icon ); ?>" alt="<?php echo esc_attr( $service_3_title ); ?>" style="width: 64px; height: 64px; object-fit: contain;">
			<?php else : ?>
			  <i class="bi bi-megaphone"></i>
			<?php endif; ?>
		  </div>
		  <a href="<?php echo esc_url( $service_3_url ); ?>" class="card-action d-flex align-items-center justify-content-center rounded-circle">
			<i class="bi bi-arrow-up-right"></i>
		  </a>
		  <h3>
			<a href="<?php echo esc_url( $service_3_url ); ?>">
			  <?php 
			  $title_parts = explode( ' ', $service_3_title );
			  $highlight_found = false;
			  foreach ( $title_parts as $part ) {
				if ( strtolower( $part ) === strtolower( $service_3_highlight ) && ! $highlight_found ) {
				  echo '<span>' . esc_html( $part ) . '</span>';
				  $highlight_found = true;
				} else {
				  echo esc_html( $part ) . ' ';
				}
			  }
			  ?>
			</a>
		  </h3>
		  <p><?php echo esc_html( $service_3_description ); ?></p>
		</div>
	  </div>
	  <?php endif; ?>

	  <?php
	  // Service 4
	  $service_4_title = get_option( 'service_4_title', 'Digital platforms' );
	  $service_4_highlight = get_option( 'service_4_highlight', 'platforms' );
	  $service_4_description = get_option( 'service_4_description', 'Cras fermentum odio eu feugiat malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et accumsan cursus. Morbi placerat nulla vel nunc viverra accumsan.' );
	  $service_4_icon = get_option( 'service_4_icon', '' );
	  $service_4_url = get_option( 'service_4_url', 'service-details.html' );
	  
	  if ( ! empty( $service_4_title ) ) :
	  ?>
	  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
		<div class="service-card position-relative z-1">
		  <div class="service-icon">
			<?php if ( ! empty( $service_4_icon ) ) : ?>
			  <img src="<?php echo esc_url( $service_4_icon ); ?>" alt="<?php echo esc_attr( $service_4_title ); ?>" style="width: 64px; height: 64px; object-fit: contain;">
			<?php else : ?>
			  <i class="bi bi-code-slash"></i>
			<?php endif; ?>
		  </div>
		  <a href="<?php echo esc_url( $service_4_url ); ?>" class="card-action d-flex align-items-center justify-content-center rounded-circle">
			<i class="bi bi-arrow-up-right"></i>
		  </a>
		  <h3>
			<a href="<?php echo esc_url( $service_4_url ); ?>">
			  <?php 
			  $title_parts = explode( ' ', $service_4_title );
			  $highlight_found = false;
			  foreach ( $title_parts as $part ) {
				if ( strtolower( $part ) === strtolower( $service_4_highlight ) && ! $highlight_found ) {
				  echo '<span>' . esc_html( $part ) . '</span>';
				  $highlight_found = true;
				} else {
				  echo esc_html( $part ) . ' ';
				}
			  }
			  ?>
			</a>
		  </h3>
		  <p><?php echo esc_html( $service_4_description ); ?></p>
		</div>
	  </div>
	  <?php endif; ?>

	  <?php
	  // Service 5
	  $service_5_title = get_option( 'service_5_title', 'Growth acceleration' );
	  $service_5_highlight = get_option( 'service_5_highlight', 'acceleration' );
	  $service_5_description = get_option( 'service_5_description', 'Aenean vel augue vel nisi bibendum posuere. Phasellus in lacus quis urna sodales dignissim. Duis aliquam libero eget risus facilisis. Quisque eget libero vel nisl fringilla.' );
	  $service_5_icon = get_option( 'service_5_icon', '' );
	  $service_5_url = get_option( 'service_5_url', 'service-details.html' );
	  
	  if ( ! empty( $service_5_title ) ) :
	  ?>
	  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
		<div class="service-card position-relative z-1">
		  <div class="service-icon">
			<?php if ( ! empty( $service_5_icon ) ) : ?>
			  <img src="<?php echo esc_url( $service_5_icon ); ?>" alt="<?php echo esc_attr( $service_5_title ); ?>" style="width: 64px; height: 64px; object-fit: contain;">
			<?php else : ?>
			  <i class="bi bi-graph-up"></i>
			<?php endif; ?>
		  </div>
		  <a href="<?php echo esc_url( $service_5_url ); ?>" class="card-action d-flex align-items-center justify-content-center rounded-circle">
			<i class="bi bi-arrow-up-right"></i>
		  </a>
		  <h3>
			<a href="<?php echo esc_url( $service_5_url ); ?>">
			  <?php 
			  $title_parts = explode( ' ', $service_5_title );
			  $highlight_found = false;
			  foreach ( $title_parts as $part ) {
				if ( strtolower( $part ) === strtolower( $service_5_highlight ) && ! $highlight_found ) {
				  echo '<span>' . esc_html( $part ) . '</span>';
				  $highlight_found = true;
				} else {
				  echo esc_html( $part ) . ' ';
				}
			  }
			  ?>
			</a>
		  </h3>
		  <p><?php echo esc_html( $service_5_description ); ?></p>
		</div>
	  </div>
	  <?php endif; ?>

	  <?php
	  // Service 6
	  $service_6_title = get_option( 'service_6_title', 'Media solutions' );
	  $service_6_highlight = get_option( 'service_6_highlight', 'solutions' );
	  $service_6_description = get_option( 'service_6_description', 'Etiam efficitur lacus in diam finibus, nec ultrices est sagittis. Maecenas elementum magna sed risus faucibus, nec commodo purus facilisis. Vestibulum accumsan magna.' );
	  $service_6_icon = get_option( 'service_6_icon', '' );
	  $service_6_url = get_option( 'service_6_url', 'service-details.html' );
	  
	  if ( ! empty( $service_6_title ) ) :
	  ?>
	  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
		<div class="service-card position-relative z-1">
		  <div class="service-icon">
			<?php if ( ! empty( $service_6_icon ) ) : ?>
			  <img src="<?php echo esc_url( $service_6_icon ); ?>" alt="<?php echo esc_attr( $service_6_title ); ?>" style="width: 64px; height: 64px; object-fit: contain;">
			<?php else : ?>
			  <i class="bi bi-camera-video"></i>
			<?php endif; ?>
		  </div>
		  <a href="<?php echo esc_url( $service_6_url ); ?>" class="card-action d-flex align-items-center justify-content-center rounded-circle">
			<i class="bi bi-arrow-up-right"></i>
		  </a>
		  <h3>
			<a href="<?php echo esc_url( $service_6_url ); ?>">
			  <?php 
			  $title_parts = explode( ' ', $service_6_title );
			  $highlight_found = false;
			  foreach ( $title_parts as $part ) {
				if ( strtolower( $part ) === strtolower( $service_6_highlight ) && ! $highlight_found ) {
				  echo '<span>' . esc_html( $part ) . '</span>';
				  $highlight_found = true;
				} else {
				  echo esc_html( $part ) . ' ';
				}
			  }
			  ?>
			</a>
		  </h3>
		  <p><?php echo esc_html( $service_6_description ); ?></p>
		</div>
	  </div>
	  <?php endif; ?>

	</div>

  </div>

</section><!-- /Services Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
	<h2><?php echo esc_html( get_option( 'testimonials_section_title', 'Testimonials' ) ); ?></h2>
	<p><?php echo esc_html( get_option( 'testimonials_section_description', 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit' ) ); ?></p>
  </div><!-- End Section Title -->

  <div class="container">

	<div class="testimonial-masonry">

	  <?php
	  // Testimonial 1
	  $testimonial_1_content = get_option( 'testimonial_1_content', 'Implementing innovative strategies has revolutionized our approach to market challenges and competitive positioning.' );
	  $testimonial_1_name = get_option( 'testimonial_1_name', 'Rachel Bennett' );
	  $testimonial_1_position = get_option( 'testimonial_1_position', 'Strategy Director' );
	  $testimonial_1_image = get_option( 'testimonial_1_image', get_template_directory_uri() . '/assets/img/person/person-f-7.webp' );
	  $testimonial_1_highlight = get_option( 'testimonial_1_highlight', '' );
	  
	  if ( ! empty( $testimonial_1_content ) && ! empty( $testimonial_1_name ) ) :
		$highlight_class = $testimonial_1_highlight ? ' highlight' : '';
	  ?>
	  <div class="testimonial-item<?php echo $highlight_class; ?>" data-aos="fade-up">
		<div class="testimonial-content">
		  <div class="quote-pattern">
			<i class="bi bi-quote"></i>
		  </div>
		  <p><?php echo esc_html( $testimonial_1_content ); ?></p>
		  <div class="client-info">
			<div class="client-image">
			  <img src="<?php echo esc_url( $testimonial_1_image ); ?>" alt="<?php echo esc_attr( $testimonial_1_name ); ?>">
			</div>
			<div class="client-details">
			  <h3><?php echo esc_html( $testimonial_1_name ); ?></h3>
			  <span class="position"><?php echo esc_html( $testimonial_1_position ); ?></span>
			</div>
		  </div>
		</div>
	  </div>
	  <?php endif; ?>

	  <?php
	  // Testimonial 2
	  $testimonial_2_content = get_option( 'testimonial_2_content', 'Exceptional service delivery and innovative solutions have transformed our business operations, leading to remarkable growth and enhanced customer satisfaction across all touchpoints.' );
	  $testimonial_2_name = get_option( 'testimonial_2_name', 'Daniel Morgan' );
	  $testimonial_2_position = get_option( 'testimonial_2_position', 'Chief Innovation Officer' );
	  $testimonial_2_image = get_option( 'testimonial_2_image', get_template_directory_uri() . '/assets/img/person/person-m-7.webp' );
	  $testimonial_2_highlight = get_option( 'testimonial_2_highlight', '1' );
	  
	  if ( ! empty( $testimonial_2_content ) && ! empty( $testimonial_2_name ) ) :
		$highlight_class = $testimonial_2_highlight ? ' highlight' : '';
	  ?>
	  <div class="testimonial-item<?php echo $highlight_class; ?>" data-aos="fade-up" data-aos-delay="100">
		<div class="testimonial-content">
		  <div class="quote-pattern">
			<i class="bi bi-quote"></i>
		  </div>
		  <p><?php echo esc_html( $testimonial_2_content ); ?></p>
		  <div class="client-info">
			<div class="client-image">
			  <img src="<?php echo esc_url( $testimonial_2_image ); ?>" alt="<?php echo esc_attr( $testimonial_2_name ); ?>">
			</div>
			<div class="client-details">
			  <h3><?php echo esc_html( $testimonial_2_name ); ?></h3>
			  <span class="position"><?php echo esc_html( $testimonial_2_position ); ?></span>
			</div>
		  </div>
		</div>
	  </div>
	  <?php endif; ?>

	  <?php
	  // Testimonial 3
	  $testimonial_3_content = get_option( 'testimonial_3_content', 'Strategic partnership has enabled seamless digital transformation and operational excellence.' );
	  $testimonial_3_name = get_option( 'testimonial_3_name', 'Emma Thompson' );
	  $testimonial_3_position = get_option( 'testimonial_3_position', 'Digital Lead' );
	  $testimonial_3_image = get_option( 'testimonial_3_image', get_template_directory_uri() . '/assets/img/person/person-f-8.webp' );
	  $testimonial_3_highlight = get_option( 'testimonial_3_highlight', '' );
	  
	  if ( ! empty( $testimonial_3_content ) && ! empty( $testimonial_3_name ) ) :
		$highlight_class = $testimonial_3_highlight ? ' highlight' : '';
	  ?>
	  <div class="testimonial-item<?php echo $highlight_class; ?>" data-aos="fade-up" data-aos-delay="200">
		<div class="testimonial-content">
		  <div class="quote-pattern">
			<i class="bi bi-quote"></i>
		  </div>
		  <p><?php echo esc_html( $testimonial_3_content ); ?></p>
		  <div class="client-info">
			<div class="client-image">
			  <img src="<?php echo esc_url( $testimonial_3_image ); ?>" alt="<?php echo esc_attr( $testimonial_3_name ); ?>">
			</div>
			<div class="client-details">
			  <h3><?php echo esc_html( $testimonial_3_name ); ?></h3>
			  <span class="position"><?php echo esc_html( $testimonial_3_position ); ?></span>
			</div>
		  </div>
		</div>
	  </div>
	  <?php endif; ?>

	  <?php
	  // Testimonial 4
	  $testimonial_4_content = get_option( 'testimonial_4_content', 'Professional expertise and dedication have significantly improved our project delivery timelines and quality metrics.' );
	  $testimonial_4_name = get_option( 'testimonial_4_name', 'Christopher Lee' );
	  $testimonial_4_position = get_option( 'testimonial_4_position', 'Technical Director' );
	  $testimonial_4_image = get_option( 'testimonial_4_image', get_template_directory_uri() . '/assets/img/person/person-m-8.webp' );
	  $testimonial_4_highlight = get_option( 'testimonial_4_highlight', '' );
	  
	  if ( ! empty( $testimonial_4_content ) && ! empty( $testimonial_4_name ) ) :
		$highlight_class = $testimonial_4_highlight ? ' highlight' : '';
	  ?>
	  <div class="testimonial-item<?php echo $highlight_class; ?>" data-aos="fade-up" data-aos-delay="300">
		<div class="testimonial-content">
		  <div class="quote-pattern">
			<i class="bi bi-quote"></i>
		  </div>
		  <p><?php echo esc_html( $testimonial_4_content ); ?></p>
		  <div class="client-info">
			<div class="client-image">
			  <img src="<?php echo esc_url( $testimonial_4_image ); ?>" alt="<?php echo esc_attr( $testimonial_4_name ); ?>">
			</div>
			<div class="client-details">
			  <h3><?php echo esc_html( $testimonial_4_name ); ?></h3>
			  <span class="position"><?php echo esc_html( $testimonial_4_position ); ?></span>
			</div>
		  </div>
		</div>
	  </div>
	  <?php endif; ?>

	  <?php
	  // Testimonial 5
	  $testimonial_5_content = get_option( 'testimonial_5_content', 'Collaborative approach and industry expertise have revolutionized our product development cycle, resulting in faster time-to-market and increased customer engagement levels.' );
	  $testimonial_5_name = get_option( 'testimonial_5_name', 'Olivia Carter' );
	  $testimonial_5_position = get_option( 'testimonial_5_position', 'Product Manager' );
	  $testimonial_5_image = get_option( 'testimonial_5_image', get_template_directory_uri() . '/assets/img/person/person-f-9.webp' );
	  $testimonial_5_highlight = get_option( 'testimonial_5_highlight', '1' );
	  
	  if ( ! empty( $testimonial_5_content ) && ! empty( $testimonial_5_name ) ) :
		$highlight_class = $testimonial_5_highlight ? ' highlight' : '';
	  ?>
	  <div class="testimonial-item<?php echo $highlight_class; ?>" data-aos="fade-up" data-aos-delay="400">
		<div class="testimonial-content">
		  <div class="quote-pattern">
			<i class="bi bi-quote"></i>
		  </div>
		  <p><?php echo esc_html( $testimonial_5_content ); ?></p>
		  <div class="client-info">
			<div class="client-image">
			  <img src="<?php echo esc_url( $testimonial_5_image ); ?>" alt="<?php echo esc_attr( $testimonial_5_name ); ?>">
			</div>
			<div class="client-details">
			  <h3><?php echo esc_html( $testimonial_5_name ); ?></h3>
			  <span class="position"><?php echo esc_html( $testimonial_5_position ); ?></span>
			</div>
		  </div>
		</div>
	  </div>
	  <?php endif; ?>

	  <?php
	  // Testimonial 6
	  $testimonial_6_content = get_option( 'testimonial_6_content', 'Innovative approach to user experience design has significantly enhanced our platform\'s engagement metrics and customer retention rates.' );
	  $testimonial_6_name = get_option( 'testimonial_6_name', 'Nathan Brooks' );
	  $testimonial_6_position = get_option( 'testimonial_6_position', 'UX Director' );
	  $testimonial_6_image = get_option( 'testimonial_6_image', get_template_directory_uri() . '/assets/img/person/person-m-13.webp' );
	  $testimonial_6_highlight = get_option( 'testimonial_6_highlight', '' );
	  
	  if ( ! empty( $testimonial_6_content ) && ! empty( $testimonial_6_name ) ) :
		$highlight_class = $testimonial_6_highlight ? ' highlight' : '';
	  ?>
	  <div class="testimonial-item<?php echo $highlight_class; ?>" data-aos="fade-up" data-aos-delay="500">
		<div class="testimonial-content">
		  <div class="quote-pattern">
			<i class="bi bi-quote"></i>
		  </div>
		  <p><?php echo esc_html( $testimonial_6_content ); ?></p>
		  <div class="client-info">
			<div class="client-image">
			  <img src="<?php echo esc_url( $testimonial_6_image ); ?>" alt="<?php echo esc_attr( $testimonial_6_name ); ?>">
			</div>
			<div class="client-details">
			  <h3><?php echo esc_html( $testimonial_6_name ); ?></h3>
			  <span class="position"><?php echo esc_html( $testimonial_6_position ); ?></span>
			</div>
		  </div>
		</div>
	  </div>
	  <?php endif; ?>

	</div>

  </div>

</section><!-- /Testimonials Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
	<h2><?php echo esc_html( get_option( 'contact_section_title', 'Contact' ) ); ?></h2>
	<p><?php echo esc_html( get_option( 'contact_section_description', 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit' ) ); ?></p>
  </div><!-- End Section Title -->

  <div class="container">

	<div class="row g-4 g-lg-5">
	  <div class="col-lg-5">
		<div class="info-box">
		  <h3>Contact Info</h3>
		  <p><?php echo esc_html( get_option( 'contact_info_description', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.' ) ); ?></p>

		  <div class="info-item">
			<div class="icon-box">
			  <i class="bi bi-geo-alt"></i>
			</div>
			<div class="content">
			  <h4><?php echo esc_html( get_option( 'contact_location_title', 'Our Location' ) ); ?></h4>
			  <p><?php echo esc_html( get_option( 'contact_location_address_1', 'A108 Adam Street' ) ); ?></p>
			  <p><?php echo esc_html( get_option( 'contact_location_address_2', 'New York, NY 535022' ) ); ?></p>
			</div>
		  </div>

		  <div class="info-item">
			<div class="icon-box">
			  <i class="bi bi-telephone"></i>
			</div>
			<div class="content">
			  <h4><?php echo esc_html( get_option( 'contact_phone_title', 'Phone Number' ) ); ?></h4>
			  <p><?php echo esc_html( get_option( 'contact_phone_1', '+1 5589 55488 55' ) ); ?></p>
			  <?php 
			  $phone_2 = get_option( 'contact_phone_2', '' );
			  if ( ! empty( $phone_2 ) ) : ?>
				<p><?php echo esc_html( $phone_2 ); ?></p>
			  <?php endif; ?>
			</div>
		  </div>

		  <div class="info-item">
			<div class="icon-box">
			  <i class="bi bi-envelope"></i>
			</div>
			<div class="content">
			  <h4><?php echo esc_html( get_option( 'contact_email_title', 'Email Address' ) ); ?></h4>
			  <p><?php echo esc_html( get_option( 'contact_email_1', 'info@example.com' ) ); ?></p>
			  <?php 
			  $email_2 = get_option( 'contact_email_2', '' );
			  if ( ! empty( $email_2 ) ) : ?>
				<p><?php echo esc_html( $email_2 ); ?></p>
			  <?php endif; ?>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="col-lg-7">
		<div class="contact-form">
		  <h3><?php echo esc_html( get_option( 'contact_form_title', 'Get In Touch' ) ); ?></h3>
		  <p><?php echo esc_html( get_option( 'contact_form_description', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.' ) ); ?></p>

		  <?php
		  $contact_form_shortcode = get_option( 'contact_form_shortcode', '' );
		  
		  if ( ! empty( $contact_form_shortcode ) ) {
			// Display the shortcode if provided
			echo do_shortcode( $contact_form_shortcode );
		  } else {
			// Fallback to default form
			$form_action = get_option( 'contact_form_action', 'forms/contact.php' );
		  ?>
		  <form action="<?php echo esc_url( $form_action ); ?>" method="post" class="php-email-form">
			<div class="row gy-4">

			  <div class="col-md-6">
				<input type="text" name="name" class="form-control" placeholder="Your Name" required="">
			  </div>

			  <div class="col-md-6 ">
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
		  <?php } ?>

		</div>
	  </div>

	</div>

  </div>

</section><!-- /Contact Section -->

</main>

<?php

get_footer();
