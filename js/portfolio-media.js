jQuery(document).ready(function($) {
	var categoryIndex = 0;
	var projectIndex = 0;
	
	// Initialize indices based on existing items
	$('.category-item').each(function() {
		var index = parseInt($(this).data('index'));
		if (index >= categoryIndex) {
			categoryIndex = index + 1;
		}
	});
	
	$('.project-item').each(function() {
		var index = parseInt($(this).data('index'));
		if (index >= projectIndex) {
			projectIndex = index + 1;
		}
	});
	
	// Add new category
	$('#add-category').on('click', function(e) {
		e.preventDefault();
		
		var template = $('#category-template').html();
		template = template.replace(/\{\{index\}\}/g, categoryIndex);
		template = template.replace(/\{\{number\}\}/g, categoryIndex + 1);
		
		$('#portfolio-categories-container').append(template);
		categoryIndex++;
		
		// Update project category dropdowns
		updateProjectCategoryDropdowns();
	});
	
	// Remove category
	$(document).on('click', '.remove-category', function(e) {
		e.preventDefault();
		
		if ($('.category-item').length > 1) {
			$(this).closest('.category-item').remove();
			// Update project category dropdowns
			updateProjectCategoryDropdowns();
		} else {
			alert('You must have at least one category.');
		}
	});
	
	// Add new project
	$('#add-project').on('click', function(e) {
		e.preventDefault();
		
		var template = $('#project-template').html();
		template = template.replace(/\{\{index\}\}/g, projectIndex);
		template = template.replace(/\{\{number\}\}/g, projectIndex + 1);
		
		$('#portfolio-projects-container').append(template);
		projectIndex++;
		
		// Update the new project's category dropdown
		var newProject = $('#portfolio-projects-container .project-item').last();
		updateProjectCategoryDropdown(newProject);
	});
	
	// Remove project
	$(document).on('click', '.remove-project', function(e) {
		e.preventDefault();
		
		if ($('.project-item').length > 1) {
			$(this).closest('.project-item').remove();
		} else {
			alert('You must have at least one project.');
		}
	});
	
	// Project Image Upload
	$(document).on('click', '.project-image-upload-btn', function(e) {
		e.preventDefault();
		
		var index = $(this).data('index');
		var button = $(this);
		
		var image = wp.media({
			title: 'Select Project Image',
			multiple: false,
			library: {
				type: 'image'
			}
		}).open().on('select', function() {
			var uploaded_image = image.state().get('selection').first();
			var image_url = uploaded_image.toJSON().url;
			
			button.siblings('.project-image-input').val(image_url);
			button.siblings('.image-preview').html('<img src="' + image_url + '" alt="Project Preview" style="max-width: 150px; height: auto; border-radius: 5px;">');
			button.siblings('.project-image-remove-btn').show();
		});
	});
	
	// Remove Project Image
	$(document).on('click', '.project-image-remove-btn', function(e) {
		e.preventDefault();
		
		$(this).siblings('.project-image-input').val('');
		$(this).siblings('.image-preview').html('');
		$(this).hide();
	});
	
	// Project Lightbox Image Upload
	$(document).on('click', '.project-lightbox-image-upload-btn', function(e) {
		e.preventDefault();
		
		var index = $(this).data('index');
		var button = $(this);
		
		var image = wp.media({
			title: 'Select Lightbox Image',
			multiple: false,
			library: {
				type: 'image'
			}
		}).open().on('select', function() {
			var uploaded_image = image.state().get('selection').first();
			var image_url = uploaded_image.toJSON().url;
			
			button.siblings('.project-lightbox-image-input').val(image_url);
			button.siblings('.image-preview').html('<img src="' + image_url + '" alt="Lightbox Preview" style="max-width: 150px; height: auto; border-radius: 5px;">');
			button.siblings('.project-lightbox-image-remove-btn').show();
		});
	});
	
	// Remove Project Lightbox Image
	$(document).on('click', '.project-lightbox-image-remove-btn', function(e) {
		e.preventDefault();
		
		$(this).siblings('.project-lightbox-image-input').val('');
		$(this).siblings('.image-preview').html('');
		$(this).hide();
	});
	
	// Function to update all project category dropdowns
	function updateProjectCategoryDropdowns() {
		$('.project-item').each(function() {
			updateProjectCategoryDropdown($(this));
		});
	}
	
	// Function to update a single project's category dropdown
	function updateProjectCategoryDropdown(projectElement) {
		var currentValue = projectElement.find('select[name*="[category]"]').val();
		var select = projectElement.find('select[name*="[category]"]');
		
		// Store current selection
		var currentSelection = select.val();
		
		// Clear existing options except the first one
		select.find('option:not(:first)').remove();
		
		// Add new category options
		$('.category-item').each(function() {
			var categoryName = $(this).find('input[name*="[name]"]').val();
			var categorySlug = $(this).find('input[name*="[slug]"]').val();
			
			if (categoryName && categorySlug) {
				var option = $('<option></option>')
					.attr('value', categorySlug)
					.text(categoryName);
				
				// Restore previous selection if possible
				if (categorySlug === currentSelection) {
					option.prop('selected', true);
				}
				
				select.append(option);
			}
		});
	}
	
	// Update project category dropdowns when category names/slugs change
	$(document).on('input', 'input[name*="[name]"], input[name*="[slug]"]', function() {
		// Debounce the update to avoid too many calls
		clearTimeout(window.categoryUpdateTimeout);
		window.categoryUpdateTimeout = setTimeout(function() {
			updateProjectCategoryDropdowns();
		}, 300);
	});
});
