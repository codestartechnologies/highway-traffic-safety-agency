<!-- Footer -->
<footer>

    <!-- Footer Menu -->
    <section class="htsa-bg-dark pt-5 pb-lg-5">
        <div class="container">
            <div class="row flex-column flex-md-row align-items-md-start text-center gx-md-4">
                <!-- Copyrights -->
                <div class="col-md-3 mb-3">
                    <p>
                        <span class="text-muted">2022 &copy; Copyrights</span>
                        <span class="htsa-text-yellow">HTSA</span>
                    </p>
                </div>
                <!-- End Copyrights -->

                <?php if ( has_nav_menu( 'wts_footer_menu_1' ) ) : ?>
                <!-- Menu Links -->
                <div class="col-md-7 mb-5">
                    <ul class="nav justify-content-center text-capitalize htsa-footer-menu" data-htsa-id="footerMenu">
                        <?php
                            wp_nav_menu( array(
                                'theme_location'  => 'wts_footer_menu_1',
                            ) );
                        ?>
                    </ul>
                </div>
                <!-- End Menu Links -->
                <?php endif; ?>

                <!-- Social Link Icons -->
                <div class="col-md-2 mb-4">
                    <ul class="list-group d-inline-flex list-group-horizontal htsa-footer-social-menu">
                        <li class="list-group-item">
                            <a href="" class="bg-primary"><i class="facebook icon fs-5 text-white"></i></a>
                        </li>
                        <li class="list-group-item">
                            <a href="" class="bg-info"><i class="twitter icon fs-5 text-white"></i></a>
                        </li>
                        <li class="list-group-item">
                            <a href="" class="htsa-bg-brown"><i class="instagram icon fs-5 text-white"></i></a>
                        </li>
                        <li class="list-group-item">
                            <a href="" class="bg-danger"><i class="youtube icon fs-5 text-white"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- End Social Link Icons -->
            </div>
        </div>
    </section>
    <!-- End Footer Menu -->

    <!-- Bottom Footer -->
    <section class="bg-dark">
        <div class="text-center text-white small">
            <small>Developed by <a href="https://codestar.com.ng" class="fst-italic">Codestar Technologies</a></small>
        </div>
    </section>
    <!-- End Bottom Footer -->

</footer>
<!-- End Footer -->
