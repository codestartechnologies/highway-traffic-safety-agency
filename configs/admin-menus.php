<?php
/**
 * This file contains configuration settings for registering admin menu pages
 *
 * @author      Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license     https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
 * @link        https://github.com/codestartechnologies/wordpress-theme-starter
 */

return array(
    /**
     * Initial values to create "WTS Menu" menu page in the admin area.
     */
    'wts_menu_page'     => array(

        'page_title'    => esc_html__( 'WordPress Theme Starter - Menu Page', 'wts' ),

        'menu_title'    => esc_html__( 'WordPress Theme Starter', 'wts' ),

        'capability'    => 'manage_options',

        'menu_slug'     => 'wts-menu-page',

        'view'          => 'menus.menu-page',

        'position'      => null,
    ),

    /**
     * Initial values to create "WTS Options Page" menu page in the admin dashboard.
     */
    'wts_options_page'  => array(

        'page_title'    => esc_html__( 'WordPress Theme Starter - Options Page', 'wts' ),

        'menu_title'    => esc_html__( 'WordPress Theme Starter', 'wts' ),

        'capability'    => 'manage_options',

        'menu_slug'     => 'wts-options-page',

        'view'          => 'menus.options-page',

        'position'      => null,
    ),

    /**
     * Initial values to create "WTS Theme Page" menu page in the admin dashboard.
     */
    'wts_theme_page'  => array(

        'page_title'    => esc_html__( 'WordPress Theme Starter - Theme Page', 'wts' ),

        'menu_title'    => esc_html__( 'WordPress Theme Starter', 'wts' ),

        'capability'    => 'manage_options',

        'menu_slug'     => 'wts-theme-page',

        'view'          => 'menus.theme-page',

        'position'      => null,
    ),

    /**
     * Initial values to create "HTSA Theme License" menu page in the admin dashboard.
     */
    'license_settings'  => array(

        'page_title'    => sprintf( esc_html__( 'License Settings -  %s', 'htsa' ), HTSA_THEME_NAME ),

        'menu_title'    => esc_html__( 'HTSA Theme License', 'htsa' ),

        'capability'    => 'manage_options',

        'menu_slug'     => 'htsa-license-settings',

        'view'          => 'menus.license-setting-menu',

        'position'      => null,
    ),

    /**
     * Initial values to create "WTS Theme Page" menu page in the admin dashboard.
     */
    'theme_menu'  => array(

        'page_title'    => sprintf( esc_html__( '%s - WordPress Theme', 'htsa' ), HTSA_THEME_NAME ),

        'menu_title'    => sprintf( '%s', HTSA_THEME_NAME ),

        'capability'    => 'manage_options',

        'menu_slug'     => 'htsa-theme-page',

        'view'          => 'menus.theme-menu',

        'position'      => null,
    ),

);
