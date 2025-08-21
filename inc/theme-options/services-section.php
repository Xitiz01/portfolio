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
		<!-- Section Settings -->
		<tr>
			<th scope="row">
				<label for="services_section_title">Section Title</label>
			</th>
			<td>
				<input type="text" id="services_section_title" name="services_section_title" value="<?php echo esc_attr( get_option( 'services_section_title', 'Services' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for the services section</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="services_section_description">Section Description</label>
			</th>
			<td>
				<textarea id="services_section_description" name="services_section_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'services_section_description', 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit' ) ); ?></textarea>
				<p class="description">Enter the description for the services section</p>
			</td>
		</tr>

		<!-- Service Header -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd; color: #0073aa;">Service Header</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="services_header_heading_1">Header Heading Line 1</label>
			</th>
			<td>
				<input type="text" id="services_header_heading_1" name="services_header_heading_1" value="<?php echo esc_attr( get_option( 'services_header_heading_1', 'Innovative business' ) ); ?>" class="regular-text">
				<p class="description">Enter the first line of the service header heading</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="services_header_heading_2">Header Heading Line 2</label>
			</th>
			<td>
				<input type="text" id="services_header_heading_2" name="services_header_heading_2" value="<?php echo esc_attr( get_option( 'services_header_heading_2', 'performance solutions' ) ); ?>" class="regular-text">
				<p class="description">Enter the second line of the service header heading (will be highlighted)</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="services_header_summary">Header Summary Text</label>
			</th>
			<td>
				<textarea id="services_header_summary" name="services_header_summary" rows="4" class="large-text"><?php echo esc_textarea( get_option( 'services_header_summary', 'We integrate forward-thinking strategies, creative approaches, and state-of-the-art technologies to deliver exceptional customer experiences that drive growth and engage target markets.' ) ); ?></textarea>
				<p class="description">Enter the summary text below the heading</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="services_header_button_text">Header Button Text</label>
			</th>
			<td>
				<input type="text" id="services_header_button_text" name="services_header_button_text" value="<?php echo esc_attr( get_option( 'services_header_button_text', 'View All Services' ) ); ?>" class="regular-text">
				<p class="description">Enter the text for the header button</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="services_header_button_url">Header Button URL</label>
			</th>
			<td>
				<input type="text" id="services_header_button_url" name="services_header_button_url" value="<?php echo esc_url( get_option( 'services_header_button_url', 'services.html' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL for the header button (can be relative URL, anchor link like #contact, or full URL)</p>
			</td>
		</tr>

		<!-- Service 1 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd; color: #0073aa;">Service 1</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_1_title">Service Title</label>
			</th>
			<td>
				<input type="text" id="service_1_title" name="service_1_title" value="<?php echo esc_attr( get_option( 'service_1_title', 'Creative branding' ) ); ?>" class="regular-text">
				<p class="description">Enter the service title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_1_highlight">Highlighted Text</label>
			</th>
			<td>
				<input type="text" id="service_1_highlight" name="service_1_highlight" value="<?php echo esc_attr( get_option( 'service_1_highlight', 'branding' ) ); ?>" class="regular-text">
				<p class="description">Enter the text to be highlighted in the title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_1_description">Service Description</label>
			</th>
			<td>
				<textarea id="service_1_description" name="service_1_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'service_1_description', 'Nulla facilisi. Maecenas eget magna neque. Suspendisse potenti. Curabitur eleifend nisi non magna vulputate, vel condimentum libero tempus. Proin consectetur feugiat diam.' ) ); ?></textarea>
				<p class="description">Enter the service description</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_1_icon">Service Icon</label>
			</th>
			<td>
				<div class="icon-upload-field">
					<input type="hidden" id="service_1_icon" name="service_1_icon" value="<?php echo esc_url( get_option( 'service_1_icon', '' ) ); ?>">
					<div class="icon-preview">
						<?php 
						$icon_url = get_option( 'service_1_icon', '' );
						if ( $icon_url ) : ?>
							<img src="<?php echo esc_url( $icon_url ); ?>" alt="Service Icon 1" style="max-width: 64px; height: auto; border: 2px solid #ddd; border-radius: 5px; padding: 5px;">
						<?php endif; ?>
					</div>
					<button type="button" class="button upload-icon" data-target="service_1_icon">Upload Icon</button>
					<button type="button" class="button remove-icon" data-target="service_1_icon" <?php echo empty( $icon_url ) ? 'style="display:none;"' : ''; ?>>Remove Icon</button>
					<p class="description">Upload custom icon for service 1 (64x64px recommended, PNG/SVG preferred)</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_1_url">Service URL</label>
			</th>
			<td>
				<input type="text" id="service_1_url" name="service_1_url" value="<?php echo esc_url( get_option( 'service_1_url', 'service-details.html' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL for the service details page (can be relative URL, anchor link, or full URL)</p>
			</td>
		</tr>

		<!-- Service 2 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd; color: #0073aa;">Service 2</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_2_title">Service Title</label>
			</th>
			<td>
				<input type="text" id="service_2_title" name="service_2_title" value="<?php echo esc_attr( get_option( 'service_2_title', 'Design systems' ) ); ?>" class="regular-text">
				<p class="description">Enter the service title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_2_highlight">Highlighted Text</label>
			</th>
			<td>
				<input type="text" id="service_2_highlight" name="service_2_highlight" value="<?php echo esc_attr( get_option( 'service_2_highlight', 'systems' ) ); ?>" class="regular-text">
				<p class="description">Enter the text to be highlighted in the title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_2_description">Service Description</label>
			</th>
			<td>
				<textarea id="service_2_description" name="service_2_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'service_2_description', 'Praesent euismod varius tellus, vel bibendum nunc interdum at. Donec vehicula diam vel metus venenatis convallis. Aliquam erat volutpat. Etiam viverra magna sit amet.' ) ); ?></textarea>
				<p class="description">Enter the service description</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_2_icon">Service Icon</label>
			</th>
			<td>
				<div class="icon-upload-field">
					<input type="hidden" id="service_2_icon" name="service_2_icon" value="<?php echo esc_url( get_option( 'service_2_icon', '' ) ); ?>">
					<div class="icon-preview">
						<?php 
						$icon_url = get_option( 'service_2_icon', '' );
						if ( $icon_url ) : ?>
							<img src="<?php echo esc_url( $icon_url ); ?>" alt="Service Icon 2" style="max-width: 64px; height: auto; border: 2px solid #ddd; border-radius: 5px; padding: 5px;">
						<?php endif; ?>
					</div>
					<button type="button" class="button upload-icon" data-target="service_2_icon">Upload Icon</button>
					<button type="button" class="button remove-icon" data-target="service_2_icon" <?php echo empty( $icon_url ) ? 'style="display:none;"' : ''; ?>>Remove Icon</button>
					<p class="description">Upload custom icon for service 2 (64x64px recommended, PNG/SVG preferred)</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_2_url">Service URL</label>
			</th>
			<td>
				<input type="text" id="service_2_url" name="service_2_url" value="<?php echo esc_url( get_option( 'service_2_url', 'service-details.html' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL for the service details page (can be relative URL, anchor link, or full URL)</p>
			</td>
		</tr>

		<!-- Service 3 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd; color: #0073aa;">Service 3</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_3_title">Service Title</label>
			</th>
			<td>
				<input type="text" id="service_3_title" name="service_3_title" value="<?php echo esc_attr( get_option( 'service_3_title', 'Marketing strategies' ) ); ?>" class="regular-text">
				<p class="description">Enter the service title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_3_highlight">Highlighted Text</label>
			</th>
			<td>
				<input type="text" id="service_3_highlight" name="service_3_highlight" value="<?php echo esc_attr( get_option( 'service_3_highlight', 'strategies' ) ); ?>" class="regular-text">
				<p class="description">Enter the text to be highlighted in the title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_3_description">Service Description</label>
			</th>
			<td>
				<textarea id="service_3_description" name="service_3_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'service_3_description', 'Vivamus tempor velit id magna dictum, sed fermentum nisi faucibus. Integer nec pretium sapien. Fusce tincidunt ligula et purus consequat, ac pellentesque nulla eleifend.' ) ); ?></textarea>
				<p class="description">Enter the service description</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_3_icon">Service Icon</label>
			</th>
			<td>
				<div class="icon-upload-field">
					<input type="hidden" id="service_3_icon" name="service_3_icon" value="<?php echo esc_url( get_option( 'service_3_icon', '' ) ); ?>">
					<div class="icon-preview">
						<?php 
						$icon_url = get_option( 'service_3_icon', '' );
						if ( $icon_url ) : ?>
							<img src="<?php echo esc_url( $icon_url ); ?>" alt="Service Icon 3" style="max-width: 64px; height: auto; border: 2px solid #ddd; border-radius: 5px; padding: 5px;">
						<?php endif; ?>
					</div>
					<button type="button" class="button upload-icon" data-target="service_3_icon">Upload Icon</button>
					<button type="button" class="button remove-icon" data-target="service_3_icon" <?php echo empty( $icon_url ) ? 'style="display:none;"' : ''; ?>>Remove Icon</button>
					<p class="description">Upload custom icon for service 3 (64x64px recommended, PNG/SVG preferred)</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_3_url">Service URL</label>
			</th>
			<td>
				<input type="text" id="service_3_url" name="service_3_url" value="<?php echo esc_url( get_option( 'service_3_url', 'service-details.html' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL for the service details page (can be relative URL, anchor link, or full URL)</p>
			</td>
		</tr>

		<!-- Service 4 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd; color: #0073aa;">Service 4</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_4_title">Service Title</label>
			</th>
			<td>
				<input type="text" id="service_4_title" name="service_4_title" value="<?php echo esc_attr( get_option( 'service_4_title', 'Digital platforms' ) ); ?>" class="regular-text">
				<p class="description">Enter the service title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_4_highlight">Highlighted Text</label>
			</th>
			<td>
				<input type="text" id="service_4_highlight" name="service_4_highlight" value="<?php echo esc_attr( get_option( 'service_4_highlight', 'platforms' ) ); ?>" class="regular-text">
				<p class="description">Enter the text to be highlighted in the title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_4_description">Service Description</label>
			</th>
			<td>
				<textarea id="service_4_description" name="service_4_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'service_4_description', 'Cras fermentum odio eu feugiat malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et accumsan cursus. Morbi placerat nulla vel nunc viverra accumsan.' ) ); ?></textarea>
				<p class="description">Enter the service description</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_4_icon">Service Icon</label>
			</th>
			<td>
				<div class="icon-upload-field">
					<input type="hidden" id="service_4_icon" name="service_4_icon" value="<?php echo esc_url( get_option( 'service_4_icon', '' ) ); ?>">
					<div class="icon-preview">
						<?php 
						$icon_url = get_option( 'service_4_icon', '' );
						if ( $icon_url ) : ?>
							<img src="<?php echo esc_url( $icon_url ); ?>" alt="Service Icon 4" style="max-width: 64px; height: auto; border: 2px solid #ddd; border-radius: 5px; padding: 5px;">
						<?php endif; ?>
					</div>
					<button type="button" class="button upload-icon" data-target="service_4_icon">Upload Icon</button>
					<button type="button" class="button remove-icon" data-target="service_4_icon" <?php echo empty( $icon_url ) ? 'style="display:none;"' : ''; ?>>Remove Icon</button>
					<p class="description">Upload custom icon for service 4 (64x64px recommended, PNG/SVG preferred)</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_4_url">Service URL</label>
			</th>
			<td>
				<input type="text" id="service_4_url" name="service_4_url" value="<?php echo esc_url( get_option( 'service_4_url', 'service-details.html' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL for the service details page (can be relative URL, anchor link, or full URL)</p>
			</td>
		</tr>

		<!-- Service 5 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd; color: #0073aa;">Service 5</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_5_title">Service Title</label>
			</th>
			<td>
				<input type="text" id="service_5_title" name="service_5_title" value="<?php echo esc_attr( get_option( 'service_5_title', 'Growth acceleration' ) ); ?>" class="regular-text">
				<p class="description">Enter the service title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_5_highlight">Highlighted Text</label>
			</th>
			<td>
				<input type="text" id="service_5_highlight" name="service_5_highlight" value="<?php echo esc_attr( get_option( 'service_5_highlight', 'acceleration' ) ); ?>" class="regular-text">
				<p class="description">Enter the text to be highlighted in the title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_5_description">Service Description</label>
			</th>
			<td>
				<textarea id="service_5_description" name="service_5_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'service_5_description', 'Aenean vel augue vel nisi bibendum posuere. Phasellus in lacus quis urna sodales dignissim. Duis aliquam libero eget risus facilisis. Quisque eget libero vel nisl fringilla.' ) ); ?></textarea>
				<p class="description">Enter the service description</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_5_icon">Service Icon</label>
			</th>
			<td>
				<div class="icon-upload-field">
					<input type="hidden" id="service_5_icon" name="service_5_icon" value="<?php echo esc_url( get_option( 'service_5_icon', '' ) ); ?>">
					<div class="icon-preview">
						<?php 
						$icon_url = get_option( 'service_5_icon', '' );
						if ( $icon_url ) : ?>
							<img src="<?php echo esc_url( $icon_url ); ?>" alt="Service Icon 5" style="max-width: 64px; height: auto; border: 2px solid #ddd; border-radius: 5px; padding: 5px;">
						<?php endif; ?>
					</div>
					<button type="button" class="button upload-icon" data-target="service_5_icon">Upload Icon</button>
					<button type="button" class="button remove-icon" data-target="service_5_icon" <?php echo empty( $icon_url ) ? 'style="display:none;"' : ''; ?>>Remove Icon</button>
					<p class="description">Upload custom icon for service 5 (64x64px recommended, PNG/SVG preferred)</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_5_url">Service URL</label>
			</th>
			<td>
				<input type="text" id="service_5_url" name="service_5_url" value="<?php echo esc_url( get_option( 'service_5_url', 'service-details.html' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL for the service details page (can be relative URL, anchor link, or full URL)</p>
			</td>
		</tr>

		<!-- Service 6 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd; color: #0073aa;">Service 6</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_6_title">Service Title</label>
			</th>
			<td>
				<input type="text" id="service_6_title" name="service_6_title" value="<?php echo esc_attr( get_option( 'service_6_title', 'Media solutions' ) ); ?>" class="regular-text">
				<p class="description">Enter the service title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_6_highlight">Highlighted Text</label>
			</th>
			<td>
				<input type="text" id="service_6_highlight" name="service_6_highlight" value="<?php echo esc_attr( get_option( 'service_6_highlight', 'solutions' ) ); ?>" class="regular-text">
				<p class="description">Enter the text to be highlighted in the title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_6_description">Service Description</label>
			</th>
			<td>
				<textarea id="service_6_description" name="service_6_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'service_6_description', 'Etiam efficitur lacus in diam finibus, nec ultrices est sagittis. Maecenas elementum magna sed risus faucibus, nec commodo purus facilisis. Vestibulum accumsan magna.' ) ); ?></textarea>
				<p class="description">Enter the service description</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_6_icon">Service Icon</label>
			</th>
			<td>
				<div class="icon-upload-field">
					<input type="hidden" id="service_6_icon" name="service_6_icon" value="<?php echo esc_url( get_option( 'service_6_icon', '' ) ); ?>">
					<div class="icon-preview">
						<?php 
						$icon_url = get_option( 'service_6_icon', '' );
						if ( $icon_url ) : ?>
							<img src="<?php echo esc_url( $icon_url ); ?>" alt="Service Icon 6" style="max-width: 64px; height: auto; border: 2px solid #ddd; border-radius: 5px; padding: 5px;">
						<?php endif; ?>
					</div>
					<button type="button" class="button upload-icon" data-target="service_6_icon">Upload Icon</button>
					<button type="button" class="button remove-icon" data-target="service_6_icon" <?php echo empty( $icon_url ) ? 'style="display:none;"' : ''; ?>>Remove Icon</button>
					<p class="description">Upload custom icon for service 6 (64x64px recommended, PNG/SVG preferred)</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="service_6_url">Service URL</label>
			</th>
			<td>
				<input type="text" id="service_6_url" name="service_6_url" value="<?php echo esc_url( get_option( 'service_6_url', 'service-details.html' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL for the service details page (can be relative URL, anchor link, or full URL)</p>
			</td>
		</tr>
	</table>

	<style>
	.icon-upload-field {
		margin: 10px 0;
	}
	.icon-preview {
		margin: 10px 0;
		padding: 10px;
		background: #f9f9f9;
		border-radius: 5px;
		display: inline-block;
	}
	.upload-icon, .remove-icon {
		margin-right: 10px;
	}
	</style>

	<script>
	jQuery(document).ready(function($) {
		// Icon upload functionality
		$('.upload-icon').on('click', function(e) {
			e.preventDefault();
			var target = $(this).data('target');
			var button = $(this);
			var removeButton = $('.remove-icon[data-target="' + target + '"]');
			var preview = button.siblings('.icon-preview');
			var input = $('#' + target);
			
			var frame = wp.media({
				title: 'Select or Upload Icon',
				button: {
					text: 'Use this icon'
				},
				multiple: false
			});
			
			frame.on('select', function() {
				var attachment = frame.state().get('selection').first().toJSON();
				input.val(attachment.url);
				preview.html('<img src="' + attachment.url + '" alt="Preview" style="max-width: 64px; height: auto; border: 2px solid #ddd; border-radius: 5px; padding: 5px;">');
				removeButton.show();
			});
			
			frame.open();
		});
		
		// Remove icon functionality
		$('.remove-icon').on('click', function(e) {
			e.preventDefault();
			var target = $(this).data('target');
			var button = $(this);
			var preview = button.siblings('.icon-preview');
			var input = $('#' + target);
			
			input.val('');
			preview.empty();
			button.hide();
		});

		// URL validation for service URLs
		$('input[name*="_url"]').on('blur', function() {
			var url = $(this).val().trim();
			var field = $(this);
			
			// Remove any existing validation messages
			field.siblings('.url-validation-message').remove();
			
			if (url !== '') {
				// Allow various URL formats
				var isValid = false;
				
				// Check if it's an anchor link
				if (url.startsWith('#')) {
					isValid = true;
				}
				// Check if it's a relative URL
				else if (url.startsWith('/') || url.startsWith('./') || url.startsWith('../')) {
					isValid = true;
				}
				// Check if it's a valid full URL
				else if (url.match(/^https?:\/\/.+/)) {
					isValid = true;
				}
				// Check if it's a relative file path (like .html files)
				else if (url.match(/^[a-zA-Z0-9\-_\/\.]+$/)) {
					isValid = true;
				}
				
				if (isValid) {
					field.css('border-color', '#46b450');
					field.after('<span class="url-validation-message" style="color: #46b450; font-size: 12px; margin-left: 10px;">✓ Valid URL format</span>');
				} else {
					field.css('border-color', '#dc3232');
					field.after('<span class="url-validation-message" style="color: #dc3232; font-size: 12px; margin-left: 10px;">⚠ Please enter a valid URL, relative path, or anchor link</span>');
				}
			} else {
				field.css('border-color', '');
			}
		});

		// Form submission validation
		$('form').on('submit', function(e) {
			var hasErrors = false;
			var urlFields = $('input[name*="_url"]');
			
			urlFields.each(function() {
				var url = $(this).val().trim();
				if (url !== '') {
					var isValid = false;
					
					// Check if it's an anchor link
					if (url.startsWith('#')) {
						isValid = true;
					}
					// Check if it's a relative URL
					else if (url.startsWith('/') || url.startsWith('./') || url.startsWith('../')) {
						isValid = true;
					}
					// Check if it's a valid full URL
					else if (url.match(/^https?:\/\/.+/)) {
						isValid = true;
					}
					// Check if it's a relative file path (like .html files)
					else if (url.match(/^[a-zA-Z0-9\-_\/\.]+$/)) {
						isValid = true;
					}
					
					if (!isValid) {
						hasErrors = true;
						$(this).css('border-color', '#dc3232');
						$(this).focus();
					}
				}
			});
			
			if (hasErrors) {
				e.preventDefault();
				alert('Please fix the URL validation errors before submitting the form.');
				return false;
			}
		});
	});
	</script>
	<?php
}

