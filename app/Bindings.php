<?php
/**
 * Bindings class file.
 *
 * This file contains Bindings class which returns classes that will be registered with the plugin.
 *
 * @package    WordpressPluginStarter
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @since      1.0.0
 */

namespace WTS_Theme\App;

use WP_Widget_Calendar;
use WTS_Theme\App\Admin\Customizers\HTSACommentsCustomizer;
use WTS_Theme\App\Admin\Customizers\HTSAFrontPageCustomizer;
use WTS_Theme\App\Admin\Customizers\HTSASiteIdentityCustomizer;
use WTS_Theme\App\Admin\Customizers\WTSCustomizer;
use WTS_Theme\App\Admin\Menus\HTSALicenseSettingsPage;
use WTS_Theme\App\Admin\Menus\WTSMenuPage;
use WTS_Theme\App\Admin\Menus\WTSOptionsPage;
use WTS_Theme\App\Admin\Menus\WTSThemePage;
use WTS_Theme\App\Admin\Notices\WTSAdminNotice;
use WTS_Theme\App\Admin\Settings\HTSALicenseSetting;
use WTS_Theme\App\Admin\Settings\WTSSettings;
use WTS_Theme\App\Public\Sidebars\HTSAArchiveSidebar;
use WTS_Theme\App\Public\Sidebars\HTSAFrontpageResourcesSidebar;
use WTS_Theme\App\Public\Sidebars\HTSAFrontpageSidebar;
use WTS_Theme\App\Public\Sidebars\HTSASingleSidebar;
use WTS_Theme\App\Public\Sidebars\WTSSidebar;
use WTS_Theme\App\Public\Widgets\HTSACallToActionWidget;
use WTS_Theme\App\Public\Widgets\HTSACardWidget;
use WTS_Theme\App\Public\Widgets\HTSAPostsCarouselWidget;
use WTS_Theme\App\Public\Widgets\HTSARecentPostsWidget;
use WTS_Theme\App\Public\Widgets\HTSASearchWidget;
use WTS_Theme\App\Public\Widgets\HTSATagCloudWidget;
use WTS_Theme\App\Public\Widgets\WTSWidget;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Bindings' ) ) {
    /**
     * Class Bindings
     *
     * This class returns classes that will be registered with the plugin.
     *
     * @package WordpressPluginStarter
     * @author Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class Bindings {
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
            HTSALicenseSettingsPage::class => 'admin-menus.license_settings',
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
            HTSALicenseSetting::class => 'settings.htsa_license_settings',
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
        );
    }
}


