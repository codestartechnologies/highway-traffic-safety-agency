<?php
/**
 * HTSARecentPostsWidget class file.
 *
 * This is file contains HTSARecentPostsWidget class for registering widgets to display recent posts.
 *
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link       https://github.com/codestartechnologies/highway-traffic-security-agency
 * @since      1.0.0
 */

namespace WTS_Theme\App\Public\Widgets;

use Codestartechnologies\WordpressThemeStarter\Traits\PageViewLoader;
use WP_Widget;

if ( ! class_exists( 'HTSARecentPostsWidget' ) ) {
    /**
     * HTSARecentPostsWidget Class
     *
     * @author Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class HTSARecentPostsWidget extends WP_Widget
    {
        use PageViewLoader;

        /**
         * Widget ID
         * @since 1.0.0
         */
        public const ID_BASE = 'htsa_recent_posts_widget';

        /**
         * Widget Name
         * @since 1.0.0
         */
        public const NAME = 'HTSA Recent Posts';

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
                    'description'                   => __( 'A recent posts widget', 'htsa' ),
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
                'post_type'     => null,
                'post_count'    => null,
                'show_image'    => 'yes',
            ) );

            $recent_posts = wp_get_recent_posts( array(
                'numberposts'   => $instance['post_count'],
                'post_type'     => $instance['post_type'],
                'post_status'   => 'publish',
            ), 'OBJECT' );

            ob_start();

            $this->load_view( 'widgets.recent-posts', array(
                'title'         => $instance['title'],
                'recent_posts'  => $recent_posts,
                'show_image'    => $instance['show_image'],
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
                'post_type'     => 'post',
                'post_count'    => 5,
                'show_image'    => null,
            ) );

            $post_types = get_post_types( array(), 'objects' );

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
                $this->get_field_id( 'post_type' ),
                $this->get_field_name( 'post_type' ),
                esc_html__( 'Post Type:', 'htsa' ),
            );

            foreach ( $post_types as $post_type ) {
                printf(
                    '
                            <option value="%1$s" %2$s> %3$s </option>
                    ',
                    esc_attr( $post_type->name ),
                    selected( $post_type->name, $instance['post_type'], false ),
                    $post_type->label
                );
            }

            printf(
                '
                        </select>
                    </p>
                ',
            );

            printf(
                '
                    <p>
                        <label for="%1$s"> %4$s </label>
                        <input type="number" class="widefat" id="%1$s" name="%2$s" value="%3$s" min="1" max="20" />
                    </p>
                ',
                $this->get_field_id( 'post_count' ),
                $this->get_field_name( 'post_count' ),
                esc_attr( $instance['post_count'] ),
                esc_html__( 'Count:', 'htsa' ),
            );

            printf(
                '
                    <p>
                        <label for="%1$s"> %3$s </label>
                        <input type="checkbox" class="widefat" id="%1$s" name="%2$s" value="yes" %4$s />
                    </p>
                ',
                $this->get_field_id( 'show_image' ),
                $this->get_field_name( 'show_image' ),
                esc_html__( 'Show post image?', 'htsa' ),
                checked( $instance['show_image'], 'yes', false )
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
                'post_type'     => 'post',
                'post_count'    => 5,
                'show_image'    => null,
            ) );

            $instance['title'] = sanitize_text_field( $new_instance['title'] );
            $instance['post_type'] = sanitize_text_field( $new_instance['post_type'] );
            $instance['post_count'] = filter_var( $new_instance['post_count'], FILTER_SANITIZE_NUMBER_INT );
            $instance['show_image'] = sanitize_text_field( $new_instance['show_image'] );
            return $instance;
        }
    }
}
