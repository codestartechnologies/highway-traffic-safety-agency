<!-- Call To Action Widget -->
<section>
    <div class="bg-light py-5">
        <div class="container">
            <div class="row flex-column flex-lg-row align-items-md-center justify-content-md-center gy-4">
                <div class="col-lg-6">
                    <h1 class="fs-3 fw-bold text-capitalize lh-sm text-primary"> <?php echo $args['header']; ?> </h1>
                    <p class="fw-light"> <?php echo $args['description']; ?> </p>
                    <br>
                    <a href="<?php echo $args['action_url']; ?>" class="btn btn-primary text-capitalize"> <?php echo $args['action_text']; ?> </a>
                </div>
                <?php if ( ! empty( $args['image_url'] ) ) : ?>
                <div class="col-lg-3">
                    <img src="<?php echo $args['image_url']; ?>" alt="" class="ui rounded centered medium image" />
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- <div class="ui hidden divider"></div> -->
<!-- End Call To Action Widget -->
