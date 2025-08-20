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
		<!-- Section Settings -->
		<tr>
			<th scope="row">
				<label for="contact_section_title">Section Title</label>
			</th>
			<td>
				<input type="text" id="contact_section_title" name="contact_section_title" value="<?php echo esc_attr( get_option( 'contact_section_title', 'Contact' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for the contact section</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_section_description">Section Description</label>
			</th>
			<td>
				<textarea id="contact_section_description" name="contact_section_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'contact_section_description', 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit' ) ); ?></textarea>
				<p class="description">Enter the description for the contact section</p>
			</td>
		</tr>

		<!-- Contact Information -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd; color: #0073aa;">Contact Information</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_info_description">Contact Info Description</label>
			</th>
			<td>
				<textarea id="contact_info_description" name="contact_info_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'contact_info_description', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.' ) ); ?></textarea>
				<p class="description">Enter the description text above the contact information</p>
			</td>
		</tr>

		<!-- Location Information -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd; color: #0073aa;">Location Details</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_location_title">Location Title</label>
			</th>
			<td>
				<input type="text" id="contact_location_title" name="contact_location_title" value="<?php echo esc_attr( get_option( 'contact_location_title', 'Our Location' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for the location section (e.g., "Our Location", "Office Address")</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_location_address_1">Address Line 1</label>
			</th>
			<td>
				<input type="text" id="contact_location_address_1" name="contact_location_address_1" value="<?php echo esc_attr( get_option( 'contact_location_address_1', 'A108 Adam Street' ) ); ?>" class="regular-text">
				<p class="description">Enter the first line of your address</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_location_address_2">Address Line 2</label>
			</th>
			<td>
				<input type="text" id="contact_location_address_2" name="contact_location_address_2" value="<?php echo esc_attr( get_option( 'contact_location_address_2', 'New York, NY 535022' ) ); ?>" class="regular-text">
				<p class="description">Enter the second line of your address (city, state, zip)</p>
			</td>
		</tr>

		<!-- Phone Information -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd; color: #0073aa;">Phone Details</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_phone_title">Phone Title</label>
			</th>
			<td>
				<input type="text" id="contact_phone_title" name="contact_phone_title" value="<?php echo esc_attr( get_option( 'contact_phone_title', 'Phone Number' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for the phone section (e.g., "Phone Number", "Call Us")</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_phone_1">Primary Phone</label>
			</th>
			<td>
				<input type="tel" id="contact_phone_1" name="contact_phone_1" value="<?php echo esc_attr( get_option( 'contact_phone_1', '+1 5589 55488 55' ) ); ?>" class="regular-text">
				<p class="description">Enter your primary phone number</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_phone_2">Secondary Phone</label>
			</th>
			<td>
				<input type="tel" id="contact_phone_2" name="contact_phone_2" value="<?php echo esc_attr( get_option( 'contact_phone_2', '+1 6678 254445 41' ) ); ?>" class="regular-text">
				<p class="description">Enter your secondary phone number (optional)</p>
			</td>
		</tr>

		<!-- Email Information -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd; color: #0073aa;">Email Details</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_email_title">Email Title</label>
			</th>
			<td>
				<input type="text" id="contact_email_title" name="contact_email_title" value="<?php echo esc_attr( get_option( 'contact_email_title', 'Email Address' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for the email section (e.g., "Email Address", "Write to Us")</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_email_1">Primary Email</label>
			</th>
			<td>
				<input type="email" id="contact_email_1" name="contact_email_1" value="<?php echo esc_attr( get_option( 'contact_email_1', 'info@example.com' ) ); ?>" class="regular-text">
				<p class="description">Enter your primary email address</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_email_2">Secondary Email</label>
			</th>
			<td>
				<input type="email" id="contact_email_2" name="contact_email_2" value="<?php echo esc_attr( get_option( 'contact_email_2', 'contact@example.com' ) ); ?>" class="regular-text">
				<p class="description">Enter your secondary email address (optional)</p>
			</td>
		</tr>

		<!-- Contact Form -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd; color: #0073aa;">Contact Form</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_form_title">Form Title</label>
			</th>
			<td>
				<input type="text" id="contact_form_title" name="contact_form_title" value="<?php echo esc_attr( get_option( 'contact_form_title', 'Get In Touch' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for the contact form section</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_form_description">Form Description</label>
			</th>
			<td>
				<textarea id="contact_form_description" name="contact_form_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'contact_form_description', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.' ) ); ?></textarea>
				<p class="description">Enter the description text above the contact form</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_form_shortcode">Contact Form Shortcode</label>
			</th>
			<td>
				<input type="text" id="contact_form_shortcode" name="contact_form_shortcode" value="<?php echo esc_attr( get_option( 'contact_form_shortcode', '' ) ); ?>" class="regular-text" placeholder="[contact-form-7 id='123' title='Contact form 1']">
				<p class="description">Enter a shortcode for your preferred contact form plugin (e.g., Contact Form 7, Gravity Forms, Ninja Forms). Leave empty to use the default form.</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="contact_form_action">Form Action URL</label>
			</th>
			<td>
				<input type="url" id="contact_form_action" name="contact_form_action" value="<?php echo esc_url( get_option( 'contact_form_action', 'forms/contact.php' ) ); ?>" class="regular-text">
				<p class="description">Enter the form action URL for the default contact form (only used if no shortcode is provided)</p>
			</td>
		</tr>
	</table>
	<?php
}

