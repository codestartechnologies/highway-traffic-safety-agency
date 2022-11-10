<!-- Header -->
<header>

    <!-- Top Header -->
    <section class="bg-light">
        <div class="container">
            <div class="row flex-column flex-lg-row justify-content-lg-between align-items-lg-center gx-3">
                <!-- Description -->
                <div class="col-lg-6 text-center text-lg-start">
                    <span class="fs-5 fw-lighter lh-sm"> <?php bloginfo( 'description' ); ?> </span>
                </div>
                <!-- End Description -->
                <!-- ADs -->
                <div class="col-lg-6 my-2 d-none d-sm-block">
                    <?php echo get_theme_mod( 'htsa_frontpage_header_ads_html', '<div class="ui mx-auto banner test ad" data-text="468 X 60 AD"></div>' ); ?>
                </div>
                <!-- End ADs -->
            </div>
        </div>
    </section>
    <!-- End Top Header -->

    <!-- Header Menu -->
    <section>
        <div class="ui attached pointing borderless mini menu htsa-bg-dark border-0" data-htsa-id="headerMenu">
            <div class="container">

                <?php if ( has_custom_logo() ) : ?>
                <!-- Header Logo -->
                <a href="<?php echo site_url(); ?>" class="ui header item text-white">
                    <img src="<?php echo wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ); ?>" alt="HTSA" class="ui avatar image htsa-pc-menu-logo" />
                </a>
                <!-- End Header Logo -->
                <?php endif; ?>

                <!-- Sidebar Menu Toggler -->
                <a href="javascript:void(0);" class="ui right header item" data-htsa-toggle="mobileSidebar">
                    <i class="sidebar icon"></i>
                </a>
                <!-- End Sidebar Menu Toggler -->
                <!-- Menu Links -->
                <div class="right menu flex-wrap" data-htsa-id="pcMenuRight">

                    <?php

                        if ( has_nav_menu( 'wts_pc_menu' ) ) {
                            wp_nav_menu( array(
                                'theme_location'  => 'wts_pc_menu',
                            ) );
                        }

                    ?>

                    <a href="javascript:void(0);" class="item" data-htsa-toggle="searchModal">
                        <i class="search icon"></i>
                    </a>
                </div>
                <!-- End Menu Links -->
            </div>
        </div>
    </section>
    <!-- End Header Menu -->

</header>
<!-- End Header -->
