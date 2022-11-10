<!-- Posts Widget -->
<div>
    <div class="htsa-post-widget-a ui fluid card rounded-0">

        <a href="<?php echo $args['action_url']; ?>" class="image overflow-hidden">
            <?php if ( ! empty( $args['image_url'] ) ) : ?>
                <img src="<?php echo $args['image_url']; ?>" alt="" />
            <?php else: ?>
                <img src="<?php echo WTS_THEME_URI . 'assets/images/image.png'; ?>" alt="" />
            <?php endif; ?>
        </a>

        <div class="content">
            <h1 class="fs-5 fw-semibold text-capitalize border-bottom pb-2">
                <a href="<?php echo $args['action_url']; ?>" class="link-dark htsa-hover-link-transition htsa-text-hover-primary">
                    <?php echo $args['title']; ?>
                </a>
            </h1>
            <small>
                <a href="<?php echo $args['action_url']; ?>" class="link-secondary d-md-none">
                    <?php echo ( $args['action_text'] ) ?: esc_html__( 'Read More', 'htsa' ); ?>
                </a>
            </small>
            <p class="d-none d-md-block"> <?php echo wp_trim_words( $args['content'], 26 ); ?> </p>
        </div>
    </div>
</div>
<!-- End Posts Widget -->
