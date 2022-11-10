<!-- Carousel Area -->
<section class="htsa-bg-dark">
    <div class="row flex-column flex-lg-row g-0">
        <!-- Carousel -->
        <div class="col-lg-8">
            <?php if ( ! empty( $args['carousel'] ) ) : ?>
            <div data-htsa-id="frontpageCarouselLeft">
                <?php foreach ( $args['carousel'] as $image_url ) : ?>
                <div class="htsa-background-image htsa-background-image-scroll" style="background-image: url('<?php echo $image_url ?>');">
                    <div class="htsa-background-image-overlay htsa-background-image-overlay-blue"></div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        <!-- End Carousel -->
        <!-- Mayor's Address -->
        <div class="col-lg-4">
            <div class="container-fluid">
                <div class="py-5 py-lg-2">
                    <div class="text-center text-white" data-htsa-id="mayorAddress">
                        <img src="<?php echo $args['aside']['image_url']; ?>" alt="" class="img-fluid rounded" />
                        <div class="ui hidden divider"></div>
                        <p class="fst-italic"> <?php echo $args['aside']['intro_text']; ?> </p>
                        <p>
                            <span class="fs-5 text-warning htsa-ff-roboto-slab fw-bolder"> <?php echo $args['aside']['item_name']; ?> </span><br />
                            <span class="fst-italic fw-lighter"> <?php echo $args['aside']['item_position']; ?> </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mayor's Address -->
    </div>
</section>
<div class="ui hidden divider"></div>
<!-- End Carousel Area -->