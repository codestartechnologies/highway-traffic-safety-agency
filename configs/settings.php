<?php
/**
 * This file contains configuration settings for registering settings, adding settings sections and fields
 *
 * @author      Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license     https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
 * @link        https://github.com/codestartechnologies/wordpress-theme-starter
 */

return array(

    /**
     * Initial values to create 'WordPress Theme Starter Sidebar' settings.
     */
    'wts_sidebar_settings'  => array(

        'section'   => array(

            'id'        => 'wts_sidebar',

            'title'     => esc_html__( 'WordPress Theme Starter Sidebar', 'wts' ),

            'page'      => 'wts-options-page',
        ),

        'settings'  => array(

            'sidebar_page' => array(

                'option_name'   => 'wts_sidebar_page',

                'args'          => array(

                    'description'   => esc_html__( 'WordPress Theme Starter Sidebar Settings', 'wts' ),
                ),

                'update_cb'     => 'update_sidebar_page_setting_cb',
            ),
        ),

        'fields'    => array(
            array(

                'id'            => 'show_sidebar',

                'title'         => esc_html__( 'Show WordPress Theme Starter Sidebar?', 'wts' ),

                'callback'      => 'show_sidebar_field_cb',

                'setting_key'   => 'sidebar_page',
            ),
            array(

                'id'            => 'default_page',

                'title'         => esc_html__( 'Default Display Page', 'wts' ),

                'callback'      => 'display_page_field_cb',

                'setting_key'   => 'sidebar_page',
            ),
        ),
    ),

    /**
     * Initial values to create 'Theme License' setting page.
     */
    'htsa_license_settings'  => array(

        'section'   => array(

            'id'        => 'htsa_license',

            'title'     => esc_html__( 'Enter the license key associated with this theme in the Theme License Key field, and the access key you generated from your account inside the User Access Key field.', 'htsa' ),

            'page'      => 'htsa-license-settings',
        ),

        'settings'  => array(

            'license_settings' => array(

                'option_name'   => 'htsa_license_setting',

                'args'          => array(

                    'description'   => sprintf( esc_html__( '%s License Settings', 'htsa' ), HTSA_THEME_NAME ),
                ),

                'update_cb'     => 'update_license_setting_cb',
            ),
        ),

        'fields'    => array(
            array(

                'id'            => 'license_key',

                'title'         => esc_html__( 'Theme License Key', 'htsa' ),

                'callback'      => 'license_key_field_cb',

                'setting_key'   => 'license_settings',
            ),
            array(

                'id'            => 'access_key',

                'title'         => esc_html__( 'User Access Key', 'htsa' ),

                'callback'      => 'access_key_field_cb',

                'setting_key'   => 'license_settings',
            ),
        ),
    ),

);
