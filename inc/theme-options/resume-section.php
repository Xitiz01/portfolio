<?php
/**
 * Resume Section Theme Options
 *
 * @package Portfolio
 */

/**
 * Resume section tab content
 */
function portfolio_resume_tab_content() {
	?>
	<table class="form-table">
		<tr>
			<th scope="row">
				<label for="resume_section_title">Section Title</label>
			</th>
			<td>
				<input type="text" id="resume_section_title" name="resume_section_title" value="<?php echo esc_attr( get_option( 'resume_section_title', 'Resume' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for the resume section</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_section_description">Section Description</label>
			</th>
			<td>
				<textarea id="resume_section_description" name="resume_section_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'resume_section_description', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.' ) ); ?></textarea>
				<p class="description">Enter the description for the resume section</p>
			</td>
		</tr>
		
		<!-- Profile Information -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Profile Information</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_profile_image">Profile Image</label>
			</th>
			<td>
				<div class="image-upload-wrapper">
					<input type="hidden" id="resume_profile_image" name="resume_profile_image" value="<?php echo esc_url( get_option( 'resume_profile_image', get_template_directory_uri() . '/assets/img/profile/profile-square-2.webp' ) ); ?>">
					<div class="image-preview" id="resume_profile_image_preview">
						<?php 
						$profile_image = get_option( 'resume_profile_image', get_template_directory_uri() . '/assets/img/profile/profile-square-2.webp' );
						if ( ! empty( $profile_image ) ) : ?>
							<img src="<?php echo esc_url( $profile_image ); ?>" alt="Profile Preview" style="max-width: 150px; height: auto; border-radius: 5px;">
						<?php endif; ?>
					</div>
					<button type="button" class="button button-secondary" id="resume_profile_image_upload_btn">Choose Image</button>
					<button type="button" class="button button-link-delete" id="resume_profile_image_remove_btn" style="display: <?php echo ! empty( $profile_image ) ? 'inline-block' : 'none'; ?>;">Remove Image</button>
					<p class="description">Upload or choose an image from the media library. Recommended size: 400x400 pixels.</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_professional_summary">Professional Summary</label>
			</th>
			<td>
				<textarea id="resume_professional_summary" name="resume_professional_summary" rows="4" class="large-text"><?php echo esc_textarea( get_option( 'resume_professional_summary', 'Driven software architect with expertise in developing scalable, high-performance enterprise solutions. Passionate about leveraging cutting-edge technologies to solve complex business challenges.' ) ); ?></textarea>
				<p class="description">Enter your professional summary</p>
			</td>
		</tr>
		
		<!-- Contact Information -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Contact Information</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_address">Address</label>
			</th>
			<td>
				<input type="text" id="resume_address" name="resume_address" value="<?php echo esc_attr( get_option( 'resume_address', '742 Evergreen Terrace, Springfield, MA 02101' ) ); ?>" class="regular-text">
				<p class="description">Enter your address</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_email">Email</label>
			</th>
			<td>
				<input type="email" id="resume_email" name="resume_email" value="<?php echo esc_attr( get_option( 'resume_email', 'contact@example.com' ) ); ?>" class="regular-text">
				<p class="description">Enter your email address</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_phone">Phone</label>
			</th>
			<td>
				<input type="tel" id="resume_phone" name="resume_phone" value="<?php echo esc_attr( get_option( 'resume_phone', '+1 (555) 123-4567' ) ); ?>" class="regular-text">
				<p class="description">Enter your phone number</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_linkedin">LinkedIn</label>
			</th>
			<td>
				<input type="url" id="resume_linkedin" name="resume_linkedin" value="<?php echo esc_url( get_option( 'resume_linkedin', 'linkedin.com/in/example' ) ); ?>" class="regular-text">
				<p class="description">Enter your LinkedIn profile URL</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_linkedin_display">LinkedIn Display Text</label>
			</th>
			<td>
				<input type="text" id="resume_linkedin_display" name="resume_linkedin_display" value="<?php echo esc_attr( get_option( 'resume_linkedin_display', 'Kshitiz Khanal' ) ); ?>" class="regular-text">
				<p class="description">Enter the text to display instead of the full URL (e.g., "Kshitiz Khanal" or "LinkedIn Profile")</p>
			</td>
		</tr>
		
		<!-- Technical Skills -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Technical Skills</h3>
			</th>
		</tr>
		
		<!-- Technical Skill 1 -->
		<tr>
			<th scope="row">
				<label for="resume_skill_1_name">Skill 1 Name</label>
			</th>
			<td>
				<input type="text" id="resume_skill_1_name" name="resume_skill_1_name" value="<?php echo esc_attr( get_option( 'resume_skill_1_name', 'Web Development' ) ); ?>" class="regular-text">
				<p class="description">Enter the skill name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_skill_1_percentage">Skill 1 Percentage</label>
			</th>
			<td>
				<input type="number" id="resume_skill_1_percentage" name="resume_skill_1_percentage" value="<?php echo esc_attr( get_option( 'resume_skill_1_percentage', '95' ) ); ?>" class="small-text" min="0" max="100">
				<p class="description">Enter percentage (0-100)</p>
			</td>
		</tr>
		
		<!-- Technical Skill 2 -->
		<tr>
			<th scope="row">
				<label for="resume_skill_2_name">Skill 2 Name</label>
			</th>
			<td>
				<input type="text" id="resume_skill_2_name" name="resume_skill_2_name" value="<?php echo esc_attr( get_option( 'resume_skill_2_name', 'UI/UX Design' ) ); ?>" class="regular-text">
				<p class="description">Enter the skill name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_skill_2_percentage">Skill 2 Percentage</label>
			</th>
			<td>
				<input type="number" id="resume_skill_2_percentage" name="resume_skill_2_percentage" value="<?php echo esc_attr( get_option( 'resume_skill_2_percentage', '85' ) ); ?>" class="small-text" min="0" max="100">
				<p class="description">Enter percentage (0-100)</p>
			</td>
		</tr>
		
		<!-- Technical Skill 3 -->
		<tr>
			<th scope="row">
				<label for="resume_skill_3_name">Skill 3 Name</label>
			</th>
			<td>
				<input type="text" id="resume_skill_3_name" name="resume_skill_3_name" value="<?php echo esc_attr( get_option( 'resume_skill_3_name', 'Cloud Architecture' ) ); ?>" class="regular-text">
				<p class="description">Enter the skill name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_skill_3_percentage">Skill 3 Percentage</label>
			</th>
			<td>
				<input type="number" id="resume_skill_3_percentage" name="resume_skill_3_percentage" value="<?php echo esc_attr( get_option( 'resume_skill_3_percentage', '90' ) ); ?>" class="small-text" min="0" max="100">
				<p class="description">Enter percentage (0-100)</p>
			</td>
		</tr>
		
		<!-- Technical Skill 4 -->
		<tr>
			<th scope="row">
				<label for="resume_skill_4_name">Skill 4 Name</label>
			</th>
			<td>
				<input type="text" id="resume_skill_4_name" name="resume_skill_4_name" value="<?php echo esc_attr( get_option( 'resume_skill_4_name', 'Project Management' ) ); ?>" class="regular-text">
				<p class="description">Enter the skill name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_skill_4_percentage">Skill 4 Percentage</label>
			</th>
			<td>
				<input type="number" id="resume_skill_4_percentage" name="resume_skill_4_percentage" value="<?php echo esc_attr( get_option( 'resume_skill_4_percentage', '80' ) ); ?>" class="small-text" min="0" max="100">
				<p class="description">Enter percentage (0-100)</p>
			</td>
		</tr>
		
		<!-- Experience Section -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Professional Experience</h3>
			</th>
		</tr>
		
		<!-- Experience 1 -->
		<tr>
			<th scope="row">
				<label for="resume_experience_1_title">Experience 1 Title</label>
			</th>
			<td>
				<input type="text" id="resume_experience_1_title" name="resume_experience_1_title" value="<?php echo esc_attr( get_option( 'resume_experience_1_title', 'Senior Software Architect' ) ); ?>" class="regular-text">
				<p class="description">Enter the job title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_experience_1_period">Experience 1 Period</label>
			</th>
			<td>
				<input type="text" id="resume_experience_1_period" name="resume_experience_1_period" value="<?php echo esc_attr( get_option( 'resume_experience_1_period', '2022 - Present' ) ); ?>" class="regular-text">
				<p class="description">Enter the time period</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_experience_1_company">Experience 1 Company</label>
			</th>
			<td>
				<input type="text" id="resume_experience_1_company" name="resume_experience_1_company" value="<?php echo esc_attr( get_option( 'resume_experience_1_company', 'Tech Innovations Inc.' ) ); ?>" class="regular-text">
				<p class="description">Enter the company name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_experience_1_description">Experience 1 Description</label>
			</th>
			<td>
				<textarea id="resume_experience_1_description" name="resume_experience_1_description" rows="4" class="large-text"><?php echo esc_textarea( get_option( 'resume_experience_1_description', 'Lead the architectural design and implementation of enterprise-scale applications. Mentor team of 12 developers and establish technical best practices. Drive adoption of microservices architecture and cloud-native solutions. Reduce system downtime by 75% through improved architecture and monitoring.' ) ); ?></textarea>
				<p class="description">Enter the job description</p>
			</td>
		</tr>
		
		<!-- Experience 2 -->
		<tr>
			<th scope="row">
				<label for="resume_experience_2_title">Experience 2 Title</label>
			</th>
			<td>
				<input type="text" id="resume_experience_2_title" name="resume_experience_2_title" value="<?php echo esc_attr( get_option( 'resume_experience_2_title', 'Lead Developer' ) ); ?>" class="regular-text">
				<p class="description">Enter the job title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_experience_2_period">Experience 2 Period</label>
			</th>
			<td>
				<input type="text" id="resume_experience_2_period" name="resume_experience_2_period" value="<?php echo esc_attr( get_option( 'resume_experience_2_period', '2019 - 2022' ) ); ?>" class="regular-text">
				<p class="description">Enter the time period</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_experience_2_company">Experience 2 Company</label>
			</th>
			<td>
				<input type="text" id="resume_experience_2_company" name="resume_experience_2_company" value="<?php echo esc_attr( get_option( 'resume_experience_2_company', 'Digital Solutions Corp.' ) ); ?>" class="regular-text">
				<p class="description">Enter the company name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_experience_2_description">Experience 2 Description</label>
			</th>
			<td>
				<textarea id="resume_experience_2_description" name="resume_experience_2_description" rows="4" class="large-text"><?php echo esc_textarea( get_option( 'resume_experience_2_description', 'Spearheaded development of company\'s flagship product reaching 1M+ users. Implemented CI/CD pipeline reducing deployment time by 60%. Managed team of 8 developers across multiple projects. Increased code test coverage from 45% to 90%.' ) ); ?></textarea>
				<p class="description">Enter the job description</p>
			</td>
		</tr>
		
		<!-- Education Section -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Education</h3>
			</th>
		</tr>
		
		<!-- Education 1 -->
		<tr>
			<th scope="row">
				<label for="resume_education_1_degree">Education 1 Degree</label>
			</th>
			<td>
				<input type="text" id="resume_education_1_degree" name="resume_education_1_degree" value="<?php echo esc_attr( get_option( 'resume_education_1_degree', 'Master of Science in Computer Science' ) ); ?>" class="regular-text">
				<p class="description">Enter the degree name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_education_1_period">Education 1 Period</label>
			</th>
			<td>
				<input type="text" id="resume_education_1_period" name="resume_education_1_period" value="<?php echo esc_attr( get_option( 'resume_education_1_period', '2017 - 2019' ) ); ?>" class="regular-text">
				<p class="description">Enter the time period</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_education_1_school">Education 1 School</label>
			</th>
			<td>
				<input type="text" id="resume_education_1_school" name="resume_education_1_school" value="<?php echo esc_attr( get_option( 'resume_education_1_school', 'Stanford University' ) ); ?>" class="regular-text">
				<p class="description">Enter the school name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_education_1_description">Education 1 Description</label>
			</th>
			<td>
				<textarea id="resume_education_1_description" name="resume_education_1_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'resume_education_1_description', 'Specialized in Artificial Intelligence and Machine Learning. Graduated with honors.' ) ); ?></textarea>
				<p class="description">Enter the education description</p>
			</td>
		</tr>
		
		<!-- Education 2 -->
		<tr>
			<th scope="row">
				<label for="resume_education_2_degree">Education 2 Degree</label>
			</th>
			<td>
				<input type="text" id="resume_education_2_degree" name="resume_education_2_degree" value="<?php echo esc_attr( get_option( 'resume_education_2_degree', 'Bachelor of Science in Software Engineering' ) ); ?>" class="regular-text">
				<p class="description">Enter the degree name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_education_2_period">Education 2 Period</label>
			</th>
			<td>
				<input type="text" id="resume_education_2_period" name="resume_education_2_period" value="<?php echo esc_attr( get_option( 'resume_education_2_period', '2013 - 2017' ) ); ?>" class="regular-text">
				<p class="description">Enter the time period</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_education_2_school">Education 2 School</label>
			</th>
			<td>
				<input type="text" id="resume_education_2_school" name="resume_education_2_school" value="<?php echo esc_attr( get_option( 'resume_education_2_school', 'MIT' ) ); ?>" class="regular-text">
				<p class="description">Enter the school name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_education_2_description">Education 2 Description</label>
			</th>
			<td>
				<textarea id="resume_education_2_description" name="resume_education_2_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'resume_education_2_description', 'Dean\'s List all semesters. Led university\'s coding club.' ) ); ?></textarea>
				<p class="description">Enter the education description</p>
			</td>
		</tr>
		
		<!-- Certifications Section -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Certifications</h3>
			</th>
		</tr>
		
		<!-- Certification 1 -->
		<tr>
			<th scope="row">
				<label for="resume_certification_1_name">Certification 1 Name</label>
			</th>
			<td>
				<input type="text" id="resume_certification_1_name" name="resume_certification_1_name" value="<?php echo esc_attr( get_option( 'resume_certification_1_name', 'AWS Certified Solutions Architect - Professional' ) ); ?>" class="regular-text">
				<p class="description">Enter the certification name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_certification_1_year">Certification 1 Year</label>
			</th>
			<td>
				<input type="text" id="resume_certification_1_year" name="resume_certification_1_year" value="<?php echo esc_attr( get_option( 'resume_certification_1_year', '2023' ) ); ?>" class="small-text">
				<p class="description">Enter the certification year</p>
			</td>
		</tr>
		
		<!-- Certification 2 -->
		<tr>
			<th scope="row">
				<label for="resume_certification_2_name">Certification 2 Name</label>
			</th>
			<td>
				<input type="text" id="resume_certification_2_name" name="resume_certification_2_name" value="<?php echo esc_attr( get_option( 'resume_certification_2_name', 'Google Cloud Professional Architect' ) ); ?>" class="regular-text">
				<p class="description">Enter the certification name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="resume_certification_2_year">Certification 2 Year</label>
			</th>
			<td>
				<input type="text" id="resume_certification_2_year" name="resume_certification_2_year" value="<?php echo esc_attr( get_option( 'resume_certification_2_year', '2022' ) ); ?>" class="small-text">
				<p class="description">Enter the certification year</p>
			</td>
		</tr>
	</table>
	<?php
}

