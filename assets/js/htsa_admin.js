jQuery( function() {
    const { __ } = wp.i18n;
    let custom_uploader, attachment, upload_button, uploaded_image, image_container, upload_input, replace_image_container, clicked, container, widget_submit_button;
    upload_button = jQuery('button[data-htsa-id="wp_media_upload"]');

    jQuery( document ).on( 'click', 'button[data-htsa-id="wp_media_upload"]', function ( evt ) {
        clicked = jQuery( evt.originalEvent.target );
        container = clicked.parents('div[data-htsa-id="card-media-wrap"]');
        image_container = container.children( 'div[data-htsa-id="wp_media_upload_image"]' );
        upload_input = container.children( 'input[data-htsa-id="wp_media_upload_image_input"]' );
        replace_image_container = container.children( 'p.htsa-media-button-wrapper' );
        widget_submit_button = clicked.parents( 'div.widget-content' ).siblings( 'div.widget-control-actions' ).find( 'input[type="submit"]' );

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
            uploaded_image = `<img src="${attachment.url}" draggable="false" />`;
            image_container.html( uploaded_image );
            upload_input.val( attachment.id );

            // Hide "Add Image" button
            if (clicked.hasClass('select-media')) {
                clicked.hide();
                replace_image_container.show();
            }

            // enable submit button
            widget_submit_button.val('Save').removeAttr('disabled');
        } );

        // Open the uploader dialog
        custom_uploader.open();

    } );
} );