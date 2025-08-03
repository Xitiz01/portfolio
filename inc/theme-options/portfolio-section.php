<?php
/**
 * Portfolio Section Theme Options
 *
 * @package Portfolio
 */

/**
 * Portfolio section tab content
 */
function portfolio_portfolio_tab_content() {
	?>
	<table class="form-table">
		<tr>
			<th scope="row">
				<label for="portfolio_section_title">Section Title</label>
			</th>
			<td>
				<input type="text" id="portfolio_section_title" name="portfolio_section_title" value="<?php echo esc_attr( get_option( 'portfolio_section_title', 'Portfolio' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for the portfolio section</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_section_description">Section Description</label>
			</th>
			<td>
				<textarea id="portfolio_section_description" name="portfolio_section_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'portfolio_section_description', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.' ) ); ?></textarea>
				<p class="description">Enter the description for the portfolio section</p>
			</td>
		</tr>
		
		<!-- Portfolio Item 1 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Portfolio Item 1</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_1_image">Image URL</label>
			</th>
			<td>
				<input type="url" id="portfolio_1_image" name="portfolio_1_image" value="<?php echo esc_url( get_option( 'portfolio_1_image', get_template_directory_uri() . '/assets/img/portfolio/portfolio-portrait-1.webp' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL of the portfolio image</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_1_category">Category</label>
			</th>
			<td>
				<input type="text" id="portfolio_1_category" name="portfolio_1_category" value="<?php echo esc_attr( get_option( 'portfolio_1_category', 'Photography' ) ); ?>" class="regular-text">
				<p class="description">Enter the portfolio category</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_1_title">Title</label>
			</th>
			<td>
				<input type="text" id="portfolio_1_title" name="portfolio_1_title" value="<?php echo esc_attr( get_option( 'portfolio_1_title', 'Capturing Moments' ) ); ?>" class="regular-text">
				<p class="description">Enter the portfolio title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_1_filter">Filter Class</label>
			</th>
			<td>
				<input type="text" id="portfolio_1_filter" name="portfolio_1_filter" value="<?php echo esc_attr( get_option( 'portfolio_1_filter', 'filter-photography' ) ); ?>" class="regular-text">
				<p class="description">Enter the filter class (e.g., filter-photography, filter-design)</p>
			</td>
		</tr>
		
		<!-- Portfolio Item 2 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Portfolio Item 2</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_2_image">Image URL</label>
			</th>
			<td>
				<input type="url" id="portfolio_2_image" name="portfolio_2_image" value="<?php echo esc_url( get_option( 'portfolio_2_image', get_template_directory_uri() . '/assets/img/portfolio/portfolio-2.webp' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL of the portfolio image</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_2_category">Category</label>
			</th>
			<td>
				<input type="text" id="portfolio_2_category" name="portfolio_2_category" value="<?php echo esc_attr( get_option( 'portfolio_2_category', 'Web Design' ) ); ?>" class="regular-text">
				<p class="description">Enter the portfolio category</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_2_title">Title</label>
			</th>
			<td>
				<input type="text" id="portfolio_2_title" name="portfolio_2_title" value="<?php echo esc_attr( get_option( 'portfolio_2_title', 'Woodcraft Design' ) ); ?>" class="regular-text">
				<p class="description">Enter the portfolio title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_2_filter">Filter Class</label>
			</th>
			<td>
				<input type="text" id="portfolio_2_filter" name="portfolio_2_filter" value="<?php echo esc_attr( get_option( 'portfolio_2_filter', 'filter-design' ) ); ?>" class="regular-text">
				<p class="description">Enter the filter class</p>
			</td>
		</tr>
		
		<!-- Portfolio Item 3 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Portfolio Item 3</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_3_image">Image URL</label>
			</th>
			<td>
				<input type="url" id="portfolio_3_image" name="portfolio_3_image" value="<?php echo esc_url( get_option( 'portfolio_3_image', get_template_directory_uri() . '/assets/img/portfolio/portfolio-portrait-2.webp' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL of the portfolio image</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_3_category">Category</label>
			</th>
			<td>
				<input type="text" id="portfolio_3_category" name="portfolio_3_category" value="<?php echo esc_attr( get_option( 'portfolio_3_category', 'Automotive' ) ); ?>" class="regular-text">
				<p class="description">Enter the portfolio category</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_3_title">Title</label>
			</th>
			<td>
				<input type="text" id="portfolio_3_title" name="portfolio_3_title" value="<?php echo esc_attr( get_option( 'portfolio_3_title', 'Classic Beauty' ) ); ?>" class="regular-text">
				<p class="description">Enter the portfolio title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_3_filter">Filter Class</label>
			</th>
			<td>
				<input type="text" id="portfolio_3_filter" name="portfolio_3_filter" value="<?php echo esc_attr( get_option( 'portfolio_3_filter', 'filter-automotive' ) ); ?>" class="regular-text">
				<p class="description">Enter the filter class</p>
			</td>
		</tr>
		
		<!-- Portfolio Item 4 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Portfolio Item 4</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_4_image">Image URL</label>
			</th>
			<td>
				<input type="url" id="portfolio_4_image" name="portfolio_4_image" value="<?php echo esc_url( get_option( 'portfolio_4_image', get_template_directory_uri() . '/assets/img/portfolio/portfolio-portrait-4.webp' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL of the portfolio image</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_4_category">Category</label>
			</th>
			<td>
				<input type="text" id="portfolio_4_category" name="portfolio_4_category" value="<?php echo esc_attr( get_option( 'portfolio_4_category', 'Nature' ) ); ?>" class="regular-text">
				<p class="description">Enter the portfolio category</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_4_title">Title</label>
			</th>
			<td>
				<input type="text" id="portfolio_4_title" name="portfolio_4_title" value="<?php echo esc_attr( get_option( 'portfolio_4_title', 'Natural Growth' ) ); ?>" class="regular-text">
				<p class="description">Enter the portfolio title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_4_filter">Filter Class</label>
			</th>
			<td>
				<input type="text" id="portfolio_4_filter" name="portfolio_4_filter" value="<?php echo esc_attr( get_option( 'portfolio_4_filter', 'filter-nature' ) ); ?>" class="regular-text">
				<p class="description">Enter the filter class</p>
			</td>
		</tr>
		
		<!-- Portfolio Item 5 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Portfolio Item 5</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_5_image">Image URL</label>
			</th>
			<td>
				<input type="url" id="portfolio_5_image" name="portfolio_5_image" value="<?php echo esc_url( get_option( 'portfolio_5_image', get_template_directory_uri() . '/assets/img/portfolio/portfolio-5.webp' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL of the portfolio image</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_5_category">Category</label>
			</th>
			<td>
				<input type="text" id="portfolio_5_category" name="portfolio_5_category" value="<?php echo esc_attr( get_option( 'portfolio_5_category', 'Photography' ) ); ?>" class="regular-text">
				<p class="description">Enter the portfolio category</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_5_title">Title</label>
			</th>
			<td>
				<input type="text" id="portfolio_5_title" name="portfolio_5_title" value="<?php echo esc_attr( get_option( 'portfolio_5_title', 'Urban Stories' ) ); ?>" class="regular-text">
				<p class="description">Enter the portfolio title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_5_filter">Filter Class</label>
			</th>
			<td>
				<input type="text" id="portfolio_5_filter" name="portfolio_5_filter" value="<?php echo esc_attr( get_option( 'portfolio_5_filter', 'filter-photography' ) ); ?>" class="regular-text">
				<p class="description">Enter the filter class</p>
			</td>
		</tr>
		
		<!-- Portfolio Item 6 -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Portfolio Item 6</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_6_image">Image URL</label>
			</th>
			<td>
				<input type="url" id="portfolio_6_image" name="portfolio_6_image" value="<?php echo esc_url( get_option( 'portfolio_6_image', get_template_directory_uri() . '/assets/img/portfolio/portfolio-6.webp' ) ); ?>" class="regular-text">
				<p class="description">Enter the URL of the portfolio image</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_6_category">Category</label>
			</th>
			<td>
				<input type="text" id="portfolio_6_category" name="portfolio_6_category" value="<?php echo esc_attr( get_option( 'portfolio_6_category', 'Web Design' ) ); ?>" class="regular-text">
				<p class="description">Enter the portfolio category</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_6_title">Title</label>
			</th>
			<td>
				<input type="text" id="portfolio_6_title" name="portfolio_6_title" value="<?php echo esc_attr( get_option( 'portfolio_6_title', 'Digital Experience' ) ); ?>" class="regular-text">
				<p class="description">Enter the portfolio title</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="portfolio_6_filter">Filter Class</label>
			</th>
			<td>
				<input type="text" id="portfolio_6_filter" name="portfolio_6_filter" value="<?php echo esc_attr( get_option( 'portfolio_6_filter', 'filter-design' ) ); ?>" class="regular-text">
				<p class="description">Enter the filter class</p>
			</td>
		</tr>
	</table>
	<?php
}