/**
 * Save resume section options
 */
function portfolio_save_resume_options() {
	// Resume Section
	if ( isset( $_POST['resume_section_title'] ) ) {
		update_option( 'resume_section_title', sanitize_text_field( $_POST['resume_section_title'] ) );
	}
	if ( isset( $_POST['resume_section_description'] ) ) {
		update_option( 'resume_section_description', sanitize_textarea_field( $_POST['resume_section_description'] ) );
	}
	
	// Profile Information
	if ( isset( $_POST['resume_profile_image'] ) ) {
		update_option( 'resume_profile_image', esc_url_raw( $_POST['resume_profile_image'] ) );
	}
	if ( isset( $_POST['resume_professional_summary'] ) ) {
		update_option( 'resume_professional_summary', sanitize_textarea_field( $_POST['resume_professional_summary'] ) );
	}
	
	// Contact Information
	if ( isset( $_POST['resume_address'] ) ) {
		update_option( 'resume_address', sanitize_text_field( $_POST['resume_address'] ) );
	}
	if ( isset( $_POST['resume_email'] ) ) {
		update_option( 'resume_email', sanitize_email( $_POST['resume_email'] ) );
	}
	if ( isset( $_POST['resume_phone'] ) ) {
		update_option( 'resume_phone', sanitize_text_field( $_POST['resume_phone'] ) );
	}
	if ( isset( $_POST['resume_linkedin'] ) ) {
		update_option( 'resume_linkedin', esc_url_raw( $_POST['resume_linkedin'] ) );
	}
	if ( isset( $_POST['resume_linkedin_display'] ) ) {
		update_option( 'resume_linkedin_display', sanitize_text_field( $_POST['resume_linkedin_display'] ) );
	}
	
	// Technical Skills
	if ( isset( $_POST['resume_skill_1_name'] ) ) {
		update_option( 'resume_skill_1_name', sanitize_text_field( $_POST['resume_skill_1_name'] ) );
	}
	if ( isset( $_POST['resume_skill_1_percentage'] ) ) {
		update_option( 'resume_skill_1_percentage', intval( $_POST['resume_skill_1_percentage'] ) );
	}
	if ( isset( $_POST['resume_skill_2_name'] ) ) {
		update_option( 'resume_skill_2_name', sanitize_text_field( $_POST['resume_skill_2_name'] ) );
	}
	if ( isset( $_POST['resume_skill_2_percentage'] ) ) {
		update_option( 'resume_skill_2_percentage', intval( $_POST['resume_skill_2_percentage'] ) );
	}
	if ( isset( $_POST['resume_skill_3_name'] ) ) {
		update_option( 'resume_skill_3_name', sanitize_text_field( $_POST['resume_skill_3_name'] ) );
	}
	if ( isset( $_POST['resume_skill_3_percentage'] ) ) {
		update_option( 'resume_skill_3_percentage', intval( $_POST['resume_skill_3_percentage'] ) );
	}
	if ( isset( $_POST['resume_skill_4_name'] ) ) {
		update_option( 'resume_skill_4_name', sanitize_text_field( $_POST['resume_skill_4_name'] ) );
	}
	if ( isset( $_POST['resume_skill_4_percentage'] ) ) {
		update_option( 'resume_skill_4_percentage', intval( $_POST['resume_skill_4_percentage'] ) );
	}
	
	// Experience
	if ( isset( $_POST['resume_experience_1_title'] ) ) {
		update_option( 'resume_experience_1_title', sanitize_text_field( $_POST['resume_experience_1_title'] ) );
	}
	if ( isset( $_POST['resume_experience_1_period'] ) ) {
		update_option( 'resume_experience_1_period', sanitize_text_field( $_POST['resume_experience_1_period'] ) );
	}
	if ( isset( $_POST['resume_experience_1_company'] ) ) {
		update_option( 'resume_experience_1_company', sanitize_text_field( $_POST['resume_experience_1_company'] ) );
	}
	if ( isset( $_POST['resume_experience_1_description'] ) ) {
		update_option( 'resume_experience_1_description', sanitize_textarea_field( $_POST['resume_experience_1_description'] ) );
	}
	
	if ( isset( $_POST['resume_experience_2_title'] ) ) {
		update_option( 'resume_experience_2_title', sanitize_text_field( $_POST['resume_experience_2_title'] ) );
	}
	if ( isset( $_POST['resume_experience_2_period'] ) ) {
		update_option( 'resume_experience_2_period', sanitize_text_field( $_POST['resume_experience_2_period'] ) );
	}
	if ( isset( $_POST['resume_experience_2_company'] ) ) {
		update_option( 'resume_experience_2_company', sanitize_text_field( $_POST['resume_experience_2_company'] ) );
	}
	if ( isset( $_POST['resume_experience_2_description'] ) ) {
		update_option( 'resume_experience_2_description', sanitize_textarea_field( $_POST['resume_experience_2_description'] ) );
	}
	
	// Education
	if ( isset( $_POST['resume_education_1_degree'] ) ) {
		update_option( 'resume_education_1_degree', sanitize_text_field( $_POST['resume_education_1_degree'] ) );
	}
	if ( isset( $_POST['resume_education_1_period'] ) ) {
		update_option( 'resume_education_1_period', sanitize_text_field( $_POST['resume_education_1_period'] ) );
	}
	if ( isset( $_POST['resume_education_1_school'] ) ) {
		update_option( 'resume_education_1_school', sanitize_text_field( $_POST['resume_education_1_school'] ) );
	}
	if ( isset( $_POST['resume_education_1_description'] ) ) {
		update_option( 'resume_education_1_description', sanitize_textarea_field( $_POST['resume_education_1_description'] ) );
	}
	
	if ( isset( $_POST['resume_education_2_degree'] ) ) {
		update_option( 'resume_education_2_degree', sanitize_text_field( $_POST['resume_education_2_degree'] ) );
	}
	if ( isset( $_POST['resume_education_2_period'] ) ) {
		update_option( 'resume_education_2_period', sanitize_text_field( $_POST['resume_education_2_period'] ) );
	}
	if ( isset( $_POST['resume_education_2_school'] ) ) {
		update_option( 'resume_education_2_school', sanitize_text_field( $_POST['resume_education_2_school'] ) );
	}
	if ( isset( $_POST['resume_education_2_description'] ) ) {
		update_option( 'resume_education_2_description', sanitize_textarea_field( $_POST['resume_education_2_description'] ) );
	}
	
	// Certifications
	if ( isset( $_POST['resume_certification_1_name'] ) ) {
		update_option( 'resume_certification_1_name', sanitize_text_field( $_POST['resume_certification_1_name'] ) );
	}
	if ( isset( $_POST['resume_certification_1_year'] ) ) {
		update_option( 'resume_certification_1_year', sanitize_text_field( $_POST['resume_certification_1_year'] ) );
	}
	if ( isset( $_POST['resume_certification_2_name'] ) ) {
		update_option( 'resume_certification_2_name', sanitize_text_field( $_POST['resume_certification_2_name'] ) );
	}
	if ( isset( $_POST['resume_certification_2_year'] ) ) {
		update_option( 'resume_certification_2_year', sanitize_text_field( $_POST['resume_certification_2_year'] ) );
	}
} 

/**
 * Enqueue media uploader scripts for resume section
 */
function portfolio_resume_enqueue_media_scripts() {
	wp_enqueue_media();
	wp_enqueue_script( 'portfolio-resume-media', get_template_directory_uri() . '/js/resume-media.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'admin_enqueue_scripts', 'portfolio_resume_enqueue_media_scripts' );

/**
 * Add inline styles for resume section admin
 */
function portfolio_resume_admin_styles() {
	?>
	<style>
		.image-upload-wrapper {
			max-width: 400px;
		}
		.image-preview {
			margin-bottom: 10px;
			padding: 10px;
			border: 1px solid #ddd;
			border-radius: 5px;
			background: #f9f9f9;
			text-align: center;
		}
		.image-preview img {
			max-width: 100%;
			height: auto;
		}
		#resume_profile_image_upload_btn {
			margin-right: 10px;
		}
	</style>
	<?php
}
add_action( 'admin_head', 'portfolio_resume_admin_styles' ); 