<!-- Post navigation -->
<div class="row flex-column flex-md-row g-4 justify-content-md-between align-items-center">

    <div class="col-md-5">
        <?php if ( $previous_post = get_previous_post() ) : ?>
        <div class="hstack justify-content-md-start align-items-md-center">
            <span><i class="angle double left icon fs-1 text-muted"></i></span>
            <div class="text-start">
                <small>Previous</small>
                <h1 class="fs-5 text-capitalize">
                    <a href="<?php the_permalink( $previous_post->ID ) ?>" class="link-dark"> <?php echo $previous_post->post_title; ?> </a>
                </h1>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div class="col-md-5">
        <?php if ( $next_post = get_next_post() ) : ?>
        <div class="hstack justify-content-md-end align-items-md-center">
            <div class="text-end">
                <small>Next</small>
                <h1 class="fs-5 text-capitalize">
                    <a href="<?php the_permalink( $next_post->ID ) ?>" class="link-dark"> <?php echo $next_post->post_title; ?> </a>
                </h1>
            </div>
            <span><i class="angle double right icon fs-1 text-muted"></i></span>
        </div>
        <?php endif; ?>
    </div>

</div>
<!-- End Post navigation -->
