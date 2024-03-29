<?php
/**
 * Logger trait file.
 *
 * This file contains Logger trait for logging errors to a log files.
 *
 * @package    WordpressThemeStarter
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
 * @link       https://github.com/codestartechnologies/wordpress-theme-starter
 * @since      1.0.0
 */

namespace HTSA\Codestartechnologies\WordpressThemeStarter\Traits;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Trait Logger
 *
 * This trait is used for logging informations to a log file.
 *
 * @package WordpressThemeStarter
 * @author  Chijindu Nzeako <chijindunzeako517@gmail.com>
 */
trait Logger
{
    /**
     * Log a message to a log file
     *
     * @static
     * @param string $file          The full path to the file that triggered the logger
     * @param string $message       The message to log
     * @param string $type          The message type. Can be: "error", "warning", "info", or "debug"
     * @return void
     * @since 1.0.0
     */
    public static function log( string $file, string $message, string $type = 'error' ) : void
    {

        if ( ! in_array( $type, array( 'error', 'warning', 'info', 'debug' ) ) ) {
            $type = 'error';
        }

        if ( defined( 'WTS_LOGS_PATH' ) ) {
            $timezone_id = wts_config( 'date.timezone_id' );
            date_default_timezone_set( $timezone_id );
            $message = sprintf( '[%1$s][%2$s][%3$s] %4$s', date( 'Y-m-d H:i:s' ), $type, $file, $message );
            $log_file = self::get_log_file()[ $type ];

            if ( ! error_log( $message . PHP_EOL, 3, WTS_LOGS_PATH . $log_file ) ) {
                self::write_log( $message . PHP_EOL, WTS_LOGS_PATH . $log_file );
            }
        }
    }

    /**
     * get the file for logging a message
     *
     * @access private
     * @static
     * @return array
     * @since 1.0.0
     */
    private static function get_log_file() : array
    {
        return array(
            'error'     => 'error.log',
            'warning'   => 'warning.log',
            'info'      => 'info.log',
            'debug'     => 'debug.log',
        );
    }

    /**
     * Fallback logger method
     *
     * @access private
     * @static
     * @param string $message
     * @param string $path
     * @return void
     * @since 1.0.0
     */
    private static function write_log( string $message, string $path ) : void
    {
        $resource = fopen( $path, 'a' );
        fwrite( $resource, $message );
        fclose( $resource );
    }
}