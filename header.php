<?php
/**
 * The header template file in WordPress theme
 *
 */

?>

<!DOCTYPE html>

<html <?php language_attributes() ?> class="no-js">
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <?php if ( has_excerpt() ) : ?>

        <meta name="description" content="<?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?>" />

        <?php else : ?>

        <meta name="description" content="<?php echo wp_get_document_title(); ?>" />

        <?php endif; ?>

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <?php wp_head(); ?>

    </head>

    <body <?php body_class() ?>>

    <?php wp_body_open(); ?>

    <!-- Mobile Sidebar Menu -->
    <aside class="ui left wide fixed sidebar" data-htsa-id="mobileSidebar">

        <div class="px-4 py-3">
            <div class="ui dividing header text-center">
                <?php if ( has_custom_logo() ) : ?>
                <img src="<?php echo wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ); ?>" alt="" class="ui image" />
                <?php endif; ?>
                <div class="py-2"> <span class="fw-light"> <?php bloginfo( 'description' ); ?> </span> </div>
            </div>
        </div>

        <?php if ( has_nav_menu( 'wts_mobile_menu' ) ) : ?>
        <div class="ui attached vertical borderless fluid menu border-0 mb-3" data-htsa-id="mobileMenu">
            <?php
                wp_nav_menu( array(
                    'theme_location'  => 'wts_mobile_menu',
                ) );
            ?>
        </div>
        <?php endif; ?>

        <form method="get" action="<?php echo get_search_link( 's' ); ?>" class="vstack mb-5 px-4">
            <div class="ui search icon input">
                <input type="text" name="s" placeholder="<?php esc_attr_e( 'Search...', 'htsa' ); ?>" class="shadow-none"
                    value="<?php echo esc_attr( get_search_query() ); ?>" />
                <i class="search icon"></i>
            </div>
        </form>

    </aside>
    <!-- End Mobile Sidebar Menu -->

    <!-- Page Content -->
    <div class="pusher">

        <?php get_template_part( 'template-parts/content/header' ); ?>
