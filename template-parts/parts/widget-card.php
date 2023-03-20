<!-- Card Widget -->
<div>
    <div class="htsa-card-widget-a ui raised card rounded-0 mb-5 mx-auto">
        <div class="center aligned content">

            <?php if ( ! empty( $args['image_url'] ) && get_theme_mod( 'htsa_resources_logo_visible' ) ) : ?>

                <img src="<?php echo $args['image_url']; ?>" alt="" class="ui tiny image" />

            <?php endif; ?>

            <div class="ui dividing header fw-normal text-capitalize htsa-ff-roboto mb-3"> <?php echo $args['title']; ?> </div>
            <div class="description fw-normal mb-4 d-none d-md-block"> <?php echo $args['description']; ?> </div>
        </div>
        <?php if ( ! empty( $args['action_url'] ) ) : ?>
        <a href="<?php echo $args['action_url']; ?>" class="ui bottom attached black button htsa-text-yellow text-capitalize">
            <?php echo $args['action_text']; ?> <i class="right angle icon"></i>
        </a>
        <?php endif; ?>
    </div>
</div>
<!-- End Card Widget -->