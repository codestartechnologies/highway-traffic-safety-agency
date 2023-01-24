<?php
/**
 * The footer template file in WordPress theme
 *
 */

?>
            <?php get_template_part( 'template-parts/content/' . 'footer-' . get_theme_mod( 'htsa_frontpage_template', 'template_one' ) ); ?>

        </div>
        <!-- End Page Content -->

        <!-- Search Modal -->
        <div class="ui basic modal" data-htsa-id="searchModal">
            <i class="close icon"></i>
            <div class="content">
                <!-- Search Form -->
                <form action="<?php echo get_search_link( 's' ); ?>" method="get" class="ui form">
                    <div class="field">
                        <input type="search" name="s" class="rounded-0 border border-white border-2 border-top-0 border-start-0 border-end-0 text-center fs-3 bg-transparent text-white"
                            placeholder="<?php esc_attr_e( 'Search our website:', 'htsa' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" />
                    </div>
                </form>
                <!-- End Search Form -->
            </div>
        </div>
        <!-- End Search Modal -->

        <!-- Scroll To Top -->
        <a href="#" class="ui circular icon button position-fixed bottom-0 end-0 m-2" data-htsa-id="scrollToTop"> <i class="angle double up icon"></i> </a>
        <!-- End Scroll To Top -->

        <?php wp_footer(); ?>

    </body>
</html>