<?php
/**
 * About Section Theme Options
 *
 * @package Portfolio
 */

/**
 * About section tab content
 */
function portfolio_about_tab_content() {
	?>
	<div class="about-section-options">
		<h3>Profile Information</h3>
		<table class="form-table">
			<tr>
				<th scope="row">
					<label for="profile_image">Profile Image</label>
				</th>
				<td>
					<input type="text" id="profile_image" name="profile_image" value="<?php echo esc_attr( get_option( 'profile_image', get_template_directory_uri() . '/assets/img/profile/profile-square-3.webp' ) ); ?>" class="regular-text">
					<button type="button" class="button button-secondary" id="upload_profile_image">Upload Image</button>
					<p class="description">Enter the URL for the profile image or use the upload button</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="profile_name">Full Name</label>
				</th>
				<td>
					<input type="text" id="profile_name" name="profile_name" value="<?php echo esc_attr( get_option( 'profile_name', 'Marcus Thompson' ) ); ?>" class="regular-text">
					<p class="description">Enter your full name</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="profile_profession">Profession</label>
				</th>
				<td>
					<input type="text" id="profile_profession" name="profile_profession" value="<?php echo esc_attr( get_option( 'profile_profession', 'Creative Director & Developer' ) ); ?>" class="regular-text">
					<p class="description">Enter your profession or job title</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="profile_email">Email Address</label>
				</th>
				<td>
					<input type="email" id="profile_email" name="profile_email" value="<?php echo esc_attr( get_option( 'profile_email', 'marcus@example.com' ) ); ?>" class="regular-text">
					<p class="description">Enter your email address</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="profile_phone">Phone Number</label>
				</th>
				<td>
					<input type="tel" id="profile_phone" name="profile_phone" value="<?php echo esc_attr( get_option( 'profile_phone', '+1 (555) 123-4567' ) ); ?>" class="regular-text">
					<p class="description">Enter your phone number</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="profile_location">Location</label>
				</th>
				<td>
					<input type="text" id="profile_location" name="profile_location" value="<?php echo esc_attr( get_option( 'profile_location', 'San Francisco, CA' ) ); ?>" class="regular-text">
					<p class="description">Enter your city and state/country</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="profile_location_url">Location URL (Optional)</label>
				</th>
				<td>
					<input type="url" id="profile_location_url" name="profile_location_url" value="<?php echo esc_attr( get_option( 'profile_location_url', '' ) ); ?>" class="regular-text">
					<p class="description">Enter a custom URL for location (e.g., company website, LinkedIn, or leave empty for Google Maps)</p>
				</td>
			</tr>
		</table>

		<h3>Section Header</h3>
		<table class="form-table">
			<tr>
				<th scope="row">
					<label for="about_badge_text">Badge Text</label>
				</th>
				<td>
					<input type="text" id="about_badge_text" name="about_badge_text" value="<?php echo esc_attr( get_option( 'about_badge_text', 'Get to Know Me' ) ); ?>" class="regular-text">
					<p class="description">Enter the badge text above the main title</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="about_title">Main Title</label>
				</th>
				<td>
					<input type="text" id="about_title" name="about_title" value="<?php echo esc_attr( get_option( 'about_title', 'Passionate About Creating Digital Experiences' ) ); ?>" class="large-text">
					<p class="description">Enter the main title for the about section</p>
				</td>
			</tr>
		</table>

		<h3>About Content</h3>
		<table class="form-table">
			<tr>
				<th scope="row">
					<label for="about_content">About Content</label>
				</th>
				<td>
					<textarea id="about_content" name="about_content" rows="6" class="large-text"><?php echo esc_textarea( get_option( 'about_content', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.

Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.' ) ); ?></textarea>
					<p class="description">Enter your about section content</p>
				</td>
			</tr>
		</table>

		<h3>Statistics</h3>
		<table class="form-table">
			<tr>
				<th scope="row">
					<label for="stats_projects">Projects Completed</label>
				</th>
				<td>
					<input type="text" id="stats_projects" name="stats_projects" value="<?php echo esc_attr( get_option( 'stats_projects', '150+' ) ); ?>" class="regular-text">
					<p class="description">Enter the number of projects completed (e.g., 150+)</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="stats_experience">Years Experience</label>
				</th>
				<td>
					<input type="text" id="stats_experience" name="stats_experience" value="<?php echo esc_attr( get_option( 'stats_experience', '5+' ) ); ?>" class="regular-text">
					<p class="description">Enter years of experience (e.g., 5+)</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="stats_satisfaction">Client Satisfaction</label>
				</th>
				<td>
					<input type="text" id="stats_satisfaction" name="stats_satisfaction" value="<?php echo esc_attr( get_option( 'stats_satisfaction', '98%' ) ); ?>" class="regular-text">
					<p class="description">Enter client satisfaction percentage (e.g., 98%)</p>
				</td>
			</tr>
		</table>

		<h3>Professional Details</h3>
		<table class="form-table">
			<tr>
				<th scope="row">
					<label for="detail_specialization">Specialization</label>
				</th>
				<td>
					<input type="text" id="detail_specialization" name="detail_specialization" value="<?php echo esc_attr( get_option( 'detail_specialization', 'UI/UX Design & Development' ) ); ?>" class="large-text">
					<p class="description">Enter your area of specialization</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="detail_experience_level">Experience Level</label>
				</th>
				<td>
					<input type="text" id="detail_experience_level" name="detail_experience_level" value="<?php echo esc_attr( get_option( 'detail_experience_level', 'Senior Professional' ) ); ?>" class="regular-text">
					<p class="description">Enter your experience level</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="detail_education">Education</label>
				</th>
				<td>
					<input type="text" id="detail_education" name="detail_education" value="<?php echo esc_attr( get_option( 'detail_education', 'Computer Science, MIT' ) ); ?>" class="large-text">
					<p class="description">Enter your educational background</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="detail_languages">Languages</label>
				</th>
				<td>
					<input type="text" id="detail_languages" name="detail_languages" value="<?php echo esc_attr( get_option( 'detail_languages', 'English, Spanish, French' ) ); ?>" class="large-text">
					<p class="description">Enter languages you speak (comma separated)</p>
				</td>
			</tr>
		</table>

		<h3>Call to Action</h3>
		<table class="form-table">
			<tr>
				<th scope="row">
					<label for="cta_resume_text">Resume Button Text</label>
				</th>
				<td>
					<input type="text" id="cta_resume_text" name="cta_resume_text" value="<?php echo esc_attr( get_option( 'cta_resume_text', 'Download Resume' ) ); ?>" class="regular-text">
					<p class="description">Enter the text for the resume download button</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="cta_resume_url">Resume File URL</label>
				</th>
				<td>
					<input type="text" id="cta_resume_url" name="cta_resume_url" value="<?php echo esc_attr( get_option( 'cta_resume_url', '#' ) ); ?>" class="regular-text">
					<button type="button" class="button button-secondary" id="upload_resume">Upload Resume</button>
					<p class="description">Enter the URL for the resume file or use the upload button</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="cta_talk_text">Talk Button Text</label>
				</th>
				<td>
					<input type="text" id="cta_talk_text" name="cta_talk_text" value="<?php echo esc_attr( get_option( 'cta_talk_text', "Let's Talk" ) ); ?>" class="regular-text">
					<p class="description">Enter the text for the contact button</p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="cta_talk_url">Talk Button URL</label>
				</th>
				<td>
					<input type="text" id="cta_talk_url" name="cta_talk_url" value="<?php echo esc_attr( get_option( 'cta_talk_url', '#contact' ) ); ?>" class="regular-text">
					<p class="description">Enter the URL for the contact button (e.g., #contact for contact section)</p>
				</td>
			</tr>
		</table>
	</div>

	<style>
	.about-section-options h3 {
		margin-top: 30px;
		margin-bottom: 15px;
		padding-bottom: 10px;
		border-bottom: 1px solid #ccc;
		color: #23282d;
	}
	.about-section-options h3:first-child {
		margin-top: 0;
	}
	</style>

	<script>
	jQuery(document).ready(function($) {
		// Profile image upload
		$('#upload_profile_image').click(function(e) {
			e.preventDefault();
			var image = wp.media({
				title: 'Upload Profile Image',
				multiple: false
			}).open().on('select', function() {
				var uploaded_image = image.state().get('selection').first();
				var image_url = uploaded_image.toJSON().url;
				$('#profile_image').val(image_url);
			});
		});

		// Resume upload
		$('#upload_resume').click(function(e) {
			e.preventDefault();
			var file = wp.media({
				title: 'Upload Resume',
				multiple: false,
				library: {
					type: 'application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document'
				}
			}).open().on('select', function() {
				var uploaded_file = file.state().get('selection').first();
				var file_url = uploaded_file.toJSON().url;
				$('#cta_resume_url').val(file_url);
			});
		});
	});
	</script>
	<?php
}

/**
 * Save about section options
 */
function portfolio_save_about_options() {
	// Profile Information
	if ( isset( $_POST['profile_image'] ) ) {
		update_option( 'profile_image', esc_url_raw( $_POST['profile_image'] ) );
	}
	if ( isset( $_POST['profile_name'] ) ) {
		update_option( 'profile_name', sanitize_text_field( $_POST['profile_name'] ) );
	}
	if ( isset( $_POST['profile_profession'] ) ) {
		update_option( 'profile_profession', sanitize_text_field( $_POST['profile_profession'] ) );
	}
	if ( isset( $_POST['profile_email'] ) ) {
		update_option( 'profile_email', sanitize_email( $_POST['profile_email'] ) );
	}
	if ( isset( $_POST['profile_phone'] ) ) {
		update_option( 'profile_phone', sanitize_text_field( $_POST['profile_phone'] ) );
	}
	if ( isset( $_POST['profile_location'] ) ) {
		update_option( 'profile_location', sanitize_text_field( $_POST['profile_location'] ) );
	}
	if ( isset( $_POST['profile_location_url'] ) ) {
		update_option( 'profile_location_url', esc_url_raw( $_POST['profile_location_url'] ) );
	}

	// Section Header
	if ( isset( $_POST['about_badge_text'] ) ) {
		update_option( 'about_badge_text', sanitize_text_field( $_POST['about_badge_text'] ) );
	}
	if ( isset( $_POST['about_title'] ) ) {
		update_option( 'about_title', sanitize_text_field( $_POST['about_title'] ) );
	}

	// About Content
	if ( isset( $_POST['about_content'] ) ) {
		update_option( 'about_content', sanitize_textarea_field( $_POST['about_content'] ) );
	}

	// Statistics
	if ( isset( $_POST['stats_projects'] ) ) {
		update_option( 'stats_projects', sanitize_text_field( $_POST['stats_projects'] ) );
	}
	if ( isset( $_POST['stats_experience'] ) ) {
		update_option( 'stats_experience', sanitize_text_field( $_POST['stats_experience'] ) );
	}
	if ( isset( $_POST['stats_satisfaction'] ) ) {
		update_option( 'stats_satisfaction', sanitize_text_field( $_POST['stats_satisfaction'] ) );
	}

	// Professional Details
	if ( isset( $_POST['detail_specialization'] ) ) {
		update_option( 'detail_specialization', sanitize_text_field( $_POST['detail_specialization'] ) );
	}
	if ( isset( $_POST['detail_experience_level'] ) ) {
		update_option( 'detail_experience_level', sanitize_text_field( $_POST['detail_experience_level'] ) );
	}
	if ( isset( $_POST['detail_education'] ) ) {
		update_option( 'detail_education', sanitize_text_field( $_POST['detail_education'] ) );
	}
	if ( isset( $_POST['detail_languages'] ) ) {
		update_option( 'detail_languages', sanitize_text_field( $_POST['detail_languages'] ) );
	}

	// Call to Action
	if ( isset( $_POST['cta_resume_text'] ) ) {
		update_option( 'cta_resume_text', sanitize_text_field( $_POST['cta_resume_text'] ) );
	}
	if ( isset( $_POST['cta_resume_url'] ) ) {
		update_option( 'cta_resume_url', esc_url_raw( $_POST['cta_resume_url'] ) );
	}
	if ( isset( $_POST['cta_talk_text'] ) ) {
		update_option( 'cta_talk_text', sanitize_text_field( $_POST['cta_talk_text'] ) );
	}
	if ( isset( $_POST['cta_talk_url'] ) ) {
		update_option( 'cta_talk_url', esc_url_raw( $_POST['cta_talk_url'] ) );
	}
} 