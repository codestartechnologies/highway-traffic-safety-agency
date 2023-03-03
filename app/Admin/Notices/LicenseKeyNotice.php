<?php
/**
 * LicenseKeyNotice class file.
 *
 * This is file contains LicenseKeyNotice class for printing admin notifications for theme license status.
 *
 * @package     HighwayTrafficSecurityAgency
 * @author      Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link        https://github.com/codestartechnologies/highway-traffic-security-agency
 * @since       1.0.0
 */

namespace HTSA\WTS_Theme\App\Admin\Notices;

use HTSA\Codestartechnologies\WordpressThemeStarter\Abstracts\AdminNotice as AbstractsAdminNotice;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Class LicenseKeyNotice
 *
 * This class contains methods for printing admin notifications for theme license status.
 *
 * @package HighwayTrafficSecurityAgency
 * @author  Chijindu Nzeako <chijindunzeako517@gmail.com>
 */
final class LicenseKeyNotice extends AbstractsAdminNotice
{
    /**
     * Check before the admin notice is printed
     *
     * @access protected
     * @return boolean
     * @since 1.0.0
     */
    protected function can_show_notice(): bool
    {
        return ( '0' === get_option( 'htsa_license_valid' ) );
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
        $message = sprintf( __( 'Your license key is invalid/expired. <a href="%s">Update license key</a> to enable updates for this theme.', 'htsa' ), admin_url( 'options-general.php?page=htsa-license-settings' ) );
        printf( '<div class="notice notice-error"><p><b>%1$s:</b> %2$s</p></div>', HTSA_THEME_NAME, $message );
    }
}