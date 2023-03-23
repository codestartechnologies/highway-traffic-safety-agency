<?php
/**
 * HTSAPenaltiesPageCustomizer class file
 *
 * This is file contains HTSAPenaltiesPageCustomizer class for creating customizer sections, settings and controls on penalties archive page.
 *
 * @package    HighwayTrafficSecurityAgency
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
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

/**
 * HTSAPenaltiesPageCustomizer Class
 *
 * Registers customizer sections, settings and controls. This class needs to define methods that will be passed as callbacks to
 * WP_Customize_Manager::add_section(), WP_Customize_Manager::add_setting(), and WP_Customize_Manager::add_control().
 *
 * @package HighwayTrafficSecurityAgency
 * @author  Chijindu Nzeako <chijindunzeako517@gmail.com>
 */
final class HTSAPenaltiesPageCustomizer extends AbstractsCustomizer
{
    /**
     * HTSAPenaltiesPageCustomizer constructor
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
        return is_post_type_archive( HTSA_PENALTIES_POST_TYPE );
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
        if ( ! is_string( $value ) || strlen( $value ) > 10 ) {
            $validity->add( 'htsa_customize', esc_html__( 'Value must be a string and not greater than 10 characters', 'htsa' ) );
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
        return is_post_type_archive( HTSA_PENALTIES_POST_TYPE );
    }
}