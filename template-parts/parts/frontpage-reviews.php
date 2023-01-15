<?php

if ( ! empty( $reviews = get_posts( array(
    'numberposts'   => 6,
    'orederby'      => 'rand',
    'post_type'     => HTSA_REVIEWS_POST_TYPE,
) ) ) ) {
    global $post;

?>

<!-- Reviews -->
<section class="bg-light pt-5 pb-lg-5">
    <div class="container">
        <h1 class="ui horizontal section divider fs-5 mt-0 fw-normal text-capitalize d-none d-sm-table"> <?php esc_html_e( 'Reviews', 'htsa' ); ?> </h1>
        <h4 class="fw-normal text-center text-capitalize border-bottom pb-2 d-sm-none"> <?php esc_html_e( 'Reviews', 'htsa' ); ?> </h4>
        <div class="" data-htsa-id="featuredReviews">
            <?php
                foreach ( $reviews as $post ) {
                    setup_postdata( $post );
                    get_template_part( 'template-parts/parts/widget', 'review', array(
                        'avatar'    => get_the_post_thumbnail_url( null, 'thumbnail' ),
                        'name'      => $post->{HTSA_REVIEW_NAME_META_KEY},
                        'rating'    => $post->{HTSA_REVIEW_RATING_META_KEY},
                        'content'   => $post->{HTSA_REVIEW_CONTENT_META_KEY},
                    ) );
                }

                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- End Reviews -->

<?php

}