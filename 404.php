<?php
/**
 * The 404 template file in WordPress theme
 *
 */

get_header();

?>

<style>
    .htsa-404 {
        font-size: 26px;
    }
    @media screen and (min-width: 768px) {
        .htsa-404 {
            font-size: 6rem;
        }
    }
</style>

<div class="ui section hidden divider"></div>

<!-- Main Content -->
<main>
    <div class="container">

    <div class="ui section hidden divider"></div>
    <h1 class="text-center"> <span class="d-inline-block pb-3 border-bottom htsa-404 htsa-ff-roboto">404</span> </h1>
    <div class="ui hidden divider"></div>
    <h2 class="text-center"> <?php esc_html_e( 'Page Not Found or Does Not Exists', 'htsa' ); ?> </h2>
    <div class="ui section hidden divider"></div>

    </div>
</main>
<!-- End Main Content -->

<div class="ui section hidden divider"></div>

<?php

get_footer();

?>
