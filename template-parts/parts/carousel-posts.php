<?php global $post; ?>

<!-- Featured Blog -->
<div class="htsa-slider-dots">
    <div data-htsa-id="featuredBlogCarousel">
        <?php
            foreach( $args['data'] as $post ) :
                setup_postdata( $post );
        ?>
            <div>
                <div class="ui fluid card rounded-0">
                    <div class="htsa-background-image htsa-background-image-scroll" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');"></div>
                    <div class="content">
                        <h1 class="text-capitalize fw-bolder htsa-ff-roboto-slab mb-3"> <?php the_title(); ?> </h1>
                        <p class="mb-3 d-none d-md-block"> <?php echo wts_get_the_excerpt( null, 26 ); ?> </p>
                        <a href="<?php the_permalink(); ?>" class="ui yellow right labeled icon button text-dark text-capitalize rounded-0">
                            read article <i class="long arrow alternate right icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php
            endforeach;
            wp_reset_postdata();
        ?>
    </div>
</div>
<!-- End Featured Blog -->
<div class="ui section hidden divider"></div>
