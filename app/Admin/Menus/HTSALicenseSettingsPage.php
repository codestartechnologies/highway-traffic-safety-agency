<?php
/**
 * HTSALicenseSettingsPage class file.
 *
 * This is file contains HTSALicenseSettingsPage class for creating "HTSA License Settings" menu page in admin area.
 *
 * @package    HighwayTrafficSecurityAgency
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @since      1.0.0
 */

namespace WTS_Theme\App\Admin\Menus;

use Codestartechnologies\WordpressThemeStarter\Abstracts\OptionsPage as AbstractsOptionsPage;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'HTSALicenseSettingsPage' ) ) {
    /**
     * Class HTSALicenseSettingsPage
     *
     * This class creates "HTSA License Settings" menu page in admin area.
     *
     * @package HighwayTrafficSecurityAgency
     * @author Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class HTSALicenseSettingsPage extends AbstractsOptionsPage {

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
            //
        }
    }
}