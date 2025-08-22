<?php
/**
 * Portfolio Section Theme Options
 * 
 * @package Portfolio
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Portfolio section tab content
 */
function portfolio_portfolio_tab_content() {
	// Get existing options
	$portfolio_section_title = get_option( 'portfolio_section_title', 'Portfolio' );
	$portfolio_section_description = get_option( 'portfolio_section_description', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.' );
	
	// Get portfolio categories
	$portfolio_categories = get_option( 'portfolio_categories', array(
		array( 'name' => 'Photography', 'slug' => 'photography' ),
		array( 'name' => 'Design', 'slug' => 'design' ),
		array( 'name' => 'Automotive', 'slug' => 'automotive' ),
		array( 'name' => 'Nature', 'slug' => 'nature' )
	) );
	
	// Get portfolio projects
	$portfolio_projects = get_option( 'portfolio_projects', array(
		array(
			'title' => 'Capturing Moments',
			'category' => 'photography',
			'image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-portrait-1.webp',
			'lightbox_image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-portrait-1.webp',
			'description' => 'Photography project showcasing beautiful moments',
			'link' => 'portfolio-details.html'
		),
		array(
			'title' => 'Woodcraft Design',
			'category' => 'design',
			'image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-2.webp',
			'lightbox_image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-2.webp',
			'description' => 'Web design project for woodcraft business',
			'link' => 'portfolio-details.html'
		),
		array(
			'title' => 'Classic Beauty',
			'category' => 'automotive',
			'image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-portrait-2.webp',
			'lightbox_image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-portrait-2.webp',
			'description' => 'Automotive photography project',
			'link' => 'portfolio-details.html'
		),
		array(
			'title' => 'Natural Growth',
			'category' => 'nature',
			'image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-portrait-4.webp',
			'lightbox_image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-portrait-4.webp',
			'description' => 'Nature photography project',
			'link' => 'portfolio-details.html'
		),
		array(
			'title' => 'Urban Stories',
			'category' => 'photography',
			'image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-5.webp',
			'lightbox_image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-5.webp',
			'description' => 'Urban photography storytelling',
			'link' => 'portfolio-details.html'
		),
		array(
			'title' => 'Digital Experience',
			'category' => 'design',
			'image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-6.webp',
			'lightbox_image' => get_template_directory_uri() . '/assets/img/portfolio/portfolio-6.webp',
			'description' => 'Digital design experience project',
			'link' => 'portfolio-details.html'
		)
	) );
	?>
	
	<div class="portfolio-section-options">
		<h3>Portfolio Section Settings</h3>
		
		<table class="form-table">
			<tr>
				<th scope="row">
					<label for="portfolio_section_title">Section Title</label>
				</th>
				<td>
					<input type="text" id="portfolio_section_title" name="portfolio_section_title" value="<?php echo esc_attr( $portfolio_section_title ); ?>" class="regular-text">
					<p class="description">The main title for the portfolio section.</p>
				</td>
			</tr>
			
			<tr>
				<th scope="row">
					<label for="portfolio_section_description">Section Description</label>
				</th>
				<td>
					<textarea id="portfolio_section_description" name="portfolio_section_description" rows="3" class="large-text"><?php echo esc_textarea( $portfolio_section_description ); ?></textarea>
					<p class="description">Description text displayed below the section title.</p>
				</td>
			</tr>
			
			<tr>
				<th scope="row">
					<label for="portfolio_initial_projects">Initial Projects to Show</label>
				</th>
				<td>
					<input type="number" id="portfolio_initial_projects" name="portfolio_initial_projects" value="<?php echo esc_attr( get_option( 'portfolio_initial_projects', '6' ) ); ?>" min="1" max="50" class="small-text">
					<p class="description">Number of projects to show initially on "All Projects" tab before "View More" button.</p>
				</td>
			</tr>
		</table>
		
		<h3>Portfolio Categories</h3>
		<p class="description">Manage the category tabs for filtering portfolio projects. The first category will be used as "All Projects".</p>
		
		<div id="portfolio-categories-container">
			<?php foreach ( $portfolio_categories as $index => $category ) : ?>
			<div class="category-item" data-index="<?php echo $index; ?>">
				<h4>Category <?php echo $index + 1; ?></h4>
				<table class="form-table">
					<tr>
						<th scope="row">
							<label>Category Name</label>
						</th>
						<td>
							<input type="text" name="portfolio_categories[<?php echo $index; ?>][name]" value="<?php echo esc_attr( $category['name'] ); ?>" class="regular-text" required>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label>Category Slug</label>
						</th>
						<td>
							<input type="text" name="portfolio_categories[<?php echo $index; ?>][slug]" value="<?php echo esc_attr( $category['slug'] ); ?>" class="regular-text" required>
							<p class="description">Used for CSS classes and filtering. Use lowercase, no spaces.</p>
						</td>
					</tr>
				</table>
				<button type="button" class="button button-link-delete remove-category" data-index="<?php echo $index; ?>">Remove Category</button>
			</div>
			<?php endforeach; ?>
		</div>
		
		<button type="button" class="button button-secondary" id="add-category">Add New Category</button>
		
		<h3>Portfolio Projects</h3>
		<p class="description">Manage portfolio projects. Each project can be assigned to a category for filtering.</p>
		
		<div id="portfolio-projects-container">
			<?php foreach ( $portfolio_projects as $index => $project ) : ?>
			<div class="project-item" data-index="<?php echo $index; ?>">
				<h4>Project <?php echo $index + 1; ?></h4>
				<table class="form-table">
					<tr>
						<th scope="row">
							<label>Project Title</label>
						</th>
						<td>
							<input type="text" name="portfolio_projects[<?php echo $index; ?>][title]" value="<?php echo esc_attr( $project['title'] ); ?>" class="regular-text" required>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							<label>Category</label>
						</th>
						<td>
							<select name="portfolio_projects[<?php echo $index; ?>][category]" required>
								<option value="">Select Category</option>
								<?php foreach ( $portfolio_categories as $cat ) : ?>
									<option value="<?php echo esc_attr( $cat['slug'] ); ?>" <?php selected( $project['category'], $cat['slug'] ); ?>>
										<?php echo esc_html( $cat['name'] ); ?>
									</option>
								<?php endforeach; ?>
							</select>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							<label>Project Image</label>
						</th>
						<td>
							<div class="image-upload-wrapper">
								<input type="hidden" name="portfolio_projects[<?php echo $index; ?>][image]" value="<?php echo esc_url( $project['image'] ); ?>" class="project-image-input">
								<div class="image-preview" id="project_image_preview_<?php echo $index; ?>">
									<?php if ( ! empty( $project['image'] ) ) : ?>
										<img src="<?php echo esc_url( $project['image'] ); ?>" alt="Project Preview" style="max-width: 150px; height: auto; border-radius: 5px;">
									<?php endif; ?>
								</div>
								<button type="button" class="button button-secondary project-image-upload-btn" data-index="<?php echo $index; ?>">Choose Image</button>
								<button type="button" class="button button-link-delete project-image-remove-btn" data-index="<?php echo $index; ?>" style="display: <?php echo ! empty( $project['image'] ) ? 'inline-block' : 'none'; ?>;">Remove Image</button>
							</div>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							<label>Lightbox Image</label>
						</th>
						<td>
							<div class="image-upload-wrapper">
								<input type="hidden" name="portfolio_projects[<?php echo $index; ?>][lightbox_image]" value="<?php echo esc_url( $project['lightbox_image'] ); ?>" class="project-lightbox-image-input">
								<div class="image-preview" id="project_lightbox_image_preview_<?php echo $index; ?>">
									<?php if ( ! empty( $project['lightbox_image'] ) ) : ?>
										<img src="<?php echo esc_url( $project['lightbox_image'] ); ?>" alt="Lightbox Preview" style="max-width: 150px; height: auto; border-radius: 5px;">
									<?php endif; ?>
								</div>
								<button type="button" class="button button-secondary project-lightbox-image-upload-btn" data-index="<?php echo $index; ?>">Choose Image</button>
								<button type="button" class="button button-link-delete project-lightbox-image-remove-btn" data-index="<?php echo $index; ?>" style="display: <?php echo ! empty( $project['lightbox_image'] ) ? 'inline-block' : 'none'; ?>;">Remove Image</button>
								<p class="description">Image displayed in lightbox when clicking the plus icon.</p>
							</div>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							<label>Description</label>
						</th>
						<td>
							<textarea name="portfolio_projects[<?php echo $index; ?>][description]" rows="2" class="large-text"><?php echo esc_textarea( $project['description'] ); ?></textarea>
							<p class="description">Brief description of the project.</p>
						</td>
					</tr>
					
					<tr>
						<th scope="row">
							<label>Project Link</label>
						</th>
						<td>
							<input type="url" name="portfolio_projects[<?php echo $index; ?>][link]" value="<?php echo esc_url( $project['link'] ); ?>" class="regular-text">
							<p class="description">Link to project details page (optional).</p>
						</td>
					</tr>
				</table>
				<button type="button" class="button button-link-delete remove-project" data-index="<?php echo $index; ?>">Remove Project</button>
			</div>
			<?php endforeach; ?>
		</div>
		
		<button type="button" class="button button-secondary" id="add-project">Add New Project</button>
	</div>
	
	<script type="text/template" id="category-template">
		<div class="category-item" data-index="{{index}}">
			<h4>Category {{number}}</h4>
			<table class="form-table">
				<tr>
					<th scope="row">
						<label>Category Name</label>
					</th>
					<td>
						<input type="text" name="portfolio_categories[{{index}}][name]" class="regular-text" required>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label>Category Slug</label>
					</th>
					<td>
						<input type="text" name="portfolio_categories[{{index}}][slug]" class="regular-text" required>
						<p class="description">Used for CSS classes and filtering. Use lowercase, no spaces.</p>
					</td>
				</tr>
			</table>
			<button type="button" class="button button-link-delete remove-category" data-index="{{index}}">Remove Category</button>
		</div>
	</script>
	
	<script type="text/template" id="project-template">
		<div class="project-item" data-index="{{index}}">
			<h4>Project {{number}}</h4>
			<table class="form-table">
				<tr>
					<th scope="row">
						<label>Project Title</label>
					</th>
					<td>
						<input type="text" name="portfolio_projects[{{index}}][title]" class="regular-text" required>
					</td>
				</tr>
				
				<tr>
					<th scope="row">
						<label>Category</label>
					</th>
					<td>
						<select name="portfolio_projects[{{index}}][category]" required>
							<option value="">Select Category</option>
							<?php foreach ( $portfolio_categories as $cat ) : ?>
								<option value="<?php echo esc_attr( $cat['slug'] ); ?>"><?php echo esc_html( $cat['name'] ); ?></option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				
				<tr>
					<th scope="row">
						<label>Project Image</label>
					</th>
					<td>
						<div class="image-upload-wrapper">
							<input type="hidden" name="portfolio_projects[{{index}}][image]" class="project-image-input">
							<div class="image-preview" id="project_image_preview_{{index}}"></div>
							<button type="button" class="button button-secondary project-image-upload-btn" data-index="{{index}}">Choose Image</button>
							<button type="button" class="button button-link-delete project-image-remove-btn" data-index="{{index}}" style="display: none;">Remove Image</button>
						</div>
					</td>
				</tr>
				
				<tr>
					<th scope="row">
						<label>Lightbox Image</label>
					</th>
					<td>
						<div class="image-upload-wrapper">
							<input type="hidden" name="portfolio_projects[{{index}}][lightbox_image]" class="project-lightbox-image-input">
							<div class="image-preview" id="project_lightbox_image_preview_{{index}}"></div>
							<button type="button" class="button button-secondary project-lightbox-image-upload-btn" data-index="{{index}}">Choose Image</button>
							<button type="button" class="button button-link-delete project-lightbox-image-remove-btn" data-index="{{index}}" style="display: none;">Remove Image</button>
							<p class="description">Image displayed in lightbox when clicking the plus icon.</p>
						</div>
					</td>
				</tr>
				
				<tr>
					<th scope="row">
						<label>Description</label>
					</th>
					<td>
						<textarea name="portfolio_projects[{{index}}][description]" rows="2" class="large-text"></textarea>
						<p class="description">Brief description of the project.</p>
					</td>
				</tr>
				
				<tr>
					<th scope="row">
						<label>Project Link</label>
					</th>
					<td>
						<input type="url" name="portfolio_projects[{{index}}][link]" class="regular-text">
						<p class="description">Link to project details page (optional).</p>
					</td>
				</tr>
			</table>
			<button type="button" class="button button-link-delete remove-project" data-index="{{index}}">Remove Project</button>
		</div>
	</script>
	
	<?php
}

/**
 * Save portfolio section options
 */
function portfolio_save_portfolio_options( $input ) {
	$updated_options = array();
	
	// Save section title and description
	if ( isset( $input['portfolio_section_title'] ) ) {
		$updated_options['portfolio_section_title'] = sanitize_text_field( $input['portfolio_section_title'] );
	}
	
	if ( isset( $input['portfolio_section_description'] ) ) {
		$updated_options['portfolio_section_description'] = sanitize_textarea_field( $input['portfolio_section_description'] );
	}
	
	// Save initial projects to show
	if ( isset( $input['portfolio_initial_projects'] ) ) {
		$updated_options['portfolio_initial_projects'] = intval( $input['portfolio_initial_projects'] );
	}
	
	// Save portfolio categories
	if ( isset( $input['portfolio_categories'] ) && is_array( $input['portfolio_categories'] ) ) {
		$categories = array();
		foreach ( $input['portfolio_categories'] as $category ) {
			if ( ! empty( $category['name'] ) && ! empty( $category['slug'] ) ) {
				$categories[] = array(
					'name' => sanitize_text_field( $category['name'] ),
					'slug' => sanitize_title( $category['slug'] )
				);
			}
		}
		$updated_options['portfolio_categories'] = $categories;
	}
	
	// Save portfolio projects
	if ( isset( $input['portfolio_projects'] ) && is_array( $input['portfolio_projects'] ) ) {
		$projects = array();
		foreach ( $input['portfolio_projects'] as $project ) {
			if ( ! empty( $project['title'] ) && ! empty( $project['category'] ) ) {
				$projects[] = array(
					'title' => sanitize_text_field( $project['title'] ),
					'category' => sanitize_title( $project['category'] ),
					'image' => esc_url_raw( $project['image'] ),
					'lightbox_image' => esc_url_raw( $project['lightbox_image'] ),
					'description' => sanitize_textarea_field( $project['description'] ),
					'link' => esc_url_raw( $project['link'] )
				);
			}
		}
		$updated_options['portfolio_projects'] = $projects;
	}
	
	// Update options
	foreach ( $updated_options as $option_name => $option_value ) {
		update_option( $option_name, $option_value );
	}
	
	return $input;
}

/**
 * Enqueue media scripts for portfolio section
 */
function portfolio_portfolio_enqueue_media_scripts() {
	wp_enqueue_media();
	wp_enqueue_script( 'portfolio-portfolio-media', get_template_directory_uri() . '/js/portfolio-media.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'admin_enqueue_scripts', 'portfolio_portfolio_enqueue_media_scripts' );

/**
 * Add admin styles for portfolio section
 */
function portfolio_portfolio_admin_styles() {
	?>
	<style>
		.portfolio-section-options h3 {
			margin-top: 30px;
			margin-bottom: 20px;
			padding-bottom: 10px;
			border-bottom: 1px solid #ddd;
		}
		
		.category-item, .project-item {
			background: #f9f9f9;
			padding: 20px;
			margin: 20px 0;
			border: 1px solid #ddd;
			border-radius: 5px;
		}
		
		.category-item h4, .project-item h4 {
			margin-top: 0;
			color: #23282d;
		}
		
		.image-upload-wrapper {
			max-width: 400px;
		}
		
		.image-preview {
			margin-bottom: 10px;
			padding: 10px;
			border: 1px solid #ddd;
			border-radius: 5px;
			background: #fff;
			text-align: center;
			min-height: 50px;
		}
		
		.image-preview img {
			max-width: 100%;
			height: auto;
		}
		
		.project-image-upload-btn, .project-lightbox-image-upload-btn {
			margin-right: 10px;
		}
		
		.remove-category, .remove-project {
			margin-top: 15px;
		}
		
		#add-category, #add-project {
			margin: 20px 0;
		}
	</style>
	<?php
}
add_action( 'admin_head', 'portfolio_portfolio_admin_styles' ); 