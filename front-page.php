<?php
/**
 * The front page template file in WordPress theme
 *
 */

get_header();

?>

<!-- Main Content -->
<main>

    <?php get_template_part( 'template-parts/content/' . 'page-home-' . get_theme_mod( 'htsa_frontpage_template', 'template_one' ) ); ?>

</main>
<!-- End Main Content -->

<?php

get_footer();
