<?php
/**
 * HTSATagCloudWidget class file.
 *
 * This is file contains HTSATagCloudWidget class for registering tag cloud widgets.
 *
 * @package    HighwayTrafficSecurityAgency
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link       https://github.com/codestartechnologies/highway-traffic-security-agency
 * @since      1.0.0
 */

namespace HTSA\WTS_Theme\App\Public\Widgets;

use HTSA\Codestartechnologies\WordpressThemeStarter\Traits\PageViewLoader;
use WP_Widget;

if ( ! class_exists( 'HTSATagCloudWidget' ) ) {
    /**
     * HTSATagCloudWidget Class
     *
     * @package HighwayTrafficSecurityAgency
     * @author  Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class HTSATagCloudWidget extends WP_Widget
    {
        use PageViewLoader;

        /**
         * Widget ID
         * @since 1.0.0
         */
        public const ID_BASE = 'htsa_tag_cloud_widget';

        /**
         * Widget Name
         * @since 1.0.0
         */
        public const NAME = 'HTSA Tag Cloud';

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
                    'description'                   => __( 'A tag cloud widget', 'htsa' ),
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
            $instance = wp_parse_args( (array) $instance, array(
                'title'         => null,
                'taxonomy'      => null,
            ) );

            ob_start();

            $this->load_view( 'widgets.tag-cloud', array(
                'title'     => $instance['title'],
                'taxonomy'  => $instance['taxonomy'],
            ), 'public', false );

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
            $instance = wp_parse_args( (array) $instance, array(
                'title'         => sprintf( __( '%s', 'htsa' ), self::NAME ),
                'taxonomy'      => 'post_tag',
            ) );

            $taxonomies = get_taxonomies( array(), 'objects' );

            ob_start();

            printf(
                '
                    <p>
                        <label for="%1$s"> %4$s </label>
                        <input type="text" class="widefat" id="%1$s" name="%2$s" value="%3$s" />
                    </p>
                ',
                $this->get_field_id( 'title' ),
                $this->get_field_name( 'title' ),
                esc_attr( $instance['title'] ),
                esc_html__( 'Title:', 'htsa' ),
            );

            printf(
                '
                    <p>
                        <label for="%1$s"> %3$s </label>
                        <select class="widefat" id="%1$s" name="%2$s">
                ',
                $this->get_field_id( 'taxonomy' ),
                $this->get_field_name( 'taxonomy' ),
                esc_html__( 'Taxonomy:', 'htsa' ),
            );

            foreach ( $taxonomies as $taxonomy ) {
                printf(
                    '
                            <option value="%1$s" %2$s> %3$s </option>
                    ',
                    $taxonomy->name,
                    selected( $taxonomy->name, $instance['taxonomy'], false ),
                    $taxonomy->label
                );
            }

            printf(
                '
                        </select>
                    </p>
                ',
            );

            echo ob_get_clean();
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
            $new_instance = wp_parse_args( (array) $new_instance, array(
                'title'         => sprintf( __( '%s', 'htsa' ), self::NAME ),
                'taxonomy'      => 'post_tag',
            ) );

            $instance['title'] = sanitize_text_field( $new_instance['title'] );
            $instance['taxonomy'] = sanitize_text_field( $new_instance['taxonomy'] );
            return $instance;
        }
    }
}
