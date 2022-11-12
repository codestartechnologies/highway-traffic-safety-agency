<?php
/**
 * HTSASingleSidebar class file.
 *
 * This file contains HTSASingleSidebar class for registering "Single Pages" sidebar area.
 *
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link       https://codestar.com.ng
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

if ( ! class_exists( 'HTSASingleSidebar' ) ) {
    /**
     * Class HTSASingleSidebar
     *
     * @author Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class HTSASingleSidebar extends AbstractsSidebar {
        /**
         * HTSASingleSidebar constructor
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