/**
 * Save portfolio section options
 */
function portfolio_save_portfolio_options() {
	// Portfolio Section
	if ( isset( $_POST['portfolio_section_title'] ) ) {
		update_option( 'portfolio_section_title', sanitize_text_field( $_POST['portfolio_section_title'] ) );
	}
	if ( isset( $_POST['portfolio_section_description'] ) ) {
		update_option( 'portfolio_section_description', sanitize_textarea_field( $_POST['portfolio_section_description'] ) );
	}
	
	// Portfolio Item 1
	if ( isset( $_POST['portfolio_1_image'] ) ) {
		update_option( 'portfolio_1_image', esc_url_raw( $_POST['portfolio_1_image'] ) );
	}
	if ( isset( $_POST['portfolio_1_category'] ) ) {
		update_option( 'portfolio_1_category', sanitize_text_field( $_POST['portfolio_1_category'] ) );
	}
	if ( isset( $_POST['portfolio_1_title'] ) ) {
		update_option( 'portfolio_1_title', sanitize_text_field( $_POST['portfolio_1_title'] ) );
	}
	if ( isset( $_POST['portfolio_1_filter'] ) ) {
		update_option( 'portfolio_1_filter', sanitize_text_field( $_POST['portfolio_1_filter'] ) );
	}
	
	// Portfolio Item 2
	if ( isset( $_POST['portfolio_2_image'] ) ) {
		update_option( 'portfolio_2_image', esc_url_raw( $_POST['portfolio_2_image'] ) );
	}
	if ( isset( $_POST['portfolio_2_category'] ) ) {
		update_option( 'portfolio_2_category', sanitize_text_field( $_POST['portfolio_2_category'] ) );
	}
	if ( isset( $_POST['portfolio_2_title'] ) ) {
		update_option( 'portfolio_2_title', sanitize_text_field( $_POST['portfolio_2_title'] ) );
	}
	if ( isset( $_POST['portfolio_2_filter'] ) ) {
		update_option( 'portfolio_2_filter', sanitize_text_field( $_POST['portfolio_2_filter'] ) );
	}
	
	// Portfolio Item 3
	if ( isset( $_POST['portfolio_3_image'] ) ) {
		update_option( 'portfolio_3_image', esc_url_raw( $_POST['portfolio_3_image'] ) );
	}
	if ( isset( $_POST['portfolio_3_category'] ) ) {
		update_option( 'portfolio_3_category', sanitize_text_field( $_POST['portfolio_3_category'] ) );
	}
	if ( isset( $_POST['portfolio_3_title'] ) ) {
		update_option( 'portfolio_3_title', sanitize_text_field( $_POST['portfolio_3_title'] ) );
	}
	if ( isset( $_POST['portfolio_3_filter'] ) ) {
		update_option( 'portfolio_3_filter', sanitize_text_field( $_POST['portfolio_3_filter'] ) );
	}
	
	// Portfolio Item 4
	if ( isset( $_POST['portfolio_4_image'] ) ) {
		update_option( 'portfolio_4_image', esc_url_raw( $_POST['portfolio_4_image'] ) );
	}
	if ( isset( $_POST['portfolio_4_category'] ) ) {
		update_option( 'portfolio_4_category', sanitize_text_field( $_POST['portfolio_4_category'] ) );
	}
	if ( isset( $_POST['portfolio_4_title'] ) ) {
		update_option( 'portfolio_4_title', sanitize_text_field( $_POST['portfolio_4_title'] ) );
	}
	if ( isset( $_POST['portfolio_4_filter'] ) ) {
		update_option( 'portfolio_4_filter', sanitize_text_field( $_POST['portfolio_4_filter'] ) );
	}
	
	// Portfolio Item 5
	if ( isset( $_POST['portfolio_5_image'] ) ) {
		update_option( 'portfolio_5_image', esc_url_raw( $_POST['portfolio_5_image'] ) );
	}
	if ( isset( $_POST['portfolio_5_category'] ) ) {
		update_option( 'portfolio_5_category', sanitize_text_field( $_POST['portfolio_5_category'] ) );
	}
	if ( isset( $_POST['portfolio_5_title'] ) ) {
		update_option( 'portfolio_5_title', sanitize_text_field( $_POST['portfolio_5_title'] ) );
	}
	if ( isset( $_POST['portfolio_5_filter'] ) ) {
		update_option( 'portfolio_5_filter', sanitize_text_field( $_POST['portfolio_5_filter'] ) );
	}
	
	// Portfolio Item 6
	if ( isset( $_POST['portfolio_6_image'] ) ) {
		update_option( 'portfolio_6_image', esc_url_raw( $_POST['portfolio_6_image'] ) );
	}
	if ( isset( $_POST['portfolio_6_category'] ) ) {
		update_option( 'portfolio_6_category', sanitize_text_field( $_POST['portfolio_6_category'] ) );
	}
	if ( isset( $_POST['portfolio_6_title'] ) ) {
		update_option( 'portfolio_6_title', sanitize_text_field( $_POST['portfolio_6_title'] ) );
	}
	if ( isset( $_POST['portfolio_6_filter'] ) ) {
		update_option( 'portfolio_6_filter', sanitize_text_field( $_POST['portfolio_6_filter'] ) );
	}
} 