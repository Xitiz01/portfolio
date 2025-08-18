<?php
/**
 * Hero Section Theme Options
 *
 * @package Portfolio
 */

/**
 * Hero section tab content
 */
function portfolio_hero_tab_content() {
	$hero_first_name = get_option( 'hero_first_name', 'Kshitiz' );
	$hero_last_name = get_option( 'hero_last_name', 'Khanal' );
	$hero_job_title = get_option( 'hero_job_title', 'Software Engineer' );
	$hero_description = get_option( 'hero_description', 'Passionate about creating exceptional digital experiences that blend innovative design with functional development. Let\'s bring your vision to life.' );
	$hero_profile_image = get_option( 'hero_profile_image', get_template_directory_uri() . '/assets/img/profile/profile-2.webp' );
	
	// Typed skills
	$hero_typed_skills = get_option( 'hero_typed_skills', array( 'Software Engineer', 'Web Developer', 'Brand Strategist', 'Creative Director' ) );
	
	// Button settings
	$hero_primary_button_text = get_option( 'hero_primary_button_text', 'View My Work' );
	$hero_primary_button_link = get_option( 'hero_primary_button_link', '#portfolio' );
	$hero_secondary_button_text = get_option( 'hero_secondary_button_text', 'Get In Touch' );
	$hero_secondary_button_link = get_option( 'hero_secondary_button_link', '#contact' );
	
	// Social media links
	$hero_social_link_1 = get_option( 'hero_social_link_1', '' );
	$hero_social_link_2 = get_option( 'hero_social_link_2', '' );
	$hero_social_link_3 = get_option( 'hero_social_link_3', '' );
	$hero_social_link_4 = get_option( 'hero_social_link_4', '' );
	
	// Social media icons
	$hero_social_link_1_icon = get_option( 'hero_social_link_1_icon', '' );
	$hero_social_link_2_icon = get_option( 'hero_social_link_2_icon', '' );
	$hero_social_link_3_icon = get_option( 'hero_social_link_3_icon', '' );
	$hero_social_link_4_icon = get_option( 'hero_social_link_4_icon', '' );
	
	// Background elements
	$hero_show_background_circles = get_option( 'hero_show_background_circles', true );
	?>
	
	<!-- Basic Information -->
	<h3>Basic Information</h3>
	<table class="form-table">
		<tr>
			<th scope="row">
				<label for="hero_first_name">First Name</label>
			</th>
			<td>
				<input type="text" id="hero_first_name" name="hero_first_name" value="<?php echo esc_attr( $hero_first_name ); ?>" class="regular-text">
				<p class="description">Enter your first name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="hero_last_name">Last Name</label>
			</th>
			<td>
				<input type="text" id="hero_last_name" name="hero_last_name" value="<?php echo esc_attr( $hero_last_name ); ?>" class="regular-text">
				<p class="description">Enter your last name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="hero_job_title">Job Title</label>
			</th>
			<td>
				<input type="text" id="hero_job_title" name="hero_job_title" value="<?php echo esc_attr( $hero_job_title ); ?>" class="regular-text">
				<p class="description">Enter your job title or profession</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="hero_description">Description</label>
			</th>
			<td>
				<textarea id="hero_description" name="hero_description" rows="4" class="large-text"><?php echo esc_textarea( $hero_description ); ?></textarea>
				<p class="description">Enter your hero section description</p>
			</td>
		</tr>
	</table>

	<!-- Typed Skills -->
	<h3>Typed Skills (Dynamic Text)</h3>
	<table class="form-table">
		<tr>
			<th scope="row">
				<label>Typed Skills</label>
			</th>
			<td>
				<div id="typed-skills-container">
					<?php 
					if ( is_array( $hero_typed_skills ) ) {
						foreach ( $hero_typed_skills as $index => $skill ) {
							echo '<div class="typed-skill-row" style="margin-bottom: 10px;">';
							echo '<input type="text" name="hero_typed_skills[]" value="' . esc_attr( $skill ) . '" class="regular-text" placeholder="Enter skill">';
							echo '<button type="button" class="button remove-skill" style="margin-left: 10px;">Remove</button>';
							echo '</div>';
						}
					}
					?>
				</div>
				<button type="button" id="add-typed-skill" class="button">Add New Skill</button>
				<p class="description">These skills will rotate in the typed text animation. Separate each skill on a new line.</p>
			</td>
		</tr>
	</table>

	<!-- Call-to-Action Buttons -->
	<h3>Call-to-Action Buttons</h3>
	<table class="form-table">
		<tr>
			<th scope="row">
				<label for="hero_primary_button_text">Primary Button Text</label>
			</th>
			<td>
				<input type="text" id="hero_primary_button_text" name="hero_primary_button_text" value="<?php echo esc_attr( $hero_primary_button_text ); ?>" class="regular-text">
				<p class="description">Text for the primary button (e.g., "View My Work")</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="hero_primary_button_link">Primary Button Link</label>
			</th>
			<td>
				<input type="text" id="hero_primary_button_link" name="hero_primary_button_link" value="<?php echo esc_attr( $hero_primary_button_link ); ?>" class="regular-text" placeholder="#portfolio or full URL">
				<p class="description">Link for the primary button (e.g., "#portfolio" or full URL)</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="hero_secondary_button_text">Secondary Button Text</label>
			</th>
			<td>
				<input type="text" id="hero_secondary_button_text" name="hero_secondary_button_text" value="<?php echo esc_attr( $hero_secondary_button_text ); ?>" class="regular-text">
				<p class="description">Text for the secondary button (e.g., "Get In Touch")</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="hero_secondary_button_link">Secondary Button Link</label>
			</th>
			<td>
				<input type="text" id="hero_secondary_button_link" name="hero_secondary_button_link" value="<?php echo esc_attr( $hero_secondary_button_link ); ?>" class="regular-text" placeholder="#contact or full URL">
				<p class="description">Link for the secondary button (e.g., "#contact" or full URL)</p>
			</td>
		</tr>
	</table>

	<!-- Social Media Links -->
	<h3>Social Media Links</h3>
	<table class="form-table">
		<tr>
			<th scope="row">
				<label for="hero_social_link_1">Social Link 1</label>
			</th>
			<td>
				<div class="social-media-row">
					<div class="social-url-field">
						<input type="text" id="hero_social_link_1" name="hero_social_link_1" value="<?php echo esc_attr( $hero_social_link_1 ); ?>" class="regular-text" placeholder="https://example.com/yourusername or leave empty">
						<p class="description">Your first social media profile URL (leave empty to hide this social link)</p>
					</div>
					<div class="social-icon-field">
						<input type="hidden" id="hero_social_link_1_icon" name="hero_social_link_1_icon" value="<?php echo esc_url( $hero_social_link_1_icon ); ?>">
						<div class="icon-preview">
							<?php if ( $hero_social_link_1_icon ) : ?>
								<img src="<?php echo esc_url( $hero_social_link_1_icon ); ?>" alt="Social Icon 1" style="max-width: 32px; height: auto; border: 1px solid #ddd; padding: 2px;">
							<?php endif; ?>
						</div>
						<button type="button" class="button upload-social-icon" data-target="hero_social_link_1_icon">Upload Icon</button>
						<button type="button" class="button remove-social-icon" data-target="hero_social_link_1_icon" <?php echo empty( $hero_social_link_1_icon ) ? 'style="display:none;"' : ''; ?>>Remove</button>
						<p class="description">Upload custom icon for social link 1 (32x32px recommended)</p>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="hero_social_link_2">Social Link 2</label>
			</th>
			<td>
				<div class="social-media-row">
					<div class="social-url-field">
						<input type="text" id="hero_social_link_2" name="hero_social_link_2" value="<?php echo esc_attr( $hero_social_link_2 ); ?>" class="regular-text" placeholder="https://example.com/yourusername or leave empty">
						<p class="description">Your second social media profile URL (leave empty to hide this social link)</p>
					</div>
					<div class="social-icon-field">
						<input type="hidden" id="hero_social_link_2_icon" name="hero_social_link_2_icon" value="<?php echo esc_url( $hero_social_link_2_icon ); ?>">
						<div class="icon-preview">
							<?php if ( $hero_social_link_2_icon ) : ?>
								<img src="<?php echo esc_url( $hero_social_link_2_icon ); ?>" alt="Social Icon 2" style="max-width: 32px; height: auto; border: 1px solid #ddd; padding: 2px;">
							<?php endif; ?>
						</div>
						<button type="button" class="button upload-social-icon" data-target="hero_social_link_2_icon">Upload Icon</button>
						<button type="button" class="button remove-social-icon" data-target="hero_social_link_2_icon" <?php echo empty( $hero_social_link_2_icon ) ? 'style="display:none;"' : ''; ?>>Remove</button>
						<p class="description">Upload custom icon for social link 2 (32x32px recommended)</p>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="hero_social_link_3">Social Link 3</label>
			</th>
			<td>
				<div class="social-media-row">
					<div class="social-url-field">
						<input type="text" id="hero_social_link_3" name="hero_social_link_3" value="<?php echo esc_attr( $hero_social_link_3 ); ?>" class="regular-text" placeholder="https://example.com/yourusername or leave empty">
						<p class="description">Your third social media profile URL (leave empty to hide this social link)</p>
					</div>
					<div class="social-icon-field">
						<input type="hidden" id="hero_social_link_3_icon" name="hero_social_link_3_icon" value="<?php echo esc_url( $hero_social_link_3_icon ); ?>">
						<div class="icon-preview">
							<?php if ( $hero_social_link_3_icon ) : ?>
								<img src="<?php echo esc_url( $hero_social_link_3_icon ); ?>" alt="Social Icon 3" style="max-width: 32px; height: auto; border: 1px solid #ddd; padding: 2px;">
							<?php endif; ?>
						</div>
						<button type="button" class="button upload-social-icon" data-target="hero_social_link_3_icon">Upload Icon</button>
						<button type="button" class="button remove-social-icon" data-target="hero_social_link_3_icon" <?php echo empty( $hero_social_link_3_icon ) ? 'style="display:none;"' : ''; ?>>Remove</button>
						<p class="description">Upload custom icon for social link 3 (32x32px recommended)</p>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="hero_social_link_4">Social Link 4</label>
			</th>
			<td>
				<div class="social-media-row">
					<div class="social-url-field">
						<input type="text" id="hero_social_link_4" name="hero_social_link_4" value="<?php echo esc_attr( $hero_social_link_4 ); ?>" class="regular-text" placeholder="https://example.com/yourusername or leave empty">
						<p class="description">Your fourth social media profile URL (leave empty to hide this social link)</p>
					</div>
					<div class="social-icon-field">
						<input type="hidden" id="hero_social_link_4_icon" name="hero_social_link_4_icon" value="<?php echo esc_url( $hero_social_link_4_icon ); ?>">
						<div class="icon-preview">
							<?php if ( $hero_social_link_4_icon ) : ?>
								<img src="<?php echo esc_url( $hero_social_link_4_icon ); ?>" alt="Social Icon 4" style="max-width: 32px; height: auto; border: 1px solid #ddd; padding: 2px;">
							<?php endif; ?>
						</div>
						<button type="button" class="button upload-social-icon" data-target="hero_social_link_4_icon">Upload Icon</button>
						<button type="button" class="button remove-social-icon" data-target="hero_social_link_4_icon" <?php echo empty( $hero_social_link_4_icon ) ? 'style="display:none;"' : ''; ?>>Remove</button>
						<p class="description">Upload custom icon for social link 4 (32x32px recommended)</p>
					</div>
				</div>
			</td>
		</tr>
	</table>

	<!-- Profile Image -->
	<h3>Profile Image</h3>
	<table class="form-table">
		<tr>
			<th scope="row">
				<label for="hero_profile_image">Profile Image</label>
			</th>
			<td>
				<div class="image-upload-container">
					<input type="hidden" id="hero_profile_image" name="hero_profile_image" value="<?php echo esc_url( $hero_profile_image ); ?>">
					<div class="image-preview">
						<?php if ( $hero_profile_image ) : ?>
							<img src="<?php echo esc_url( $hero_profile_image ); ?>" alt="Profile Preview" style="max-width: 200px; height: auto; border: 1px solid #ddd; padding: 5px; margin-bottom: 10px;">
						<?php endif; ?>
					</div>
					<button type="button" id="upload_profile_image" class="button">Upload Image</button>
					<button type="button" id="remove_profile_image" class="button" <?php echo empty( $hero_profile_image ) ? 'style="display:none;"' : ''; ?>>Remove Image</button>
					<p class="description">Upload or select your profile image. Recommended size: 400x400px or larger.</p>
				</div>
			</td>
		</tr>
	</table>

	<!-- Background Elements -->
	<h3>Background Elements</h3>
	<table class="form-table">
		<tr>
			<th scope="row">
				<label for="hero_show_background_circles">Show Background Circles</label>
			</th>
			<td>
				<label>
					<input type="checkbox" id="hero_show_background_circles" name="hero_show_background_circles" value="1" <?php checked( $hero_show_background_circles, true ); ?>>
					Enable decorative background circles
				</label>
				<p class="description">Show or hide the decorative background circle elements</p>
			</td>
		</tr>
	</table>

	<!-- JavaScript for dynamic functionality -->
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		// Add new typed skill
		$('#add-typed-skill').on('click', function() {
			var newRow = '<div class="typed-skill-row" style="margin-bottom: 10px;">' +
						 '<input type="text" name="hero_typed_skills[]" value="" class="regular-text" placeholder="Enter skill">' +
						 '<button type="button" class="button remove-skill" style="margin-left: 10px;">Remove</button>' +
						 '</div>';
			$('#typed-skills-container').append(newRow);
		});

		// Remove typed skill
		$(document).on('click', '.remove-skill', function() {
			$(this).closest('.typed-skill-row').remove();
		});

		// Profile image upload functionality
		$('#upload_profile_image').on('click', function(e) {
			e.preventDefault();
			
			// Check if wp.media is available
			if (typeof wp === 'undefined' || !wp.media) {
				alert('WordPress media library is not available. Please refresh the page and try again.');
				return;
			}
			
			var image = wp.media({
				title: 'Upload Profile Image',
				multiple: false,
				library: {
					type: ['image', 'application/octet-stream']
				}
			}).open().on('select', function() {
				var uploaded_image = image.state().get('selection').first();
				var image_url = uploaded_image.toJSON().url;
				var file_type = uploaded_image.toJSON().subtype;
				
				$('#hero_profile_image').val(image_url);
				
				// Handle SVG files differently
				if (file_type === 'svg+xml' || image_url.toLowerCase().endsWith('.svg')) {
					$('.image-preview').html('<img src="' + image_url + '" alt="Profile Preview" style="max-width: 200px; height: auto; border: 1px solid #ddd; padding: 5px; margin-bottom: 10px; background: #f9f9f9;">');
				} else {
					$('.image-preview').html('<img src="' + image_url + '" alt="Profile Preview" style="max-width: 200px; height: auto; border: 1px solid #ddd; padding: 5px; margin-bottom: 10px;">');
				}
				$('#remove_profile_image').show();
			});
		});

		// Remove profile image
		$('#remove_profile_image').on('click', function() {
			$('#hero_profile_image').val('');
			$('.image-preview').html('');
			$(this).hide();
		});

		// Social media icon upload functionality
		$(document).on('click', '.upload-social-icon', function(e) {
			e.preventDefault();
			var targetField = $(this).data('target');
			var targetInput = $('#' + targetField);
			var targetPreview = targetInput.siblings('.icon-preview');
			var targetRemoveBtn = targetInput.siblings('.remove-social-icon');
			
			// Check if wp.media is available
			if (typeof wp === 'undefined' || !wp.media) {
				alert('WordPress media library is not available. Please refresh the page and try again.');
				return;
			}
			
			var image = wp.media({
				title: 'Upload Social Media Icon',
				multiple: false,
				library: {
					type: ['image', 'application/octet-stream']
				}
			}).open().on('select', function() {
				var uploaded_image = image.state().get('selection').first();
				var image_url = uploaded_image.toJSON().url;
				var file_type = uploaded_image.toJSON().subtype;
				
				targetInput.val(image_url);
				
				// Handle SVG files differently
				if (file_type === 'svg+xml' || image_url.toLowerCase().endsWith('.svg')) {
					targetPreview.html('<img src="' + image_url + '" alt="Social Icon" style="max-width: 32px; height: auto; border: 1px solid #ddd; padding: 2px; background: #f9f9f9;">');
				} else {
					targetPreview.html('<img src="' + image_url + '" alt="Social Icon" style="max-width: 32px; height: auto; border: 1px solid #ddd; padding: 2px;">');
				}
				targetRemoveBtn.show();
			});
		});

		// Remove social media icon
		$(document).on('click', '.remove-social-icon', function(e) {
			e.preventDefault();
			var targetField = $(this).data('target');
			var targetInput = $('#' + targetField);
			var targetPreview = targetInput.siblings('.icon-preview');
			
			targetInput.val('');
			targetPreview.html('');
			$(this).hide();
		});
	});
	</script>

	<style>
	.typed-skill-row {
		display: flex;
		align-items: center;
	}
	.image-upload-container {
		margin-bottom: 10px;
	}
	.image-preview {
		margin-bottom: 10px;
	}
	.social-media-row {
		display: flex;
		gap: 20px;
		align-items: flex-start;
	}
	.social-url-field {
		flex: 1;
	}
	.social-icon-field {
		flex: 0 0 200px;
	}
	.icon-preview {
		margin-bottom: 10px;
		min-height: 40px;
	}
	.icon-preview img {
		border-radius: 4px;
	}
	.upload-social-icon,
	.remove-social-icon {
		margin-right: 5px;
		margin-bottom: 5px;
	}
	</style>
	<?php
}

