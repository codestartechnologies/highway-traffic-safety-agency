<?php
/**
 * The page template file in WordPress theme
 *
 */

get_header();

?>

<div class="ui section hidden divider"></div>

<!-- Main Content -->
<main>
    <div class="container">

        <?php
            get_template_part( 'template-parts/parts/title', null, array(
                'title' => get_the_title(),
            ) );
        ?>

        <div class="ui hidden divider"></div>

        <?php the_content(); ?>

    </div>

    <div class="ui hidden section divider"></div>

</main>
<!-- End Main Content -->

<?php

get_footer();
