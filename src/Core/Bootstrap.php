<?php
/**
 * Bootstrap class file.
 *
 * This file contains Bootstrap class which bootstraps all the functionalties needed by your theme.
 *
 * @package    WordpressThemeStarter
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
 * @link       https://github.com/codestartechnologies/wordpress-theme-starter
 * @since      1.0.0
 */

namespace HTSA\Codestartechnologies\WordpressThemeStarter\Core;

use HTSA\Codestartechnologies\WordpressThemeStarter\Abstracts\AdminNotice;
use HTSA\Codestartechnologies\WordpressThemeStarter\Abstracts\Customizer;
use HTSA\Codestartechnologies\WordpressThemeStarter\Abstracts\MenuPage;
use HTSA\Codestartechnologies\WordpressThemeStarter\Abstracts\OptionsPage;
use HTSA\Codestartechnologies\WordpressThemeStarter\Abstracts\Settings;
use HTSA\Codestartechnologies\WordpressThemeStarter\Abstracts\Sidebar;
use HTSA\Codestartechnologies\WordpressThemeStarter\Abstracts\ThemePage;
use HTSA\Codestartechnologies\WordpressThemeStarter\Interfaces\ActionHooks;
use HTSA\Codestartechnologies\WordpressThemeStarter\Traits\Validator;
use HTSA\WTS_Theme\App\Hooks;
use HTSA\WTS_Theme\App\HTSA\ThemeUpdate;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Class Bootstrap
 *
 * This class handles and manages all functionalities needed by this theme.
 *
 * @package WordpressThemeStarter
 * @author Chijindu Nzeako <chijindunzeako517@gmail.com>
 */
final class Bootstrap implements ActionHooks
{

    use Validator;

    /**
     * Theme hooks.
     *
     * @access protected
     * @var Hooks
     * @since 1.0.0
     */
    protected Hooks $hooks;

    /**
     * Theme update
     *
     * @access protected
     * @var ThemeUpdate
     * @since 1.0.0
     */
    protected ThemeUpdate $theme_update;

    /**
     * Admin menu pages
     *
     * @access protected
     * @var MenuPage[]
     * @since 1.0.0
     */
    protected array $menu_pages;

    /**
     * Admin Theme pages
     *
     * @access protected
     * @var ThemePage[]
     * @since 1.0.0
     */
    protected array $theme_pages;

    /**
     * Admin Options pages
     *
     * @access protected
     * @var OptionsPage[]
     * @since 1.0.0
     */
    protected array $options_pages;

    /**
     * Theme sidebars
     *
     * @access protected
     * @var Sidebar[]
     * @since 1.0.0
     */
    protected array $sidebars;

    /**
     * WordPress widgets that will be unregistered
     *
     * @access protected
     * @var \WP_Widget[]
     * @since 1.0.0
     */
    protected array $removed_widgets;

    /**
     * Theme widgets
     *
     * @access protected
     * @var \WP_Widget[]
     * @since 1.0.0
     */
    protected array $widgets;

    /**
     * Theme customizers
     *
     * @access protected
     * @var Customizer[]
     * @since 1.0.0
     */
    protected array $customizers;

    /**
     * Theme settings
     *
     * @access protected
     * @var Settings[]
     * @since 1.0.0
     */
    protected array $settings;

    /**
     * Admin notices
     *
     * @access protected
     * @var AdminNotice[]
     * @since 1.0.0
     */
    protected array $admin_notices;

    /**
     * Theme construct
     *
     * @access public
     * @param Hooks $hooks
     * @param ThemeUpdate $theme_update
     * @param array $menu_pages
     * @param array $theme_pages
     * @param array $options_pages
     * @param array $sidebars
     * @param array $removed_widgets
     * @param array $widgets
     * @param array $customizers
     * @param array $settings
     * @param array $admin_notices
     * @return void
     * @since 1.0.0
     */
    public function __construct(
        Hooks $hooks,
        ThemeUpdate $theme_update,
        array $menu_pages = array(),
        array $theme_pages = array(),
        array $options_pages = array(),
        array $sidebars = array(),
        array $removed_widgets = array(),
        array $widgets = array(),
        array $customizers = array(),
        array $settings = array(),
        array $admin_notices = array()
    )
    {
        $this->hooks = $hooks;
        $this->theme_update = $theme_update;
        $this->menu_pages = $this->check_objects_parent_type( $menu_pages, MenuPage::class )['valid'];
        $this->theme_pages = $this->check_objects_parent_type( $theme_pages, ThemePage::class )['valid'];
        $this->options_pages = $this->check_objects_parent_type( $options_pages, OptionsPage::class )['valid'];
        $this->sidebars = $this->check_objects_parent_type( $sidebars, Sidebar::class )['valid'];
        $this->removed_widgets = $this->check_objects_parent_type( $removed_widgets, \WP_Widget::class )['valid'];
        $this->widgets = $this->check_objects_parent_type( $widgets, \WP_Widget::class )['valid'];
        $this->customizers = $this->check_objects_parent_type( $customizers, Customizer::class )['valid'];
        $this->settings = $this->check_objects_parent_type( $settings, Settings::class )['valid'];
        $this->admin_notices = $this->check_objects_parent_type( $admin_notices, AdminNotice::class )['valid'];
    }

