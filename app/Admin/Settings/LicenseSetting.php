<?php
/**
 * LicenseSetting class file
 *
 * This is file contains LicenseSetting class for creating theme license setting section.
 *
 * @package    HighwayTrafficSecurityAgency
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link       https://github.com/codestartechnologies/highway-traffic-security-agency
 * @since      1.0.0
 */

namespace HTSA\WTS_Theme\App\Admin\Settings;

use HTSA\Codestartechnologies\WordpressThemeStarter\Abstracts\Settings as AbstractsSettings;
use HTSA\Codestartechnologies\WordpressThemeStarter\Traits\PageViewLoader;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'LicenseSetting' ) ) {
    /**
     * LicenseSetting Class
     *
     * Creates theme license setting section.
     *
     * @package HighwayTrafficSecurityAgency
     * @author  Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class LicenseSetting extends AbstractsSettings {
        use PageViewLoader;

        /**
         * LicenseSetting Constructor
         *
         * @access public
         * @param array $parameters     An array of parameters for register_setting(), add_settings_section(), and add_settings_field().
         * @since 1.0.0
         */
        public function __construct( array $parameters )
        {
            parent::__construct( $parameters );
        }

        /**
         * Callback method for add_settings_section()
         *
         * @access public
         * @return void
         * @since 1.0.0
         */
        public function section_cb(): void
        {
            //
        }

        /**
         * Callback method for add_settings_field()
         *
         * @access public
         * @param array $args   An array of arguements passed to add_settings_field()
         * @return void
         */
        public function license_key_field_cb( array $args ) : void
        {
            $this->load_view( 'setting-fields.text-input', $args, 'admin', false );
        }

        /**
         * Callback method for add_settings_field()
         *
         * @access public
         * @param array $args   An array of arguements passed to add_settings_field()
         * @return void
         */
        public function access_key_field_cb( array $args ) : void
        {
            $this->load_view( 'setting-fields.text-input', $args, 'admin', false );
        }

        /**
         * Callback method for updating a setting
         *
         * Fires after the value of a specific option has been successfully updated.
         *
         * @access public
         * @param mixed  $old_value The old option value.
         * @param mixed  $value     The new option value.
         * @param string $option    Option name.
         * @return void
         * @since 1.0.0
         */
        public function update_license_setting_cb( $old_value, $value, string $option ) : void
        {
            //
        }
    }
}