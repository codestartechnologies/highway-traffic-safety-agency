<?php
/**
 * LicenseSettingsPage class file.
 *
 * This is file contains LicenseSettingsPage class for creating menu page for license setting in admin area.
 *
 * @package    HighwayTrafficSecurityAgency
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link       https://github.com/codestartechnologies/highway-traffic-security-agency
 * @since      1.0.0
 */

namespace WTS_Theme\App\Admin\Menus;

use Codestartechnologies\WordpressThemeStarter\Abstracts\OptionsPage as AbstractsOptionsPage;
use WTS_Theme\App\HTSA\CodestarAPI;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'LicenseSettingsPage' ) ) {
    /**
     * Class LicenseSettingsPage
     *
     * This class creates "HTSA License Settings" menu page in admin area.
     *
     * @package HighwayTrafficSecurityAgency
     * @author Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class LicenseSettingsPage extends AbstractsOptionsPage {

        /**
         * WTSOptionsPage constructor
         *
         * @access public
         * @param array $parameters   Initial parameters passed to add_options_page()
         * @return void
         * @since 1.0.0
         */
        public function __construct( array $parameters )
        {
            parent::__construct( $parameters );
        }

        /**
         * Get arguments that will be passed to the page.
         *
         * @access public
         * @return array
         * @since 1.0.0
         */
        public function view_args(): array
        {
            return array(
                'page' => $this->menu_slug,
            );
        }

        /**
         * Add functionalties that will run before the menu page is fully loaded.
         *
         * @access public
         * @return void
         * @since 1.0.0
         */
        public function load_page_hook(): void
        {
            $action = $_GET['action'] ?? null;
            $nonce = $_GET['_wpnonce'] ?? null;

            if (
                isset( $action ) &&
                isset( $nonce ) &&
                in_array( $action, array( 'license-status', 'activate-license', 'deactivate-license', ), true ) &&
                1 === wp_verify_nonce( $nonce, 'htsa-license-api' )
            ) {
                if ( 'license-status' === $action ) {
                    if ( CodestarAPI::is_api_error( $response = CodestarAPI::get_license_info() ) ) {
                        update_option( 'htsa_license_valid', false );
                    } else {
                        update_option( 'htsa_license_valid', true );
                    }
                }

                if ( 'activate-license' === $action ) {
                    if ( CodestarAPI::is_api_error( $response = CodestarAPI::activate_license() ) ) {
                        update_option( 'htsa_license_activated', false );
                    } else {
                        update_option( 'htsa_license_activated', true );
                    }
                }

                if ( 'deactivate-license' === $action ) {
                    if ( CodestarAPI::is_api_error( $response = CodestarAPI::deactivate_license() ) ) {
                        update_option( 'htsa_license_deactivated', false );
                    } else {
                        update_option( 'htsa_license_deactivated', true );
                    }
                }

                $response = ( isset( $response->success ) ) ? $response->message : 'error';
                htsa_store_session_data( 'htsa_license_api', $response, strtotime( '+1 minute' ) );
                wp_safe_redirect( admin_url( 'options-general.php?page=htsa-license-settings' ) );
            }
        }
    }
}