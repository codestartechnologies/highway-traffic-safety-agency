<div class="ui section hidden divider"></div>

<!-- Main Content -->
<main>

    <div class="container">

        <div class="row flex-column flex-lg-row g-5">

            <main class="col-lg-8 col-xl-9">

                <?php get_template_part( 'template-parts/parts/title', 'archives' ); ?>

                <div class="ui hidden divider"></div>

                <div data-htsa-id="postListings">
                    <?php
                        if ( have_posts() ) {
                            get_template_part( 'template-parts/parts/archive-item' );
                            wts_paginate();
                        } else {
                            get_template_part( 'template-parts/parts/empty-archive' );
                        }
                    ?>
                </div>

                <div class="ui hidden divider"></div>

            </main>

            <?php get_sidebar( 'archive' ); ?>

        </div>

    </div>

</main>
<!-- End Main Content -->
