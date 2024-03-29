<?php
/**
 * The template file to display custom sidebar in Wordpress theme
 *
 * @link https://github.com/codestartechnologies/wordpress-theme-starter
 */

if ( is_active_sidebar( HTSA_FRONT_PAGE_ASIDE_SIDEBAR_ID ) ) :

?>

<!-- Frontpage Sidebar -->
<aside class="col-lg-4 col-xl-3">
    <?php dynamic_sidebar( HTSA_FRONT_PAGE_ASIDE_SIDEBAR_ID ); ?>
</aside>
<!-- End Frontpage Sidebar -->

<?php endif; ?>
