<!-- Search Form -->
<div class="mb-5 vstack align-items-center">
    <form action="<?php echo get_search_link( 's' ); ?>" method="get">
        <div class="ui search icon input">
            <i class="search icon"></i>
            <input type="text" placeholder="<?php esc_html_e( 'search...', 'htsa' ); ?>" class="prompt" name="s" />
            <?php if ( $post_type = get_post_type() ) : ?>
                <input type="hidden" name="post_type" value="<?php echo $post_type ?>" />
            <?php endif; ?>
        </div>
    </form>
</div>
<!-- End Search Form -->
