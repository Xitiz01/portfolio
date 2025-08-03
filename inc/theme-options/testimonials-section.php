<?php
/**
 * Testimonials Section Theme Options
 *
 * @package Portfolio
 */

/**
 * Testimonials section tab content
 */
function portfolio_testimonials_tab_content() {
	?>
	<table class="form-table">
		<tr>
			<th scope="row">
				<label for="testimonials_section_title">Section Title</label>
			</th>
			<td>
				<input type="text" id="testimonials_section_title" name="testimonials_section_title" value="<?php echo esc_attr( get_option( 'testimonials_section_title', 'Testimonials' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for the testimonials section</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonials_section_description">Section Description</label>
			</th>
			<td>
				<textarea id="testimonials_section_description" name="testimonials_section_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'testimonials_section_description', 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit' ) ); ?></textarea>
				<p class="description">Enter the description for the testimonials section</p>
			</td>
		</tr>
		
		<!-- Testimonial 1 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Testimonial 1</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_1_content">Content</label>
			</th>
			<td>
				<textarea id="testimonial_1_content" name="testimonial_1_content" rows="4" class="large-text"><?php echo esc_textarea( get_option( 'testimonial_1_content', 'Implementing innovative strategies has revolutionized our approach to market challenges and competitive positioning.' ) ); ?></textarea>
				<p class="description">Enter the testimonial content</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_1_name">Client Name</label>
			</th>
			<td>
				<input type="text" id="testimonial_1_name" name="testimonial_1_name" value="<?php echo esc_attr( get_option( 'testimonial_1_name', 'Rachel Bennett' ) ); ?>" class="regular-text">
				<p class="description">Enter the client name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_1_position">Position</label>
			</th>
			<td>
				<input type="text" id="testimonial_1_position" name="testimonial_1_position" value="<?php echo esc_attr( get_option( 'testimonial_1_position', 'Strategy Director' ) ); ?>" class="regular-text">
				<p class="description">Enter the client position</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_1_image">Client Image URL</label>
			</th>
			<td>
				<input type="url" id="testimonial_1_image" name="testimonial_1_image" value="<?php echo esc_url( get_option( 'testimonial_1_image', get_template_directory_uri() . '/assets/img/person/person-f-7.webp' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL of the client image</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_1_highlight">Highlight Testimonial</label>
			</th>
			<td>
				<input type="checkbox" id="testimonial_1_highlight" name="testimonial_1_highlight" value="1" <?php checked( get_option( 'testimonial_1_highlight', '' ), '1' ); ?>>
				<label for="testimonial_1_highlight">Mark as highlighted testimonial</label>
				<p class="description">Check this to make this testimonial stand out</p>
			</td>
		</tr>
		
		<!-- Testimonial 2 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Testimonial 2</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_2_content">Content</label>
			</th>
			<td>
				<textarea id="testimonial_2_content" name="testimonial_2_content" rows="4" class="large-text"><?php echo esc_textarea( get_option( 'testimonial_2_content', 'Exceptional service delivery and innovative solutions have transformed our business operations, leading to remarkable growth and enhanced customer satisfaction across all touchpoints.' ) ); ?></textarea>
				<p class="description">Enter the testimonial content</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_2_name">Client Name</label>
			</th>
			<td>
				<input type="text" id="testimonial_2_name" name="testimonial_2_name" value="<?php echo esc_attr( get_option( 'testimonial_2_name', 'Daniel Morgan' ) ); ?>" class="regular-text">
				<p class="description">Enter the client name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_2_position">Position</label>
			</th>
			<td>
				<input type="text" id="testimonial_2_position" name="testimonial_2_position" value="<?php echo esc_attr( get_option( 'testimonial_2_position', 'Chief Innovation Officer' ) ); ?>" class="regular-text">
				<p class="description">Enter the client position</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_2_image">Client Image URL</label>
			</th>
			<td>
				<input type="url" id="testimonial_2_image" name="testimonial_2_image" value="<?php echo esc_url( get_option( 'testimonial_2_image', get_template_directory_uri() . '/assets/img/person/person-m-7.webp' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL of the client image</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_2_highlight">Highlight Testimonial</label>
			</th>
			<td>
				<input type="checkbox" id="testimonial_2_highlight" name="testimonial_2_highlight" value="1" <?php checked( get_option( 'testimonial_2_highlight', '1' ), '1' ); ?>>
				<label for="testimonial_2_highlight">Mark as highlighted testimonial</label>
				<p class="description">Check this to make this testimonial stand out</p>
			</td>
		</tr>
		
		<!-- Testimonial 3 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Testimonial 3</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_3_content">Content</label>
			</th>
			<td>
				<textarea id="testimonial_3_content" name="testimonial_3_content" rows="4" class="large-text"><?php echo esc_textarea( get_option( 'testimonial_3_content', 'Strategic partnership has enabled seamless digital transformation and operational excellence.' ) ); ?></textarea>
				<p class="description">Enter the testimonial content</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_3_name">Client Name</label>
			</th>
			<td>
				<input type="text" id="testimonial_3_name" name="testimonial_3_name" value="<?php echo esc_attr( get_option( 'testimonial_3_name', 'Emma Thompson' ) ); ?>" class="regular-text">
				<p class="description">Enter the client name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_3_position">Position</label>
			</th>
			<td>
				<input type="text" id="testimonial_3_position" name="testimonial_3_position" value="<?php echo esc_attr( get_option( 'testimonial_3_position', 'Digital Lead' ) ); ?>" class="regular-text">
				<p class="description">Enter the client position</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_3_image">Client Image URL</label>
			</th>
			<td>
				<input type="url" id="testimonial_3_image" name="testimonial_3_image" value="<?php echo esc_url( get_option( 'testimonial_3_image', get_template_directory_uri() . '/assets/img/person/person-f-8.webp' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL of the client image</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_3_highlight">Highlight Testimonial</label>
			</th>
			<td>
				<input type="checkbox" id="testimonial_3_highlight" name="testimonial_3_highlight" value="1" <?php checked( get_option( 'testimonial_3_highlight', '' ), '1' ); ?>>
				<label for="testimonial_3_highlight">Mark as highlighted testimonial</label>
				<p class="description">Check this to make this testimonial stand out</p>
			</td>
		</tr>
		
		<!-- Testimonial 4 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Testimonial 4</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_4_content">Content</label>
			</th>
			<td>
				<textarea id="testimonial_4_content" name="testimonial_4_content" rows="4" class="large-text"><?php echo esc_textarea( get_option( 'testimonial_4_content', 'Professional expertise and dedication have significantly improved our project delivery timelines and quality metrics.' ) ); ?></textarea>
				<p class="description">Enter the testimonial content</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_4_name">Client Name</label>
			</th>
			<td>
				<input type="text" id="testimonial_4_name" name="testimonial_4_name" value="<?php echo esc_attr( get_option( 'testimonial_4_name', 'Christopher Lee' ) ); ?>" class="regular-text">
				<p class="description">Enter the client name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_4_position">Position</label>
			</th>
			<td>
				<input type="text" id="testimonial_4_position" name="testimonial_4_position" value="<?php echo esc_attr( get_option( 'testimonial_4_position', 'Technical Director' ) ); ?>" class="regular-text">
				<p class="description">Enter the client position</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_4_image">Client Image URL</label>
			</th>
			<td>
				<input type="url" id="testimonial_4_image" name="testimonial_4_image" value="<?php echo esc_url( get_option( 'testimonial_4_image', get_template_directory_uri() . '/assets/img/person/person-m-8.webp' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL of the client image</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_4_highlight">Highlight Testimonial</label>
			</th>
			<td>
				<input type="checkbox" id="testimonial_4_highlight" name="testimonial_4_highlight" value="1" <?php checked( get_option( 'testimonial_4_highlight', '' ), '1' ); ?>>
				<label for="testimonial_4_highlight">Mark as highlighted testimonial</label>
				<p class="description">Check this to make this testimonial stand out</p>
			</td>
		</tr>
		
		<!-- Testimonial 5 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Testimonial 5</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_5_content">Content</label>
			</th>
			<td>
				<textarea id="testimonial_5_content" name="testimonial_5_content" rows="4" class="large-text"><?php echo esc_textarea( get_option( 'testimonial_5_content', 'Collaborative approach and industry expertise have revolutionized our product development cycle, resulting in faster time-to-market and increased customer engagement levels.' ) ); ?></textarea>
				<p class="description">Enter the testimonial content</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_5_name">Client Name</label>
			</th>
			<td>
				<input type="text" id="testimonial_5_name" name="testimonial_5_name" value="<?php echo esc_attr( get_option( 'testimonial_5_name', 'Olivia Carter' ) ); ?>" class="regular-text">
				<p class="description">Enter the client name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_5_position">Position</label>
			</th>
			<td>
				<input type="text" id="testimonial_5_position" name="testimonial_5_position" value="<?php echo esc_attr( get_option( 'testimonial_5_position', 'Product Manager' ) ); ?>" class="regular-text">
				<p class="description">Enter the client position</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_5_image">Client Image URL</label>
			</th>
			<td>
				<input type="url" id="testimonial_5_image" name="testimonial_5_image" value="<?php echo esc_url( get_option( 'testimonial_5_image', get_template_directory_uri() . '/assets/img/person/person-f-9.webp' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL of the client image</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_5_highlight">Highlight Testimonial</label>
			</th>
			<td>
				<input type="checkbox" id="testimonial_5_highlight" name="testimonial_5_highlight" value="1" <?php checked( get_option( 'testimonial_5_highlight', '1' ), '1' ); ?>>
				<label for="testimonial_5_highlight">Mark as highlighted testimonial</label>
				<p class="description">Check this to make this testimonial stand out</p>
			</td>
		</tr>
		
		<!-- Testimonial 6 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Testimonial 6</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_6_content">Content</label>
			</th>
			<td>
				<textarea id="testimonial_6_content" name="testimonial_6_content" rows="4" class="large-text"><?php echo esc_textarea( get_option( 'testimonial_6_content', 'Innovative approach to user experience design has significantly enhanced our platform\'s engagement metrics and customer retention rates.' ) ); ?></textarea>
				<p class="description">Enter the testimonial content</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_6_name">Client Name</label>
			</th>
			<td>
				<input type="text" id="testimonial_6_name" name="testimonial_6_name" value="<?php echo esc_attr( get_option( 'testimonial_6_name', 'Nathan Brooks' ) ); ?>" class="regular-text">
				<p class="description">Enter the client name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_6_position">Position</label>
			</th>
			<td>
				<input type="text" id="testimonial_6_position" name="testimonial_6_position" value="<?php echo esc_attr( get_option( 'testimonial_6_position', 'UX Director' ) ); ?>" class="regular-text">
				<p class="description">Enter the client position</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_6_image">Client Image URL</label>
			</th>
			<td>
				<input type="url" id="testimonial_6_image" name="testimonial_6_image" value="<?php echo esc_url( get_option( 'testimonial_6_image', get_template_directory_uri() . '/assets/img/person/person-m-13.webp' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL of the client image</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="testimonial_6_highlight">Highlight Testimonial</label>
			</th>
			<td>
				<input type="checkbox" id="testimonial_6_highlight" name="testimonial_6_highlight" value="1" <?php checked( get_option( 'testimonial_6_highlight', '' ), '1' ); ?>>
				<label for="testimonial_6_highlight">Mark as highlighted testimonial</label>
				<p class="description">Check this to make this testimonial stand out</p>
			</td>
		</tr>
	</table>
	<?php
}

