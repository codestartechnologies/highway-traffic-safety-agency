<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 g-4 justify-content-lg-center">
    <?php while( have_posts() ) : the_post(); ?>
        <div>
            <div class="ui fluid raised- card">
                <div class="ui slide masked reveal image">
                    <?php if ( has_post_thumbnail() ) : ?>
                    <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" class="visible content" />
                    <?php else : ?>
                    <img src="<?php echo WTS_THEME_URI . 'assets/images/image.png' ?>" class="visible content" />
                    <?php endif; ?>
                    <div class="hidden content p-2 text-center">
                        <h5 class="fw-bolder"> <?php esc_html_e( 'Direction:', 'htsa' ); ?> </h5>
                        <p> <?php echo $post->{HTSA_BRANCH_DIRECTION_META_KEY} ?> </p>
                    </div>
                </div>
                <div class="content">
                    <h4 class="text-capitalize"> <?php the_title(); ?> </h4>
                    <div>
                        <span class="text-muted"> <?php esc_html_e( 'Location:', 'htsa' ); ?> </span>
                        <span class="text-capitalize"> <?php echo $post->{HTSA_BRANCH_LOCATION_META_KEY} ?> </span>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<div class="ui hidden divider"></div>
