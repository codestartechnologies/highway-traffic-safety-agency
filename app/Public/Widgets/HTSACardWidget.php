<?php
/**
 * HTSACardWidget class file.
 *
 * This is file contains HTSACardWidget class for registering card widgets.
 *
 * @author     Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @link       https://github.com/codestartechnologies/highway-traffic-security-agency
 * @since      1.0.0
 */

namespace WTS_Theme\App\Public\Widgets;

use Codestartechnologies\WordpressThemeStarter\Traits\PageViewLoader;
use WP_Widget;

if ( ! class_exists( 'HTSACardWidget' ) ) {
    /**
     * WTSWidget Class
     *
     * @author Chijindu Nzeako <chijindunzeako517@gmail.com>
     */
    final class HTSACardWidget extends WP_Widget
    {
        use PageViewLoader;

        /**
         * Widget ID
         * @since 1.0.0
         */
        public const ID_BASE = 'htsa_card_widget';

        /**
         * Widget Name
         * @since 1.0.0
         */
        public const NAME = 'HTSA Card';

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
                    'description'                   => __( 'A card widget' ),
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
                'image_url'     => null,
                'title'         => null,
                'description'   => null,
                'action_text'   => null,
                'action_url'    => null,
            ) );

            ob_start();

            echo $args['before_widget'];

            get_template_part( 'template-parts/parts/widget', 'card', array(
                'image_url'     => ( $instance['image_url'] ) ? wp_get_attachment_image_url( $instance['image_url'], 'htsa-small' ) : null,
                'title'         => $instance['title'],
                'description'   => $instance['description'],
                'action_text'   => $instance['action_text'],
                'action_url'    => $instance['action_url'],
            ) );

            echo $args['after_widget'];

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
                'image_url'     => null,
                'title'         => sprintf( __( '%s', 'htsa' ), self::NAME ),
                'description'   => null,
                'action_text'   => null,
                'action_url'    => null,
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
                        <textarea class="widefat" id="%1$s" name="%2$s">%3$s</textarea>
                    </p>
                ',
                $this->get_field_id( 'description' ),
                $this->get_field_name( 'description' ),
                esc_html( $instance['description'] ),
                esc_html__( 'Description:', 'htsa' ),
            );

            printf(
                '
                    <p>
                        <label for="%1$s"> %4$s </label>
                        <input type="text" class="widefat" id="%1$s" name="%2$s" value="%3$s" />
                    </p>
                ',
                $this->get_field_id( 'action_text' ),
                $this->get_field_name( 'action_text' ),
                esc_attr( $instance['action_text'] ),
                esc_html__( 'Link Label:', 'htsa' ),
            );

            printf(
                '
                    <p>
                        <label for="%1$s"> %4$s </label>
                        <input type="url" class="widefat" id="%1$s" name="%2$s" value="%3$s" />
                    </p>
                ',
                $this->get_field_id( 'action_url' ),
                $this->get_field_name( 'action_url' ),
                esc_attr( $instance['action_url'] ),
                esc_html__( 'Link URL:', 'htsa' ),
            );

            printf(
                '
                <div data-htsa-id="card-media-wrap" class="media-widget-control">
                    <input data-htsa-id="wp_media_upload_image_input" type="hidden" id="%1$s" name="%2$s" value="%3$s" />
                    <div data-htsa-id="wp_media_upload_image" class="media-widget-preview media_image">%6$s</div>
                    <br />
                    <div class="attachment-media-view %7$s">
                        <p>
                            <button type="button" class="select-media button-add-media not-selected" data-htsa-id="wp_media_upload">%4$s</button>
                        </p>
                    </div>
                    <p class="htsa-media-button-wrapper %7$s">
                        <button type="button" class="button" data-htsa-id="wp_media_upload">%5$s</button>
                    </p>
                </div>
                ',
                $this->get_field_id( 'image_url' ),
                $this->get_field_name( 'image_url' ),
                $instance['image_url'],
                esc_html__( 'Add Image', 'htsa' ),
                esc_html__( 'Replace Image', 'htsa' ),
                ( $instance['image_url'] ) ? wp_get_attachment_image( $instance['image_url'] ) : null,
                ( $instance['image_url'] ) ? 'htsa-hidden-1' : 'htsa-hidden-2'
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
                'image_url'     => null,
                'title'         => sprintf( __( '%s', 'htsa' ), self::NAME ),
                'description'   => null,
                'action_text'   => null,
                'action_url'    => null,
            ) );

            $instance['image_url'] = sanitize_text_field( $new_instance['image_url'] );
            $instance['title'] = sanitize_text_field( $new_instance['title'] );
            $instance['description'] = sanitize_text_field( $new_instance['description'] );
            $instance['action_text'] = sanitize_text_field( $new_instance['action_text'] );
            $instance['action_url'] = esc_url( $new_instance['action_url'] );
            return $instance;
        }
    }
}
