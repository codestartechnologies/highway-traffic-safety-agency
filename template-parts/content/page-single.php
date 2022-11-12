<div class="ui section hidden divider"></div>

<!-- Main Content -->
<main>
    <div class="container">
        <div class="row flex-column flex-lg-row g-5">
            <main class="col-lg-8 col-xl-9">

                <?php
                    get_template_part( 'template-parts/parts/title', null, array(
                        'title' => esc_html__( 'single archive', 'htsa' ),
                    ) );
                ?>

                <div class="ui hidden divider"></div>

                <!-- Single Post Body -->
                <div>

                    <h1 class="text-uppercase"> <?php the_title(); ?> </h1>

                    <div class="hstack flex-wrap gap-4">
                        <span><i class="folder outline icon"></i> <?php echo wts_get_post_terms( get_the_ID(), 'category', '<a href="%1$s" class="link-dark text-decoration-underline">%2$s</a>' ) ?> </span>
                        <span><i class="calendar outline icon"></i> <?php echo get_the_date( 'd M, Y' ); ?> </span>
                    </div>

                    <div class="ui section divider"></div>

                    <?php the_content(); ?>

                </div>
                <!-- End Single Post Body -->

                <div class="ui section divider"></div>

                <?php

                    get_template_part( 'template-parts/parts/single-post-navigation' );

                    if ( comments_open() ) {
                        comments_template();
                        comment_form();
                    }

                ?>

            </main>
            <?php get_sidebar( 'single' ); ?>
        </div>
    </div>
</main>
<!-- End Main Content -->
