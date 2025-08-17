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
			  if ( ! empty( $social_link_1_url ) ) : ?>
				<a href="<?php echo esc_attr( $social_link_1_url ); ?>">
					<?php if ( $social_link_1_icon ) : ?>
						<img src="<?php echo esc_url( $social_link_1_icon ); ?>" alt="Social Link 1" style="width: 24px; height: 24px;">
					<?php else : ?>
						<i class="bi bi-link-45deg"></i>
					<?php endif; ?>
				</a>
			  <?php endif; ?>

			  <?php 
			  $social_link_2_url = get_hero_option( 'social_link_2', '' );
			  $social_link_2_icon = get_hero_option( 'social_link_2_icon', '' );
			  if ( ! empty( $social_link_2_url ) ) : ?>
				<a href="<?php echo esc_attr( $social_link_2_url ); ?>">
					<?php if ( $social_link_2_icon ) : ?>
						<img src="<?php echo esc_url( $social_link_2_icon ); ?>" alt="Social Link 2" style="width: 24px; height: 24px;">
					<?php else : ?>
						<i class="bi bi-link-45deg"></i>
					<?php endif; ?>
				</a>
			  <?php endif; ?>

			  <?php 
			  $social_link_3_url = get_hero_option( 'social_link_3', '' );
			  $social_link_3_icon = get_hero_option( 'social_link_3_icon', '' );
			  if ( ! empty( $social_link_3_url ) ) : ?>
				<a href="<?php echo esc_attr( $social_link_3_url ); ?>">
					<?php if ( $social_link_3_icon ) : ?>
						<img src="<?php echo esc_url( $social_link_3_icon ); ?>" alt="Social Link 3" style="width: 24px; height: 24px;">
					<?php else : ?>
						<i class="bi bi-link-45deg"></i>
					<?php endif; ?>
				</a>
			  <?php endif; ?>

			  <?php 
			  $social_link_4_url = get_hero_option( 'social_link_4', '' );
			  $social_link_4_icon = get_hero_option( 'social_link_4_icon', '' );
			  if ( ! empty( $social_link_4_url ) ) : ?>
				<a href="<?php echo esc_attr( $social_link_4_url ); ?>">
					<?php if ( $social_link_4_icon ) : ?>
						<img src="<?php echo esc_url( $social_link_4_icon ); ?>" alt="Social Link 4" style="width: 24px; height: 24px;">
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
			  $profile_image = get_hero_option( 'profile_image', get_template_directory_uri() . '/assets/img/profile/profile-2.webp' );
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
			  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/profile-square-3.webp" alt="Profile Image" class="img-fluid">
			</div>
			<div class="profile-badge">
			  <i class="bi bi-check-circle-fill"></i>
			</div>
		  </div>

		  <div class="profile-content">
			<h3>Marcus Thompson</h3>
			<p class="profession">Creative Director &amp; Developer</p>

			<div class="contact-links">
			  <a href="mailto:marcus@example.com" class="contact-item">
				<i class="bi bi-envelope"></i>
				marcus@example.com
			  </a>
			  <a href="tel:+15551234567" class="contact-item">
				<i class="bi bi-telephone"></i>
				+1 (555) 123-4567
			  </a>
			  <a href="#" class="contact-item">
				<i class="bi bi-geo-alt"></i>
				San Francisco, CA
			  </a>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
		<div class="about-content">
		  <div class="section-header">
			<span class="badge-text">Get to Know Me</span>
			<h2>Passionate About Creating Digital Experiences</h2>
		  </div>

		  <div class="description">
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

			<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
		  </div>

		  <div class="stats-grid">
			<div class="stat-item">
			  <div class="stat-number">150+</div>
			  <div class="stat-label">Projects Completed</div>
			</div>
			<div class="stat-item">
			  <div class="stat-number">5+</div>
			  <div class="stat-label">Years Experience</div>
			</div>
			<div class="stat-item">
			  <div class="stat-number">98%</div>
			  <div class="stat-label">Client Satisfaction</div>
			</div>
		  </div>

		  <div class="details-grid">
			<div class="detail-row">
			  <div class="detail-item">
				<span class="detail-label">Specialization</span>
				<span class="detail-value">UI/UX Design &amp; Development</span>
			  </div>
			  <div class="detail-item">
				<span class="detail-label">Experience Level</span>
				<span class="detail-value">Senior Professional</span>
			  </div>
			</div>
			<div class="detail-row">
			  <div class="detail-item">
				<span class="detail-label">Education</span>
				<span class="detail-value">Computer Science, MIT</span>
			  </div>
			  <div class="detail-item">
				<span class="detail-label">Languages</span>
				<span class="detail-value">English, Spanish, French</span>
			  </div>
			</div>
		  </div>

		  <div class="cta-section">
			<a href="#" class="btn btn-primary">
			  <i class="bi bi-download"></i>
			  Download Resume
			</a>
			<a href="#" class="btn btn-outline">
			  <i class="bi bi-chat-dots"></i>
			  Let's Talk
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
		<div class="stats-wrapper">
		  <div class="stats-item" data-aos="zoom-in" data-aos-delay="150">
			<div class="icon-wrapper">
			  <i class="bi bi-emoji-smile"></i>
			</div>
			<span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
			<p>Happy Clients</p>
		  </div><!-- End Stats Item -->

		  <div class="stats-item" data-aos="zoom-in" data-aos-delay="200">
			<div class="icon-wrapper">
			  <i class="bi bi-journal-richtext"></i>
			</div>
			<span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
			<p>Projects</p>
		  </div><!-- End Stats Item -->

		  <div class="stats-item" data-aos="zoom-in" data-aos-delay="250">
			<div class="icon-wrapper">
			  <i class="bi bi-headset"></i>
			</div>
			<span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
			<p>Hours Of Support</p>
		  </div><!-- End Stats Item -->

		  <div class="stats-item" data-aos="zoom-in" data-aos-delay="300">
			<div class="icon-wrapper">
			  <i class="bi bi-people"></i>
			</div>
			<span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
			<p>Hard Workers</p>
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
	<h2>Skills</h2>
	<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

	<div class="row">
	  <div class="col-lg-6">
		<div class="skills-category" data-aos="fade-up" data-aos-delay="200">
		  <h3>Front-end Development</h3>
		  <div class="skills-animation">
			<div class="skill-item">
			  <div class="d-flex justify-content-between align-items-center">
				<h4>HTML/CSS</h4>
				<span class="skill-percentage">95%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			  <div class="skill-tooltip">Expert level knowledge of semantic HTML5 and modern CSS3 techniques</div>
			</div>

			<div class="skill-item">
			  <div class="d-flex justify-content-between align-items-center">
				<h4>JavaScript</h4>
				<span class="skill-percentage">85%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			  <div class="skill-tooltip">Strong proficiency in ES6+, DOM manipulation, and modern frameworks</div>
			</div>

			<div class="skill-item">
			  <div class="d-flex justify-content-between align-items-center">
				<h4>React</h4>
				<span class="skill-percentage">80%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			  <div class="skill-tooltip">Experience with React hooks, state management, and component architecture</div>
			</div>
		  </div>
		</div><!-- End Frontend Skills -->
	  </div>

	  <div class="col-lg-6">
		<div class="skills-category" data-aos="fade-up" data-aos-delay="300">
		  <h3>Back-end Development</h3>
		  <div class="skills-animation">
			<div class="skill-item">
			  <div class="d-flex justify-content-between align-items-center">
				<h4>Node.js</h4>
				<span class="skill-percentage">75%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			  <div class="skill-tooltip">Server-side JavaScript development with Express and REST APIs</div>
			</div>

			<div class="skill-item">
			  <div class="d-flex justify-content-between align-items-center">
				<h4>Python</h4>
				<span class="skill-percentage">70%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			  <div class="skill-tooltip">Python development with Django and data analysis tools</div>
			</div>

			<div class="skill-item">
			  <div class="d-flex justify-content-between align-items-center">
				<h4>SQL</h4>
				<span class="skill-percentage">65%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			  <div class="skill-tooltip">Database design, optimization, and complex queries</div>
			</div>
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
	<h2>Resume</h2>
	<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

	<div class="row gy-4">
	  <!-- Left column with summary and contact -->
	  <div class="col-lg-4">
		<div class="resume-side" data-aos="fade-right" data-aos-delay="100">
		  <div class="profile-img mb-4">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/profile-square-2.webp" alt="Profile" class="img-fluid rounded">
		  </div>

		  <h3>Professional Summary</h3>
		  <p>Driven software architect with expertise in developing scalable, high-performance enterprise solutions. Passionate about leveraging cutting-edge technologies to solve complex business challenges.</p>

		  <h3 class="mt-4">Contact Information</h3>
		  <ul class="contact-info list-unstyled">
			<li><i class="bi bi-geo-alt"></i> 742 Evergreen Terrace, Springfield, MA 02101</li>
			<li><i class="bi bi-envelope"></i> contact@example.com</li>
			<li><i class="bi bi-phone"></i> +1 (555) 123-4567</li>
			<li><i class="bi bi-linkedin"></i> linkedin.com/in/example</li>
		  </ul>

		  <div class="skills-animation mt-4">
			<h3>Technical Skills</h3>
			<div class="skill-item">
			  <div class="d-flex justify-content-between">
				<span>Web Development</span>
				<span>95%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			</div>

			<div class="skill-item">
			  <div class="d-flex justify-content-between">
				<span>UI/UX Design</span>
				<span>85%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			</div>

			<div class="skill-item">
			  <div class="d-flex justify-content-between">
				<span>Cloud Architecture</span>
				<span>90%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			</div>

			<div class="skill-item">
			  <div class="d-flex justify-content-between">
				<span>Project Management</span>
				<span>80%</span>
			  </div>
			  <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>

	  <!-- Right column with experience and education -->
	  <div class="col-lg-8 ps-4 ps-lg-5">
		<!-- Experience Section -->
		<div class="resume-section" data-aos="fade-up">
		  <h3><i class="bi bi-briefcase me-2"></i>Professional Experience</h3>

		  <div class="resume-item">
			<h4>Senior Software Architect</h4>
			<h5>2022 - Present</h5>
			<p class="company"><i class="bi bi-building"></i> Tech Innovations Inc.</p>
			<ul>
			  <li>Lead the architectural design and implementation of enterprise-scale applications</li>
			  <li>Mentor team of 12 developers and establish technical best practices</li>
			  <li>Drive adoption of microservices architecture and cloud-native solutions</li>
			  <li>Reduce system downtime by 75% through improved architecture and monitoring</li>
			</ul>
		  </div>

		  <div class="resume-item">
			<h4>Lead Developer</h4>
			<h5>2019 - 2022</h5>
			<p class="company"><i class="bi bi-building"></i> Digital Solutions Corp.</p>
			<ul>
			  <li>Spearheaded development of company's flagship product reaching 1M+ users</li>
			  <li>Implemented CI/CD pipeline reducing deployment time by 60%</li>
			  <li>Managed team of 8 developers across multiple projects</li>
			  <li>Increased code test coverage from 45% to 90%</li>
			</ul>
		  </div>
		</div>

		<!-- Education Section -->
		<div class="resume-section" data-aos="fade-up" data-aos-delay="100">
		  <h3><i class="bi bi-mortarboard me-2"></i>Education</h3>

		  <div class="resume-item">
			<h4>Master of Science in Computer Science</h4>
			<h5>2017 - 2019</h5>
			<p class="company"><i class="bi bi-building"></i> Stanford University</p>
			<p>Specialized in Artificial Intelligence and Machine Learning. Graduated with honors.</p>
		  </div>

		  <div class="resume-item">
			<h4>Bachelor of Science in Software Engineering</h4>
			<h5>2013 - 2017</h5>
			<p class="company"><i class="bi bi-building"></i> MIT</p>
			<p>Dean's List all semesters. Led university's coding club.</p>
		  </div>
		</div>

		<!-- Certifications Section -->
		<div class="resume-section" data-aos="fade-up" data-aos-delay="200">
		  <h3><i class="bi bi-award me-2"></i>Certifications</h3>

		  <div class="resume-item">
			<h4>AWS Certified Solutions Architect - Professional</h4>
			<h5>2023</h5>
		  </div>

		  <div class="resume-item">
			<h4>Google Cloud Professional Architect</h4>
			<h5>2022</h5>
		  </div>
		</div>
	  </div>
	</div>

  </div>

