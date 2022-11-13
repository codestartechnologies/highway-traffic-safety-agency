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

                    <h1 class="text-uppercase"> <?php printf( esc_html__( '%s\'s profile', 'htsa' ), get_the_title() ); ?> </h1>

                    <div class="ui hidden divider"></div>

                    <span class="text-muted"> <?php printf( esc_html__( '%s\'s Social Media Handles', 'htsa' ), get_the_title() ); ?> </span>

                    <div class="list-group list-group-horizontal">

                        <?php if ( $facebook_handle = $post->{HTSA_PROFILE_SOCIAL_HANDLES_META_KEY}['facebook'] ?? null ) : ?>
                        <a href="<?php echo wts_get_social_link( $facebook_handle, 'facebook' ); ?>" class="list-group-item p-1 link-primary">
                            <i class="facebook icon align-middle h-auto fs-4"></i>
                        </a>
                        <?php endif; ?>

                        <?php if ( $twitter_handle = $post->{HTSA_PROFILE_SOCIAL_HANDLES_META_KEY}['twitter'] ?? null ) : ?>
                        <a href="<?php echo wts_get_social_link( $twitter_handle, 'twitter' ); ?>" class="list-group-item p-1 link-info">
                            <i class="twitter icon align-middle h-auto fs-4"></i>
                        </a>
                        <?php endif; ?>

                        <?php if ( $instagram_handle = $post->{HTSA_PROFILE_SOCIAL_HANDLES_META_KEY}['instagram'] ?? null ) : ?>
                        <a href="<?php echo wts_get_social_link( $instagram_handle, 'instagram' ); ?>" class="list-group-item p-1 htsa-link-brown">
                            <i class="instagram icon align-middle h-auto fs-4"></i>
                        </a>
                        <?php endif; ?>

                        <?php if ( $linkedin_handle = $post->{HTSA_PROFILE_SOCIAL_HANDLES_META_KEY}['linkedin'] ?? null ) : ?>
                        <a href="<?php echo wts_get_social_link( $linkedin_handle ); ?>" class="list-group-item p-1 link-primary">
                            <i class="linkedin icon align-middle h-auto fs-4"></i>
                        </a>
                        <?php endif; ?>

                    </div>

                    <div class="ui section divider"></div>

                    <?php the_content(); ?>

                </div>
                <!-- End Single Post Body -->

                <div class="ui section divider"></div>

                <?php get_template_part( 'template-parts/parts/single-profile-navigation' ); ?>

                <div class="ui hidden section divider"></div>

            </main>

            <?php get_sidebar( 'single' ); ?>

        </div>

    </div>

</main>
<!-- End Main Content -->
