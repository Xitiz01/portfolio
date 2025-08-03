<?php
/**
 * Contact Section Theme Options
 *
 * @package Portfolio
 */

/**
 * Contact section tab content
 */
function portfolio_contact_tab_content() {
	?>
	<table class="form-table">
		<tr>
			<th scope="row">
				<label for="contact_title">Contact Section Title</label>
			</th>
			<td>
				<input type="text" id="contact_title" name="contact_title" value="<?php echo esc_attr( get_option( 'contact_title', 'Contact Me' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for the contact section</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_email">Email Address</label>
			</th>
			<td>
				<input type="email" id="contact_email" name="contact_email" value="<?php echo esc_attr( get_option( 'contact_email', 'contact@example.com' ) ); ?>" class="regular-text">
				<p class="description">Enter your email address</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_phone">Phone Number</label>
			</th>
			<td>
				<input type="tel" id="contact_phone" name="contact_phone" value="<?php echo esc_attr( get_option( 'contact_phone', '+1 (555) 123-4567' ) ); ?>" class="regular-text">
				<p class="description">Enter your phone number</p>
			</td>
		</tr>
	</table>
	<?php
}

/**
 * Save contact section options
 */
function portfolio_save_contact_options() {
	// Contact Section
	if ( isset( $_POST['contact_title'] ) ) {
		update_option( 'contact_title', sanitize_text_field( $_POST['contact_title'] ) );
	}
	if ( isset( $_POST['contact_email'] ) ) {
		update_option( 'contact_email', sanitize_email( $_POST['contact_email'] ) );
	}
	if ( isset( $_POST['contact_phone'] ) ) {
		update_option( 'contact_phone', sanitize_text_field( $_POST['contact_phone'] ) );
	}
} 