</section><!-- /Resume Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
	<h2>Portfolio</h2>
	<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

	<div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

	  <div class="row">
		<div class="col-lg-3 filter-sidebar">
		  <div class="filters-wrapper" data-aos="fade-right" data-aos-delay="150">
			<ul class="portfolio-filters isotope-filters">
			  <li data-filter="*" class="filter-active">All Projects</li>
			  <li data-filter=".filter-photography">Photography</li>
			  <li data-filter=".filter-design">Design</li>
			  <li data-filter=".filter-automotive">Automotive</li>
			  <li data-filter=".filter-nature">Nature</li>
			</ul>
		  </div>
		</div>

		<div class="col-lg-9">
		  <div class="row gy-4 portfolio-container isotope-container" data-aos="fade-up" data-aos-delay="200">

			<div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-photography">
			  <div class="portfolio-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-portrait-1.webp" class="img-fluid" alt="Portfolio Image" loading="lazy">
				<div class="portfolio-info">
				  <div class="content">
					<span class="category">Photography</span>
					<h4>Capturing Moments</h4>
					<div class="portfolio-links">
					  <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-portrait-1.webp" class="glightbox" title="Capturing Moments"><i class="bi bi-plus-lg"></i></a>
					  <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
					</div>
				  </div>
				</div>
			  </div>
			</div><!-- End Portfolio Item -->

			<div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-design">
			  <div class="portfolio-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-2.webp" class="img-fluid" alt="Portfolio Image" loading="lazy">
				<div class="portfolio-info">
				  <div class="content">
					<span class="category">Web Design</span>
					<h4>Woodcraft Design</h4>
					<div class="portfolio-links">
					  <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-2.webp" class="glightbox" title="Woodcraft Design"><i class="bi bi-plus-lg"></i></a>
					  <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
					</div>
				  </div>
				</div>
			  </div>
			</div><!-- End Portfolio Item -->

			<div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-automotive">
			  <div class="portfolio-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-portrait-2.webp" class="img-fluid" alt="Portfolio Image" loading="lazy">
				<div class="portfolio-info">
				  <div class="content">
					<span class="category">Automotive</span>
					<h4>Classic Beauty</h4>
					<div class="portfolio-links">
					  <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-portrait-2.webp" class="glightbox" title="Classic Beauty"><i class="bi bi-plus-lg"></i></a>
					  <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
					</div>
				  </div>
				</div>
			  </div>
			</div><!-- End Portfolio Item -->

			<div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-nature">
			  <div class="portfolio-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-portrait-4.webp" class="img-fluid" alt="Portfolio Image" loading="lazy">
				<div class="portfolio-info">
				  <div class="content">
					<span class="category">Nature</span>
					<h4>Natural Growth</h4>
					<div class="portfolio-links">
					  <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-portrait-4.webp" class="glightbox" title="Natural Growth"><i class="bi bi-plus-lg"></i></a>
					  <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
					</div>
				  </div>
				</div>
			  </div>
			</div><!-- End Portfolio Item -->

			<div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-photography">
			  <div class="portfolio-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-5.webp" class="img-fluid" alt="Portfolio Image" loading="lazy">
				<div class="portfolio-info">
				  <div class="content">
					<span class="category">Photography</span>
					<h4>Urban Stories</h4>
					<div class="portfolio-links">
					  <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-5.webp" class="glightbox" title="Urban Stories"><i class="bi bi-plus-lg"></i></a>
					  <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
					</div>
				  </div>
				</div>
			  </div>
			</div><!-- End Portfolio Item -->

			<div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-design">
			  <div class="portfolio-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-6.webp" class="img-fluid" alt="Portfolio Image" loading="lazy">
				<div class="portfolio-info">
				  <div class="content">
					<span class="category">Web Design</span>
					<h4>Digital Experience</h4>
					<div class="portfolio-links">
					  <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-6.webp" class="glightbox" title="Digital Experience"><i class="bi bi-plus-lg"></i></a>
					  <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
					</div>
				  </div>
				</div>
			  </div>
			</div><!-- End Portfolio Item -->

		  </div><!-- End Portfolio Container -->
		</div>
	  </div>

	</div>

  </div>

