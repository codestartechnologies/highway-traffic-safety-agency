<?php
/**
 * This file contains general helper functions used in creating your theme
 *
 * @author      Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license     https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
 * @link        https://github.com/codestartechnologies/highway-traffic-security-agency
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
        $symbol = ( ! empty( $value ) ) ? HTSA_PENALTY_CURRENCY_SYMBOL : null;
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
