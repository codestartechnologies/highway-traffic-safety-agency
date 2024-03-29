<?php
/**
 * AdminNotice abstract class file.
 *
 * This file contains AdminNotice abstract class which contains contracts for classes that will register admin notifications.
 *
 * @package     WordpressThemeStarter
 * @author      Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license     https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
 * @link        https://github.com/codestartechnologies/wordpress-theme-starter
 * @since       1.0.0
 */

namespace HTSA\Codestartechnologies\WordpressThemeStarter\Abstracts;

use HTSA\Codestartechnologies\WordpressThemeStarter\Interfaces\ActionHooks;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Class Customizer
 *
 * This class contains contracts that will be used to register admin notifications.
 *
 * @package WordpressThemeStarter
 * @author Chijindu Nzeako <chijindunzeako517@gmail.com>
 */
abstract class AdminNotice implements ActionHooks
{
    /**
     * Register add_action() and remove_action().
     *
     * @access public
     * @return void
     * @since 1.0.0
     */
    public function register_actions(): void
    {
        add_action( 'admin_notices', array( $this, 'show_notice' ) );
    }

    /**
     * Check before the admin notice is printed
     *
     * @access protected
     * @return bool
     * @since 1.0.0
     */
    protected function can_show_notice() : bool
    {
        return true;
    }

    /**
     * "admin_notices" action hook callback
     *
     * @final
     * @return void
     * @since 1.0.0
     */
    final public function show_notice() : void
    {
        if ( $this->can_show_notice() ) {
            $this->notification();
        }
    }

    /**
     * Notification message
     *
     * @access public
     * @abstract
     * @return void
     * @since 1.0.0
     */
    abstract public function notification() : void;
}