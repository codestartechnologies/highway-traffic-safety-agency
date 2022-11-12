<?php global $post; ?>
<!-- Latest Posts -->
<div class="mb-5 vstack align-items-center">

    <?php if ( $title ) : ?>
    <h4 class="fs-5 text-capitalize text-center fw-semibold mb-3"> <?php echo $title; ?> </h4>
    <?php endif; ?>

    <?php if ( $recent_posts ) : ?>
    <div>
        <ul class="nav flex-column htsa-vertical-posts" data-htsa-id="asideLatestPosts">
            <?php
                foreach( $recent_posts as $post ) {
                    setup_postdata( $post );
            ?>
                <li class="nav-item">
                    <a href="<?php the_permalink(); ?>" class="nav-link text-capitalize link-dark"> <?php the_title(); ?> </a>
                    <small class="text-muted fst-italic"> - <?php echo get_the_date( 'jS M, Y' ); ?> </small>
                </li>
            <?php
                }

                wp_reset_postdata();
            ?>
        </ul>
    </div>
    <?php endif; ?>
</div>
<!-- End Latest Posts -->
