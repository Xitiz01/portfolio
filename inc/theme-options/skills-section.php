<?php
/**
 * Skills Section Theme Options
 *
 * @package Portfolio
 */

/**
 * Skills section tab content
 */
function portfolio_skills_tab_content() {
	?>
	<table class="form-table">
		<tr>
			<th scope="row">
				<label for="skills_section_title">Section Title</label>
			</th>
			<td>
				<input type="text" id="skills_section_title" name="skills_section_title" value="<?php echo esc_attr( get_option( 'skills_section_title', 'Skills' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for the skills section</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="skills_section_description">Section Description</label>
			</th>
			<td>
				<textarea id="skills_section_description" name="skills_section_description" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'skills_section_description', 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit' ) ); ?></textarea>
				<p class="description">Enter the description for the skills section</p>
			</td>
		</tr>
		
		<!-- Frontend Skills Category -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Frontend Development Skills</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="frontend_category_title">Category Title</label>
			</th>
			<td>
				<input type="text" id="frontend_category_title" name="frontend_category_title" value="<?php echo esc_attr( get_option( 'frontend_category_title', 'Front-end Development' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for frontend skills category</p>
			</td>
		</tr>
		
		<!-- Frontend Skill 1 -->
		<tr>
			<th scope="row">
				<label for="frontend_skill_1_name">Skill 1 Name</label>
			</th>
			<td>
				<input type="text" id="frontend_skill_1_name" name="frontend_skill_1_name" value="<?php echo esc_attr( get_option( 'frontend_skill_1_name', 'HTML/CSS' ) ); ?>" class="regular-text">
				<p class="description">Enter the skill name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="frontend_skill_1_percentage">Skill 1 Percentage</label>
			</th>
			<td>
				<input type="number" id="frontend_skill_1_percentage" name="frontend_skill_1_percentage" value="<?php echo esc_attr( get_option( 'frontend_skill_1_percentage', '95' ) ); ?>" class="small-text" min="0" max="100">
				<p class="description">Enter percentage (0-100)</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="frontend_skill_1_description">Skill 1 Description</label>
			</th>
			<td>
				<textarea id="frontend_skill_1_description" name="frontend_skill_1_description" rows="2" class="large-text"><?php echo esc_textarea( get_option( 'frontend_skill_1_description', 'Expert level knowledge of semantic HTML5 and modern CSS3 techniques' ) ); ?></textarea>
				<p class="description">Enter skill description</p>
			</td>
		</tr>
		
		<!-- Frontend Skill 2 -->
		<tr>
			<th scope="row">
				<label for="frontend_skill_2_name">Skill 2 Name</label>
			</th>
			<td>
				<input type="text" id="frontend_skill_2_name" name="frontend_skill_2_name" value="<?php echo esc_attr( get_option( 'frontend_skill_2_name', 'JavaScript' ) ); ?>" class="regular-text">
				<p class="description">Enter the skill name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="frontend_skill_2_percentage">Skill 2 Percentage</label>
			</th>
			<td>
				<input type="number" id="frontend_skill_2_percentage" name="frontend_skill_2_percentage" value="<?php echo esc_attr( get_option( 'frontend_skill_2_percentage', '85' ) ); ?>" class="small-text" min="0" max="100">
				<p class="description">Enter percentage (0-100)</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="frontend_skill_2_description">Skill 2 Description</label>
			</th>
			<td>
				<textarea id="frontend_skill_2_description" name="frontend_skill_2_description" rows="2" class="large-text"><?php echo esc_textarea( get_option( 'frontend_skill_2_description', 'Strong proficiency in ES6+, DOM manipulation, and modern frameworks' ) ); ?></textarea>
				<p class="description">Enter skill description</p>
			</td>
		</tr>
		
		<!-- Frontend Skill 3 -->
		<tr>
			<th scope="row">
				<label for="frontend_skill_3_name">Skill 3 Name</label>
			</th>
			<td>
				<input type="text" id="frontend_skill_3_name" name="frontend_skill_3_name" value="<?php echo esc_attr( get_option( 'frontend_skill_3_name', 'React' ) ); ?>" class="regular-text">
				<p class="description">Enter the skill name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="frontend_skill_3_percentage">Skill 3 Percentage</label>
			</th>
			<td>
				<input type="number" id="frontend_skill_3_percentage" name="frontend_skill_3_percentage" value="<?php echo esc_attr( get_option( 'frontend_skill_3_percentage', '80' ) ); ?>" class="small-text" min="0" max="100">
				<p class="description">Enter percentage (0-100)</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="frontend_skill_3_description">Skill 3 Description</label>
			</th>
			<td>
				<textarea id="frontend_skill_3_description" name="frontend_skill_3_description" rows="2" class="large-text"><?php echo esc_textarea( get_option( 'frontend_skill_3_description', 'Experience with React hooks, state management, and component architecture' ) ); ?></textarea>
				<p class="description">Enter skill description</p>
			</td>
		</tr>
		
		<!-- Backend Skills Category -->
		<tr>
			<th scope="row" colspan="2">
				<h3 style="margin: 0; padding: 10px 0; border-bottom: 1px solid #ddd;">Backend Development Skills</h3>
			</th>
		</tr>
		<tr>
			<th scope="row">
				<label for="backend_category_title">Category Title</label>
			</th>
			<td>
				<input type="text" id="backend_category_title" name="backend_category_title" value="<?php echo esc_attr( get_option( 'backend_category_title', 'Back-end Development' ) ); ?>" class="regular-text">
				<p class="description">Enter the title for backend skills category</p>
			</td>
		</tr>
		
		<!-- Backend Skill 1 -->
		<tr>
			<th scope="row">
				<label for="backend_skill_1_name">Skill 1 Name</label>
			</th>
			<td>
				<input type="text" id="backend_skill_1_name" name="backend_skill_1_name" value="<?php echo esc_attr( get_option( 'backend_skill_1_name', 'Node.js' ) ); ?>" class="regular-text">
				<p class="description">Enter the skill name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="backend_skill_1_percentage">Skill 1 Percentage</label>
			</th>
			<td>
				<input type="number" id="backend_skill_1_percentage" name="backend_skill_1_percentage" value="<?php echo esc_attr( get_option( 'backend_skill_1_percentage', '75' ) ); ?>" class="small-text" min="0" max="100">
				<p class="description">Enter percentage (0-100)</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="backend_skill_1_description">Skill 1 Description</label>
			</th>
			<td>
				<textarea id="backend_skill_1_description" name="backend_skill_1_description" rows="2" class="large-text"><?php echo esc_textarea( get_option( 'backend_skill_1_description', 'Server-side JavaScript development with Express and REST APIs' ) ); ?></textarea>
				<p class="description">Enter skill description</p>
			</td>
		</tr>
		
		<!-- Backend Skill 2 -->
		<tr>
			<th scope="row">
				<label for="backend_skill_2_name">Skill 2 Name</label>
			</th>
			<td>
				<input type="text" id="backend_skill_2_name" name="backend_skill_2_name" value="<?php echo esc_attr( get_option( 'backend_skill_2_name', 'Python' ) ); ?>" class="regular-text">
				<p class="description">Enter the skill name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="backend_skill_2_percentage">Skill 2 Percentage</label>
			</th>
			<td>
				<input type="number" id="backend_skill_2_percentage" name="backend_skill_2_percentage" value="<?php echo esc_attr( get_option( 'backend_skill_2_percentage', '70' ) ); ?>" class="small-text" min="0" max="100">
				<p class="description">Enter percentage (0-100)</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="backend_skill_2_description">Skill 2 Description</label>
			</th>
			<td>
				<textarea id="backend_skill_2_description" name="backend_skill_2_description" rows="2" class="large-text"><?php echo esc_textarea( get_option( 'backend_skill_2_description', 'Python development with Django and data analysis tools' ) ); ?></textarea>
				<p class="description">Enter skill description</p>
			</td>
		</tr>
		
		<!-- Backend Skill 3 -->
		<tr>
			<th scope="row">
				<label for="backend_skill_3_name">Skill 3 Name</label>
			</th>
			<td>
				<input type="text" id="backend_skill_3_name" name="backend_skill_3_name" value="<?php echo esc_attr( get_option( 'backend_skill_3_name', 'SQL' ) ); ?>" class="regular-text">
				<p class="description">Enter the skill name</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="backend_skill_3_percentage">Skill 3 Percentage</label>
			</th>
			<td>
				<input type="number" id="backend_skill_3_percentage" name="backend_skill_3_percentage" value="<?php echo esc_attr( get_option( 'backend_skill_3_percentage', '65' ) ); ?>" class="small-text" min="0" max="100">
				<p class="description">Enter percentage (0-100)</p>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label for="backend_skill_3_description">Skill 3 Description</label>
			</th>
			<td>
				<textarea id="backend_skill_3_description" name="backend_skill_3_description" rows="2" class="large-text"><?php echo esc_textarea( get_option( 'backend_skill_3_description', 'Database design, optimization, and complex queries' ) ); ?></textarea>
				<p class="description">Enter skill description</p>
			</td>
		</tr>
	</table>
	<?php
}

