<?php global $post; ?>
<!-- Latest Posts -->
<div class="mb-5 vstack align-items-center">

    <?php if ( $title ) : ?>
    <h4 class="fs-5 text-capitalize text-center fw-semibold mb-3"> <?php echo $title; ?> </h4>
    <?php endif; ?>

    <?php if ( $recent_posts ) : ?>
    <div>
        <ul class="nav flex-column htsa-vertical-posts">
            <?php
                foreach( $recent_posts as $post ) {
                    setup_postdata( $post );
            ?>

                <?php if ( 'yes' === $show_image ) : ?>

                <li class="nav-item d-flex flex-row row-cols-2">
                    <div class="pe-1">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="" class="img-fluid" />
                        <?php else : ?>
                            <img src="<?php echo WTS_THEME_URI . 'assets/images/image.png'; ?>" alt="" class="img-fluid" style="width: 150px;" />
                        <?php endif; ?>
                    </div>
                    <div>
                        <a href="<?php the_permalink(); ?>" class="nav-link text-capitalize link-dark"> <?php echo htsa_trim_string( get_the_title(), 48 ); ?> </a>
                        <small class="text-muted fst-italic"> - <?php echo get_the_date( 'jS M, Y' ); ?> </small>
                    </div>
                </li>

                <?php else : ?>

                <li class="nav-item">
                    <a href="<?php the_permalink(); ?>" class="nav-link text-capitalize link-dark"> <?php the_title(); ?> </a>
                    <small class="text-muted fst-italic"> - <?php echo get_the_date( 'jS M, Y' ); ?> </small>
                </li>

                <?php endif; ?>

            <?php
                }

                wp_reset_postdata();
            ?>
        </ul>
    </div>
    <?php endif; ?>

</div>
<!-- End Latest Posts -->
