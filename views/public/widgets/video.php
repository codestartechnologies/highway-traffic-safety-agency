<!-- Video Widget -->
<div class="mb-5">
    <?php if ( $title ) : ?>
    <h4 class="fs-5 text-capitalize text-center fw-semibold mb-3"> <?php echo $title; ?> </h4>
    <?php endif; ?>
    <div>
        <div data-htsa-id="semanticUIEmbed" class="ui embed" data-url="<?php echo $video_url; ?>" data-placeholder="<?php echo $video_cover; ?>"></div>
    </div>
</div>
<!-- End Video Widget -->
