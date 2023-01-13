<!-- Traffic Offence Penalties Table -->
<div class="table-responsive">
    <table class="table table-hover table-bordered align-middle caption-top">
        <caption> <?php esc_html_e( 'Approved Penalties', 'htsa' ); ?> </caption>
        <thead class="table-light">
            <tr class="align-top fs-5 text-uppercase text-center">
                <th rowspan="2">S/N</th>
                <th rowspan="2" class="text-danger"> <?php esc_html_e( 'Offence', 'htsa' ); ?> </th>
                <th colspan="8" class="text-danger"> <?php esc_html_e( 'Vehicle Categories', 'htsa' ); ?> </th>
            </tr>
            <tr>
                <th> <?php esc_html_e( 'Cars', 'htsa' ); ?> </th>
                <th> <?php esc_html_e( 'Bus / Pick Up Shuttle', 'htsa' ); ?> </th>
                <th> <?php esc_html_e( 'Mini Bus', 'htsa' ); ?> </th>
                <th> <?php esc_html_e( 'Luxury Bus', 'htsa' ); ?> </th>
                <th> <?php esc_html_e( 'Trailer', 'htsa' ); ?> </th>
                <th> <?php esc_html_e( 'Lorry', 'htsa' ); ?> </th>
                <th> <?php esc_html_e( 'Tricycle (Keke Napepe)', 'htsa' ); ?> </th>
                <th> <?php esc_html_e( 'Motorcycle', 'htsa' ); ?> </th>
            </tr>
        </thead>
        <tbody class="text-capitalize">
            <?php

                $index = 0;

                while( have_posts() ) :
                    the_post();
                    $index++;
            ?>
                <tr id="<?php echo HTSA_PENALTIES_POST_TYPE . get_the_ID() ?>">
                    <td> <?php echo $index; ?> </td>
                    <td class="fw-bolder"> <?php the_title(); ?> </td>
                    <td> <?php echo htsa_money_format( ( int ) $post->{HTSA_PENALTY_VEHICLE_CATRGORIES_META_KEY}['cars'] ?? null ); ?> </td>
                    <td> <?php echo htsa_money_format( ( int ) $post->{HTSA_PENALTY_VEHICLE_CATRGORIES_META_KEY}['bus_shuttle'] ?? null ); ?> </td>
                    <td> <?php echo htsa_money_format( ( int ) $post->{HTSA_PENALTY_VEHICLE_CATRGORIES_META_KEY}['mini_bus'] ?? null ); ?> </td>
                    <td> <?php echo htsa_money_format( ( int ) $post->{HTSA_PENALTY_VEHICLE_CATRGORIES_META_KEY}['luxury_bus'] ?? null ); ?> </td>
                    <td> <?php echo htsa_money_format( ( int ) $post->{HTSA_PENALTY_VEHICLE_CATRGORIES_META_KEY}['trailer'] ?? null ); ?> </td>
                    <td> <?php echo htsa_money_format( ( int ) $post->{HTSA_PENALTY_VEHICLE_CATRGORIES_META_KEY}['lorry'] ?? null ); ?> </td>
                    <td> <?php echo htsa_money_format( ( int ) $post->{HTSA_PENALTY_VEHICLE_CATRGORIES_META_KEY}['tricycle'] ?? null ); ?> </td>
                    <td> <?php echo htsa_money_format( ( int ) $post->{HTSA_PENALTY_VEHICLE_CATRGORIES_META_KEY}['motorcycle'] ?? null ); ?> </td>
                </tr>
            <?php endwhile?>
        </tbody>
    </table>
</div>
<!-- End Traffic Offence Penalties Table -->
