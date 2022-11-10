<?php if ( ! empty( $args['data'] ) ) : ?>
<!-- Statistics Sidebar Area -->
<section>
    <div class="bg-white py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xxl-4 justify-content-center gy-5" data-htsa-id="frontpageStatistics">
                <?php foreach ( $args['data'] as $statistic ) : ?>
                    <div>
                        <div class="text-center">
                            <div data-htsa-id="statisticsValue"> <?php echo number_format_i18n( $statistic['value'] ); ?> </div>
                            <div data-htsa-id="statisticsLabel"> <?php echo $statistic['label']; ?> </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<div class="ui hidden divider"></div>
<!-- End Statistics Area -->
<?php endif; ?>
