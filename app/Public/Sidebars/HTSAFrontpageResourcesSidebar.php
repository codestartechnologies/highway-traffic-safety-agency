<?php
/**
 * HTSAFrontpageResourcesSidebar class file.
 *
 * This file contains HTSAFrontpageResourcesSidebar class for registering "Front Page Resources" sidebar area.
 *
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link       https://github.com/codestartechnologies/highway-traffic-security-agency
 * @since      1.0.0
 */

namespace WTS_Theme\App\Public\Sidebars;

use Codestartechnologies\WordpressThemeStarter\Abstracts\Sidebar as AbstractsSidebar;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'HTSAFrontpageResourcesSidebar' ) ) {
    /**
     * Class HTSAFrontpageResourcesSidebar
     *
     * @author Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class HTSAFrontpageResourcesSidebar extends AbstractsSidebar {
        /**
         * HTSAFrontpageResourcesSidebar constructor
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