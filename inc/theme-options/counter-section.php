<?php
/**
 * Counter Section Theme Options
 *
 * @package Portfolio
 */

/**
 * Counter section tab content
 */
function portfolio_counter_tab_content() {
	?>
	<div class="counter-section-options">
		<h3>Section Header</h3>
		<table class="form-table">
		<tr>
			<th scope="row">
				<label for="counter_section_title">Section Title</label>
			</th>
			<td>
				<input type="text" id="counter_section_title" name="counter_section_title" value="<?php echo esc_attr( get_option( 'counter_section_title', 'Statistics' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for the counter section</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="counter_section_description">Section Description</label>
			</th>
			<td>
				<textarea id="counter_section_description" name="counter_section_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'counter_section_description', 'Our achievements and milestones' ) ); ?></textarea>
				<p class="description">Enter the description for the counter section</p>
			</td>
		</tr>
		
		</table>

		<h3>Counter Items</h3>
		
		<!-- Counter Item 1 -->
		<div class="counter-item-header">
			<h4>Counter Item 1</h4>
		</div>
		<table class="form-table">
		<tr>
			<th scope="row">
				<label for="counter_1_icon">Icon Class</label>
			</th>
			<td>
				<input type="text" id="counter_1_icon" name="counter_1_icon" value="<?php echo esc_attr( get_option( 'counter_1_icon', 'bi bi-emoji-smile' ) ); ?>" class="regular-text">
				<p class="description">Enter Bootstrap icon class (e.g., bi bi-emoji-smile)</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="counter_1_number">Number</label>
			</th>
			<td>
				<input type="number" id="counter_1_number" name="counter_1_number" value="<?php echo esc_attr( get_option( 'counter_1_number', '232' ) ); ?>" class="small-text">
				<p class="description">Enter the counter number</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="counter_1_label">Label</label>
			</th>
			<td>
				<input type="text" id="counter_1_label" name="counter_1_label" value="<?php echo esc_attr( get_option( 'counter_1_label', 'Happy Clients' ) ); ?>" class="regular-text">
				<p class="description">Enter the counter label</p>
			</td>
		</tr>
		
		</table>

		<!-- Counter Item 2 -->
		<div class="counter-item-header">
			<h4>Counter Item 2</h4>
		</div>
		<table class="form-table">
		<tr>
			<th scope="row">
				<label for="counter_2_icon">Icon Class</label>
			</th>
			<td>
				<input type="text" id="counter_2_icon" name="counter_2_icon" value="<?php echo esc_attr( get_option( 'counter_2_icon', 'bi bi-journal-richtext' ) ); ?>" class="regular-text">
				<p class="description">Enter Bootstrap icon class</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="counter_2_number">Number</label>
			</th>
			<td>
				<input type="number" id="counter_2_number" name="counter_2_number" value="<?php echo esc_attr( get_option( 'counter_2_number', '521' ) ); ?>" class="small-text">
				<p class="description">Enter the counter number</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="counter_2_label">Label</label>
			</th>
			<td>
				<input type="text" id="counter_2_label" name="counter_2_label" value="<?php echo esc_attr( get_option( 'counter_2_label', 'Projects' ) ); ?>" class="regular-text">
				<p class="description">Enter the counter label</p>
			</td>
		</tr>
		
		</table>

		<!-- Counter Item 3 -->
		<div class="counter-item-header">
			<h4>Counter Item 3</h4>
		</div>
		<table class="form-table">
		<tr>
			<th scope="row">
				<label for="counter_3_icon">Icon Class</label>
			</th>
			<td>
				<input type="text" id="counter_3_icon" name="counter_3_icon" value="<?php echo esc_attr( get_option( 'counter_3_icon', 'bi bi-headset' ) ); ?>" class="regular-text">
				<p class="description">Enter Bootstrap icon class</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="counter_3_number">Number</label>
			</th>
			<td>
				<input type="number" id="counter_3_number" name="counter_3_number" value="<?php echo esc_attr( get_option( 'counter_3_number', '1463' ) ); ?>" class="small-text">
				<p class="description">Enter the counter number</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="counter_3_label">Label</label>
			</th>
			<td>
				<input type="text" id="counter_3_label" name="counter_3_label" value="<?php echo esc_attr( get_option( 'counter_3_label', 'Hours Of Support' ) ); ?>" class="regular-text">
				<p class="description">Enter the counter label</p>
			</td>
		</tr>
		
		</table>

		<!-- Counter Item 4 -->
		<div class="counter-item-header">
			<h4>Counter Item 4</h4>
		</div>
		<table class="form-table">
		<tr>
			<th scope="row">
				<label for="counter_4_icon">Icon Class</label>
			</th>
			<td>
				<input type="text" id="counter_4_icon" name="counter_4_icon" value="<?php echo esc_attr( get_option( 'counter_4_icon', 'bi bi-people' ) ); ?>" class="regular-text">
				<p class="description">Enter Bootstrap icon class</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="counter_4_number">Number</label>
			</th>
			<td>
				<input type="number" id="counter_4_number" name="counter_4_number" value="<?php echo esc_attr( get_option( 'counter_4_number', '15' ) ); ?>" class="small-text">
				<p class="description">Enter the counter number</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="counter_4_label">Label</label>
			</th>
			<td>
				<input type="text" id="counter_4_label" name="counter_4_label" value="<?php echo esc_attr( get_option( 'counter_4_label', 'Hard Workers' ) ); ?>" class="regular-text">
				<p class="description">Enter the counter label</p>
			</td>
		</tr>
		</table>
	</div>

	<style>
	.counter-section-options h3 {
		margin-top: 30px;
		margin-bottom: 15px;
		padding-bottom: 10px;
		border-bottom: 1px solid #ccc;
		color: #23282d;
	}
	.counter-section-options h3:first-child {
		margin-top: 0;
	}
	.counter-section-options .counter-item-header {
		background: #f9f9f9;
		padding: 15px;
		margin: 20px 0 15px 0;
		border-left: 4px solid #0073aa;
		border-radius: 3px;
	}
	.counter-section-options .counter-item-header h4 {
		margin: 0;
		color: #0073aa;
		font-size: 16px;
	}
	</style>
	<?php
}

