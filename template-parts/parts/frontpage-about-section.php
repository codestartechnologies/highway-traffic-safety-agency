<!-- About HTSA -->
<section>
    <div class="container">
        <div class="htsa-about-section pt-5 pb-lg-5">
            <div class="row row-cols-1 row-cols-md-2 gx-md-5">
                <!-- Description -->
                <div class="mb-5 text-center text-md-start">
                    <?php
                        get_template_part( 'template-parts/parts/title', null, array(
                            'title' => ( get_theme_mod( 'htsa_frontpage_about_section_title' ) ) ?: esc_html__( 'About Us', 'htsa' ),
                        ) );
                    ?>
                    <p class="fw-lighter fst-italic">
                        <?php echo nl2br( get_theme_mod( 'htsa_frontpage_about_section_text', esc_html__( 'A short description of the website...', 'htsa' ) ) ); ?>
                    </p>
                </div>
                <!-- End Description -->
                <?php if ( has_nav_menu( 'wts_featured_menu' ) ) : ?>
                <!-- HTSA Featured Links -->
                <div class="mb-5">
                    <?php
                        get_template_part( 'template-parts/parts/title', null, array(
                            'title' => wp_get_nav_menu_name( 'wts_featured_menu' ),
                        ) );
                    ?>
                    <div>
                        <ul class="nav text-uppercase row-cols-1 row-cols-sm-2 fw-normal" data-htsa-id="aboutHTSAMenu">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'  => 'wts_featured_menu',
                                ) );
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- HTSA Featured Links -->
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- End HTSA -->
