<!-- Post navigation -->
<div class="d-flex flex-column flex-md-row gap-4 justify-content-md-between align-items-md-start">

    <div class="col-md-auto">
        <?php if ( $previous_post = get_previous_post() ) : ?>
        <div class="mb-1 text-muted fw-bolder text-start"><small>Previous</small></div>
        <a href="<?php the_permalink( $previous_post->ID ) ?>" class="link-dark d-block">
            <div class="hstack gap-2 justify-content-md-start align-items-md-start shadow">
            <?php if ( has_post_thumbnail( $previous_post->ID ) ) : ?>
                <img src="<?php echo get_the_post_thumbnail_url( $previous_post->ID, 'htsa-small' ); ?>" alt="" class="img-fluid" />
                <?php else : ?>
                <img src="<?php echo WTS_THEME_URI . 'assets/images/man-76x76.png'; ?>" alt="" class="img-fluid" />
                <?php endif; ?>
                <span class="fs-5 p-2"> <?php echo $previous_post->post_title; ?> </span>
            </div>
        </a>
        <?php endif; ?>
    </div>

    <div class="col-md-auto">
        <?php if ( $next_post = get_next_post() ) : ?>
        <div class="mb-1 text-muted fw-bolder text-end"><small>Next</small></div>
        <a href="<?php the_permalink( $next_post->ID ) ?>" class="link-dark d-block">
            <div class="hstack gap-2 justify-content-md-end align-items-md-start shadow">
                <span class="fs-5 p-2"> <?php echo $next_post->post_title; ?> </span>
                <?php if ( has_post_thumbnail( $next_post->ID ) ) : ?>
                <img src="<?php echo get_the_post_thumbnail_url( $next_post->ID, 'htsa-small' ); ?>" alt="" class="img-fluid" />
                <?php else : ?>
                <img src="<?php echo WTS_THEME_URI . 'assets/images/man-76x76.png'; ?>" alt="" class="img-fluid" />
                <?php endif; ?>
            </div>
        </a>
        <?php endif; ?>
    </div>

</div>
<!-- End Post navigation -->