    /**
     * Theme core setup
     *
     * @access public
     * @return void
     * @since 1.0.0
     */
    public function setup() : void
    {
        // Register WordPress Theme Starter Hooks
        $this->hooks->register_actions();
        $this->hooks->register_filters();

        // Set up theme features
        $this->register_actions();

        // Register filter hook for updating theme
        $this->theme_update->register_filters();
    }

    /**
     * Register add_action() and remove_action().
     *
     * @access public
     * @return void
     * @since 1.0.0
     */
    public function register_actions(): void
    {
        if ( is_admin() ) {
            $this->set_menu_pages();
            $this->set_theme_pages();
            $this->set_options_pages();
            $this->set_settings_pages();
            $this->set_admin_notices();
        }

        $this->set_sidebars();
        $this->set_customizers();

        add_action( 'widgets_init', array( $this, 'unset_widgets' ) );
        add_action( 'widgets_init', array( $this, 'set_widgets' ) );
    }

    /**
     * Add menu pages in the admin area
     *
     * @access private
     * @return void
     * @since 1.0.0
     */
    private function set_menu_pages() : void
    {
        if ( ! empty( $this->menu_pages ) ) {
            foreach ( $this->menu_pages as $menu_page ) {
                $menu_page->register_actions();
            }
        }
    }

    /**
     * Add theme pages in the admin area
     *
     * @access private
     * @return void
     * @since 1.0.0
     */
    private function set_theme_pages() : void
    {
        if ( ! empty( $this->theme_pages ) ) {
            foreach ( $this->theme_pages as $menu_page ) {
                $menu_page->register_actions();
            }
        }
    }

    /**
     * Add options pages in the admin area
     *
     * @access private
     * @return void
     * @since 1.0.0
     */
    private function set_options_pages() : void
    {
        if ( ! empty( $this->options_pages ) ) {
            foreach ( $this->options_pages as $menu_page ) {
                $menu_page->register_actions();
            }
        }
    }

    /**
     * Adds sidebars
     *
     * @access private
     * @return void
     * @since 1.0.0
     */
    private function set_sidebars() : void
    {
        if ( ! empty( $this->sidebars ) ) {
            foreach ( $this->sidebars as $sidebar ) {
                $sidebar->register_actions();
            }
        }
    }

    /**
     * Removes default widgets
     *
     * @access public
     * @return void
     * @since 1.0.0
     */
    public function unset_widgets() : void
    {
        if ( ! empty( $this->removed_widgets ) ) {
            foreach ( $this->removed_widgets as $removed_widget ) {
                unregister_widget( $removed_widget );
            }
        }
    }

    /**
     * Adds widgets
     *
     * @access public
     * @return void
     * @since 1.0.0
     */
    public function set_widgets() : void
    {
        if ( ! empty( $this->widgets ) ) {
            foreach ( $this->widgets as $widget ) {
                register_widget( $widget );
            }
        }
    }

    /**
     * Add customizer sections, controls and settings.
     *
     * @access private
     * @return void
     * @since 1.0.0
     */
    private function set_customizers() : void
    {
        if ( ! empty( $this->customizers ) ) {
            foreach ( $this->customizers as $customizer ) {
                $customizer->register_actions();
            }
        }
    }

    /**
     * Add settings, settings sections and settings fields
     *
     * @access private
     * @return void
     * @since 1.0.0
     */
    private function set_settings_pages() : void
    {
        if ( ! empty( $this->settings ) ) {
            foreach ( $this->settings as $setting ) {
                $setting->register_actions();
            }
        }
    }

    /**
     * Add admin notices
     *
     * @access private
     * @return void
     * @since 1.0.0
     */
    private function set_admin_notices() : void
    {
        if ( isset( $this->admin_notices ) ) {
            foreach ( $this->admin_notices as $notice ) {
                $notice->register_actions();
            }
        }
    }
}