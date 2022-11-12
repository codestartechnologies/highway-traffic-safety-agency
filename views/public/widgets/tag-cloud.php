<!-- Tag Cloud -->
<div class="mb-5">
    <?php if ( $title ) : ?>
    <h4 class="fs-5 text-capitalize text-center fw-semibold mb-3"> <?php echo $title; ?> </h4>
    <?php endif; ?>
    <div>
        <div class="ui mini tag labels text-center">
            <?php echo wts_get_taxonomy_terms( $taxonomy, '<a href="%3$s" class="ui label text-capitalize">%2$s</a>', ' ', true ); ?>
        </div>
    </div>
</div>
<!-- End Tag Cloud -->
