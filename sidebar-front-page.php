<?php
/**
 * The template file to display custom sidebar in Wordpress theme
 *
 * @link https://github.com/codestartechnologies/wordpress-theme-starter
 */

if ( is_active_sidebar( HTSA_FRONT_PAGE_SIDEBAR_ID ) ) :

?>

<!-- Frontpage Sidebar -->
<?php dynamic_sidebar( HTSA_FRONT_PAGE_SIDEBAR_ID ); ?>
<!-- End Frontpage Sidebar -->

<?php endif; ?>
