jQuery( function() {
    const { __ } = wp.i18n;
    let custom_uploader, attachment, upload_button, uploaded_image, image_container, upload_input;
    upload_button = jQuery('button[data-htsa-id="wp_media_upload"]');

    jQuery( document ).on( 'click', 'button[data-htsa-id="wp_media_upload"]', function ( evt ) {
        image_container = jQuery( evt.originalEvent.target ).prev( 'p[data-htsa-id="wp_media_upload_image"]' );
        upload_input = jQuery( evt.originalEvent.target ).next( 'input[type="hidden"]' );

        // If the uploader object has already been created, reopen the dialog
        if ( custom_uploader ) {
            custom_uploader.open();
            return;
        }

        // Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media( {
            title: __( 'Choose Image', 'htsa' ),
            button: { text: __( 'Choose Image', 'htsa' ) },
            multiple: false
        } );

        // When a file is selected, grab the url and set it as the text field's value
        custom_uploader.on( 'select', function () {
            attachment = custom_uploader.state().get( 'selection' ).first().toJSON();
            uploaded_image = `<img src="${attachment.url}" style="height: 5rem;" />`;
            image_container.html( uploaded_image );
            upload_input.val( attachment.id );
        } );

        // Open the uploader dialog
        custom_uploader.open();
    } );
} );