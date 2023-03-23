<?php
/**
 * Bindings class file.
 *
 * This file contains Bindings class which returns classes that will be registered with the plugin.
 *
 * @package    WordpressThemeStarter
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
 * @link       https://github.com/codestartechnologies/wordpress-theme-starter
 * @since      1.0.0
 */

namespace HTSA\WTS_Theme\App;

use WP_Widget_Calendar;
use HTSA\WTS_Theme\App\Admin\Customizers\HTSACommentsCustomizer;
use HTSA\WTS_Theme\App\Admin\Customizers\HTSAContactPageCustomizer;
use HTSA\WTS_Theme\App\Admin\Customizers\HTSAFrontPageCustomizer;
use HTSA\WTS_Theme\App\Admin\Customizers\HTSAPenaltiesPageCustomizer;
use HTSA\WTS_Theme\App\Admin\Customizers\HTSASiteIdentityCustomizer;
use HTSA\WTS_Theme\App\Admin\Customizers\WTSCustomizer;
use HTSA\WTS_Theme\App\Admin\Menus\HTSAMenuPage;
use HTSA\WTS_Theme\App\Admin\Menus\LicenseSettingsPage;
use HTSA\WTS_Theme\App\Admin\Menus\WTSMenuPage;
use HTSA\WTS_Theme\App\Admin\Menus\WTSOptionsPage;
use HTSA\WTS_Theme\App\Admin\Menus\WTSThemePage;
use HTSA\WTS_Theme\App\Admin\Notices\LicenseKeyNotice;
use HTSA\WTS_Theme\App\Admin\Notices\StickyPostsNotice;
use HTSA\WTS_Theme\App\Admin\Notices\WTSAdminNotice;
use HTSA\WTS_Theme\App\Admin\Settings\LicenseSetting;
use HTSA\WTS_Theme\App\Admin\Settings\WTSSettings;
use HTSA\WTS_Theme\App\Public\Sidebars\HTSAArchiveSidebar;
use HTSA\WTS_Theme\App\Public\Sidebars\HTSAFrontpageAsideSidebar;
use HTSA\WTS_Theme\App\Public\Sidebars\HTSAFrontpageResourcesSidebar;
use HTSA\WTS_Theme\App\Public\Sidebars\HTSAFrontpageSidebar;
use HTSA\WTS_Theme\App\Public\Sidebars\HTSASingleSidebar;
use HTSA\WTS_Theme\App\Public\Sidebars\WTSSidebar;
use HTSA\WTS_Theme\App\Public\Widgets\HTSACallToActionWidget;
use HTSA\WTS_Theme\App\Public\Widgets\HTSACardWidget;
use HTSA\WTS_Theme\App\Public\Widgets\HTSAImageBackgroundWithContentWidget;
use HTSA\WTS_Theme\App\Public\Widgets\HTSAPostsCarouselWidget;
use HTSA\WTS_Theme\App\Public\Widgets\HTSARecentPostsWidget;
use HTSA\WTS_Theme\App\Public\Widgets\HTSASearchWidget;
use HTSA\WTS_Theme\App\Public\Widgets\HTSATagCloudWidget;
use HTSA\WTS_Theme\App\Public\Widgets\WTSWidget;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Class Bindings
 *
 * This class returns classes that will be registered with the plugin.
 *
 * @package WordpressThemeStarter
 * @author  Chijindu Nzeako <chijindunzeako517@gmail.com>
 */
final class Bindings
{
    /**
     * Bindings for classes that register admin menus
     *
     * @static
     * @access public
     * @var array
     * @since 1.0.0
     */
    public static array $menus = array(
        // WTSMenuPage::class => 'admin-menus.wts_menu_page',
    );

    /**
     * Bindings for classes that register themes menus
     *
     * @static
     * @access public
     * @var array
     * @since 1.0.0
     */
    public static array $themes_menus = array(
        // WTSThemePage::class => 'admin-menus.wts_theme_page',
        HTSAMenuPage::class => 'admin-menus.theme_menu',
    );

    /**
     * Bindings for classes that register setting menus
     *
     * @static
     * @access public
     * @var array
     * @since 1.0.0
     */
    public static array $setting_menus = array(
        // WTSOptionsPage::class => 'admin-menus.wts_options_page',
        LicenseSettingsPage::class => 'admin-menus.license_settings',
    );

    /**
     * Bindings for classes that register sidebars
     *
     * @static
     * @access public
     * @var array
     * @since 1.0.0
     */
    public static array $sidebars = array(
        // WTSSidebar::class => 'sidebars.wts_sidebar',
        HTSAFrontpageResourcesSidebar::class => 'sidebars.front_page_cards_sidebar',
        HTSAFrontpageSidebar::class => 'sidebars.front_page_sidebar',
        HTSAFrontpageAsideSidebar::class => 'sidebars.front_page_aside_sidebar',
        HTSAArchiveSidebar::class => 'sidebars.archive_sidebar',
        HTSASingleSidebar::class => 'sidebars.single_sidebar',
    );

    /**
     * Bindings for wordpress widget classes that will be unregistered
     *
     * @static
     * @access public
     * @var array
     * @since 1.0.0
     */
    public static array $unregistered_widgets = array(
        // WP_Widget_Calendar::class,
    );

    /**
     * Bindings for classes that register widgets
     *
     * @static
     * @access public
     * @var array
     * @since 1.0.0
     */
    public static array $widgets = array(
        // WTSWidget::class,
        HTSACardWidget::class,
        HTSACallToActionWidget::class,
        HTSAImageBackgroundWithContentWidget::class,
        HTSASearchWidget::class,
        HTSATagCloudWidget::class,
        HTSARecentPostsWidget::class,
        HTSAPostsCarouselWidget::class,
    );

    /**
     * Bindings for classes that register customizers
     *
     * @static
     * @access public
     * @var array
     * @since 1.0.0
     */
    public static array $customizers = array(
        // WTSCustomizer::class => 'customizers.wts_customizer',
        HTSAFrontPageCustomizer::class => 'customizers.frontpage',
        HTSACommentsCustomizer::class => 'customizers.comments',
        HTSASiteIdentityCustomizer::class => 'customizers.site_identity',
        HTSAContactPageCustomizer::class => 'customizers.contactpage',
        HTSAPenaltiesPageCustomizer::class => 'customizers.penaltiesarchive',
    );

    /**
     * Bindings for classes that register settings
     *
     * @static
     * @access public
     * @var array
     * @since 1.0.0
     */
    public static array $settings = array(
        // WTSSettings::class => 'settings.wts_sidebar_settings',
        LicenseSetting::class => 'settings.htsa_license_settings',
    );

    /**
     * Bindings for classes that create admin notices
     *
     * @static
     * @access public
     * @var array
     * @since 1.0.0
     */
    public static array $admin_notices = array(
        // WTSAdminNotice::class,
        StickyPostsNotice::class,
        LicenseKeyNotice::class,
    );
}