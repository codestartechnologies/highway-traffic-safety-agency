<?php
/**
 * HTSAFrontPageCustomizer class file
 *
 * This is file contains HTSAFrontPageCustomizer class for creating front-page customizer sections, settings and controls.
 *
 * @package    HighwayTrafficSecurityAgency
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link       https://github.com/codestartechnologies/highway-traffic-security-agency
 * @since      1.0.0
 */

namespace HTSA\WTS_Theme\App\Admin\Customizers;

use HTSA\Codestartechnologies\WordpressThemeStarter\Abstracts\Customizer as AbstractsCustomizer;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'HTSAFrontPageCustomizer' ) ) {
    /**
     * HTSAFrontPageCustomizer Class
     *
     * Registers customizer sections, settings and controls. This class needs to define methods that will be passed as callbacks to
     * WP_Customize_Manager::add_section(), WP_Customize_Manager::add_setting(), and WP_Customize_Manager::add_control().
     *
     * @package HighwayTrafficSecurityAgency
     * @author  Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class HTSAFrontPageCustomizer extends AbstractsCustomizer {
        /**
         * HTSAFrontPageCustomizer constructor
         *
         * @access public
         * @param array $parameters     Initial arguements for WP_Customize_Manager::add_section(), WP_Customize_Manager::add_setting(), and WP_Customize_Manager::add_control()
         * @return void
         * @since 1.0.0
         */
        public function __construct( array $parameters )
        {
            parent::__construct( $parameters );
        }

        /**
         * Handle active_callback arguement for WP_Customize_Manager::add_section()
         *
         * @access public
         * @return bool
         * @since 1.0.0
         */
        public function htsa_frontpage_section_cb() : bool
        {
            return is_front_page();
        }

        /**
         * Handle validate_callback arguement for WP_Customize_Manager::add_setting()
         *
         * Adds and returns validation errors for a customizer setting.
         *
         * @access public
         * @param \WP_Error $validity
         * @param string $value
         * @return \WP_Error
         * @since 1.0.0
         */
        public function yes_or_no_validate_callback( \WP_Error $validity, string $value ) : \WP_Error
        {
            if ( ! in_array( $value, array( 'yes', 'no' ), true ) ) {
                $validity->add( 'htsa_customize', esc_html__( 'Value must either be "Yes" or "No"!', 'htsa' ) );
            }

            return $validity;
        }

        /**
         * Handle validate_callback arguement for WP_Customize_Manager::add_setting()
         *
         * Adds and returns validation errors for a customizer setting.
         *
         * @access public
         * @param \WP_Error $validity
         * @param string $value
         * @return \WP_Error
         * @since 1.0.0
         */
        public function htsa_mayor_address_validate_callback( \WP_Error $validity, string $value ) : \WP_Error
        {
            if ( strlen( $value ) > 980 ) {
                $validity->add( 'htsa_customize', esc_html__( 'Value must not be more than 980 characters', 'htsa' ) );
            }

            return $validity;
        }

        /**
         * Handle active_callback arguement for WP_Customize_Manager::add_control()
         *
         * @access public
         * @return bool
         * @since 1.0.0
         */
        public function htsa_resources_logo_visible_control_active_cb() : bool
        {
            $index = wts_config( 'sidebars.front_page_cards_sidebar' )['id'] ?? null;
            return ( is_active_sidebar( $index ) && is_front_page() );
        }
    }
}