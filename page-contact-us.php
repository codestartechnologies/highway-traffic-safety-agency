<?php
/**
 * The page template file to display custom page in WordPress theme
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

        <!-- Contact Section -->
        <div class="text-muted">
            <?php the_content(); ?>
        </div>
        <!-- End Contact Section -->

        <?php
            if ( shortcode_exists( HTSA_CONTACT_FORM_SHORTCODE ) ) {
                echo do_shortcode( '[' . HTSA_CONTACT_FORM_SHORTCODE . ']' );
            }
        ?>

    </div>

    <div class="ui hidden section divider"></div>

</main>
<!-- End Main Content -->

<?php

get_footer();

?>
