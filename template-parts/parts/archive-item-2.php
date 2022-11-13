<div class="list-group list-group-flush htsa-profile-list">
    <?php while( have_posts() ) : the_post(); ?>
        <div class="list-group-item border-bottom-0">
            <div
                class="d-flex flex-wrap flex-column flex-md-row align-items-center align-items-md-start justify-content-md-center gap-3 gap-md-5">
                <div class="col-auto col-md-3 text-center">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="" class="img-fluid align-top" />
                        <?php else : ?>
                        <img src="<?php echo WTS_THEME_URI . 'assets/images/man.png'; ?>" alt="" class="img-fluid align-top" />
                        <?php endif; ?>
                    </a>
                    <h5 class="text-capitalize fs-6 mt-2"> <?php the_title(); ?> </h5>
                </div>
                <div class="col-12 col-md-8 col-lg-7 text-center text-md-start">
                    <p>
                        <small>
                            <span class="text-primary"> <?php esc_html_e( 'Position Held:', 'htsa' ); ?> </span>
                            <b> <?php echo $post->{HTSA_PROFILE_POSITION_HELD_META_KEY}; ?> </b>
                        </small>
                    </p>
                    <p class="d-none d-md-block"> <?php echo wts_get_the_excerpt( null, 28 ); ?> </p>
                    <small><a href="<?php the_permalink(); ?>" class="link-secondary"> <?php esc_html_e( 'View Profile', 'htsa' ); ?> </a></small>
                    <hr>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>
