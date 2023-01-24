<?php if ( has_nav_menu( 'wts_featured_menu' ) ) : ?>
<section>
    <div class="container">
        <div class="htsa-about-section py-5">
            <div class="row flex-column flex-md-row gx-md-5 justify-content-md-center">
                <!-- HTSA Featured Links -->
                <div class="col-md-7">
                    <?php
                        get_template_part( 'template-parts/parts/title', null, array(
                            'title' => wp_get_nav_menu_name( 'wts_featured_menu' ),
                        ) );
                    ?>
                    <div>
                        <ul class="nav text-uppercase row-cols-1 row-cols-sm-2 row-cols-lg-3 fw-normal" data-htsa-id="aboutHTSAMenu">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'  => 'wts_featured_menu',
                                ) );
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- HTSA Featured Links -->
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
