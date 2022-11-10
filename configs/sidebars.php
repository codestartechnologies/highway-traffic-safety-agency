<?php
/**
 * This file contains configuration settings for registering sidebar areas
 *
 * @author      Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license     https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
 * @link        https://codestar.com.ng
 */

return array(
    /**
     * Initial values to create 'WordPress Theme Starter Sidebar' sidebar area.
     */
    'wts_sidebar'  => array(

        'name'              => esc_html__( 'WordPress Theme Starter Sidebar', 'wts' ),

        'id'                => 'wts-sidebar',

        'description'       => esc_html__( 'Widgets in this area are shown in the posts page', 'wts' ),

        'class'             => '',

        'before_widget'     => '<div id="%1$s">',

        'after_widget'      => '</div>',

        'before_title'      => '<h4>',

        'after_title'       => '</h4>',

        'before_sidebar'    => '',

        'after_sidebar'     => '<br />',
    ),

    /**
     * Configuration values for 'Front Page Resources' sidebar area
     */
    'htsa_front_page_resources_sidebar'  => array(

        'name'              => esc_html__( 'Front Page Resources', 'htsa' ),

        'id'                => HTSA_FRONT_PAGE_RESOURCES_SIDEBAR_ID,

        'description'       => esc_html__( 'Widgets in this area are shown in the front page.', 'htsa' ),

        'class'             => '',

        'before_widget'     => '',

        'after_widget'      => '',

        'before_title'      => '',

        'after_title'       => '',

        'before_sidebar'    => '',

        'after_sidebar'     => '',
    ),

    /**
     * Configuration values for 'Front Page' sidebar area
     */
    'htsa_front_page_sidebar'  => array(

        'name'              => esc_html__( 'Front Page', 'htsa' ),

        'id'                => HTSA_FRONT_PAGE_SIDEBAR_ID,

        'description'       => esc_html__( 'Widgets in this area are shown in the front page, beside the featured and latest blog section', 'htsa' ),

        'class'             => '',

        'before_widget'     => '<div id="%1$s" class="mb-5 vstack align-items-center %2$s">',

        'after_widget'      => '</div>',

        'before_title'      => '<h4 class="fs-5 text-capitalize text-center fw-semibold mb-3">',

        'after_title'       => '</h4>',

        'before_sidebar'    => '',

        'after_sidebar'     => '',
    ),

);
