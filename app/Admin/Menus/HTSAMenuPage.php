<?php
/**
 * HTSAMenuPage class file.
 *
 * This is an example class file for creating admin menu pages with add_theme_page().
 *
 * @package    HighwayTrafficSecurityAgency
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link       https://github.com/codestartechnologies/highway-traffic-security-agency
 * @since      1.0.0
 */

namespace HTSA\WTS_Theme\App\Admin\Menus;

use HTSA\Codestartechnologies\WordpressThemeStarter\Abstracts\ThemePage as AbstractsThemePage;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Class HTSAMenuPage
 *
 * This class registers admin menus using add_theme_page(). This class must implement view_args() and load_page_hook() methods.
 *
 * @package HighwayTrafficSecurityAgency
 * @author  Chijindu Nzeako <chijindunzeako517@gmail.com>
 */
final class HTSAMenuPage extends AbstractsThemePage
{
    /**
     * HTSAMenuPage constructor
     *
     * @access public
     * @param array $parameters   Initial parameters passed to add_theme_page()
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
        return array();
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
        //
    }
}