/**
 * Save skills section options
 */
function portfolio_save_skills_options() {
	// Skills Section
	if ( isset( $_POST['skills_section_title'] ) ) {
		update_option( 'skills_section_title', sanitize_text_field( $_POST['skills_section_title'] ) );
	}
	if ( isset( $_POST['skills_section_description'] ) ) {
		update_option( 'skills_section_description', sanitize_textarea_field( $_POST['skills_section_description'] ) );
	}
	
	// Frontend Skills
	if ( isset( $_POST['frontend_category_title'] ) ) {
		update_option( 'frontend_category_title', sanitize_text_field( $_POST['frontend_category_title'] ) );
	}
	
	// Frontend Skill 1
	if ( isset( $_POST['frontend_skill_1_name'] ) ) {
		update_option( 'frontend_skill_1_name', sanitize_text_field( $_POST['frontend_skill_1_name'] ) );
	}
	if ( isset( $_POST['frontend_skill_1_percentage'] ) ) {
		update_option( 'frontend_skill_1_percentage', intval( $_POST['frontend_skill_1_percentage'] ) );
	}
	if ( isset( $_POST['frontend_skill_1_description'] ) ) {
		update_option( 'frontend_skill_1_description', sanitize_textarea_field( $_POST['frontend_skill_1_description'] ) );
	}
	
	// Frontend Skill 2
	if ( isset( $_POST['frontend_skill_2_name'] ) ) {
		update_option( 'frontend_skill_2_name', sanitize_text_field( $_POST['frontend_skill_2_name'] ) );
	}
	if ( isset( $_POST['frontend_skill_2_percentage'] ) ) {
		update_option( 'frontend_skill_2_percentage', intval( $_POST['frontend_skill_2_percentage'] ) );
	}
	if ( isset( $_POST['frontend_skill_2_description'] ) ) {
		update_option( 'frontend_skill_2_description', sanitize_textarea_field( $_POST['frontend_skill_2_description'] ) );
	}
	
	// Frontend Skill 3
	if ( isset( $_POST['frontend_skill_3_name'] ) ) {
		update_option( 'frontend_skill_3_name', sanitize_text_field( $_POST['frontend_skill_3_name'] ) );
	}
	if ( isset( $_POST['frontend_skill_3_percentage'] ) ) {
		update_option( 'frontend_skill_3_percentage', intval( $_POST['frontend_skill_3_percentage'] ) );
	}
	if ( isset( $_POST['frontend_skill_3_description'] ) ) {
		update_option( 'frontend_skill_3_description', sanitize_textarea_field( $_POST['frontend_skill_3_description'] ) );
	}
	
	// Backend Skills
	if ( isset( $_POST['backend_category_title'] ) ) {
		update_option( 'backend_category_title', sanitize_text_field( $_POST['backend_category_title'] ) );
	}
	
	// Backend Skill 1
	if ( isset( $_POST['backend_skill_1_name'] ) ) {
		update_option( 'backend_skill_1_name', sanitize_text_field( $_POST['backend_skill_1_name'] ) );
	}
	if ( isset( $_POST['backend_skill_1_percentage'] ) ) {
		update_option( 'backend_skill_1_percentage', intval( $_POST['backend_skill_1_percentage'] ) );
	}
	if ( isset( $_POST['backend_skill_1_description'] ) ) {
		update_option( 'backend_skill_1_description', sanitize_textarea_field( $_POST['backend_skill_1_description'] ) );
	}
	
	// Backend Skill 2
	if ( isset( $_POST['backend_skill_2_name'] ) ) {
		update_option( 'backend_skill_2_name', sanitize_text_field( $_POST['backend_skill_2_name'] ) );
	}
	if ( isset( $_POST['backend_skill_2_percentage'] ) ) {
		update_option( 'backend_skill_2_percentage', intval( $_POST['backend_skill_2_percentage'] ) );
	}
	if ( isset( $_POST['backend_skill_2_description'] ) ) {
		update_option( 'backend_skill_2_description', sanitize_textarea_field( $_POST['backend_skill_2_description'] ) );
	}
	
	// Backend Skill 3
	if ( isset( $_POST['backend_skill_3_name'] ) ) {
		update_option( 'backend_skill_3_name', sanitize_text_field( $_POST['backend_skill_3_name'] ) );
	}
	if ( isset( $_POST['backend_skill_3_percentage'] ) ) {
		update_option( 'backend_skill_3_percentage', intval( $_POST['backend_skill_3_percentage'] ) );
	}
	if ( isset( $_POST['backend_skill_3_description'] ) ) {
		update_option( 'backend_skill_3_description', sanitize_textarea_field( $_POST['backend_skill_3_description'] ) );
	}
} 