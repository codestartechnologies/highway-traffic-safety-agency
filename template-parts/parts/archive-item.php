<div class="htsa-vertical-posts">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="row flex-column flex-md-row align-items-center pb-3 mb-5 gx-3 gx-lg-5">
            <div class="col-12 d-none d-md-block">
                <h1 class="fs-4 fw-normal text-capitalize"> <a href="<?php the_permalink(); ?>" class="link-dark"> <?php the_title(); ?> </a></h1>
            </div>
            <div class="col-md-4">
                <a href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="" class="img-fluid d-block mb-3" />
                    <?php else : ?>
                        <img src="<?php echo WTS_THEME_URI . 'assets/images/image.png'; ?>" alt="" class="img-fluid d-block mb-3" />
                    <?php endif; ?>
                </a>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <small class="text-primary text-uppercase"> <?php echo get_the_date( 'jS F, Y' ); ?> </small>
                    <p class="d-none d-md-block"> <?php echo wts_get_the_excerpt( null, 26 ); ?> </p>
                    <h1 class="fs-4 fw-normal text-capitalize d-md-none"> <a href="<?php the_permalink(); ?>" class="link-dark"> <?php the_title(); ?> </a></h1>
                    <div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-dark text-capitalize rounded-0">
                            <?php esc_html_e( 'read more', 'htsa' ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>
