<?php global $post; ?>

<!-- Latest Blog -->
<div class="ui hidden divider"></div>
<div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-3 justify-content-md-center g-3 g-md-5" data-htsa-id="postsWidget">
    <?php
        foreach ( $args['data'] as $post ) {
            setup_postdata( $post );
            get_template_part( 'template-parts/parts/post-card', 2, array(
                'image_url'     => get_the_post_thumbnail_url( null, 'medium_large' ),
                'title'         => get_the_title(),
                'content'       => wts_get_the_excerpt( null, 26 ),
                'action_text'   => null,
                'action_url'    => get_the_permalink(),
                'date'          => get_the_date( 'jS F, Y' ),
            ) );
        }

        wp_reset_postdata();
    ?>
</div>
<!-- End Latest Blog -->
