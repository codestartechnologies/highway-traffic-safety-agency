<?php
/**
 * ThemePage abstract class file.
 *
 * This file contains ThemePage abstract class which contains contracts for classes that will create admin menu pages with add_theme_page().
 *
 * @package    WordpressThemeStarter
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
 * @link       https://github.com/codestartechnologies/wordpress-theme-starter
 * @since      1.0.0
 */

namespace HTSA\Codestartechnologies\WordpressThemeStarter\Abstracts;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Class ThemePage
 *
 * This class contains contracts that will be used to create admin menu pages with add_theme_page().
 *
 * @package WordpressThemeStarter
 * @author Chijindu Nzeako <chijindunzeako517@gmail.com>
 */
abstract class ThemePage extends MenuPage
{
    /**
     * "admin_menu" action hook callback
     *
     * @access public
     * @final
     * @return void
     * @since 1.0.0
     */
    final public function menu_page() : void
    {
        $this->page_hook = add_theme_page(
            $this->page_title,
            $this->menu_title,
            $this->capability,
            $this->menu_slug,
            array( $this, 'menu_page_cb' ),
            $this->position
        );
    }
}