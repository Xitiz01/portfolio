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
	?>
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
		<tr>
			<th scope="row">
				<label for="hero_profile_image">Profile Image URL</label>
			</th>
			<td>
				<input type="url" id="hero_profile_image" name="hero_profile_image" value="<?php echo esc_url( $hero_profile_image ); ?>" class="regular-text">
				<p class="description">Enter the URL of your profile image</p>
			</td>
		</tr>
	</table>
	<?php
}

/**
 * Save hero section options
 */
function portfolio_save_hero_options() {
	// Hero Section
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
	if ( isset( $_POST['hero_profile_image'] ) ) {
		update_option( 'hero_profile_image', esc_url_raw( $_POST['hero_profile_image'] ) );
	}
} 