<!-- Welcome Address -->
<section>
    <div class="bg-white py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 justify-content-center align-items-center gy-4">
                <div>
                    <div class="ui raised fluid card rounded-0">
                        <div class="content">
                            <h1 class="ui top attached blue label rounded-0 text-center fs-4 fw-normal"> <?php echo $args['title']; ?> </h1>
                            <div class="ui hidden section divider"></div>
                            <?php echo $args['content']; ?>
                            <div class="ui hidden divider"></div>
                            <p class="text-center fw-light fst-italic">
                                <span class="d-inline-block border-top border-2 border-primary"> <?php echo wts_get_date( 'jS F Y', $args['date'] ); ?> </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="text-center">
                        <?php if ( ! empty( $args['author_image_url'] ) ) : ?>
                        <img src="<?php echo $args['author_image_url']; ?>" alt="" class="ui centered large image mb-2" />
                        <?php endif; ?>
                        <h1 class="fs-5 fw-normal htsa-ff-roboto"> <?php echo $args['author_name']; ?> </h1>
                        <span class="fs-6 fw-normal text-primary"> <?php echo $args['author_tag_title']; ?> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="ui hidden divider"></div>
<!-- Welcome Address -->
