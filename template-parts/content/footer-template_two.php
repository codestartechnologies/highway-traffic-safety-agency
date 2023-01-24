<!-- Footer -->
<footer>

    <!-- Footer Menu -->
    <section class="htsa-bg-dark pt-5">
        <div class="container">
            <div class="row flex-column flex-md-row align-items-md-start justify-content-md-center text-center gx-md-4 gy-3 gy-md-5">

                <!-- Copyrights -->
                <div class="col-12 order-last">
                    <p>
                        <span class="text-muted"> <?php echo date( 'Y' ); ?> &copy; <?php esc_html_e( 'Copyrights', 'htsa' ); ?> </span>
                        <span class="htsa-text-yellow"> <?php bloginfo( 'name' ); ?> </span>
                    </p>
                </div>
                <!-- End Copyrights -->

                <!-- Description -->
                <div class="col-md-5 col-lg-3 text-center order-0">
                    <h5 class="fw-normal text-capitalize htsa-text-yellow mb-2">
                        <?php echo ( get_theme_mod( 'htsa_frontpage_about_section_title' ) ) ?: esc_html__( 'About Us', 'htsa' ); ?>
                    </h5>
                    <p class="fw-lighter fst-italic text-white">
                        <?php echo nl2br( get_theme_mod( 'htsa_frontpage_about_section_text', esc_html__( 'A short description of the website...', 'htsa' ) ) ); ?>
                    </p>
                </div>
                <!-- End Description -->

                <?php if ( has_nav_menu( 'wts_footer_menu_1' ) ) : ?>
                <!-- Menu Links -->
                <div class="col-md-5 col-lg-3 order-2">
                    <h5 class="fw-normal text-capitalize htsa-text-yellow mb-2"> <?php echo wp_get_nav_menu_name( 'wts_footer_menu_1' ); ?> </h5>
                    <ul class="nav flex-column text-capitalize htsa-footer-menu htsa-footer-menu-b" data-htsa-id="footerMenu">
                        <?php
                            wp_nav_menu( array(
                                'theme_location'  => 'wts_footer_menu_1',
                            ) );
                        ?>
                    </ul>
                </div>
                <!-- End Menu Links -->
                <?php endif; ?>

                <?php
                    $facebook_link = get_theme_mod( 'htsa_facebook_slug', '' );
                    $twitter_link = get_theme_mod( 'htsa_twitter_slug', '' );
                    $instagram_link = get_theme_mod( 'htsa_instagram_slug', '' );
                    $youtube_link = get_theme_mod( 'htsa_youtube_slug', '' );
                ?>
                <!-- Social Link Icons -->
                <div class="col-md-5 col-lg-2 order-3">
                    <h5 class="fw-normal text-capitalize htsa-text-yellow mb-2"> <?php esc_html_e( 'Social handles', 'htsa' ); ?> </h5>
                    <ul class="list-group d-inline-flex list-group-horizontal htsa-footer-social-menu">
                        <li class="list-group-item">
                            <a <?php echo ( $facebook_link ) ? 'href="' . wts_get_social_link( $facebook_link, 'facebook' ) . '"  target="_blank"' : null; ?>
                                class="bg-primary">
                                <i class="facebook icon fs-5 text-white"></i>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a <?php echo ( $twitter_link ) ? 'href="' . wts_get_social_link( $twitter_link, 'twitter' ) . '"  target="_blank"' : null; ?>
                                class="bg-info">
                                <i class="twitter icon fs-5 text-white"></i>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a <?php echo ( $instagram_link ) ? 'href="' . wts_get_social_link( $instagram_link, 'instagram' ) . '"  target="_blank"' : null; ?>
                                class="htsa-bg-brown">
                                <i class="instagram icon fs-5 text-white"></i>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a <?php echo ( $youtube_link ) ? 'href="' . wts_get_social_link( $youtube_link ) . '"  target="_blank"' : null; ?>
                                class="bg-danger">
                                <i class="youtube icon fs-5 text-white"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Social Link Icons -->

                <?php if ( shortcode_exists( HTSA_NEWSLETTER_FORM_SHORTCODE ) ) : ?>
                    <div class="col-md-5 col-lg-4 order-1">
                        <?php echo do_shortcode( '[' . HTSA_NEWSLETTER_FORM_SHORTCODE . ']' ); ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <!-- End Footer Menu -->

    <!-- Bottom Footer -->
    <section class="bg-dark">
        <div class="text-center text-white small">
            <small> <?php esc_html_e( 'Developed by', 'htsa' ); ?> <a href="https://codestar.com.ng" class="fst-italic" target="_blank">Codestar Technologies</a></small>
        </div>
    </section>
    <!-- End Bottom Footer -->

</footer>
<!-- End Footer -->
