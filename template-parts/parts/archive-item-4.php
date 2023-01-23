<div class="row flex-column gy-4">
    <?php while( have_posts() ) : the_post(); ?>
        <div id="<?php echo HTSA_BRANCHES_POST_TYPE . get_the_id() ?>">
            <div class="border">
                <div class="d-flex flex-wrap">
                    <div class="col-12 col-lg-6 order-last">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="htsa-background-image htsa-background-image-scroll" style="background-image: url('<?php the_post_thumbnail_url( 'medium_large' ); ?>');"></div>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-lg-6 p-3">
                        <h1 class="text-capitalize h3"> <?php the_title(); ?> </h1>
                        <span class="text-primary"> <?php esc_html_e( 'Location', 'htsa-plugin' ); ?>: </span>
                        <span class="text-capitalize"> <?php echo wts_get_post_terms( get_the_ID(), HTSA_LOCATION_TAXONOMY, '%2$s' ); ?> </span>
                        <div class="ui hidden divider"></div>
                        <p> <?php echo $post->{HTSA_BRANCH_DIRECTION_META_KEY} ?> </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<div class="ui hidden divider"></div>
