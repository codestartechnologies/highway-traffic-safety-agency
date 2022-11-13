<!-- Search Form -->
<div class="mb-5">
    <form action="<?php echo get_search_link( 's' ); ?>" method="get">
        <div class="ui huge fluid action input">
            <input type="search" name="s" placeholder="<?php esc_html_e( 'Enter your search..', 'htsa' ); ?>" class="border-0" />
            <button type="submit" class="ui icon button bg-transparent"><i class="search icon"></i></button>
        </div>
    </form>
</div>
<!-- End Search Form -->
