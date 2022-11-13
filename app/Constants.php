<?php
/**
 * Constants class file.
 *
 * This file contains Constants class which defines needed constants that will be used in your theme development.
 *
 * @package    WordpressThemeStarter
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link       https://codestar.com.ng
 * @since      1.0.0
 */

namespace WTS_Theme\App;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Constants' ) ) {
    /**
     * Constants Class
     *
     * @package     WordpressThemeStarter
     * @author      Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class Constants
    {
        /**
         * Define core constants.
         *
         * @return void
         */
        public static function define_constants() : void
        {
            /**
             * Define constants needed by your theme below
             */

            /**
             * Specify theme name
             */
            if ( ! defined( 'HTSA_THEME_NAME' ) ) {
                define( 'HTSA_THEME_NAME', 'Rome' );
            }

            /**
             * Specify theme version
             */
            if ( ! defined( 'HTSA_THEME_VERSION' ) ) {
                define( 'HTSA_THEME_VERSION', '0.1.0' );
            }

            /**
             * Specify links to Semantic UI CSS
             */

            if ( ! defined( 'HTSA_SEMATIC_UI_AD_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_AD_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_AD_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/ad.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_BUTTON_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_BUTTON_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_BUTTON_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/button.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_CARD_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_CARD_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_CARD_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/card.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_CHECKBOX_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_CHECKBOX_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_CHECKBOX_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/checkbox.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_COMMENT_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_COMMENT_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_COMMENT_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/comment.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_DIMMER_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_DIMMER_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_DIMMER_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/dimmer.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_DIVIDER_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_DIVIDER_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_DIVIDER_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/divider.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_DROPDOWN_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_DROPDOWN_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_DROPDOWN_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/dropdown.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_EMBED_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_EMBED_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_EMBED_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/embed.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_FEED_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_FEED_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_FEED_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/feed.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_FORM_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_FORM_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_FORM_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/form.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_HEADER_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_HEADER_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_HEADER_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/header.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_ICON_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_ICON_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_ICON_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/icon.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_IMAGE_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_IMAGE_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_IMAGE_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/image.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_INPUT_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_INPUT_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_INPUT_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/input.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_LABEL_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_LABEL_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_LABEL_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/label.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_LIST_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_LIST_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_LIST_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/list.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_LOADER_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_LOADER_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_LOADER_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/loader.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_MENU_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_MENU_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_MENU_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/menu.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_MODAL_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_MODAL_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_MODAL_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/modal.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_REVEAL_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_REVEAL_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_REVEAL_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/reveal.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_SEARCH_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_SEARCH_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_SEARCH_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/search.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_SIDEBAR_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_SIDEBAR_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_SIDEBAR_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/sidebar.min.css' );
            }

            if ( ! defined( 'HTSA_SEMATIC_UI_TRANSITION_CSS' ) ) {
                // define( 'HTSA_SEMATIC_UI_TRANSITION_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMATIC_UI_TRANSITION_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/transition.min.css' );
            }

            /**
             * Define links to Bootstrap CSS
             */

            if ( ! defined( 'HTSA_BOOTSTRAP_REBOOT_CSS' ) ) {
                // define( 'HTSA_BOOTSTRAP_REBOOT_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_BOOTSTRAP_REBOOT_CSS', WTS_THEME_URI . 'bower_components/bootstrap/dist/css/bootstrap-reboot.min.css' );
            }

            if ( ! defined( 'HTSA_BOOTSTRAP_GRID_CSS' ) ) {
                // define( 'HTSA_BOOTSTRAP_GRID_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_BOOTSTRAP_GRID_CSS', WTS_THEME_URI . 'bower_components/bootstrap/dist/css/bootstrap-grid.min.css' );
            }

            if ( ! defined( 'HTSA_BOOTSTRAP_UTILITIES_CSS' ) ) {
                // define( 'HTSA_BOOTSTRAP_UTILITIES_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_BOOTSTRAP_UTILITIES_CSS', WTS_THEME_URI . 'bower_components/bootstrap/dist/css/bootstrap-utilities.min.css' );
            }

            /**
             * Define link to Animate CSS
             */

            if ( ! defined( 'HTSA_ANIMATE_CSS' ) ) {
                // define( 'HTSA_ANIMATE_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_ANIMATE_CSS', WTS_THEME_URI . 'bower_components/animate-css/animate.min.css' );
            }

            /**
             * Define link to Metismenu CSS
             */

            if ( ! defined( 'HTSA_METISMENU_CSS' ) ) {
                // define( 'HTSA_METISMENU_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_METISMENU_CSS', WTS_THEME_URI . 'bower_components/metismenu/dist/metisMenu.min.css' );
            }

            /**
             * Define link to Tiny-slider CSS
             */

            if ( ! defined( 'HTSA_TINY_SLIDER_CSS' ) ) {
                // define( 'HTSA_TINY_SLIDER_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_TINY_SLIDER_CSS', WTS_THEME_URI . 'bower_components/tiny-slider/dist/tiny-slider.css' );
            }

            /**
             * Define link to HTSA CSS
             */

            if ( ! defined( 'HTSA_BOOTSTRAP_COMPONENTS_CSS' ) ) {
                // define( 'HTSA_BOOTSTRAP_COMPONENTS_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_BOOTSTRAP_COMPONENTS_CSS', WTS_THEME_CSS_URI . 'bootstrap_components_css.min.css' );
            }

            if ( ! defined( 'HTSA_CSS' ) ) {
                // define( 'HTSA_CSS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_CSS', WTS_THEME_CSS_URI . 'htsa_css.min.css' );
            }

            /**
             * Define links to jQuery JS
             */

            if ( ! defined( 'HTSA_JQUERY_JS' ) ) {
                // define( 'HTSA_JQUERY_JS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_JQUERY_JS', WTS_THEME_URI . 'bower_components/jquery/dist/jquery.min.js' );
            }

            /**
             * Define links to Semantic UI JS
             */

            if ( ! defined( 'HTSA_SEMANTIC_UI_JS' ) ) {
                // define( 'HTSA_SEMANTIC_UI_JS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SEMANTIC_UI_JS', WTS_THEME_URI . 'bower_components/semantic/dist/semantic.min.js' );
            }

            /**
             * Define links to Metismenu JS
             */

            if ( ! defined( 'HTSA_METISMENU_JS' ) ) {
                // define( 'HTSA_METISMENU_JS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_METISMENU_JS', WTS_THEME_URI . 'bower_components/metismenu/dist/metisMenu.min.js' );
            }

            /**
             * Define links to Waypoint JS
             */

            if ( ! defined( 'HTSA_WAYPOINT_JS' ) ) {
                // define( 'HTSA_WAYPOINT_JS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_WAYPOINT_JS', WTS_THEME_URI . 'bower_components/waypoints/lib/jquery.waypoints.min.js' );
            }

            /**
             * Define links to CounterUp2 JS
             */

            if ( ! defined( 'HTSA_COUNTER_UP_2_JS' ) ) {
                // define( 'HTSA_COUNTER_UP_2_JS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_COUNTER_UP_2_JS', WTS_THEME_URI . 'node_modules/counterup2/dist/index.js' );
            }

            /**
             * Define links to Tiny Slider JS
             */

            if ( ! defined( 'HTSA_TINY_SLIDER_JS' ) ) {
                // define( 'HTSA_TINY_SLIDER_JS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_TINY_SLIDER_JS', WTS_THEME_URI . 'bower_components/tiny-slider/dist/min/tiny-slider.js' );
            }

            /**
             * Define links to ScrollUp JS
             */

            if ( ! defined( 'HTSA_SCROLL_UP_JS' ) ) {
                // define( 'HTSA_SCROLL_UP_JS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_SCROLL_UP_JS', WTS_THEME_URI . 'bower_components/scrollup/dist/jquery.scrollUp.min.js' );
            }

            /**
             * Define links to HTSA JS
             */

            if ( ! defined( 'HTSA_BOOTSTRAP_COMPONENTS_JS' ) ) {
                // define( 'HTSA_BOOTSTRAP_COMPONENTS_JS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_BOOTSTRAP_COMPONENTS_JS', WTS_THEME_JS_URI . 'bootstrap_components_js.min.js' );
            }

            if ( ! defined( 'HTSA_JS' ) ) {
                // define( 'HTSA_JS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_JS', WTS_THEME_JS_URI . 'htsa_js.min.js' );
            }

            if ( ! defined( 'HTSA_ADMIN_JS' ) ) {
                // define( 'HTSA_ADMIN_JS', 'https://cdn.jsdelivr.net/npm/' );
                define( 'HTSA_ADMIN_JS', WTS_THEME_JS_URI . 'htsa_admin.js' );
            }

            /**
             * Define sidebars id
             */

            if ( ! defined( 'HTSA_FRONT_PAGE_RESOURCES_SIDEBAR_ID' ) ) {
                define( 'HTSA_FRONT_PAGE_RESOURCES_SIDEBAR_ID', 'htsa-front-page-resources-sidebar' );
            }

            if ( ! defined( 'HTSA_FRONT_PAGE_SIDEBAR_ID' ) ) {
                define( 'HTSA_FRONT_PAGE_SIDEBAR_ID', 'htsa-front-page-sidebar' );
            }

            if ( ! defined( 'HTSA_ARCHIVES_SIDEBAR_ID' ) ) {
                define( 'HTSA_ARCHIVES_SIDEBAR_ID', 'htsa-archives-sidebar' );
            }

            if ( ! defined( 'HTSA_SINGLE_SIDEBAR_ID' ) ) {
                define( 'HTSA_SINGLE_SIDEBAR_ID', 'htsa-single-sidebar' );
            }


            /**
             * Define post types
             */

            if ( ! defined( 'HTSA_PROFILE_POST_TYPE' ) ) {
                define( 'HTSA_PROFILE_POST_TYPE', 'htsa_profile' );
            }

            if ( ! defined( 'HTSA_OFFICERS_POST_TYPE' ) ) {
                define( 'HTSA_OFFICERS_POST_TYPE', 'htsa_officers' );
            }

            if ( ! defined( 'HTSA_BRANCHES_POST_TYPE' ) ) {
                define( 'HTSA_BRANCHES_POST_TYPE', 'htsa_branch' );
            }

            if ( ! defined( 'HTSA_PENALTIES_POST_TYPE' ) ) {
                define( 'HTSA_PENALTIES_POST_TYPE', 'htsa_penalty' );
            }


            /**
             * Define post meta keys
             */

            if ( ! defined( 'HTSA_FEATURED_META_KEY' ) ) {
                define( 'HTSA_FEATURED_META_KEY', 'htsa_post_featured' );
            }

            if ( ! defined( 'HTSA_PROFILE_POSITION_HELD_META_KEY' ) ) {
                define( 'HTSA_PROFILE_POSITION_HELD_META_KEY', 'htsa_position_held' );
            }

            if ( ! defined( 'HTSA_PROFILE_SOCIAL_HANDLES_META_KEY' ) ) {
                define( 'HTSA_PROFILE_SOCIAL_HANDLES_META_KEY', 'htsa_profile_social_handles' );
            }

            if ( ! defined( 'HTSA_OFFICER_CONTACT_META_KEY' ) ) {
                define( 'HTSA_OFFICER_CONTACT_META_KEY', 'htsa_officer_contact' );
            }

            if ( ! defined( 'HTSA_OFFICER_ZONE_META_KEY' ) ) {
                define( 'HTSA_OFFICER_ZONE_META_KEY', 'htsa_officer_zone' );
            }

            if ( ! defined( 'HTSA_BRANCH_LOCATION_META_KEY' ) ) {
                define( 'HTSA_BRANCH_LOCATION_META_KEY', 'htsa_branch_location' );
            }

            if ( ! defined( 'HTSA_BRANCH_DIRECTION_META_KEY' ) ) {
                define( 'HTSA_BRANCH_DIRECTION_META_KEY', 'htsa_branch_direction' );
            }

            if ( ! defined( 'HTSA_PENALTY_VEHICLE_CATRGORIES_META_KEY' ) ) {
                define( 'HTSA_PENALTY_VEHICLE_CATRGORIES_META_KEY', 'htsa_penalty_vehicle_categories' );
            }

            /**
             * Define shortcode tags
             */

            if ( ! defined( 'HTSA_CONTACT_FORM_SHORTCODE' ) ) {
                define( 'HTSA_CONTACT_FORM_SHORTCODE', 'htsa_contact_form' );
            }
        }
    }
}
