<?php

$carousel_settings = array(
    'htsa_frontpage_carousel_image_1',
    'htsa_frontpage_carousel_image_2',
    'htsa_frontpage_carousel_image_3',
    'htsa_frontpage_carousel_image_4',
);

$carousel = array_map( function ( $value ) {
    return ( $attachment_id = get_theme_mod( $value ) ) ? wp_get_attachment_image_url( $attachment_id, 'large' ) : null;
}, $carousel_settings );

$carousel = array_filter( $carousel );

if ( ! empty( $carousel ) ) {
    get_template_part( 'template-parts/parts/carousel', 'section', array(
        'carousel'      => $carousel,
        'aside'         => array(
            'image_url'     => ( $attachment_id = get_theme_mod( 'htsa_mayor_image' ) ) ? wp_get_attachment_image_url( $attachment_id, 'large' ) : null,
            'intro_text'    => get_theme_mod( 'htsa_mayor_address', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A dicta, veritatis eius consequuntur cumque commodi architecto mollitia perspiciatis?' ),
            'item_name'     => get_theme_mod( 'htsa_mayor_name', 'Charles Chukwuma Soludo' ),
            'item_position' => get_theme_mod( 'htsa_mayor_title', 'Mayor, Anambra State' ),
        ),
    ) );
}

get_sidebar( 'resources' );

get_template_part( 'template-parts/parts/widget', 'call-to-action', array(
    'header'        => get_theme_mod( 'htsa_frontpage_contact_banner_header', esc_html__( 'Have a safety problem?', 'htsa' ) ),
    'description'   => get_theme_mod( 'htsa_frontpage_contact_banner_text', esc_html__( 'Report a problem with your vehicle, tires, car seats or other equipment. We review every problem as we work to keep our roads safe.', 'htsa' ) ),
    'action_text'   => esc_html__( 'contact us', 'htsa' ),
    'action_url'    => site_url( 'contact-us' ),
    'image_url'     => ( $attachment_id = get_theme_mod( 'htsa_frontpage_contact_banner_image' ) ) ? wp_get_attachment_image_url( $attachment_id, 'large' ) : null,
) );

get_template_part( 'template-parts/parts/frontpage', 'md-welcome-address', array(
    'title'             => get_theme_mod( 'htsa_frontpage_md_address_title', esc_html__( 'Welcome Address By The M.D', 'htsa' ) ),
    'content'           => nl2br( get_theme_mod( 'htsa_frontpage_md_address_text', "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, quis accusamus voluptates optio veritatis adipisci deleniti? Perspiciatis ipsum facilis aperiam corporis pariatur excepturi sed unde voluptate, nesciunt, aut deserunt error!\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati iure laborum dolores officia perspiciatis inventore. Natus ratione alias eaque culpa nulla, cupiditate odit ab, qui, pariatur accusamus eum consectetur maxime.\n\n Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias voluptates aliquam consequatur? Quas distinctio modi eligendi laboriosam deserunt tempora id quaerat reiciendis? Ea nesciunt blanditiis repellendus beatae neque, unde tempore!" ) ),
    'date'              => get_theme_mod( 'htsa_frontpage_md_address_date', time() ),
    'author_image_url'  => ( $attachment_id = get_theme_mod( 'htsa_frontpage_md_image' ) ) ? wp_get_attachment_image_url( $attachment_id, 'large' ) : null,
    'author_name'       => get_theme_mod( 'htsa_frontpage_md_name', 'Okonkwo Emeka (KontiKomplete)' ),
    'author_tag_title'  => get_theme_mod( 'htsa_frontpage_md_tag_title', esc_html__( 'Commisioner, H.T.S.A', 'htsa' ) ),
) );

get_template_part( 'template-parts/parts/widget', 'image-background-with-content', array(
    'background_image_url'  => ( $attachment_id = get_theme_mod( 'htsa_frontpage_survial_image' ) ) ? wp_get_attachment_image_url( $attachment_id, 'large' ) : null,
    'small_header'          => get_theme_mod( 'htsa_frontpage_survial_small_heading', esc_html__( 'don\'t drink and drive', 'htsa' ) ),
    'big_header'            => get_theme_mod( 'htsa_frontpage_survial_big_heading', esc_html__( 'save your life and the life of your family', 'htsa' ) ),
    'action_text'           => get_theme_mod( 'htsa_frontpage_survial_action_text', esc_html__( 'Watch the video', 'htsa' ) ),
    'action_url'            => get_theme_mod( 'htsa_frontpage_survial_action_url' ),
) );

get_template_part( 'template-parts/parts/frontpage', 'statistics', array(
    'data'  => array(
        array(
            'value' => get_theme_mod( 'htsa_frontpage_stat_value_1', 38824 ),
            'label' => get_theme_mod( 'htsa_frontpage_stat_label_1', esc_html__( 'lives lost on N.G roads in 2022', 'htsa' ) ),
        ),
        array(
            'value' => get_theme_mod( 'htsa_frontpage_stat_value_2', 11654 ),
            'label' => get_theme_mod( 'htsa_frontpage_stat_label_2', esc_html__( 'drunk-driving fatalities', 'htsa' ) ),
        ),
        array(
            'value' => get_theme_mod( 'htsa_frontpage_stat_value_3', 11258 ),
            'label' => get_theme_mod( 'htsa_frontpage_stat_label_3', esc_html__( 'speeding related traffic deaths', 'htsa' ) ),
        ),
    ),
) );

?>

<section class="bg-light pt-5 pb-lg-5">
    <div class="container">
        <div class="row flex-column flex-lg-row gy-5">
            <?php get_sidebar( 'front-page' ); ?>
            <main class="order-first order-lg-last col-lg-8 col-xl-9">
                <?php

                    if ( ! empty( $featured_posts = wts_get_posts_by_key_value( 'post', HTSA_FEATURED_META_KEY, '1', 5 ) ) ) {
                        get_template_part( 'template-parts/parts/carousel', 'posts', array(
                            'data' => $featured_posts,
                        ) );
                    }

                    $featured = array_map( fn( $value ) : int => $value->ID, $featured_posts );

                    $sticky_posts = get_option( 'sticky_posts' );

                    $nonsticky_posts = get_posts( array(
                        'numberposts'   => 4,
                        'fields'        => 'ids',
                        'exclude'       => array_merge( $sticky_posts, $featured ),
                    ) );

                    $latest = array_slice( array_values( array_filter(
                        array_merge( $sticky_posts, $nonsticky_posts ),
                        fn( $value ) : int => ( ! in_array( $value, $featured, true ) )
                    ) ), 0, 4 );

                    $posts = get_posts( array(
                        'include'       => $latest,
                        'orderby'       => 'post__in',
                    ) );

                    if ( ! empty( $posts  ) ) {
                        get_template_part( 'template-parts/parts/title', null, array(
                            'title' => esc_html__( 'Latest Articles', 'htsa' ),
                        ) );
                        get_template_part( 'template-parts/parts/frontpage-latest-posts', null, array(
                            'data' => $posts,
                        ) );
                    }
                ?>
            </main>
        </div>
    </div>
</section>

<?php

get_template_part( 'template-parts/parts/frontpage-about-section' );

get_template_part( 'template-parts/parts/frontpage-reviews' );

get_template_part( 'template-parts/parts/map' );

?>