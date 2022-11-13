<?php
/**
 * The template file to display single post archive in Wordpress theme
 *
 */

get_header();

if ( is_singular( HTSA_PROFILE_POST_TYPE ) ) {
    get_template_part( 'template-parts/content/page-single', 'profile' );
} else {
    get_template_part( 'template-parts/content/page-single' );
}

get_footer();
