<?php
/**
 * This file contains general helper functions used in creating your theme
 *
 * @author      Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license     https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
 * @link        https://github.com/codestartechnologies/wordpress-theme-starter
 */

if ( ! function_exists( 'htsa_money_format' ) ) {
    /**
     * Formats the numeric value to a currency format to be displayed on the penalties post type archive page
     *
     * @param int $value  The value to format
     * @return string
     * @since 1.0.0
     */
    function htsa_money_format( int $value ) : string
    {
        $symbol = ( ! empty( $value ) ) ? get_theme_mod( 'htsa_penaltiespage_currency_symbol', '₦' ) : null;
        $fine = ( ! empty( $value ) ) ? number_format_i18n( $value, 2 ) : null;
        return $symbol . $fine;
    }
}

if ( ! function_exists( 'htsa_trim_string' ) ) {
    /**
     * Trims a string according to a maximum length
     *
     * @param string|null $string   The string to trim
     * @param int $length           The maximum string length
     * @param string $more          Value to appended to string when it is trimmed
     * @return string
     * @since 1.0.0
     */
    function htsa_trim_string( ?string $string, int $length, string $more = '...' ) : string
    {
        $more = ( strlen( $string ) > $length ) ? $more : null;
        return substr( $string, 0, $length ) . $more;
    }
}

if ( ! function_exists( 'htsa_store_session_data' ) ) {
    /**
     * Store data in wp session
     *
     * @param string $key
     * @param mixed $value
     * @param int $expire
     * @return void
     * @since 1.0.0
     */
    function htsa_store_session_data( string $key, mixed $value, int $expire ) : void
    {
        $wp_session = WP_Session_Tokens::get_instance( get_current_user_id() );
        $wp_session->update( $key, array(
            'expiration'    => $expire,
            'message'       => $value,
        ) );
    }
}

if ( ! function_exists( 'htsa_get_session_data' ) ) {
    /**
     * Retrieve data from wp session
     *
     * @param string $key
     * @return mixed
     * @since 1.0.0
     */
    function htsa_get_session_data( string $key ) : mixed
    {
        $wp_session = WP_Session_Tokens::get_instance( get_current_user_id() );
        $value = $wp_session->get( $key );
        return ( is_array( $value ) ) ? $value['message'] : null;
    }
}

if ( ! function_exists( 'htsa_destroy_session_data' ) ) {
    /**
     * Remove data from wp session
     *
     * @param string $key
     * @return void
     * @since 1.0.0
     */
    function htsa_destroy_session_data( string $key ) : void
    {
        $wp_session = WP_Session_Tokens::get_instance( get_current_user_id() );
        $wp_session->destroy( $key );
    }
}

if ( ! function_exists( 'htsa_get_license_api_response' ) ) {
    /**
     * Decode and translate API response
     *
     * @param mixed $response
     * @return array
     * @since 1.0.0
     */
    function htsa_get_license_api_response( mixed $response ) : array
    {
        $message = array();

        switch ( $response ) {
            case 'invalid user credentials':
                $message['type'] = 'error';
                $message['message'] = sprintf( __( '<b>%s</b>: License settings are invalid! Check your license key and access key', 'htsa' ), HTSA_THEME_NAME );
                break;

            case 'unknown license key':
            case 'invalid license key':
                $message['type'] = 'error';
                $message['message'] = sprintf( __( '<b>%s</b>: License key is invalid! Contact support', 'htsa' ), HTSA_THEME_NAME );
                break;

            case 'unactivated license key':
                $message['type'] = 'error';
                $message['message'] = sprintf( __( '<b>%s</b>: License key has not yet been activated!', 'htsa' ), HTSA_THEME_NAME );
                break;

            case 'expired license key':
                $message['type'] = 'error';
                $message['message'] = sprintf( __( '<b>%s</b>: License key is expired! Contact support', 'htsa' ), HTSA_THEME_NAME );
                break;

            case 'valid license key':
                $message['type'] = 'success';
                $message['message'] = sprintf( __( '<b>%s</b>: License key is valid', 'htsa' ), HTSA_THEME_NAME );
                break;

            case 'license key activated':
                $message['type'] = 'success';
                $message['message'] = sprintf( __( '<b>%s</b>: License key activated successfully', 'htsa' ), HTSA_THEME_NAME );
                break;

            case 'license key deactivated':
                $message['type'] = 'success';
                $message['message'] = sprintf( __( '<b>%s</b>: License key deactivated successfully', 'htsa' ), HTSA_THEME_NAME );
                break;

            case 'invalid license key domain':
                $message['type'] = 'error';
                $message['message'] = sprintf( __( '<b>%s</b>: License key cannot be deactivated from this website domain', 'htsa' ), HTSA_THEME_NAME );
                break;

            case 'license key activation limited':
                $message['type'] = 'error';
                $message['message'] = sprintf( __( '<b>%s</b>: You have reached the maximum activation limit for license key', 'htsa' ), HTSA_THEME_NAME );
                break;

            case 'too much requests':
                $message['type'] = 'error';
                $message['message'] = sprintf( __( '<b>%s</b>: You\'ve made too much request to API, try again in one hour time', 'htsa' ), HTSA_THEME_NAME );
                break;

            case 'activation error':
            case 'deactivation error':
                $message['type'] = 'error';
                $message['message'] = sprintf( __( '<b>%s</b>: An error occured with deactivation/activation! Refresh page and try again', 'htsa' ), HTSA_THEME_NAME );
                break;

            case 'error':
                $message['type'] = 'error';
                $message['message'] = sprintf( __( '<b>%s</b>: An error occured! Refresh page and try again. Or contact plugin author', 'htsa' ), HTSA_THEME_NAME );
                break;

            default:
                $message['type'] = 'error';
                $message['message'] = sprintf( __( '<b>%s</b>: Could not make API request. Unknown error occured!', 'htsa' ), HTSA_THEME_NAME );
        }

        return $message;
    }
}

if ( ! function_exists( 'htsa_license_api_notice' ) ) {
    /**
     * Prints out API response message
     *
     * @param mixed $response
     * @return void
     * @since 1.0.0
     */
    function htsa_license_api_notice( mixed $response ) : void
    {
        $message = htsa_get_license_api_response( $response );
        printf( '<div class="notice notice-%1$s"><p>%2$s</p></div>', $message['type'], $message['message'] );
    }
}