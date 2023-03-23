<?php
/**
 * Constants class file.
 *
 * This file contains Constants class which defines needed constants that will be used in your theme development.
 *
 * @package    WordpressThemeStarter
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
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
     * @since 1.0.0
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
            define( 'HTSA_THEME_NAME', 'Highway Traffic Safety Agency' );
        }

        /**
         * Specify theme version
         */
        if ( ! defined( 'HTSA_THEME_VERSION' ) ) {
            define( 'HTSA_THEME_VERSION', '1.0.0' );
        }

        /**
         * Specify theme support plan link
         */
        if ( ! defined( 'HTSA_THEME_SUPPORT_PLANS' ) ) {
            define( 'HTSA_THEME_SUPPORT_PLANS', 'https://codestar.com.ng/support-plans' );
        }

        /**
         * Specify app environment
         */
        if ( ! defined( 'HTSA_ENV' ) ) {
            define( 'HTSA_ENV', $_ENV['HTSA_ENV'] ?? 'production' );
        }

        /**
         * Specify product api endpoint for development
         */
        if ( ! defined( 'HTSA_API_ENDPOINT_DEV' ) ) {
            define( 'HTSA_API_ENDPOINT_DEV', $_ENV['HTSA_API_ENDPOINT_DEV'] ?? '' );
        }

        /**
         * Specify product api endpoint for production
         */
        if ( ! defined( 'HTSA_API_ENDPOINT_PROD' ) ) {
            define( 'HTSA_API_ENDPOINT_PROD', $_ENV['HTSA_API_ENDPOINT_PROD'] ?? 'https://codestar.com.ng/api/product-licenses/v1/' );
        }

        /**
         * Specify product slug identifier
         */
        if ( ! defined( 'HTSA_API_PRODUCT_ID' ) ) {
            define( 'HTSA_API_PRODUCT_ID', $_ENV['HTSA_API_PRODUCT_ID'] ?? 'highway-traffic-security-agency' );
        }

        /**
         * Specify theme recommended plugins
         */
        if ( ! defined( 'HTSA_THEME_RP_HTSA_PLUGIN_NAME' ) ) {
            define( 'HTSA_THEME_RP_HTSA_PLUGIN_NAME', 'Highway Traffic Safety Agency Plugin' );
        }

        if ( ! defined( 'HTSA_THEME_RP_HTSA_PLUGIN_URL' ) ) {
            define( 'HTSA_THEME_RP_HTSA_PLUGIN_URL', 'https://codestar.com.ng/shop/highway-traffic-security-agency-plugin' );
        }

        /**
         * Define dynamic links to assets files
         */
        define( 'HTSA_SEMANTIC_UI_CDN', ( 'production' === HTSA_ENV ) ? 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/' : WTS_THEME_URI . 'bower_components/semantic/dist/' );
        define( 'HTSA_BOOTSTRAP_CDN', ( 'production' === HTSA_ENV ) ? 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/' : WTS_THEME_URI . 'bower_components/bootstrap/dist/' );
        define( 'HTSA_ANIMATE_CDN', ( 'production' === HTSA_ENV ) ? 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/' : WTS_THEME_URI . 'bower_components/animate-css/' );
        define( 'HTSA_METISMENU_CDN', ( 'production' === HTSA_ENV ) ? 'https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.6/' : WTS_THEME_URI . 'bower_components/metismenu/dist/' );
        define( 'HTSA_TINY_SLIDER_CDN', ( 'production' === HTSA_ENV ) ? 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/' : WTS_THEME_URI . 'bower_components/tiny-slider/dist/' );
        define( 'HTSA_JQUERY_CDN', ( 'production' === HTSA_ENV ) ? 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/' : WTS_THEME_URI . 'bower_components/jquery/dist/' );
        define( 'HTSA_WAYPOINT_CDN', ( 'production' === HTSA_ENV ) ? 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/' : WTS_THEME_URI . 'bower_components/waypoints/lib/' );
        define( 'HTSA_COUNTER_UP_2_CDN', ( 'production' === HTSA_ENV ) ? 'https://cdnjs.cloudflare.com/ajax/libs/counterup2/2.0.2/' : WTS_THEME_URI . 'node_modules/counterup2/dist/' );
        define( 'HTSA_SCROLL_UP_CDN', ( 'production' === HTSA_ENV ) ? 'https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/' : WTS_THEME_URI . 'bower_components/scrollup/dist/' );

        /**
         * Specify links to Semantic UI CSS
         */

        define( 'HTSA_SEMANTIC_UI_AD_CSS', HTSA_SEMANTIC_UI_CDN . 'components/ad.min.css' );
        define( 'HTSA_SEMANTIC_UI_BUTTON_CSS', HTSA_SEMANTIC_UI_CDN . 'components/button.min.css' );
        define( 'HTSA_SEMANTIC_UI_CARD_CSS', HTSA_SEMANTIC_UI_CDN . 'components/card.min.css' );
        define( 'HTSA_SEMANTIC_UI_CHECKBOX_CSS', HTSA_SEMANTIC_UI_CDN . 'components/checkbox.min.css' );
        define( 'HTSA_SEMANTIC_UI_COMMENT_CSS', HTSA_SEMANTIC_UI_CDN . 'components/comment.min.css' );
        define( 'HTSA_SEMANTIC_UI_DIMMER_CSS', HTSA_SEMANTIC_UI_CDN . 'components/dimmer.min.css' );
        define( 'HTSA_SEMANTIC_UI_DIVIDER_CSS', HTSA_SEMANTIC_UI_CDN . 'components/divider.min.css' );
        define( 'HTSA_SEMANTIC_UI_DROPDOWN_CSS', HTSA_SEMANTIC_UI_CDN . 'components/dropdown.min.css' );
        define( 'HTSA_SEMANTIC_UI_EMBED_CSS', HTSA_SEMANTIC_UI_CDN . 'components/embed.min.css' );
        define( 'HTSA_SEMANTIC_UI_FEED_CSS', HTSA_SEMANTIC_UI_CDN . 'components/feed.min.css' );
        define( 'HTSA_SEMANTIC_UI_FORM_CSS', HTSA_SEMANTIC_UI_CDN . 'components/form.min.css' );
        define( 'HTSA_SEMANTIC_UI_HEADER_CSS', HTSA_SEMANTIC_UI_CDN . 'components/header.min.css' );
        define( 'HTSA_SEMANTIC_UI_ICON_CSS', HTSA_SEMANTIC_UI_CDN . 'components/icon.min.css' );
        define( 'HTSA_SEMANTIC_UI_IMAGE_CSS', HTSA_SEMANTIC_UI_CDN . 'components/image.min.css' );
        define( 'HTSA_SEMANTIC_UI_INPUT_CSS', HTSA_SEMANTIC_UI_CDN . 'components/input.min.css' );
        define( 'HTSA_SEMANTIC_UI_LABEL_CSS', HTSA_SEMANTIC_UI_CDN . 'components/label.min.css' );
        define( 'HTSA_SEMANTIC_UI_LIST_CSS', HTSA_SEMANTIC_UI_CDN . 'components/list.min.css' );
        define( 'HTSA_SEMANTIC_UI_LOADER_CSS', HTSA_SEMANTIC_UI_CDN . 'components/loader.min.css' );
        define( 'HTSA_SEMANTIC_UI_MENU_CSS', HTSA_SEMANTIC_UI_CDN . 'components/menu.min.css' );
        define( 'HTSA_SEMANTIC_UI_MODAL_CSS', HTSA_SEMANTIC_UI_CDN . 'components/modal.min.css' );
        define( 'HTSA_SEMANTIC_UI_RATING_CSS', HTSA_SEMANTIC_UI_CDN . 'components/rating.min.css' );
        define( 'HTSA_SEMANTIC_UI_REVEAL_CSS', HTSA_SEMANTIC_UI_CDN . 'components/reveal.min.css' );
        define( 'HTSA_SEMANTIC_UI_SEARCH_CSS', HTSA_SEMANTIC_UI_CDN . 'components/search.min.css' );
        define( 'HTSA_SEMANTIC_UI_SIDEBAR_CSS', HTSA_SEMANTIC_UI_CDN . 'components/sidebar.min.css' );
        define( 'HTSA_SEMANTIC_UI_TRANSITION_CSS', HTSA_SEMANTIC_UI_CDN . 'components/transition.min.css' );

        /**
         * Define links to Bootstrap CSS
         */

        define( 'HTSA_BOOTSTRAP_REBOOT_CSS', HTSA_BOOTSTRAP_CDN . 'css/bootstrap-reboot.min.css' );
        define( 'HTSA_BOOTSTRAP_GRID_CSS', HTSA_BOOTSTRAP_CDN . 'css/bootstrap-grid.min.css' );
        define( 'HTSA_BOOTSTRAP_UTILITIES_CSS', HTSA_BOOTSTRAP_CDN . 'css/bootstrap-utilities.min.css' );

        /**
         * Define link to Animate CSS
         */

        define( 'HTSA_ANIMATE_CSS', HTSA_ANIMATE_CDN . 'animate.min.css' );

        /**
         * Define link to Metismenu CSS
         */

        define( 'HTSA_METISMENU_CSS', HTSA_METISMENU_CDN . 'metisMenu.min.css' );

        /**
         * Define link to Tiny-slider CSS
         */

        define( 'HTSA_TINY_SLIDER_CSS', ( 'production' === HTSA_ENV ) ? HTSA_TINY_SLIDER_CDN . 'tiny-slider.min.css' : HTSA_TINY_SLIDER_CDN . 'tiny-slider.css' );

        /**
         * Define links to jQuery JS
         */

        define( 'HTSA_JQUERY_JS', HTSA_JQUERY_CDN . 'jquery.min.js' );

        /**
         * Define links to Semantic UI JS
         */

        define( 'HTSA_SEMANTIC_UI_JS', HTSA_SEMANTIC_UI_CDN . 'semantic.min.js' );

        /**
         * Define links to Metismenu JS
         */

        define( 'HTSA_METISMENU_JS', HTSA_METISMENU_CDN . 'metisMenu.min.js' );

        /**
         * Define links to Waypoint JS
         */

        define( 'HTSA_WAYPOINT_JS', HTSA_WAYPOINT_CDN . 'jquery.waypoints.min.js' );

        /**
         * Define links to CounterUp2 JS
         */

        define( 'HTSA_COUNTER_UP_2_JS', ( 'production' === HTSA_ENV ) ? HTSA_COUNTER_UP_2_CDN . 'index.min.js' : HTSA_COUNTER_UP_2_CDN . 'index.js' );

        /**
         * Define links to Tiny Slider JS
         */

        define( 'HTSA_TINY_SLIDER_JS', HTSA_TINY_SLIDER_CDN . 'min/tiny-slider.js' );

        /**
         * Define links to ScrollUp JS
         */

        define( 'HTSA_SCROLL_UP_JS', HTSA_SCROLL_UP_CDN . 'jquery.scrollUp.min.js' );

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

        if ( ! defined( 'HTSA_FRONT_PAGE_CARDS_SIDEBAR_ID' ) ) {
            define( 'HTSA_FRONT_PAGE_CARDS_SIDEBAR_ID', 'htsa-front-page-cards-sidebar' );
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