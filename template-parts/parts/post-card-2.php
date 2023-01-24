<!-- Posts Widget -->
<div>
    <?php if ( ! empty( $args['image_url'] ) ) : ?>
    <div class="htsa-post-widget-b h-auto htsa-background-image htsa-background-image-scroll shadow-lg htsa-bg-dark" style="background-image: url('<?php echo $args['image_url']; ?>');">
    <?php else: ?>
    <div class="htsa-post-widget-b h-auto htsa-background-image htsa-background-image-scroll shadow-lg htsa-bg-dark">
    <?php endif; ?>
        <div class="htsa-background-image-overlay">
            <div class="h-100 vstack justify-content-between p-2 pe-5 p-sm-4 pe-sm-5">
                <div>
                    <h1 class="fs-4 text-white text-capitalize fw-bold htsa-ff-roboto-slab"> <?php echo $args['title']; ?> </h1>
                    <p class="text-white d-none d-sm-block"> <?php echo wp_trim_words( $args['content'], 26 ); ?> </p>
                    <p>
                        <small class="text-white fw-bold"> <?php echo $args['date']; ?> </small>
                    </p>
                </div>
                <div class="ui hidden divider d-none d-sm-block"></div>
                <div>
                    <a href="<?php echo $args['action_url']; ?>" class="btn btn-sm btn-outline-light htsa-hover-link-animate-up">
                        <?php echo ( $args['action_text'] ) ?: esc_html__( 'Read More', 'htsa' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Posts Widget -->
