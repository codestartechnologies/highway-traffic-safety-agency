<?php
/**
 * HTSAVideoWidget class file.
 *
 * This is file contains HTSAVideoWidget class for registering card widgets.
 *
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link       https://codestar.com.ng
 * @since      1.0.0
 */

namespace WTS_Theme\App\Public\Widgets;

use Codestartechnologies\WordpressThemeStarter\Traits\PageViewLoader;
use WP_Widget;

if ( ! class_exists( 'HTSAVideoWidget' ) ) {
    /**
     * HTSAVideoWidget Class
     *
     * @author Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class HTSAVideoWidget extends WP_Widget
    {
        use PageViewLoader;

        /**
         * Widget ID
         * @since 1.0.0
         */
        public const ID_BASE = 'htsa_video_widget';

        /**
         * Widget Name
         * @since 1.0.0
         */
        public const NAME = 'HTSA Video';

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
                    'description'                   => __( 'A video widget' ),
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
                'video_url'     => null,
                'video_cover'   => null,
            ) );

            ob_start();

            $this->load_view( 'widgets.video', array(
                'title'         => $instance['title'],
                'video_url'     => $instance['video_url'],
                'video_cover'   => $instance['video_cover'],
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
                'video_url'     => null,
                'video_cover'   => WTS_THEME_URI . 'assets/images/image.png',
            ) );

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
                        <label for="%1$s"> %4$s </label>
                        <input type="url" class="widefat" id="%1$s" name="%2$s" value="%3$s" />
                    </p>
                ',
                $this->get_field_id( 'video_url' ),
                $this->get_field_name( 'video_url' ),
                esc_attr( $instance['video_url'] ),
                esc_html__( 'Video Link URL:', 'htsa' ),
            );

            printf(
                '
                    <p>
                        <label for="%1$s"> %4$s </label>
                        <input type="url" class="widefat" id="%1$s" name="%2$s" value="%3$s" />
                    </p>
                ',
                $this->get_field_id( 'video_cover' ),
                $this->get_field_name( 'video_cover' ),
                esc_attr( $instance['video_cover'] ),
                esc_html__( 'Video Cover Image:', 'htsa' ),
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
                'video_url'     => null,
                'video_cover'   => WTS_THEME_URI . 'assets/images/image.png',
            ) );

            $instance['title'] = sanitize_text_field( $new_instance['title'] );
            $instance['video_url'] = esc_url( $new_instance['video_url'] );
            $instance['video_cover'] = esc_url( $new_instance['video_cover'] );
            return $instance;
        }
    }
}