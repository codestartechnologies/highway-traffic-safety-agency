<?php
/**
 * The search results template file in WordPress theme
 *
 */

get_header();

?>

<div class="ui hidden section divider"></div>

<!-- Main Content -->
<main>
    <div class="container">
        <div class="row flex-column flex-lg-row g-5">
            <main class="col-lg-8 col-xl-9">

                <?php
                    get_template_part( 'template-parts/parts/title', null, array(
                        'title' => esc_html__( 'search page', 'htsa' ),
                    ) );
                ?>

                <div class="ui hidden divider"></div>

                <h4> <?php esc_html_e( 'Search Query:', 'htsa' ); ?> <span class="text-capitalize fw-lighter fst-italic"> <?php the_search_query(); ?> </span></h4>

                <div class="ui hidden divider"></div>

                <?php get_template_part( 'template-parts/parts/search-form' ); ?>

                <div data-htsa-id="searchResults">
                    <?php
                        if ( have_posts() ) {
                            get_template_part( 'template-parts/parts/archive-item', '6' );
                            wts_paginate();
                        } else {
                            get_template_part( 'template-parts/parts/empty-page', 'search' );
                        }
                    ?>
                </div>

                <div class="ui hidden divider"></div>

            </main>
            <?php get_sidebar( 'front-page' ); ?>
        </div>
    </div>
</main>
<!-- End Main Content -->

<?php

get_footer();

?>
