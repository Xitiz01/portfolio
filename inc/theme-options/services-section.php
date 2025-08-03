<?php
/**
 * Services Section Theme Options
 *
 * @package Portfolio
 */

/**
 * Services section tab content
 */
function portfolio_services_tab_content() {
	?>
	<table class="form-table">
		<tr>
			<th scope="row">
				<label for="services_title">Services Section Title</label>
			</th>
			<td>
				<input type="text" id="services_title" name="services_title" value="<?php echo esc_attr( get_option( 'services_title', 'My Services' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for the services section</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="services_description">Services Description</label>
			</th>
			<td>
				<textarea id="services_description" name="services_description" rows="4" class="large-text"><?php echo esc_textarea( get_option( 'services_description', 'Enter your services description here...' ) ); ?></textarea>
				<p class="description">Enter the description for the services section</p>
			</td>
		</tr>
	</table>
	<?php
}

/**
 * Save services section options
 */
function portfolio_save_services_options() {
	// Services Section
	if ( isset( $_POST['services_title'] ) ) {
		update_option( 'services_title', sanitize_text_field( $_POST['services_title'] ) );
	}
	if ( isset( $_POST['services_description'] ) ) {
		update_option( 'services_description', sanitize_textarea_field( $_POST['services_description'] ) );
	}
} 