<?php
/**
 * This file contains configuration settings for posts pagination
 *
 * @author      Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license     https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
 * @link        https://codestar.com.ng
 */

return array(
    /**
     * Customize markups used in displaying pagination using wts_paginate()
     */
    'pagination_markup'         => array(
        /**
         * Markup for displaying the opening pagination container tag
         *
         * Default: <nav>
         */
        // 'wrapper_open'      => '<div class="ui black circular labels text-center">',
        'wrapper_open'      => '<div class="text-center"><div class="ui mini pagination menu">',

        /**
         * Markup for displaying the link to the first page
         *
         * %s is used for generating the link to the page
         *
         * Default: <a href="%s">&laquo;</a>
         */
        // 'page_first'        => '<a class="ui label" href="%s"><i class="left double angle icon align-middle me-0"></i></a>',
        'page_first'        => '<a href="%s" class="item"><i class="angle double left icon"></i></a>',

        /**
         * Markup for displaying the link to the previous page
         *
         * %s is used for generating the link to the page
         *
         * Default: <a href="%s">&lsaquo;</a>
         */
        // 'page_prev'         => '<a class="ui label" href="%s"><i class="left angle icon align-middle me-0"></i></a>',
        'page_prev'         => '<a href="%s" class="item"><i class="angle left icon"></i></a>',

        /**
         * Markup for displaying the link to the current page
         *
         * %s is used for generating the link to the page
         *
         * Default: <a class="active" href="javascript:void(0);">%s</a>
         */
        // 'page_current'      => '<a class="ui label" href="javascript:void(0);">%s</a>',
        'page_current'      => '<a href="javascript:void(0);" class="active item">%s</a>',

        /**
         * Markup for displaying the dynamically generated links
         *
         * %1$s is used for generating the link to the page, %2$s displays the markup text
         *
         * Default: <a href="%1$s">%2$s</a>
         */
        // 'page_links'        => '<a class="ui label fw-lighter" href="%1$s">%2$s</a>',
        'page_links'        => '<a href="%1$s" class="item">%2$s</a>',

        /**
         * Markup for displaying the link to the next page
         *
         * %s is used for generating the link to the page
         *
         * Default: <a href="%s">&rsaquo;</a>
         */
        // 'page_next'         => '<a class="ui label" href="%s"><i class="right angle icon align-middle me-0"></i></a>',
        'page_next'         => '<a href="%s" class="item"><i class="angle right icon"></i></a>',

        /**
         * Markup for displaying the link to the last page
         *
         * %s is used for generating the link to the page
         *
         * Default: <a href="%s">&raquo;</a>
         */
        // 'page_last'         => '<a class="ui label" href="%s"><i class="right double angle icon align-middle me-0"></i></a>',
        'page_last'         => '<a href="%s" class="item"><i class="angle double right icon"></i></a>',

        /**
         * Markup for displaying the closing pagination container tag
         *
         * Default: </nav>
         */
        // 'wrapper_close'     => '</div>',
        'wrapper_close'     => '</div></div>',
    ),

    'simple_pagination_markup'  => array(
        /**
         * Markup for displaying the link to the previous page
         *
         * %1$s is used to generate the link to the page, %2$s is used to dispaly the text
         *
         * Default: <a href="%1$s">%2$s</a>
         */
        'prev'  => '',

        /**
         * Markup for displaying the link to the next page
         *
         * %1$s is used to generate the link to the page, %2$s is used to dispaly the text
         *
         * Default: <a href="%1$s">%2$s</a>
         */
        'next'  => '',

    ),

);