<?php
/**
 * HTSAFrontpageSidebar class file.
 *
 * This file contains HTSAFrontpageSidebar class for registering "Front Page" sidebar area.
 *
 * @package    HighwayTrafficSecurityAgency
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link       https://github.com/codestartechnologies/highway-traffic-security-agency
 * @since      1.0.0
 */

namespace HTSA\WTS_Theme\App\Public\Sidebars;

use HTSA\Codestartechnologies\WordpressThemeStarter\Abstracts\Sidebar as AbstractsSidebar;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'HTSAFrontpageSidebar' ) ) {
    /**
     * Class HTSAFrontpageSidebar
     *
     * @package HighwayTrafficSecurityAgency
     * @author  Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class HTSAFrontpageSidebar extends AbstractsSidebar {
        /**
         * HTSAFrontpageSidebar constructor
         *
         * @access public
         * @param array $parameters     Initial parameters passed to register_sidebar()
         * @return void
         * @since 1.0.0
         */
        public function __construct( array $parameters )
        {
            parent::__construct( $parameters );
        }
    }
}