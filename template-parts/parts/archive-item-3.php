<div class="table-responsive">
    <table class="table table-bordered align-middle caption-top">
        <caption> <?php esc_html_e( 'Our Officers', 'htsa' ); ?> </caption>
        <thead class="table-dark text-center fs-5">
            <tr>
                <th>S/N</th>
                <th> <?php esc_html_e( 'Photograph', 'htsa' ); ?> </th>
                <th> <?php esc_html_e( 'Name', 'htsa' ); ?> </th>
                <th> <?php esc_html_e( 'Zone', 'htsa' ); ?> </th>
                <th> <?php esc_html_e( 'Contact', 'htsa' ); ?> </th>
            </tr>
        </thead>
        <tbody class="text-center">
            <?php
                $index = 0;
                while( have_posts() ) :
                the_post();
                $index++;
            ?>
                <tr id="<?php echo HTSA_OFFICERS_POST_TYPE . get_the_id() ?>">
                    <td> <?php echo $index; ?> </td>
                    <td>
                        <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_post_thumbnail_url( 'large' ); ?>">
                            <img src="<?php the_post_thumbnail_url( 'htsa-small' ); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail" />
                        </a>
                        <?php else : ?>
                        <img src="<?php echo WTS_THEME_URI . 'assets/images/man-76x76.png'; ?>" alt="" class="img-fluid" />
                        <?php endif; ?>
                    </td>
                    <td class="fw-bold text-uppercase"> <?php the_title(); ?> </td>
                    <td> <?php echo $post->{HTSA_OFFICER_ZONE_META_KEY} ?> </td>
                    <td>
                        <span class="d-inline-flex flex-column gap-3">
                            <span>
                                <i class="envelope icon"></i>
                                <a href="mailto:"> <?php echo $post->{HTSA_OFFICER_CONTACT_META_KEY}['email'] ?? null; ?> </a>
                            </span>
                            <span>
                                <i class="phone square icon"></i>
                                <a href="tel:+" class="link-dark"> <?php echo $post->{HTSA_OFFICER_CONTACT_META_KEY}['phone'] ?? null; ?> </a>
                            </span>
                        </span>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