/**
 * Save testimonials section options
 */
function portfolio_save_testimonials_options() {
	// Testimonials Section
	if ( isset( $_POST['testimonials_section_title'] ) ) {
		update_option( 'testimonials_section_title', sanitize_text_field( $_POST['testimonials_section_title'] ) );
	}
	if ( isset( $_POST['testimonials_section_description'] ) ) {
		update_option( 'testimonials_section_description', sanitize_textarea_field( $_POST['testimonials_section_description'] ) );
	}
	
	// Testimonial 1
	if ( isset( $_POST['testimonial_1_content'] ) ) {
		update_option( 'testimonial_1_content', sanitize_textarea_field( $_POST['testimonial_1_content'] ) );
	}
	if ( isset( $_POST['testimonial_1_name'] ) ) {
		update_option( 'testimonial_1_name', sanitize_text_field( $_POST['testimonial_1_name'] ) );
	}
	if ( isset( $_POST['testimonial_1_position'] ) ) {
		update_option( 'testimonial_1_position', sanitize_text_field( $_POST['testimonial_1_position'] ) );
	}
	if ( isset( $_POST['testimonial_1_image'] ) ) {
		update_option( 'testimonial_1_image', esc_url_raw( $_POST['testimonial_1_image'] ) );
	}
	update_option( 'testimonial_1_highlight', isset( $_POST['testimonial_1_highlight'] ) ? '1' : '' );
	
	// Testimonial 2
	if ( isset( $_POST['testimonial_2_content'] ) ) {
		update_option( 'testimonial_2_content', sanitize_textarea_field( $_POST['testimonial_2_content'] ) );
	}
	if ( isset( $_POST['testimonial_2_name'] ) ) {
		update_option( 'testimonial_2_name', sanitize_text_field( $_POST['testimonial_2_name'] ) );
	}
	if ( isset( $_POST['testimonial_2_position'] ) ) {
		update_option( 'testimonial_2_position', sanitize_text_field( $_POST['testimonial_2_position'] ) );
	}
	if ( isset( $_POST['testimonial_2_image'] ) ) {
		update_option( 'testimonial_2_image', esc_url_raw( $_POST['testimonial_2_image'] ) );
	}
	update_option( 'testimonial_2_highlight', isset( $_POST['testimonial_2_highlight'] ) ? '1' : '' );
	
	// Testimonial 3
	if ( isset( $_POST['testimonial_3_content'] ) ) {
		update_option( 'testimonial_3_content', sanitize_textarea_field( $_POST['testimonial_3_content'] ) );
	}
	if ( isset( $_POST['testimonial_3_name'] ) ) {
		update_option( 'testimonial_3_name', sanitize_text_field( $_POST['testimonial_3_name'] ) );
	}
	if ( isset( $_POST['testimonial_3_position'] ) ) {
		update_option( 'testimonial_3_position', sanitize_text_field( $_POST['testimonial_3_position'] ) );
	}
	if ( isset( $_POST['testimonial_3_image'] ) ) {
		update_option( 'testimonial_3_image', esc_url_raw( $_POST['testimonial_3_image'] ) );
	}
	update_option( 'testimonial_3_highlight', isset( $_POST['testimonial_3_highlight'] ) ? '1' : '' );
	
	// Testimonial 4
	if ( isset( $_POST['testimonial_4_content'] ) ) {
		update_option( 'testimonial_4_content', sanitize_textarea_field( $_POST['testimonial_4_content'] ) );
	}
	if ( isset( $_POST['testimonial_4_name'] ) ) {
		update_option( 'testimonial_4_name', sanitize_text_field( $_POST['testimonial_4_name'] ) );
	}
	if ( isset( $_POST['testimonial_4_position'] ) ) {
		update_option( 'testimonial_4_position', sanitize_text_field( $_POST['testimonial_4_position'] ) );
	}
	if ( isset( $_POST['testimonial_4_image'] ) ) {
		update_option( 'testimonial_4_image', esc_url_raw( $_POST['testimonial_4_image'] ) );
	}
	update_option( 'testimonial_4_highlight', isset( $_POST['testimonial_4_highlight'] ) ? '1' : '' );
	
	// Testimonial 5
	if ( isset( $_POST['testimonial_5_content'] ) ) {
		update_option( 'testimonial_5_content', sanitize_textarea_field( $_POST['testimonial_5_content'] ) );
	}
	if ( isset( $_POST['testimonial_5_name'] ) ) {
		update_option( 'testimonial_5_name', sanitize_text_field( $_POST['testimonial_5_name'] ) );
	}
	if ( isset( $_POST['testimonial_5_position'] ) ) {
		update_option( 'testimonial_5_position', sanitize_text_field( $_POST['testimonial_5_position'] ) );
	}
	if ( isset( $_POST['testimonial_5_image'] ) ) {
		update_option( 'testimonial_5_image', esc_url_raw( $_POST['testimonial_5_image'] ) );
	}
	update_option( 'testimonial_5_highlight', isset( $_POST['testimonial_5_highlight'] ) ? '1' : '' );
	
	// Testimonial 6
	if ( isset( $_POST['testimonial_6_content'] ) ) {
		update_option( 'testimonial_6_content', sanitize_textarea_field( $_POST['testimonial_6_content'] ) );
	}
	if ( isset( $_POST['testimonial_6_name'] ) ) {
		update_option( 'testimonial_6_name', sanitize_text_field( $_POST['testimonial_6_name'] ) );
	}
	if ( isset( $_POST['testimonial_6_position'] ) ) {
		update_option( 'testimonial_6_position', sanitize_text_field( $_POST['testimonial_6_position'] ) );
	}
	if ( isset( $_POST['testimonial_6_image'] ) ) {
		update_option( 'testimonial_6_image', esc_url_raw( $_POST['testimonial_6_image'] ) );
	}
	update_option( 'testimonial_6_highlight', isset( $_POST['testimonial_6_highlight'] ) ? '1' : '' );
} 