</section><!-- /Portfolio Section -->

<!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
	<h2>Services</h2>
	<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

	<div class="service-header">
	  <div class="row align-items-center">
		<div class="col-lg-8 col-md-12">
		  <div class="service-intro">
			<h2 class="service-heading">
			  <div>Innovative business</div>
			  <div><span>performance solutions</span></div>
			</h2>
		  </div>
		</div>
		<div class="col-lg-4 col-md-12">
		  <div class="service-summary">
			<p>
			  We integrate forward-thinking strategies, creative approaches, and state-of-the-art technologies to deliver exceptional customer experiences that drive growth and engage target markets.
			</p>
			<a href="services.html" class="service-btn">
			  View All Services
			  <i class="bi bi-arrow-right"></i>
			</a>
		  </div>
		</div>
	  </div>
	</div>

	<div class="row justify-content-center">
	  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
		<div class="service-card position-relative z-1">
		  <div class="service-icon">
			<i class="bi bi-palette"></i>
		  </div>
		  <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
			<i class="bi bi-arrow-up-right"></i>
		  </a>
		  <h3>
			<a href="service-details.html">
			  Creative <span>branding</span>
			</a>
		  </h3>
		  <p>
			Nulla facilisi. Maecenas eget magna neque. Suspendisse potenti. Curabitur eleifend nisi non magna vulputate, vel condimentum libero tempus. Proin consectetur feugiat diam.
		  </p>
		</div>
	  </div>
	  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
		<div class="service-card position-relative z-1">
		  <div class="service-icon">
			<i class="bi bi-gem"></i>
		  </div>
		  <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
			<i class="bi bi-arrow-up-right"></i>
		  </a>
		  <h3>
			<a href="service-details.html">
			  Design <span>systems</span>
			</a>
		  </h3>
		  <p>
			Praesent euismod varius tellus, vel bibendum nunc interdum at. Donec vehicula diam vel metus venenatis convallis. Aliquam erat volutpat. Etiam viverra magna sit amet.
		  </p>
		</div>
	  </div>
	  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
		<div class="service-card position-relative z-1">
		  <div class="service-icon">
			<i class="bi bi-megaphone"></i>
		  </div>
		  <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
			<i class="bi bi-arrow-up-right"></i>
		  </a>
		  <h3>
			<a href="service-details.html">
			  Marketing <span>strategies</span>
			</a>
		  </h3>
		  <p>
			Vivamus tempor velit id magna dictum, sed fermentum nisi faucibus. Integer nec pretium sapien. Fusce tincidunt ligula et purus consequat, ac pellentesque nulla eleifend.
		  </p>
		</div>
	  </div>
	  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
		<div class="service-card position-relative z-1">
		  <div class="service-icon">
			<i class="bi bi-code-slash"></i>
		  </div>
		  <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
			<i class="bi bi-arrow-up-right"></i>
		  </a>
		  <h3>
			<a href="service-details.html">
			  Digital <span>platforms</span>
			</a>
		  </h3>
		  <p>
			Cras fermentum odio eu feugiat malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et accumsan cursus. Morbi placerat nulla vel nunc viverra accumsan.
		  </p>
		</div>
	  </div>
	  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
		<div class="service-card position-relative z-1">
		  <div class="service-icon">
			<i class="bi bi-graph-up"></i>
		  </div>
		  <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
			<i class="bi bi-arrow-up-right"></i>
		  </a>
		  <h3>
			<a href="service-details.html">
			  Growth <span>acceleration</span>
			</a>
		  </h3>
		  <p>
			Aenean vel augue vel nisi bibendum posuere. Phasellus in lacus quis urna sodales dignissim. Duis aliquam libero eget risus facilisis. Quisque eget libero vel nisl fringilla.
		  </p>
		</div>
	  </div>
	  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
		<div class="service-card position-relative z-1">
		  <div class="service-icon">
			<i class="bi bi-camera-video"></i>
		  </div>
		  <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
			<i class="bi bi-arrow-up-right"></i>
		  </a>
		  <h3>
			<a href="service-details.html">
			  Media <span>solutions</span>
			</a>
		  </h3>
		  <p>
			Etiam efficitur lacus in diam finibus, nec ultrices est sagittis. Maecenas elementum magna sed risus faucibus, nec commodo purus facilisis. Vestibulum accumsan magna.
		  </p>
		</div>
	  </div>
	</div>

  </div>