/**
 * Save counter section options
 */
function portfolio_save_counter_options() {
	// Counter Section
	if ( isset( $_POST['counter_section_title'] ) ) {
		update_option( 'counter_section_title', sanitize_text_field( $_POST['counter_section_title'] ) );
	}
	if ( isset( $_POST['counter_section_description'] ) ) {
		update_option( 'counter_section_description', sanitize_textarea_field( $_POST['counter_section_description'] ) );
	}
	
	// Counter Item 1
	if ( isset( $_POST['counter_1_icon'] ) ) {
		update_option( 'counter_1_icon', sanitize_text_field( $_POST['counter_1_icon'] ) );
	}
	if ( isset( $_POST['counter_1_number'] ) ) {
		update_option( 'counter_1_number', intval( $_POST['counter_1_number'] ) );
	}
	if ( isset( $_POST['counter_1_label'] ) ) {
		update_option( 'counter_1_label', sanitize_text_field( $_POST['counter_1_label'] ) );
	}
	
	// Counter Item 2
	if ( isset( $_POST['counter_2_icon'] ) ) {
		update_option( 'counter_2_icon', sanitize_text_field( $_POST['counter_2_icon'] ) );
	}
	if ( isset( $_POST['counter_2_number'] ) ) {
		update_option( 'counter_2_number', intval( $_POST['counter_2_number'] ) );
	}
	if ( isset( $_POST['counter_2_label'] ) ) {
		update_option( 'counter_2_label', sanitize_text_field( $_POST['counter_2_label'] ) );
	}
	
	// Counter Item 3
	if ( isset( $_POST['counter_3_icon'] ) ) {
		update_option( 'counter_3_icon', sanitize_text_field( $_POST['counter_3_icon'] ) );
	}
	if ( isset( $_POST['counter_3_number'] ) ) {
		update_option( 'counter_3_number', intval( $_POST['counter_3_number'] ) );
	}
	if ( isset( $_POST['counter_3_label'] ) ) {
		update_option( 'counter_3_label', sanitize_text_field( $_POST['counter_3_label'] ) );
	}
	
	// Counter Item 4
	if ( isset( $_POST['counter_4_icon'] ) ) {
		update_option( 'counter_4_icon', sanitize_text_field( $_POST['counter_4_icon'] ) );
	}
	if ( isset( $_POST['counter_4_number'] ) ) {
		update_option( 'counter_4_number', intval( $_POST['counter_4_number'] ) );
	}
	if ( isset( $_POST['counter_4_label'] ) ) {
		update_option( 'counter_4_label', sanitize_text_field( $_POST['counter_4_label'] ) );
	}
} 