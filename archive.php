<?php
/**
 * The archive template file in WordPress theme
 *
 */

get_header();

if ( is_post_type_archive( HTSA_PROFILE_POST_TYPE ) ) {
    get_template_part( 'template-parts/content/page-archive', 'profile' );
} elseif ( is_post_type_archive( HTSA_OFFICERS_POST_TYPE ) ) {
    get_template_part( 'template-parts/content/page-archive', 'officer' );
} elseif ( is_post_type_archive( HTSA_BRANCHES_POST_TYPE ) ) {
    get_template_part( 'template-parts/content/page-archive', 'branch' );
} elseif ( is_post_type_archive( HTSA_PENALTIES_POST_TYPE ) ) {
    get_template_part( 'template-parts/content/page-archive', 'penalty' );
} else {
    get_template_part( 'template-parts/content/page-archive' );
}

get_footer();
