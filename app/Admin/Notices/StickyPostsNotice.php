<?php
/**
 * StickyPostsNotice class file.
 *
 * This is an example class file for printing admin notifications to the screen.
 *
 * @package     HighwayTrafficSecurityAgency
 * @author      Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link        https://github.com/codestartechnologies/highway-traffic-security-agency
 * @since       1.0.0
 */

namespace WTS_Theme\App\Admin\Notices;

use Codestartechnologies\WordpressThemeStarter\Abstracts\AdminNotice as AbstractsAdminNotice;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'StickyPostsNotice' ) ) {
    /**
     * Class StickyPostsNotice
     *
     * This class contains methods for printing admin notifications to the screen. This class implements one method: notification().
     *
     * @package HighwayTrafficSecurityAgency
     * @author  Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class StickyPostsNotice extends AbstractsAdminNotice {
        /**
         * Check before the admin notice is printed
         *
         * @access protected
         * @return boolean
         * @since 1.0.0
         */
        protected function can_show_notice(): bool
        {
            $screen = get_current_screen();
            return ( $screen->post_type === 'post' && $screen->base === 'edit' );
        }

        /**
         * "admin_notices" action hook callback
         *
         * @access public
         * @return void
         * @since 1.0.0
         */
        public function notification() : void
        {
            $message = __( '<b>Sticky Posts</b> have higer priority in latest posts section of front page', 'wts' );
            printf( '<div class="notice notice-info is-dismissible"><p>%s</p></div>', $message );
        }
    }
}