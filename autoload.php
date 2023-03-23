<?php
/**
 * This file contains functions for loading classes and files
 *
 * @package     WordpressThemeStarter
 * @version     1.0.0
 * @author      Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license     https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
 * @link        https://github.com/codestartechnologies/wordpress-theme-starter
 */

namespace HTSA\Codestartechnologies\WordpressThemeStarter;

/**
 * Prevent direct access to this file.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * WTSAutoLoader class
 *
 * @author Chijindu Nzeako <chijindunzeako517@gmail.com>
 */
final class WTSAutoLoader
{
    /**
     * Prefix to add to namespace
     *
     * @access protected
     * @static
     * @var string|null
     * @since 1.0.0
     */
    protected static ?string $prefix = 'HTSA';

    /**
     * Auto load class mappings
     *
     * @access protected
     * @static
     * @var array
     * @since 1.0.0
     */
    protected static array $class_autoloads = array(
        "WTS_Theme\\App" => "app",
        "Codestartechnologies\\WordpressThemeStarter" => "src",
    );

    /**
     * Auto load file mappings
     *
     * @access protected
     * @static
     * @var array
     * @since 1.0.0
     */
    protected static array $file_autoloads = array(
        "src/helpers/helpers.php",
        "src/helpers/pagination.php",
        "src/helpers/posts.php",
        "app/helpers.php",
    );

    /**
     * handles autoloading for classes and files
     *
     * @static
     * @return void
     * @since 1.0.0
     */
    public static function autoload() : void
    {
        spl_autoload_register( array( __CLASS__, 'wts_autoloader' ) );

        $path = get_template_directory() . DIRECTORY_SEPARATOR;

        foreach ( self::$file_autoloads as $file ) {
            if ( is_readable( $path . $file ) ) {
                require_once( $path . $file );
            }
        }
    }

    /**
     * handles autoloading for classes
     *
     * @static
     * @param string $class
     * @return void
     * @since 1.0.0
     */
    public static function wts_autoloader( string $class ) : void
    {
        $prefix = isset( self::$prefix ) ? self::$prefix . "\\" : '';

        foreach ( self::$class_autoloads as $namespace => $dir ) {
            $namespace = $prefix . $namespace;

            if ( strpos( $class, $namespace ) === 0 ) {
                $class = str_replace( $namespace, '', $class );
                $class = str_replace( '\\', DIRECTORY_SEPARATOR, $class ) . '.php';
                $path = get_template_directory() . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $class;

                if ( is_readable( $path ) ) {
                    require_once( $path );
                }
            }
        }
    }
}

\HTSA\Codestartechnologies\WordpressThemeStarter\WTSAutoLoader::autoload();
