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