/**
 * Save contact section options
 */
function portfolio_save_contact_options() {
	// Section Settings
	if ( isset( $_POST['contact_section_title'] ) ) {
		update_option( 'contact_section_title', sanitize_text_field( $_POST['contact_section_title'] ) );
	}
	if ( isset( $_POST['contact_section_description'] ) ) {
		update_option( 'contact_section_description', sanitize_textarea_field( $_POST['contact_section_description'] ) );
	}

	// Contact Information
	if ( isset( $_POST['contact_info_description'] ) ) {
		update_option( 'contact_info_description', sanitize_textarea_field( $_POST['contact_info_description'] ) );
	}

	// Location Details
	if ( isset( $_POST['contact_location_title'] ) ) {
		update_option( 'contact_location_title', sanitize_text_field( $_POST['contact_location_title'] ) );
	}
	if ( isset( $_POST['contact_location_address_1'] ) ) {
		update_option( 'contact_location_address_1', sanitize_text_field( $_POST['contact_location_address_1'] ) );
	}
	if ( isset( $_POST['contact_location_address_2'] ) ) {
		update_option( 'contact_location_address_2', sanitize_text_field( $_POST['contact_location_address_2'] ) );
	}

	// Phone Details
	if ( isset( $_POST['contact_phone_title'] ) ) {
		update_option( 'contact_phone_title', sanitize_text_field( $_POST['contact_phone_title'] ) );
	}
	if ( isset( $_POST['contact_phone_1'] ) ) {
		update_option( 'contact_phone_1', sanitize_text_field( $_POST['contact_phone_1'] ) );
	}
	if ( isset( $_POST['contact_phone_2'] ) ) {
		update_option( 'contact_phone_2', sanitize_text_field( $_POST['contact_phone_2'] ) );
	}

	// Email Details
	if ( isset( $_POST['contact_email_title'] ) ) {
		update_option( 'contact_email_title', sanitize_text_field( $_POST['contact_email_title'] ) );
	}
	if ( isset( $_POST['contact_email_1'] ) ) {
		update_option( 'contact_email_1', sanitize_email( $_POST['contact_email_1'] ) );
	}
	if ( isset( $_POST['contact_email_2'] ) ) {
		update_option( 'contact_email_2', sanitize_email( $_POST['contact_email_2'] ) );
	}

	// Contact Form
	if ( isset( $_POST['contact_form_title'] ) ) {
		update_option( 'contact_form_title', sanitize_text_field( $_POST['contact_form_title'] ) );
	}
	if ( isset( $_POST['contact_form_description'] ) ) {
		update_option( 'contact_form_description', sanitize_textarea_field( $_POST['contact_form_description'] ) );
	}
	if ( isset( $_POST['contact_form_shortcode'] ) ) {
		update_option( 'contact_form_shortcode', sanitize_text_field( $_POST['contact_form_shortcode'] ) );
	}
	if ( isset( $_POST['contact_form_action'] ) ) {
		update_option( 'contact_form_action', esc_url_raw( $_POST['contact_form_action'] ) );
	}
} 