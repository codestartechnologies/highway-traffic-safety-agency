<?php
/**
 * The comments template file in WordPress theme
 *
 */

?>

<div data-htsa-id="postComments">

    <div class="ui hidden divider"></div>

    <?php if ( get_comments_number() ) : ?>

    <?php

        $title = sprintf(
            _nx( 'One Comment on this post', '%s Comments on this post', get_comments_number(), 'comments title', 'htsa' ),
            number_format_i18n( get_comments_number() )
        );

        get_template_part( 'template-parts/parts/title', null, array(
            'title' => $title,
        ) );

    ?>

    <!-- Comments -->
    <div class="ui small feed">
    <!-- <div class="ui small threaded comments"> -->
        <?php wp_list_comments(); ?>
    </div>
    <!-- End Comments -->

    <?php else : ?>

    <p class="fs-3 fw-normal text-center text-muted"> <?php esc_html_e( 'Be the first to add a comment on this post', 'htsa' ); ?> </p>

    <?php endif; ?>

</div>

<div class="ui hidden divider"></div>
