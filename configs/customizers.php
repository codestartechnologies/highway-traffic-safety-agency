<?php
/**
 * This file contains configuration settings for registering customizer sections, settings and controls
 *
 * @author      Chijindu Nzeako <chijindunzeako517@gmail.com>
 * @license     https://www.gnu.org/licenses/agpl-3.0.txt GNU/AGPLv3
 * @link        https://github.com/codestartechnologies/wordpress-theme-starter
 */

return array(
    /**
     * Initial values to create "WordPress Theme Starter - Footer Menu Two" customizer section.
     */
    'wts_customizer'  => array(

        'sections'  => array(

            array(

                'id'    => 'wts_footer_menu_2_section',

                'args'  => array(

                    'title'                 => esc_html__( 'WordPress Theme Starter - Footer Menu Two', 'wts' ),

                    'description'           => esc_html__( 'Section for customizing "Footer Menu Two" on all pages.', 'wts' ),

                    'active_callback'       => 'wts_footer_menu_2_section_cb',

                    'description_hidden'    => false,
                ),
            ),
        ),

        'settings'  => array(

            array(

                'id'    => 'wts_footer_menu_2_active',

                'args'  => array(

                    'default'           => 'yes',

                    'transport'         => 'refresh', //postMessage

                    'validate_callback' => 'wts_footer_menu_2_active_validate_callback',

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),
        ),

        'controls'  => array(

            array(

                'id'    => 'wts_footer_menu_2_active_control',

                'args'  => array(

                    'settings'          => 'wts_footer_menu_2_active',

                    'section'           => 'wts_footer_menu_2_section',

                    'label'             => esc_html__( 'Footer Menu Two Visibility', 'wts' ),

                    'description'       => esc_html__( 'Choose the visibility of "Footer Menu Two" nav menu on all pages".', 'wts' ),

                    'choices'           => array(

                        'yes'   => esc_html__( 'Yes (Make Visible)', 'wts' ),

                        'no'    => esc_html__( 'No (Hide on all pages)', 'wts' ),
                    ),

                    'type'              => 'select',

                    'active_callback'   => 'wts_footer_menu_2_active_control_active_cb',
                ),
            ),

            /**
             * Other control configuration setttings are listed below
             *
             */

            /**
             * Media control
            */
            array(

                'id'    => '',

                'args'  => array(

                    'settings'          => '',

                    'section'           => '',

                    'label'             => '',

                    'description'       => '',

                    'active_callback'   => '',

                    'mime_type'         => 'image',
                ),

                'control_customizer'    => 'media_control',
            ),

            /**
             * Checkbox control
             */
            array(

                'id'    => '',

                'args'  => array(

                    'settings'          => '',

                    'section'           => '',

                    'label'             => '',

                    'type'              => 'checkbox',

                    'active_callback'   => '',
                ),
            ),

            /**
             * Number control
             */
            array(

                'id'    => '',

                'args'  => array(

                    'settings'          => '',

                    'section'           => '',

                    'label'             => '',

                    'description'       => '',

                    'type'              => 'number',

                    'active_callback'   => '',
                ),
            ),

            /**
             * Text control
             */
            array(

                'id'    => '',

                'args'  => array(

                    'settings'          => '',

                    'section'           => '',

                    'label'             => '',

                    'input_attrs'       => array(

                        'placeholder'   => '',
                    ),

                    'type'              => 'text',

                    'active_callback'   => '',
                ),
            ),

            /**
             * Textarea control
             */
            array(

                'id'    => '',

                'args'  => array(

                    'settings'          => '',

                    'section'           => '',

                    'label'             => '',

                    'type'              => 'textarea',

                    'active_callback'   => '',
                ),
            ),

            /**
             * URL control
             */
            array(

                'id'    => '',

                'args'  => array(

                    'settings'          => '',

                    'section'           => '',

                    'label'             => '',

                    'type'              => 'url',

                    'input_attrs'       => array(

                        'placeholder'   => 'https://',
                    ),

                    'active_callback'   => '',
                ),
            ),

            /**
             * Email control
             */
            array(

                'id'    => '',

                'args'  => array(

                    'settings'          => '',

                    'section'           => '',

                    'label'             => '',

                    'input_attrs'       => array(

                        'placeholder'   => '',
                    ),

                    'type'              => 'email',

                    'active_callback'   => '',
                ),
            ),
        ),
    ),

    /**
     * Initial values to create site front page customizer settings.
     */
    'frontpage'  => array(

        'sections'  => array(

        ),

        'settings'  => array(

            /**
             * Settings for header ADS custom html
             */
            array(

                'id'    => 'htsa_frontpage_header_ads_html',

                'args'  => array(

                    'default'           => '<div class="ui mx-auto banner test ad" data-text="468 X 60 AD"></div>',

                    'validate_callback' => null,

                    'sanitize_callback' => null,
                ),
            ),

            /**
             * Settings for resources logo visibility
             */
            array(

                'id'    => 'htsa_resources_logo_visible',

                'args'  => array(

                    'transport'         => 'refresh', //postMessage

                    'validate_callback' => null,

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for resources section title
             */
            array(

                'id'    => 'htsa_resources_section_title',

                'args'  => array(

                    'default'           => esc_html__( 'Resources', 'htsa' ),

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page carousel image one
             */
            array(

                'id'    => 'htsa_frontpage_carousel_image_1',

                'args'  => array(

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page carousel image two
             */
            array(

                'id'    => 'htsa_frontpage_carousel_image_2',

                'args'  => array(

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page carousel image three
             */
            array(

                'id'    => 'htsa_frontpage_carousel_image_3',

                'args'  => array(

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page carousel image four
             */
            array(

                'id'    => 'htsa_frontpage_carousel_image_4',

                'args'  => array(

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page mayor's image
             */
            array(

                'id'    => 'htsa_mayor_image',

                'args'  => array(

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page mayor's address
             */
            array(

                'id'    => 'htsa_mayor_address',

                'args'  => array(

                    'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A dicta, veritatis eius consequuntur cumque commodi architecto mollitia perspiciatis?',

                    'validate_callback' => 'htsa_mayor_address_validate_callback',

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page mayor's name
             */
            array(

                'id'    => 'htsa_mayor_name',

                'args'  => array(

                    'default'           => 'Charles Chukwuma Soludo',

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page mayor's tag title
             */
            array(

                'id'    => 'htsa_mayor_title',

                'args'  => array(

                    'default'           => 'Mayor, Anambra State',

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page contact banner header
             */
            array(

                'id'    => 'htsa_frontpage_contact_banner_header',

                'args'  => array(

                    'default'           => esc_html__( 'Have a safety problem?', 'htsa' ),

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page contact banner text
             */
            array(

                'id'    => 'htsa_frontpage_contact_banner_text',

                'args'  => array(

                    'default'           => esc_html__( 'Report a problem with your vehicle, tires, car seats or other equipment. We review every problem as we work to keep our roads safe.', 'htsa' ),

                    'validate_callback' => 'htsa_mayor_address_validate_callback',

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page contact banner image
             */
            array(

                'id'    => 'htsa_frontpage_contact_banner_image',

                'args'  => array(

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page MD address title
             */
            array(

                'id'    => 'htsa_frontpage_md_address_title',

                'args'  => array(

                    'default'           => esc_html__( 'Welcome Address By The M.D', 'htsa' ),

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page MD address content
             */
            array(

                'id'    => 'htsa_frontpage_md_address_text',

                'args'  => array(

                    'default'           => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, quis accusamus voluptates optio veritatis adipisci deleniti? Perspiciatis ipsum facilis aperiam corporis pariatur excepturi sed unde voluptate, nesciunt, aut deserunt error!\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati iure laborum dolores officia perspiciatis inventore. Natus ratione alias eaque culpa nulla, cupiditate odit ab, qui, pariatur accusamus eum consectetur maxime.\n\n Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias voluptates aliquam consequatur? Quas distinctio modi eligendi laboriosam deserunt tempora id quaerat reiciendis? Ea nesciunt blanditiis repellendus beatae neque, unde tempore!",

                    'validate_callback' => 'htsa_mayor_address_validate_callback',

                    'sanitize_callback' => 'wp_kses_post',
                ),
            ),

            /**
             * Settings for front page MD address date
             */
            array(

                'id'    => 'htsa_frontpage_md_address_date',

                'args'  => array(

                    'default'           => time(),

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page MD image
             */
            array(

                'id'    => 'htsa_frontpage_md_image',

                'args'  => array(

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page MD name
             */
            array(

                'id'    => 'htsa_frontpage_md_name',

                'args'  => array(

                    'default'           => 'Okonkwo Emeka (KontiKomplete)',

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page MD tag title
             */
            array(

                'id'    => 'htsa_frontpage_md_tag_title',

                'args'  => array(

                    'default'           => esc_html__( 'Commisioner, H.T.S.A', 'htsa' ),

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page survial alert background image
             */
            array(

                'id'    => 'htsa_frontpage_survial_image',

                'args'  => array(

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page survial alert small heading
             */
            array(

                'id'    => 'htsa_frontpage_survial_small_heading',

                'args'  => array(

                    'default'           => esc_html__( 'don\'t drink and drive', 'htsa' ),

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page survial alert big heading
             */
            array(

                'id'    => 'htsa_frontpage_survial_big_heading',

                'args'  => array(

                    'default'           => esc_html__( 'save your life and the life of your family', 'htsa' ),

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page survial alert action text
             */
            array(

                'id'    => 'htsa_frontpage_survial_action_text',

                'args'  => array(

                    'default'           => esc_html__( 'Watch the video', 'htsa' ),

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page survial alert action url
             */
            array(

                'id'    => 'htsa_frontpage_survial_action_url',

                'args'  => array(

                    'sanitize_callback' => 'esc_url',
                ),
            ),

            /**
             * Settings for front page statistics label 1
             */
            array(

                'id'    => 'htsa_frontpage_stat_label_1',

                'args'  => array(

                    'default'           => esc_html__( 'lives lost on N.G roads in 2022', 'htsa' ),

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page statistics value 1
             */
            array(

                'id'    => 'htsa_frontpage_stat_value_1',

                'args'  => array(

                    'default'           => 38824,

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page statistics label 2
             */
            array(

                'id'    => 'htsa_frontpage_stat_label_2',

                'args'  => array(

                    'default'           => esc_html__( 'drunk-driving fatalities', 'htsa' ),

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page statistics value 2
             */
            array(

                'id'    => 'htsa_frontpage_stat_value_2',

                'args'  => array(

                    'default'           => 11654,

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page statistics label 3
             */
            array(

                'id'    => 'htsa_frontpage_stat_label_3',

                'args'  => array(

                    'default'           => esc_html__( 'speeding related traffic deaths', 'htsa' ),

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page statistics value 3
             */
            array(

                'id'    => 'htsa_frontpage_stat_value_3',

                'args'  => array(

                    'default'           => 11258,

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for openstreetmap data url
             */
            array(

                'id'    => 'htsa_openstreetmap_dataurl',

                'args'  => array(

                    'default'           => 'https://www.openstreetmap.org/export/embed.html?bbox=6.767621040344239%2C6.1420908684318505%2C6.81551456451416%2C6.165984967926472&amp;layer=mapnik&amp;marker=6.154038052480665%2C6.791567802429199',

                    'sanitize_callback' => 'esc_url',
                ),
            ),

            /**
             * Settings for front page about section title
             */
            array(

                'id'    => 'htsa_frontpage_about_section_title',

                'args'  => array(

                    'default'           => esc_html__( 'About Us', 'htsa' ),

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Settings for front page about section text
             */
            array(

                'id'    => 'htsa_frontpage_about_section_text',

                'args'  => array(

                    'default'           => esc_html__( 'A short description of the website...', 'htsa' ),

                    'validate_callback' => 'htsa_mayor_address_validate_callback',

                    'sanitize_callback' => 'wp_kses_post',
                ),
            ),
        ),

        'controls'  => array(

            /**
             * Control for header ADS custom html
             */
            array(

                'id'    => 'htsa_frontpage_header_ads_html_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_header_ads_html',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'ADs HTML Code', 'htsa' ),

                    'description'       => esc_html__( 'Custom ADs html code shown in the top header, beside the site tag line ', 'htsa' ),

                    'type'              => 'textarea',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for resources logo visibility
             */
            array(

                'id'    => 'htsa_resources_logo_visible_control',

                'args'  => array(

                    'settings'          => 'htsa_resources_logo_visible',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Show Image On Resources Sidebar Card Widgets?', 'htsa' ),

                    'description'       => esc_html__( 'Choose if card logo in resources can be visible.', 'htsa' ),

                    'type'              => 'checkbox',

                    'active_callback'   => 'htsa_resources_logo_visible_control_active_cb',
                ),
            ),

            /**
             * Control for resources section title
             */
            array(

                'id'    => 'htsa_resources_section_title_control',

                'args'  => array(

                    'settings'          => 'htsa_resources_section_title',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Resources Sidebar Section Title', 'htsa' ),

                    'type'              => 'text',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page carousel image one
            */
            array(

                'id'    => 'htsa_frontpage_carousel_image_1_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_carousel_image_1',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Carousel Image One', 'htsa' ),

                    'active_callback'   => 'is_front_page',

                    'mime_type'         => 'image',
                ),

                'control_customizer'    => 'media_control',
            ),

            /**
             * Control for front page carousel image two
            */
            array(

                'id'    => 'htsa_frontpage_carousel_image_2_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_carousel_image_2',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Carousel Image Two', 'htsa' ),

                    'active_callback'   => 'is_front_page',

                    'mime_type'         => 'image',
                ),

                'control_customizer'    => 'media_control',
            ),

            /**
             * Control for front page carousel image three
            */
            array(

                'id'    => 'htsa_frontpage_carousel_image_3_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_carousel_image_3',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Carousel Image Two', 'htsa' ),

                    'active_callback'   => 'is_front_page',

                    'mime_type'         => 'image',
                ),

                'control_customizer'    => 'media_control',
            ),

            /**
             * Control for front page carousel image four
            */
            array(

                'id'    => 'htsa_frontpage_carousel_image_4_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_carousel_image_4',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Carousel Image Four', 'htsa' ),

                    'active_callback'   => 'is_front_page',

                    'mime_type'         => 'image',
                ),

                'control_customizer'    => 'media_control',
            ),

            /**
             * Control for front page mayor's image
            */
            array(

                'id'    => 'htsa_mayor_image_control',

                'args'  => array(

                    'settings'          => 'htsa_mayor_image',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Mayor\'s Image', 'htsa' ),

                    'active_callback'   => 'is_front_page',

                    'mime_type'         => 'image',
                ),

                'control_customizer'    => 'media_control',
            ),

            /**
             * Control for front page mayor's address
             */
            array(

                'id'    => 'htsa_mayor_address_control',

                'args'  => array(

                    'settings'          => 'htsa_mayor_address',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Mayor\'s Address', 'htsa' ),

                    'description'       => esc_html__( 'A short address by the mayor relating to the organization.', 'htsa' ),

                    'type'              => 'textarea',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page mayor's name
             */
            array(

                'id'    => 'htsa_mayor_name_control',

                'args'  => array(

                    'settings'          => 'htsa_mayor_name',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Mayor\'s Name', 'htsa' ),

                    'input_attrs'       => array(

                        'placeholder'   => 'John Doe',
                    ),

                    'type'              => 'text',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page mayor's tag title
             */
            array(

                'id'    => 'htsa_mayor_title_control',

                'args'  => array(

                    'settings'          => 'htsa_mayor_title',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Tag Title', 'htsa' ),

                    'input_attrs'       => array(

                        'placeholder'   => 'Mayor, Anambra State',
                    ),

                    'type'              => 'text',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page contact banner header
             */
            array(

                'id'    => 'htsa_frontpage_contact_banner_header_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_contact_banner_header',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Contact Banner Header', 'htsa' ),

                    'type'              => 'text',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page contact banner text
             */
            array(

                'id'    => 'htsa_frontpage_contact_banner_text_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_contact_banner_text',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Contact Banner Content', 'htsa' ),

                    'type'              => 'textarea',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page contact banner image
            */
            array(

                'id'    => 'htsa_frontpage_contact_banner_image_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_contact_banner_image',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Contact Banner Image', 'htsa' ),

                    'active_callback'   => 'is_front_page',

                    'mime_type'         => 'image',
                ),

                'control_customizer'    => 'media_control',
            ),

            /**
             * Control for front page MD address title
             */
            array(

                'id'    => 'htsa_frontpage_md_address_title_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_md_address_title',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Agency Head Address Title', 'htsa' ),

                    'type'              => 'text',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page MD address content
             */
            array(

                'id'    => 'htsa_frontpage_md_address_text_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_md_address_text',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Agency Head Address', 'htsa' ),

                    'type'              => 'textarea',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page MD address date
             */
            array(

                'id'    => 'htsa_frontpage_md_address_date_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_md_address_date',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Agency Head Address Date', 'htsa' ),

                    'type'              => 'date',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page MD image
            */
            array(

                'id'    => 'htsa_frontpage_md_image_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_md_image',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Agency Head Image', 'htsa' ),

                    'description'       => '',

                    'active_callback'   => 'is_front_page',

                    'mime_type'         => 'image',
                ),

                'control_customizer'    => 'media_control',
            ),

            /**
             * Control for front page MD name
             */
            array(

                'id'    => 'htsa_frontpage_md_name_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_md_name',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Agency Head Name', 'htsa' ),

                    'type'              => 'text',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page MD tag title
             */
            array(

                'id'    => 'htsa_frontpage_md_tag_title_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_md_tag_title',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Agency Head Tag Title', 'htsa' ),

                    'input_attrs'       => array(

                        'placeholder'   => esc_html__( 'Commisioner for road traffic management', 'htsa' ),
                    ),

                    'type'              => 'text',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page survial alert background image
            */
            array(

                'id'    => 'htsa_frontpage_survial_image_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_survial_image',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Survial Alert Banner Background Image', 'htsa' ),

                    'active_callback'   => 'is_front_page',

                    'mime_type'         => 'image',
                ),

                'control_customizer'    => 'media_control',
            ),

            /**
             * Control for front page survial alert small heading
             */
            array(

                'id'    => 'htsa_frontpage_survial_small_heading_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_survial_small_heading',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Survial Alert Banner Small Heading', 'htsa' ),

                    'type'              => 'text',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page survial alert big heading
             */
            array(

                'id'    => 'htsa_frontpage_survial_big_heading_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_survial_big_heading',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Survial Alert Banner Big Heading', 'htsa' ),

                    'type'              => 'text',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page survial alert action text
             */
            array(

                'id'    => 'htsa_frontpage_survial_action_text_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_survial_action_text',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Survial Alert Banner Action Text', 'htsa' ),

                    'input_attrs'       => array(

                        'placeholder'   => esc_html__( 'Watch Video', 'htsa' ),
                    ),

                    'type'              => 'text',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page survial alert action url
             */
            array(

                'id'    => 'htsa_frontpage_survial_action_url_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_survial_action_url',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Survial Alert Banner Action URL', 'htsa' ),

                    'type'              => 'url',

                    'input_attrs'       => array(

                        'placeholder'   => 'https://',
                    ),

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page statistics label 1
             */
            array(

                'id'    => 'htsa_frontpage_stat_label_1_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_stat_label_1',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Statistics Label: One', 'htsa' ),

                    'type'              => 'text',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page statistics value 1
             */
            array(

                'id'    => 'htsa_frontpage_stat_value_1_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_stat_value_1',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Statistics Value: One', 'htsa' ),

                    'type'              => 'number',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page statistics label 2
             */
            array(

                'id'    => 'htsa_frontpage_stat_label_2_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_stat_label_2',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Statistics Label: Two', 'htsa' ),

                    'type'              => 'text',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page statistics value 2
             */
            array(

                'id'    => 'htsa_frontpage_stat_value_2_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_stat_value_2',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Statistics Value: Two', 'htsa' ),

                    'type'              => 'number',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page statistics label 3
             */
            array(

                'id'    => 'htsa_frontpage_stat_label_3_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_stat_label_3',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Statistics Label: Three', 'htsa' ),

                    'type'              => 'text',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page statistics value 3
             */
            array(

                'id'    => 'htsa_frontpage_stat_value_3_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_stat_value_3',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Statistics Value: Three', 'htsa' ),

                    'type'              => 'number',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for openstreetmap data url
             */
            array(

                'id'    => 'htsa_openstreetmap_dataurl_control',

                'args'  => array(

                    'settings'          => 'htsa_openstreetmap_dataurl',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'Openstreetmap data url', 'htsa' ),

                    'description'       => esc_html__( 'Url link generated from https://www.openstreetmap.org/', 'htsa' ),

                    'type'              => 'url',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page about section title
             */
            array(

                'id'    => 'htsa_frontpage_about_section_title_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_about_section_title',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'About Section Title', 'htsa' ),

                    'type'              => 'text',

                    'active_callback'   => 'is_front_page',
                ),
            ),

            /**
             * Control for front page about section text
             */
            array(

                'id'    => 'htsa_frontpage_about_section_text_control',

                'args'  => array(

                    'settings'          => 'htsa_frontpage_about_section_text',

                    'section'           => 'static_front_page',

                    'label'             => esc_html__( 'About Section Content', 'htsa' ),

                    'type'              => 'textarea',

                    'active_callback'   => 'is_front_page',
                ),
            ),

        ),
    ),

    /**
     * Initial values to create customizer settings for "Comments" section.
     */
    'comments'  => array(

        'sections'  => array(

            array(

                'id'    => 'htsa_comments_section',

                'args'  => array(

                    'title'                 => esc_html__( 'Comments', 'htsa' ),

                    'description'           => esc_html__( 'Customize post comments list.', 'htsa' ),

                    'active_callback'       => '_section_active_callback',

                    'description_hidden'    => false,
                ),
            ),
        ),

        'settings'  => array(

            /**
             * Setting for comments list template
             */
            array(

                'id'    => 'htsa_comments_list_template',

                'args'  => array(

                    'default'           => 'feed',

                    'transport'         => 'refresh', //postMessage

                    'validate_callback' => '_setting_validate_callback',

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),
        ),

        'controls'  => array(

            /**
             * Control for comments list template
             */
            array(

                'id'    => 'htsa_comments_list_template_control',

                'args'  => array(

                    'settings'          => 'htsa_comments_list_template',

                    'section'           => 'htsa_comments_section',

                    'label'             => esc_html__( 'Comments Template', 'htsa' ),

                    'description'       => esc_html__( 'Choose the template for displaying comments list.', 'htsa' ),

                    'choices'           => array(

                        'feed'      => esc_html__( 'Feed', 'htsa' ),

                        'comments'  => esc_html__( 'Comments', 'htsa' ),
                    ),

                    'type'              => 'select',

                    'active_callback'   => '_control_active_callback',
                ),
            ),
        ),
    ),

    /**
     * Initial values to create "Site Identity" customizer settings.
     */

    'site_identity' => array(

        'sections'  => array(

        ),

        'settings'  => array(

            /**
             * Setting for site facebook username
             */
            array(

                'id'    => 'htsa_facebook_slug',

                'args'  => array(

                    'transport'         => 'refresh', //postMessage

                    'validate_callback' => '_social_links_validate_callback',

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Setting for site twitter username
             */
            array(

                'id'    => 'htsa_twitter_slug',

                'args'  => array(

                    'transport'         => 'refresh', //postMessage

                    'validate_callback' => '_social_links_validate_callback',

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Setting for site instagram username
             */
            array(

                'id'    => 'htsa_instagram_slug',

                'args'  => array(

                    'transport'         => 'refresh', //postMessage

                    'validate_callback' => '_social_links_validate_callback',

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Setting for site youtube channel id
             */
            array(

                'id'    => 'htsa_youtube_slug',

                'args'  => array(

                    'transport'         => 'refresh', //postMessage

                    'validate_callback' => '_social_links_validate_callback',

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),
        ),

        'controls'  => array(

            /**
             * Control for site facebook username
             */
           array(

               'id'    => 'htsa_facebook_slug_control',

               'args'  => array(

                   'settings'          => 'htsa_facebook_slug',

                   'section'           => 'title_tagline',

                   'label'             => esc_html__( 'Site Facebook page username', 'htsa' ),

                   'type'              => 'text',

                   'active_callback'   => '_control_active_callback',
               ),
           ),

            /**
             * Control for site twitter username
             */
           array(

               'id'    => 'htsa_twitter_slug_control',

               'args'  => array(

                   'settings'          => 'htsa_twitter_slug',

                   'section'           => 'title_tagline',

                   'label'             => esc_html__( 'Site Twitter username', 'htsa' ),

                   'type'              => 'text',

                   'active_callback'   => '_control_active_callback',
               ),
           ),

            /**
             * Control for site instagram username
             */
           array(

               'id'    => 'htsa_instagram_slug_control',

               'args'  => array(

                   'settings'          => 'htsa_instagram_slug',

                   'section'           => 'title_tagline',

                   'label'             => esc_html__( 'Site Instagram username', 'htsa' ),

                   'type'              => 'text',

                   'active_callback'   => '_control_active_callback',
               ),
           ),

            /**
             * Control for site youtube channel ID
             */
           array(

               'id'    => 'htsa_youtube_slug_control',

               'args'  => array(

                   'settings'          => 'htsa_youtube_slug',

                   'section'           => 'title_tagline',

                   'label'             => esc_html__( 'Site Youtube channel link', 'htsa' ),

                   'type'              => 'text',

                   'active_callback'   => '_control_active_callback',
               ),
           ),
        ),

    ),

    /**
     * Initial values to create contact page customizer settings.
     */

    'contactpage' => array(

        'sections'  => array(

            /**
             * Contact Page customizer section
             */
            array(

                'id'    => 'htsa_contactpage_section',

                'args'  => array(

                    'title'                 => esc_html__( 'Contact Page', 'htsa' ),

                    'description'           => esc_html__( 'Customize the site contact page.', 'htsa' ),

                    'active_callback'       => '_section_active_callback',

                    'description_hidden'    => false,
                ),
            ),

        ),

        'settings'  => array(

            /**
             * Setting for site adddress
             */
            array(

                'id'    => 'htsa_contactpage_address',

                'args'  => array(

                    'transport'         => 'refresh', //postMessage

                    'validate_callback' => '_setting_validate_callback',

                    'sanitize_callback' => 'sanitize_text_field',

                    'default'           => '1200 New Jersey Avenue SE, Washington, DC 20590',
                ),
            ),

            /**
             * Setting for site email address
             */
            array(

                'id'    => 'htsa_contactpage_email',

                'args'  => array(

                    'transport'         => 'refresh', //postMessage

                    'validate_callback' => '_setting_validate_callback',

                    'sanitize_callback' => 'sanitize_text_field',

                    'default'           => 'HTSAgov@htsa.com',
                ),
            ),

            /**
             * Setting for site phone contact number
             */
            array(

                'id'    => 'htsa_contactpage_phone',

                'args'  => array(

                    'transport'         => 'refresh', //postMessage

                    'validate_callback' => '_setting_validate_callback',

                    'sanitize_callback' => 'sanitize_text_field',

                    'default'           => '+234 888-327-4236',
                ),
            ),

            /**
             * Setting for site contact page image
             */
            array(

                'id'    => 'htsa_contactpage_image',

                'args'  => array(

                    'transport'         => 'refresh', //postMessage

                    'validate_callback' => '_setting_validate_callback',

                    'sanitize_callback' => 'sanitize_text_field',
                ),
            ),

            /**
             * Setting for site contact page image description
             */
            array(

                'id'    => 'htsa_contactpage_image_caption',

                'args'  => array(

                    'transport'         => 'refresh', //postMessage

                    'validate_callback' => '_setting_validate_callback',

                    'sanitize_callback' => 'sanitize_text_field',

                    'default'           => esc_html__( 'Our headquarters at Washington, DC', 'htsa' ),
                ),
            ),

        ),

        'controls'  => array(

            /**
             * control for site address
             */
            array(

                'id'    => 'htsa_contactpage_address_control',

                'args'  => array(

                    'settings'          => 'htsa_contactpage_address',

                    'section'           => 'htsa_contactpage_section',

                    'label'             => esc_html__( 'Address', 'htsa' ),

                    'type'              => 'text',

                    'active_callback'   => '_control_active_callback',
                ),
            ),

            /**
             * control for site email address
             */
            array(

                'id'    => 'htsa_contactpage_email_control',

                'args'  => array(

                    'settings'          => 'htsa_contactpage_email',

                    'section'           => 'htsa_contactpage_section',

                    'label'             => esc_html__( 'Email Addess', 'htsa' ),

                    'type'              => 'email',

                    'active_callback'   => '_control_active_callback',
                ),
            ),

            /**
             * control for site phone contact number
             */
            array(

                'id'    => 'htsa_contactpage_phone_control',

                'args'  => array(

                    'settings'          => 'htsa_contactpage_phone',

                    'section'           => 'htsa_contactpage_section',

                    'label'             => esc_html__( 'Phone Number', 'htsa' ),

                    'type'              => 'text',

                    'active_callback'   => '_control_active_callback',
                ),
            ),

            /**
             * control for site contact page image
             */
            array(

                'id'    => 'htsa_contactpage_image_control',

                'args'  => array(

                    'settings'          => 'htsa_contactpage_image',

                    'section'           => 'htsa_contactpage_section',

                    'label'             => esc_html__( 'Contact Page Image', 'htsa' ),

                    'active_callback'   => '_control_active_callback',

                    'mime_type'         => 'image',

                ),

                'control_customizer'    => 'media_control',
            ),

            /**
             * control for site contact page image description
             */
            array(

                'id'    => 'htsa_contactpage_image_caption_control',

                'args'  => array(

                    'settings'          => 'htsa_contactpage_image_caption',

                    'section'           => 'htsa_contactpage_section',

                    'label'             => esc_html__( 'Contact Page Image description', 'htsa' ),

                    'type'              => 'text',

                    'active_callback'   => '_control_active_callback',
                ),
            ),

        ),

    ),

    /**
     * Initial values to create customizer settings on penalties archive page.
     */

    'penaltiesarchive'  => array(

        'sections'  => array(

            /**
             * Penalties archive page customizer section
             */
            array(

                'id'    => 'htsa_penaltiespage_section',

                'args'  => array(

                    'title'                 => esc_html__( 'Penalties Archive Page', 'htsa' ),

                    'description'           => esc_html__( 'Customize the archive page for displaying penalties.', 'htsa' ),

                    'active_callback'       => '_section_active_callback',

                    'description_hidden'    => false,
                ),
            ),

        ),

        'settings'  => array(

            /**
             * Setting for currency symbol
             */
            array(

                'id'    => 'htsa_penaltiespage_currency_symbol',

                'args'  => array(

                    'transport'         => 'refresh', //postMessage

                    'validate_callback' => '_setting_validate_callback',

                    'sanitize_callback' => 'sanitize_text_field',

                    'default'           => '₦',
                ),
            ),

        ),

        'controls'  => array(

            /**
             * control for currency symbol
             */
            array(

                'id'    => 'htsa_penaltiespage_currency_symbol_control',

                'args'  => array(

                    'settings'          => 'htsa_penaltiespage_currency_symbol',

                    'section'           => 'htsa_penaltiespage_section',

                    'label'             => esc_html__( 'Currency Symbol', 'htsa' ),

                    'type'              => 'text',

                    'active_callback'   => '_control_active_callback',
                ),
            ),

        ),

    ),
);
