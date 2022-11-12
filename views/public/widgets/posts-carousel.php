<?php global $post; ?>
<!-- Sidebar Carousel -->
<div class="mb-5 vstack align-items-center">
    <?php if ( $title ) : ?>
    <h4 class="fs-5 text-capitalize text-center fw-semibold mb-3"> <?php echo $title; ?> </h4>
    <?php endif; ?>

    <?php if ( $featured_posts ) : $index = 0; ?>
    <div>
        <div class="carousel slide htsa-background-image-carousel" data-bs-ride="carousel"  data-htsa-id="asideCarousel">
            <div class="carousel-inner">
                <?php
                    foreach( $featured_posts as $post ) {
                        $index++;
                        setup_postdata( $post );
                ?>
                        <?php if ( 1 === $index ) : ?>

                        <div class="carousel-item active">

                        <?php else : ?>

                        <div class="carousel-item">

                        <?php endif; ?>

                            <?php if ( has_post_thumbnail() ) : ?>

                            <div class="htsa-background-image htsa-background-image-scroll mb-2" style="background-image: url('<?php the_post_thumbnail_url( 'medium' ); ?>');"></div>

                            <?php else : ?>

                            <div class="htsa-background-image htsa-background-image-scroll mb-2" style="background-image: url('<?php echo WTS_THEME_URI . 'assets/images/image.png'; ?>');"></div>

                            <?php endif; ?>

                            <a href="<?php the_permalink(); ?>" class="link-dark fs-5 lh-sm text-capitalize d-block"> <?php the_title(); ?> </a>
                            <small class="text-primary"> <?php echo get_the_date( 'jS F, Y' ); ?> </small>
                        </div>
                <?php
                    }

                    wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="ui divider"></div>
    </div>
    <?php endif; ?>
</div>
<!-- End Sidebar Carousel -->