/**
 * Save services section options
 */
function portfolio_save_services_options() {
	// Section Settings
	if ( isset( $_POST['services_section_title'] ) ) {
		update_option( 'services_section_title', sanitize_text_field( $_POST['services_section_title'] ) );
	}
	if ( isset( $_POST['services_section_description'] ) ) {
		update_option( 'services_section_description', sanitize_textarea_field( $_POST['services_section_description'] ) );
	}

	// Service Header
	if ( isset( $_POST['services_header_heading_1'] ) ) {
		update_option( 'services_header_heading_1', sanitize_text_field( $_POST['services_header_heading_1'] ) );
	}
	if ( isset( $_POST['services_header_heading_2'] ) ) {
		update_option( 'services_header_heading_2', sanitize_text_field( $_POST['services_header_heading_2'] ) );
	}
	if ( isset( $_POST['services_header_summary'] ) ) {
		update_option( 'services_header_summary', sanitize_textarea_field( $_POST['services_header_summary'] ) );
	}
	if ( isset( $_POST['services_header_button_text'] ) ) {
		update_option( 'services_header_button_text', sanitize_text_field( $_POST['services_header_button_text'] ) );
	}
	if ( isset( $_POST['services_header_button_url'] ) ) {
		$url = sanitize_text_field( $_POST['services_header_button_url'] );
		// Allow relative URLs, anchor links, and full URLs
		if ( !empty($url) && (strpos($url, '#') === 0 || strpos($url, '/') === 0 || filter_var($url, FILTER_VALIDATE_URL) || strpos($url, '.html') !== false) ) {
			update_option( 'services_header_button_url', $url );
		} else {
			update_option( 'services_header_button_url', esc_url_raw( $url ) );
		}
	}

	// Service 1
	if ( isset( $_POST['service_1_title'] ) ) {
		update_option( 'service_1_title', sanitize_text_field( $_POST['service_1_title'] ) );
	}
	if ( isset( $_POST['service_1_highlight'] ) ) {
		update_option( 'service_1_highlight', sanitize_text_field( $_POST['service_1_highlight'] ) );
	}
	if ( isset( $_POST['service_1_description'] ) ) {
		update_option( 'service_1_description', sanitize_textarea_field( $_POST['service_1_description'] ) );
	}
	if ( isset( $_POST['service_1_icon'] ) ) {
		update_option( 'service_1_icon', esc_url_raw( $_POST['service_1_icon'] ) );
	}
	if ( isset( $_POST['service_1_url'] ) ) {
		$url = sanitize_text_field( $_POST['service_1_url'] );
		// Allow relative URLs, anchor links, and full URLs
		if ( !empty($url) && (strpos($url, '#') === 0 || strpos($url, '/') === 0 || filter_var($url, FILTER_VALIDATE_URL) || strpos($url, '.html') !== false) ) {
			update_option( 'service_1_url', $url );
		} else {
			update_option( 'service_1_url', esc_url_raw( $url ) );
		}
	}

	// Service 2
	if ( isset( $_POST['service_2_title'] ) ) {
		update_option( 'service_2_title', sanitize_text_field( $_POST['service_2_title'] ) );
	}
	if ( isset( $_POST['service_2_highlight'] ) ) {
		update_option( 'service_2_highlight', sanitize_text_field( $_POST['service_2_highlight'] ) );
	}
	if ( isset( $_POST['service_2_description'] ) ) {
		update_option( 'service_2_description', sanitize_textarea_field( $_POST['service_2_description'] ) );
	}
	if ( isset( $_POST['service_2_icon'] ) ) {
		update_option( 'service_2_icon', esc_url_raw( $_POST['service_2_icon'] ) );
	}
	if ( isset( $_POST['service_2_url'] ) ) {
		$url = sanitize_text_field( $_POST['service_2_url'] );
		// Allow relative URLs, anchor links, and full URLs
		if ( !empty($url) && (strpos($url, '#') === 0 || strpos($url, '/') === 0 || filter_var($url, FILTER_VALIDATE_URL) || strpos($url, '.html') !== false) ) {
			update_option( 'service_2_url', $url );
		} else {
			update_option( 'service_2_url', esc_url_raw( $url ) );
		}
	}

	// Service 3
	if ( isset( $_POST['service_3_title'] ) ) {
		update_option( 'service_3_title', sanitize_text_field( $_POST['service_3_title'] ) );
	}
	if ( isset( $_POST['service_3_highlight'] ) ) {
		update_option( 'service_3_highlight', sanitize_text_field( $_POST['service_3_highlight'] ) );
	}
	if ( isset( $_POST['service_3_description'] ) ) {
		update_option( 'service_3_description', sanitize_textarea_field( $_POST['service_3_description'] ) );
	}
	if ( isset( $_POST['service_3_icon'] ) ) {
		update_option( 'service_3_icon', esc_url_raw( $_POST['service_3_icon'] ) );
	}
	if ( isset( $_POST['service_3_url'] ) ) {
		$url = sanitize_text_field( $_POST['service_3_url'] );
		// Allow relative URLs, anchor links, and full URLs
		if ( !empty($url) && (strpos($url, '#') === 0 || strpos($url, '/') === 0 || filter_var($url, FILTER_VALIDATE_URL) || strpos($url, '.html') !== false) ) {
			update_option( 'service_3_url', $url );
		} else {
			update_option( 'service_3_url', esc_url_raw( $url ) );
		}
	}

	// Service 4
	if ( isset( $_POST['service_4_title'] ) ) {
		update_option( 'service_4_title', sanitize_text_field( $_POST['service_4_title'] ) );
	}
	if ( isset( $_POST['service_4_highlight'] ) ) {
		update_option( 'service_4_highlight', sanitize_text_field( $_POST['service_4_highlight'] ) );
	}
	if ( isset( $_POST['service_4_description'] ) ) {
		update_option( 'service_4_description', sanitize_textarea_field( $_POST['service_4_description'] ) );
	}
	if ( isset( $_POST['service_4_icon'] ) ) {
		update_option( 'service_4_icon', esc_url_raw( $_POST['service_4_icon'] ) );
	}
	if ( isset( $_POST['service_4_url'] ) ) {
		$url = sanitize_text_field( $_POST['service_4_url'] );
		// Allow relative URLs, anchor links, and full URLs
		if ( !empty($url) && (strpos($url, '#') === 0 || strpos($url, '/') === 0 || filter_var($url, FILTER_VALIDATE_URL) || strpos($url, '.html') !== false) ) {
			update_option( 'service_4_url', $url );
		} else {
			update_option( 'service_4_url', esc_url_raw( $url ) );
		}
	}

	// Service 5
	if ( isset( $_POST['service_5_title'] ) ) {
		update_option( 'service_5_title', sanitize_text_field( $_POST['service_5_title'] ) );
	}
	if ( isset( $_POST['service_5_highlight'] ) ) {
		update_option( 'service_5_highlight', sanitize_text_field( $_POST['service_5_highlight'] ) );
	}
	if ( isset( $_POST['service_5_description'] ) ) {
		update_option( 'service_5_description', sanitize_textarea_field( $_POST['service_5_description'] ) );
	}
	if ( isset( $_POST['service_5_icon'] ) ) {
		update_option( 'service_5_icon', esc_url_raw( $_POST['service_5_icon'] ) );
	}
	if ( isset( $_POST['service_5_url'] ) ) {
		$url = sanitize_text_field( $_POST['service_5_url'] );
		// Allow relative URLs, anchor links, and full URLs
		if ( !empty($url) && (strpos($url, '#') === 0 || strpos($url, '/') === 0 || filter_var($url, FILTER_VALIDATE_URL) || strpos($url, '.html') !== false) ) {
			update_option( 'service_5_url', $url );
		} else {
			update_option( 'service_5_url', esc_url_raw( $url ) );
		}
	}

	// Service 6
	if ( isset( $_POST['service_6_title'] ) ) {
		update_option( 'service_6_title', sanitize_text_field( $_POST['service_6_title'] ) );
	}
	if ( isset( $_POST['service_6_highlight'] ) ) {
		update_option( 'service_6_highlight', sanitize_text_field( $_POST['service_6_highlight'] ) );
	}
	if ( isset( $_POST['service_6_description'] ) ) {
		update_option( 'service_6_description', sanitize_textarea_field( $_POST['service_6_description'] ) );
	}
	if ( isset( $_POST['service_6_icon'] ) ) {
		update_option( 'service_6_icon', esc_url_raw( $_POST['service_6_icon'] ) );
	}
	if ( isset( $_POST['service_6_url'] ) ) {
		$url = sanitize_text_field( $_POST['service_6_url'] );
		// Allow relative URLs, anchor links, and full URLs
		if ( !empty($url) && (strpos($url, '#') === 0 || strpos($url, '/') === 0 || filter_var($url, FILTER_VALIDATE_URL) || strpos($url, '.html') !== false) ) {
			update_option( 'service_6_url', $url );
		} else {
			update_option( 'service_6_url', esc_url_raw( $url ) );
		}
	}
} 