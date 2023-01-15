<!-- Single Review -->
<div>
    <div class="ui centered fluid card mb-3 shadow-none">
        <div class="content">
            <div class="text-center">
                <div class="mb-2">

                    <?php if ( ! empty( $args['avatar'] ) ) : ?>

                    <img src="<?php echo $args['avatar'] ?>" alt="" class="img-fluid htsa-circular" style="width: 50px;" />

                    <?php else : ?>

                    <img src="<?php echo WTS_THEME_URI ?>assets/images/man.png" alt="" class="img-fluid htsa-circular" style="width: 50px;" />

                    <?php endif; ?>

                </div>
                <h1 class="fs-5 text-capitalize"> <?php echo $args['name'] ?> </h1>
                <div class="ui large star rating" data-rating="<?php echo $args['rating'] ?>" data-max-rating="5"></div>
            </div>
            <div class="ui divider"></div>
            <div class="description">
                <p class="text-center"> <small> <?php echo $args['content'] ?> </small> </p>
            </div>
        </div>
    </div>
</div>
<!-- End Single Review -->
