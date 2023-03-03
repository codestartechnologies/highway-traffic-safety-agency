<?php
/**
 * HTSAFrontpageResourcesSidebar class file.
 *
 * This file contains HTSAFrontpageResourcesSidebar class for registering "Front Page Resources" sidebar area.
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

/**
 * Class HTSAFrontpageResourcesSidebar
 *
 * @package HighwayTrafficSecurityAgency
 * @author  Chijindu Nzeako <chijindunzeako517@gmail.com>
 */
final class HTSAFrontpageResourcesSidebar extends AbstractsSidebar
{
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