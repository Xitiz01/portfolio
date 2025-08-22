jQuery(document).ready(function($) {
    // Resume Profile Image Upload
    $('#resume_profile_image_upload_btn').on('click', function(e) {
        e.preventDefault();
        
        var image = wp.media({
            title: 'Select Profile Image',
            multiple: false,
            library: {
                type: 'image'
            }
        }).open().on('select', function() {
            var uploaded_image = image.state().get('selection').first();
            var image_url = uploaded_image.toJSON().url;
            
            $('#resume_profile_image').val(image_url);
            $('#resume_profile_image_preview').html('<img src="' + image_url + '" alt="Profile Preview" style="max-width: 150px; height: auto; border-radius: 5px;">');
            $('#resume_profile_image_remove_btn').show();
        });
    });
    
    // Remove Profile Image
    $('#resume_profile_image_remove_btn').on('click', function(e) {
        e.preventDefault();
        
        $('#resume_profile_image').val('');
        $('#resume_profile_image_preview').html('');
        $(this).hide();
    });
});