</section><!-- /Services Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
	<h2>Testimonials</h2>
	<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container">

	<div class="testimonial-masonry">

	  <div class="testimonial-item" data-aos="fade-up">
		<div class="testimonial-content">
		  <div class="quote-pattern">
			<i class="bi bi-quote"></i>
		  </div>
		  <p>Implementing innovative strategies has revolutionized our approach to market challenges and competitive positioning.</p>
		  <div class="client-info">
			<div class="client-image">
			  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person/person-f-7.webp" alt="Client">
			</div>
			<div class="client-details">
			  <h3>Rachel Bennett</h3>
			  <span class="position">Strategy Director</span>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="testimonial-item highlight" data-aos="fade-up" data-aos-delay="100">
		<div class="testimonial-content">
		  <div class="quote-pattern">
			<i class="bi bi-quote"></i>
		  </div>
		  <p>Exceptional service delivery and innovative solutions have transformed our business operations, leading to remarkable growth and enhanced customer satisfaction across all touchpoints.</p>
		  <div class="client-info">
			<div class="client-image">
			  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person/person-m-7.webp" alt="Client">
			</div>
			<div class="client-details">
			  <h3>Daniel Morgan</h3>
			  <span class="position">Chief Innovation Officer</span>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
		<div class="testimonial-content">
		  <div class="quote-pattern">
			<i class="bi bi-quote"></i>
		  </div>
		  <p>Strategic partnership has enabled seamless digital transformation and operational excellence.</p>
		  <div class="client-info">
			<div class="client-image">
			  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person/person-f-8.webp" alt="Client">
			</div>
			<div class="client-details">
			  <h3>Emma Thompson</h3>
			  <span class="position">Digital Lead</span>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
		<div class="testimonial-content">
		  <div class="quote-pattern">
			<i class="bi bi-quote"></i>
		  </div>
		  <p>Professional expertise and dedication have significantly improved our project delivery timelines and quality metrics.</p>
		  <div class="client-info">
			<div class="client-image">
			  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person/person-m-8.webp" alt="Client">
			</div>
			<div class="client-details">
			  <h3>Christopher Lee</h3>
			  <span class="position">Technical Director</span>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="testimonial-item highlight" data-aos="fade-up" data-aos-delay="400">
		<div class="testimonial-content">
		  <div class="quote-pattern">
			<i class="bi bi-quote"></i>
		  </div>
		  <p>Collaborative approach and industry expertise have revolutionized our product development cycle, resulting in faster time-to-market and increased customer engagement levels.</p>
		  <div class="client-info">
			<div class="client-image">
			  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person/person-f-9.webp" alt="Client">
			</div>
			<div class="client-details">
			  <h3>Olivia Carter</h3>
			  <span class="position">Product Manager</span>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="testimonial-item" data-aos="fade-up" data-aos-delay="500">
		<div class="testimonial-content">
		  <div class="quote-pattern">
			<i class="bi bi-quote"></i>
		  </div>
		  <p>Innovative approach to user experience design has significantly enhanced our platform's engagement metrics and customer retention rates.</p>
		  <div class="client-info">
			<div class="client-image">
			  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person/person-m-13.webp" alt="Client">
			</div>
			<div class="client-details">
			  <h3>Nathan Brooks</h3>
			  <span class="position">UX Director</span>
			</div>
		  </div>
		</div>
	  </div>

	</div>

  </div>