/**
 * Save hero section options
 */
function portfolio_save_hero_options() {
	// Basic Information
	if ( isset( $_POST['hero_first_name'] ) ) {
		update_option( 'hero_first_name', sanitize_text_field( $_POST['hero_first_name'] ) );
	}
	if ( isset( $_POST['hero_last_name'] ) ) {
		update_option( 'hero_last_name', sanitize_text_field( $_POST['hero_last_name'] ) );
	}
	if ( isset( $_POST['hero_job_title'] ) ) {
		update_option( 'hero_job_title', sanitize_text_field( $_POST['hero_job_title'] ) );
	}
	if ( isset( $_POST['hero_description'] ) ) {
		update_option( 'hero_description', sanitize_textarea_field( $_POST['hero_description'] ) );
	}

	// Typed Skills
	if ( isset( $_POST['hero_typed_skills'] ) && is_array( $_POST['hero_typed_skills'] ) ) {
		$typed_skills = array_map( 'sanitize_text_field', $_POST['hero_typed_skills'] );
		$typed_skills = array_filter( $typed_skills ); // Remove empty values
		update_option( 'hero_typed_skills', $typed_skills );
	}

	// Button Settings
	if ( isset( $_POST['hero_primary_button_text'] ) ) {
		update_option( 'hero_primary_button_text', sanitize_text_field( $_POST['hero_primary_button_text'] ) );
	}
	if ( isset( $_POST['hero_primary_button_link'] ) ) {
		update_option( 'hero_primary_button_link', sanitize_text_field( $_POST['hero_primary_button_link'] ) );
	}
	if ( isset( $_POST['hero_secondary_button_text'] ) ) {
		update_option( 'hero_secondary_button_text', sanitize_text_field( $_POST['hero_secondary_button_text'] ) );
	}
	if ( isset( $_POST['hero_secondary_button_link'] ) ) {
		update_option( 'hero_secondary_button_link', sanitize_text_field( $_POST['hero_secondary_button_link'] ) );
	}

	// Social Media Links
	if ( isset( $_POST['hero_social_link_1'] ) ) {
		$social_link_1_url = trim( $_POST['hero_social_link_1'] );
		if ( ! empty( $social_link_1_url ) && filter_var( $social_link_1_url, FILTER_VALIDATE_URL ) === false ) {
			// If not empty but invalid URL, don't save it
			update_option( 'hero_social_link_1', '' );
		} else {
			update_option( 'hero_social_link_1', sanitize_text_field( $social_link_1_url ) );
		}
	}
	if ( isset( $_POST['hero_social_link_2'] ) ) {
		$social_link_2_url = trim( $_POST['hero_social_link_2'] );
		if ( ! empty( $social_link_2_url ) && filter_var( $social_link_2_url, FILTER_VALIDATE_URL ) === false ) {
			// If not empty but invalid URL, don't save it
			update_option( 'hero_social_link_2', '' );
		} else {
			update_option( 'hero_social_link_2', sanitize_text_field( $social_link_2_url ) );
		}
	}
	if ( isset( $_POST['hero_social_link_3'] ) ) {
		$social_link_3_url = trim( $_POST['hero_social_link_3'] );
		if ( ! empty( $social_link_3_url ) && filter_var( $social_link_3_url, FILTER_VALIDATE_URL ) === false ) {
			// If not empty but invalid URL, don't save it
			update_option( 'hero_social_link_3', '' );
		} else {
			update_option( 'hero_social_link_3', sanitize_text_field( $social_link_3_url ) );
		}
	}
	if ( isset( $_POST['hero_social_link_4'] ) ) {
		$social_link_4_url = trim( $_POST['hero_social_link_4'] );
		if ( ! empty( $social_link_4_url ) && filter_var( $social_link_4_url, FILTER_VALIDATE_URL ) === false ) {
			// If not empty but invalid URL, don't save it
			update_option( 'hero_social_link_4', '' );
		} else {
			update_option( 'hero_social_link_4', sanitize_text_field( $social_link_4_url ) );
		}
	}

	// Social Media Icons
	if ( isset( $_POST['hero_social_link_1_icon'] ) ) {
		update_option( 'hero_social_link_1_icon', esc_url_raw( $_POST['hero_social_link_1_icon'] ) );
	}
	if ( isset( $_POST['hero_social_link_2_icon'] ) ) {
		update_option( 'hero_social_link_2_icon', esc_url_raw( $_POST['hero_social_link_2_icon'] ) );
	}
	if ( isset( $_POST['hero_social_link_3_icon'] ) ) {
		update_option( 'hero_social_link_3_icon', esc_url_raw( $_POST['hero_social_link_3_icon'] ) );
	}
	if ( isset( $_POST['hero_social_link_4_icon'] ) ) {
		update_option( 'hero_social_link_4_icon', esc_url_raw( $_POST['hero_social_link_4_icon'] ) );
	}

	// Profile Image
	if ( isset( $_POST['hero_profile_image'] ) ) {
		update_option( 'hero_profile_image', esc_url_raw( $_POST['hero_profile_image'] ) );
	}

	// Background Elements
	$show_background_circles = isset( $_POST['hero_show_background_circles'] ) ? true : false;
	update_option( 'hero_show_background_circles', $show_background_circles );
} 