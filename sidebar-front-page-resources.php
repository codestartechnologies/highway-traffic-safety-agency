<?php
/**
 * The template file to display custom sidebar in Wordpress theme
 *
 * @link https://github.com/codestartechnologies/wordpress-theme-starter
 */

if ( is_active_sidebar( HTSA_FRONT_PAGE_RESOURCES_SIDEBAR_ID ) ) :

?>

<!-- Resources Sidebar Area -->
<section>
    <div class="container">
        <?php
            get_template_part( 'template-parts/parts/title', null, array(
                'title' => get_theme_mod( 'htsa_resources_section_title'  ) ?: esc_html__( 'Resources', 'htsa' ),
            ) );
        ?>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 justify-content-center" data-htsa-id="frontpageResources">
            <?php dynamic_sidebar( HTSA_FRONT_PAGE_RESOURCES_SIDEBAR_ID ); ?>
        </div>
    </div>
</section>
<div class="ui hidden divider"></div>
<!-- End Resources Sidebar Area -->

<?php endif; ?>
