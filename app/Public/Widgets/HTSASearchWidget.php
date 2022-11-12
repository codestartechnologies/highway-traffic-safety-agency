<?php
/**
 * HTSASearchWidget class file.
 *
 * This is file contains HTSASearchWidget class for registering search form widgets.
 *
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link       https://codestar.com.ng
 * @since      1.0.0
 */

namespace WTS_Theme\App\Public\Widgets;

use Codestartechnologies\WordpressThemeStarter\Traits\PageViewLoader;
use WP_Widget;

if ( ! class_exists( 'HTSASearchWidget' ) ) {
    /**
     * HTSASearchWidget Class
     *
     * @author Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class HTSASearchWidget extends WP_Widget
    {
        use PageViewLoader;

        /**
         * Widget ID
         * @since 1.0.0
         */
        public const ID_BASE = 'htsa_search_widget';

        /**
         * Widget Name
         * @since 1.0.0
         */
        public const NAME = 'HTSA Search';

        /**
         * Support for wordpress versions less than 5.8
         *
         * @var boolean
         * @since 1.0.0
         */
        public $show_instance_in_rest = true;

        /**
         * Widget constructor
         *
         * Register widget with WordPress.
         *
         * @access public
         * @return void
         * @since 1.0.0
         */
        public function __construct()
        {
            parent::__construct(
                self::ID_BASE,
                sprintf( __( '%s', 'htsa' ), self::NAME ),
                array(
                    'description'                   => __( 'A search widget', 'htsa' ),
                    'customize_selective_refresh'   => true,
                    'show_instance_in_rest'         => true,
                )
            );
        }

        /**
         * Front-end display of widget.
         *
         * @see WP_Widget::widget()
         * @access public
         * @param array $args Widget arguments.
         * @param array $instance Saved values from database.
         * @return void
         * @since 1.0.0
         */
        public function widget( $args, $instance )
        {
            $instance = wp_parse_args( (array) $instance, array() );

            ob_start();

            $this->load_view( 'widgets.search', array(), 'public', false );

            echo ob_get_clean();
        }

        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         * @access public
         * @param array $instance Previously saved values from database.
         * @return void
         * @since 1.0.0
         */
        public function form( $instance )
        {
            $instance = wp_parse_args( (array) $instance, array() );
        }

        /**
         * Sanitize widget form values as they are saved.
         *
         * @see WP_Widget::update()
         * @access public
         * @param array $new_instance Values just sent to be saved.
         * @param array $old_instance Previously saved values from database.
         * @return void
         * @since 1.0.0
         */
        public function update( $new_instance, $old_instance )
        {
            $instance = $old_instance;
            $new_instance = wp_parse_args( (array) $new_instance, array() );
            return $instance;
        }
    }
}
