<div class="ui section hidden divider"></div>

<!-- Main Content -->
<main>

    <div class="container">

        <?php get_template_part( 'template-parts/parts/title', 'archives' ); ?>

        <div class="ui hidden divider"></div>

        <div data-htsa-id="headOffices">
            <?php
                if ( have_posts() ) {
                    get_template_part( 'template-parts/parts/archive-item', '4' );
                    wts_paginate();
                } else {
                    get_template_part( 'template-parts/parts/empty-archive' );
                }
            ?>
        </div>

    </div>

    <div class="ui hidden divider"></div>

</main>
<!-- End Main Content -->
