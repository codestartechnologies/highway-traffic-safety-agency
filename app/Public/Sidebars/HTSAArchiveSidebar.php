<?php
/**
 * HTSAArchiveSidebar class file.
 *
 * This file contains HTSAArchiveSidebar class for registering "Archive Pages" sidebar area.
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
 * Class HTSAArchiveSidebar
 *
 * @package HighwayTrafficSecurityAgency
 * @author  Chijindu Nzeako <chijindunzeako517@gmail.com>
 */
final class HTSAArchiveSidebar extends AbstractsSidebar
{
    /**
     * HTSAArchiveSidebar constructor
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