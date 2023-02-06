<!-- Image Background With Content Widget -->
<section>
    <div class="htsa-background-image htsa-background-image-scroll" style="background-image: url('<?php echo $args['background_image_url'] ?>');">
        <div class="htsa-background-image-overlay">
            <div class="htsa-background-image-content-center h-100 d-flex flex-column gap-4 py-4 justify-content-center align-items-center text-center">
                <div>
                    <span class="text-white text-lowercase"> <?php echo $args['small_header']; ?> </span>
                    <h1 class="lh-sm text-white text-capitalize htsa-ff-roboto-slab fw-bold"> <?php echo $args['big_header']; ?> </h1>
                </div>
                <div>
                    <a href="<?php echo $args['action_url']; ?>" class="btn btn-warning rounded-0 text-capitalize htsa-fs-md-5 fw-normal">
                        <?php echo $args['action_text']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <div class="ui hidden divider"></div> -->
<!-- Image Background With Content Widget -->
