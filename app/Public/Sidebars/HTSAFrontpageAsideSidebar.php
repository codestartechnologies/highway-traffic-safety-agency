<?php
/**
 * HTSAFrontpageAsideSidebar class file.
 *
 * This file contains HTSAFrontpageAsideSidebar class for registering "Front Page Aside" sidebar area.
 *
 * @package    HighwayTrafficSecurityAgency
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
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

/**
 * Class HTSAFrontpageAsideSidebar
 *
 * @package HighwayTrafficSecurityAgency
 * @author  Chijindu Nzeako <chijindunzeako517@gmail.com>
 */
final class HTSAFrontpageAsideSidebar extends AbstractsSidebar
{
    /**
     * HTSAFrontpageAsideSidebar constructor
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