</section><!-- /Testimonials Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
	<h2>Contact</h2>
	<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container">

	<div class="row g-4 g-lg-5">
	  <div class="col-lg-5">
		<div class="info-box">
		  <h3>Contact Info</h3>
		  <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>

		  <div class="info-item">
			<div class="icon-box">
			  <i class="bi bi-geo-alt"></i>
			</div>
			<div class="content">
			  <h4>Our Location</h4>
			  <p>A108 Adam Street</p>
			  <p>New York, NY 535022</p>
			</div>
		  </div>

		  <div class="info-item">
			<div class="icon-box">
			  <i class="bi bi-telephone"></i>
			</div>
			<div class="content">
			  <h4>Phone Number</h4>
			  <p>+1 5589 55488 55</p>
			  <p>+1 6678 254445 41</p>
			</div>
		  </div>

		  <div class="info-item">
			<div class="icon-box">
			  <i class="bi bi-envelope"></i>
			</div>
			<div class="content">
			  <h4>Email Address</h4>
			  <p>info@example.com</p>
			  <p>contact@example.com</p>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="col-lg-7">
		<div class="contact-form">
		  <h3>Get In Touch</h3>
		  <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>

		  <form action="forms/contact.php" method="post" class="php-email-form">
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

		</div>
	  </div>

	</div>

  </div>

</section><!-- /Contact Section -->

</main>

<?php

get_footer();
