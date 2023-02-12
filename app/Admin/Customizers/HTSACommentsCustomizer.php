<?php
/**
 * HTSACommentsCustomizer class file
 *
 * This is an example class file for creating customizer sections, settings and controls.
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

if ( ! class_exists( 'HTSACommentsCustomizer' ) ) {
    /**
     * HTSACommentsCustomizer Class
     *
     * Registers customizer sections, settings and controls. This class needs to define methods that will be passed as callbacks to
     * WP_Customize_Manager::add_section(), WP_Customize_Manager::add_setting(), and WP_Customize_Manager::add_control().
     *
     * @package HighwayTrafficSecurityAgency
     * @author Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class HTSACommentsCustomizer extends AbstractsCustomizer {
        /**
         * HTSACommentsCustomizer constructor
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
        public function _section_active_callback() : bool
        {
            return true;
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
        public function _setting_validate_callback( \WP_Error $validity, string $value ) : \WP_Error
        {
            if ( ! in_array( $value, array( 'feed', 'comments' ), true ) ) {
                $validity->add( 'htsa_customize', esc_html__( 'Value for "Comments Template" must either be "feed" or "comments"!', 'htsa' ) );
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
        public function _control_active_callback() : bool
        {
            return comments_open();
        }
    }
}