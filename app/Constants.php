<?php
/**
 * Constants class file.
 *
 * This file contains Constants class which defines needed constants that will be used in your theme development.
 *
 * @package    WordpressThemeStarter
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link       https://github.com/codestartechnologies/wordpress-theme-starter
 * @since      1.0.0
 */

namespace HTSA\WTS_Theme\App;

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
     * @package WordpressThemeStarter
     * @author  Chijindu Nzeako <chijindunzeako517@gmail.com>
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
                define( 'HTSA_THEME_NAME', 'Highway Traffic Security Agency' );
            }

            /**
             * Specify theme version
             */
            if ( ! defined( 'HTSA_THEME_VERSION' ) ) {
                define( 'HTSA_THEME_VERSION', '0.3.0' );
            }

            /**
             * Specify theme support plan link
             */
            if ( ! defined( 'HTSA_THEME_SUPPORT_PLANS' ) ) {
                define( 'HTSA_THEME_SUPPORT_PLANS', 'https://codestar.com.ng/support-plans' );
            }

            /**
             * Specify theme recommended plugins
             */
            if ( ! defined( 'HTSA_THEME_RP_HTSA_PLUGIN_NAME' ) ) {
                define( 'HTSA_THEME_RP_HTSA_PLUGIN_NAME', 'Highway Traffic Security Agency Plugin' );
            }

            if ( ! defined( 'HTSA_THEME_RP_HTSA_PLUGIN_URL' ) ) {
                define( 'HTSA_THEME_RP_HTSA_PLUGIN_URL', 'https://codestar.com.ng/shop/highway-traffic-security-agency-plugin' );
            }

            if ( 'production' === $_ENV['HTSA_ENV'] ) {

                /**
                 * Specify links to Semantic UI CSS
                 */

                define( 'HTSA_SEMANTIC_UI_AD_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/ad.min.css' );
                define( 'HTSA_SEMANTIC_UI_BUTTON_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/button.min.css' );
                define( 'HTSA_SEMANTIC_UI_CARD_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/card.min.css' );
                define( 'HTSA_SEMANTIC_UI_CHECKBOX_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/checkbox.min.css' );
                define( 'HTSA_SEMANTIC_UI_COMMENT_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/comment.min.css' );
                define( 'HTSA_SEMANTIC_UI_DIMMER_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/dimmer.min.css' );
                define( 'HTSA_SEMANTIC_UI_DIVIDER_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/divider.min.css' );
                define( 'HTSA_SEMANTIC_UI_DROPDOWN_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/dropdown.min.css' );
                define( 'HTSA_SEMANTIC_UI_EMBED_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/embed.min.css' );
                define( 'HTSA_SEMANTIC_UI_FEED_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/feed.min.css' );
                define( 'HTSA_SEMANTIC_UI_FORM_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/form.min.css' );
                define( 'HTSA_SEMANTIC_UI_HEADER_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/header.min.css' );
                define( 'HTSA_SEMANTIC_UI_ICON_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/icon.min.css' );
                define( 'HTSA_SEMANTIC_UI_IMAGE_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/image.min.css' );
                define( 'HTSA_SEMANTIC_UI_INPUT_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/input.min.css' );
                define( 'HTSA_SEMANTIC_UI_LABEL_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/label.min.css' );
                define( 'HTSA_SEMANTIC_UI_LIST_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/list.min.css' );
                define( 'HTSA_SEMANTIC_UI_LOADER_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/loader.min.css' );
                define( 'HTSA_SEMANTIC_UI_MENU_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/menu.min.css' );
                define( 'HTSA_SEMANTIC_UI_MODAL_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/modal.min.css' );
                define( 'HTSA_SEMANTIC_UI_RATING_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/rating.min.css' );
                define( 'HTSA_SEMANTIC_UI_REVEAL_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/reveal.min.css' );
                define( 'HTSA_SEMANTIC_UI_SEARCH_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/search.min.css' );
                define( 'HTSA_SEMANTIC_UI_SIDEBAR_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/sidebar.min.css' );
                define( 'HTSA_SEMANTIC_UI_TRANSITION_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/transition.min.css' );

                /**
                 * Define links to Bootstrap CSS
                 */

                define( 'HTSA_BOOTSTRAP_REBOOT_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap-reboot.min.css' );
                define( 'HTSA_BOOTSTRAP_GRID_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap-grid.min.css' );
                define( 'HTSA_BOOTSTRAP_UTILITIES_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap-utilities.min.css' );

                /**
                 * Define link to Animate CSS
                 */

                define( 'HTSA_ANIMATE_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );

                /**
                 * Define link to Metismenu CSS
                 */

                // define( 'HTSA_METISMENU_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.css' );
                define( 'HTSA_METISMENU_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.6/metisMenu.min.css' );

                /**
                 * Define link to Tiny-slider CSS
                 */

                define( 'HTSA_TINY_SLIDER_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.min.css' );

                /**
                 * Define links to jQuery JS
                 */

                define( 'HTSA_JQUERY_JS', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js' );

                /**
                 * Define links to Semantic UI JS
                 */

                define( 'HTSA_SEMANTIC_UI_JS', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js' );

                /**
                 * Define links to Metismenu JS
                 */

                // define( 'HTSA_METISMENU_JS', 'https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.js' );
                define( 'HTSA_METISMENU_JS', 'https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.6/metisMenu.min.js' );

                /**
                 * Define links to Waypoint JS
                 */

                define( 'HTSA_WAYPOINT_JS', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js' );

                /**
                 * Define links to CounterUp2 JS
                 */

                define( 'HTSA_COUNTER_UP_2_JS', 'https://cdnjs.cloudflare.com/ajax/libs/counterup2/2.0.2/index.min.js' );

                /**
                 * Define links to Tiny Slider JS
                 */

                define( 'HTSA_TINY_SLIDER_JS', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js' );

                /**
                 * Define links to ScrollUp JS
                 */

                define( 'HTSA_SCROLL_UP_JS', 'https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js' );

            } else {

                /**
                 * Specify links to Semantic UI CSS
                 */

                define( 'HTSA_SEMANTIC_UI_AD_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/ad.min.css' );
                define( 'HTSA_SEMANTIC_UI_BUTTON_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/button.min.css' );
                define( 'HTSA_SEMANTIC_UI_CARD_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/card.min.css' );
                define( 'HTSA_SEMANTIC_UI_CHECKBOX_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/checkbox.min.css' );
                define( 'HTSA_SEMANTIC_UI_COMMENT_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/comment.min.css' );
                define( 'HTSA_SEMANTIC_UI_DIMMER_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/dimmer.min.css' );
                define( 'HTSA_SEMANTIC_UI_DIVIDER_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/divider.min.css' );
                define( 'HTSA_SEMANTIC_UI_DROPDOWN_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/dropdown.min.css' );
                define( 'HTSA_SEMANTIC_UI_EMBED_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/embed.min.css' );
                define( 'HTSA_SEMANTIC_UI_FEED_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/feed.min.css' );
                define( 'HTSA_SEMANTIC_UI_FORM_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/form.min.css' );
                define( 'HTSA_SEMANTIC_UI_HEADER_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/header.min.css' );
                define( 'HTSA_SEMANTIC_UI_ICON_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/icon.min.css' );
                define( 'HTSA_SEMANTIC_UI_IMAGE_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/image.min.css' );
                define( 'HTSA_SEMANTIC_UI_INPUT_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/input.min.css' );
                define( 'HTSA_SEMANTIC_UI_LABEL_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/label.min.css' );
                define( 'HTSA_SEMANTIC_UI_LIST_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/list.min.css' );
                define( 'HTSA_SEMANTIC_UI_LOADER_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/loader.min.css' );
                define( 'HTSA_SEMANTIC_UI_MENU_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/menu.min.css' );
                define( 'HTSA_SEMANTIC_UI_MODAL_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/modal.min.css' );
                define( 'HTSA_SEMANTIC_UI_RATING_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/rating.min.css' );
                define( 'HTSA_SEMANTIC_UI_REVEAL_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/reveal.min.css' );
                define( 'HTSA_SEMANTIC_UI_SEARCH_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/search.min.css' );
                define( 'HTSA_SEMANTIC_UI_SIDEBAR_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/sidebar.min.css' );
                define( 'HTSA_SEMANTIC_UI_TRANSITION_CSS', WTS_THEME_URI . 'bower_components/semantic/dist/components/transition.min.css' );

                /**
                 * Define links to Bootstrap CSS
                 */

                define( 'HTSA_BOOTSTRAP_REBOOT_CSS', WTS_THEME_URI . 'bower_components/bootstrap/dist/css/bootstrap-reboot.min.css' );
                define( 'HTSA_BOOTSTRAP_GRID_CSS', WTS_THEME_URI . 'bower_components/bootstrap/dist/css/bootstrap-grid.min.css' );
                define( 'HTSA_BOOTSTRAP_UTILITIES_CSS', WTS_THEME_URI . 'bower_components/bootstrap/dist/css/bootstrap-utilities.min.css' );

                /**
                 * Define link to Animate CSS
                 */

                define( 'HTSA_ANIMATE_CSS', WTS_THEME_URI . 'bower_components/animate-css/animate.min.css' );

                /**
                 * Define link to Metismenu CSS
                 */

                define( 'HTSA_METISMENU_CSS', WTS_THEME_URI . 'bower_components/metismenu/dist/metisMenu.min.css' );

                /**
                 * Define link to Tiny-slider CSS
                 */

                define( 'HTSA_TINY_SLIDER_CSS', WTS_THEME_URI . 'bower_components/tiny-slider/dist/tiny-slider.css' );

                /**
                 * Define links to jQuery JS
                 */

                define( 'HTSA_JQUERY_JS', WTS_THEME_URI . 'bower_components/jquery/dist/jquery.min.js' );

                /**
                 * Define links to Semantic UI JS
                 */

                define( 'HTSA_SEMANTIC_UI_JS', WTS_THEME_URI . 'bower_components/semantic/dist/semantic.min.js' );

                /**
                 * Define links to Metismenu JS
                 */

                define( 'HTSA_METISMENU_JS', WTS_THEME_URI . 'bower_components/metismenu/dist/metisMenu.min.js' );

                /**
                 * Define links to Waypoint JS
                 */

                define( 'HTSA_WAYPOINT_JS', WTS_THEME_URI . 'bower_components/waypoints/lib/jquery.waypoints.min.js' );

                /**
                 * Define links to CounterUp2 JS
                 */

                define( 'HTSA_COUNTER_UP_2_JS', WTS_THEME_URI . 'node_modules/counterup2/dist/index.js' );

                /**
                 * Define links to Tiny Slider JS
                 */

                define( 'HTSA_TINY_SLIDER_JS', WTS_THEME_URI . 'bower_components/tiny-slider/dist/min/tiny-slider.js' );

                /**
                 * Define links to ScrollUp JS
                 */

                define( 'HTSA_SCROLL_UP_JS', WTS_THEME_URI . 'bower_components/scrollup/dist/jquery.scrollUp.min.js' );

            }

            /**
             * Define link to HTSA CSS
             */

            define( 'HTSA_BOOTSTRAP_COMPONENTS_CSS', WTS_THEME_CSS_URI . 'bootstrap_components_css.min.css' );
            define( 'HTSA_CSS', WTS_THEME_CSS_URI . 'htsa_css.min.css' );

            /**
             * Define links to HTSA JS
             */

            define( 'HTSA_BOOTSTRAP_COMPONENTS_JS', WTS_THEME_JS_URI . 'bootstrap_components_js.min.js' );
            define( 'HTSA_JS', WTS_THEME_JS_URI . 'htsa_js.min.js' );

            /**
             * Define links to theme main CSS and JS files
             */
            define( 'HTSA_THEME_MENU_CSS', WTS_THEME_CSS_URI . 'htsa_theme_menu.css' );
            define( 'HTSA_ADMIN_JS', WTS_THEME_JS_URI . 'htsa_admin.js' );

            /**
             * Define sidebars id
             */

            if ( ! defined( 'HTSA_FRONT_PAGE_RESOURCES_SIDEBAR_ID' ) ) {
                define( 'HTSA_FRONT_PAGE_RESOURCES_SIDEBAR_ID', 'htsa-front-page-resources-sidebar' );
            }

            if ( ! defined( 'HTSA_FRONT_PAGE_SIDEBAR_ID' ) ) {
                define( 'HTSA_FRONT_PAGE_SIDEBAR_ID', 'htsa-front-page-sidebar' );
            }

            if ( ! defined( 'HTSA_FRONT_PAGE_ASIDE_SIDEBAR_ID' ) ) {
                define( 'HTSA_FRONT_PAGE_ASIDE_SIDEBAR_ID', 'htsa-front-page-aside-sidebar' );
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

            if ( ! defined( 'HTSA_REVIEWS_POST_TYPE' ) ) {
                define( 'HTSA_REVIEWS_POST_TYPE', 'htsa_reviews' );
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

            if ( ! defined( 'HTSA_BRANCH_DIRECTION_META_KEY' ) ) {
                define( 'HTSA_BRANCH_DIRECTION_META_KEY', 'htsa_branch_direction' );
            }

            if ( ! defined( 'HTSA_PENALTY_VEHICLE_CATEGORIES_META_KEY' ) ) {
                define( 'HTSA_PENALTY_VEHICLE_CATEGORIES_META_KEY', 'htsa_penalty_vehicle_categories' );
            }

            if ( ! defined( 'HTSA_REVIEW_NAME_META_KEY' ) ) {
                define( 'HTSA_REVIEW_NAME_META_KEY', 'htsa_review_name' );
            }

            if ( ! defined( 'HTSA_REVIEW_RATING_META_KEY' ) ) {
                define( 'HTSA_REVIEW_RATING_META_KEY', 'htsa_review_rating' );
            }

            if ( ! defined( 'HTSA_REVIEW_CONTENT_META_KEY' ) ) {
                define( 'HTSA_REVIEW_CONTENT_META_KEY', 'htsa_review_content' );
            }

            /**
             * Define shortcode tags
             */

            if ( ! defined( 'HTSA_CONTACT_FORM_SHORTCODE' ) ) {
                define( 'HTSA_CONTACT_FORM_SHORTCODE', 'htsa_contact_form' );
            }

            if ( ! defined( 'HTSA_NEWSLETTER_FORM_SHORTCODE' ) ) {
                define( 'HTSA_NEWSLETTER_FORM_SHORTCODE', 'htsa_newsletter_form' );
            }
        }
    }
}
