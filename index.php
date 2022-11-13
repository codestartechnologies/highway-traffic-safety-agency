<?php
/**
 * The index template file in WordPress theme
 *
 */

get_header();

?>

<div class="ui section hidden divider"></div>

<!-- Main Content -->
<main>
    <div class="container">

        <h1 class="text-uppercase"> <?php the_title(); ?> </h1>
        <div class="ui hidden divider"></div>
        <?php the_content(); ?>

    </div>
</main>
<!-- End Main Content -->

<div class="ui hidden section divider"></div>

<?php

get_footer();

?>
