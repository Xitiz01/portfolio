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
	<table class="form-table">
		<tr>
			<th scope="row">
				<label for="about_title">About Section Title</label>
			</th>
			<td>
				<input type="text" id="about_title" name="about_title" value="<?php echo esc_attr( get_option( 'about_title', 'About Me' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for the about section</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="about_content">About Content</label>
			</th>
			<td>
				<textarea id="about_content" name="about_content" rows="6" class="large-text"><?php echo esc_textarea( get_option( 'about_content', 'Enter your about content here...' ) ); ?></textarea>
				<p class="description">Enter your about section content</p>
			</td>
		</tr>
	</table>
	<?php
}

/**
 * Save about section options
 */
function portfolio_save_about_options() {
	// About Section
	if ( isset( $_POST['about_title'] ) ) {
		update_option( 'about_title', sanitize_text_field( $_POST['about_title'] ) );
	}
	if ( isset( $_POST['about_content'] ) ) {
		update_option( 'about_content', sanitize_textarea_field( $_POST['about_content'] ) );
	}
} 