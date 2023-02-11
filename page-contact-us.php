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
        <div class="row flex-column flex-lg-row row-cols-lg-2 g-4">

            <div>
                <div class="htsa-contact-section">

                    <?php if ( $address = get_theme_mod( 'htsa_contactpage_address', '1200 New Jersey Avenue SE, Washington, DC 20590' ) ) : ?>
                    <div class="htsa-contact-card d-flex border p-2">
                        <span> <i class="building icon"></i> <?php echo $address; ?> </span>
                    </div>
                    <div class="ui hidden divider"></div>
                    <?php endif; ?>

                    <?php if ( $email = get_theme_mod( 'htsa_contactpage_email', 'HTSAgov@htsa.com' ) ) : ?>
                    <div class="htsa-contact-card d-flex border p-2">
                        <span> <i class="envelope icon"></i> <?php echo $email; ?> </span>
                    </div>
                    <div class="ui hidden divider"></div>
                    <?php endif; ?>

                    <?php if ( $phone = get_theme_mod( 'htsa_contactpage_phone', '+234 888-327-4236' ) ) : ?>
                    <div class="htsa-contact-card d-flex border p-2">
                        <span> <i class="phone icon"></i> <?php echo $phone; ?> </span>
                    </div>
                    <div class="ui hidden divider"></div>
                    <?php endif; ?>

                    <?php the_content(); ?>

                </div>
            </div>

            <div>
                <?php if ( $image_id = get_theme_mod( 'htsa_contactpage_image' ) ) : ?>
                <img src="<?php echo wp_get_attachment_image_url( $image_id, 'medium_large' ); ?>" alt="Headquarters" class="img-fluid" />
                <p class="text-center text-muted">
                    <small> <?php echo get_theme_mod( 'htsa_contactpage_image_caption', esc_html__( 'Our headquarters at Washington, DC', 'htsa' ) ); ?> </small>
                </p>
                <?php endif; ?>
            </div>

        </div>
        <!-- End Contact Section -->

        <?php if ( shortcode_exists( HTSA_CONTACT_FORM_SHORTCODE ) ) : ?>
            <!-- Contact Form ShortCode -->
            <div class="ui section divider"></div>
            <h4 class="text-uppercase mb-3"> <?php esc_html_e( 'Contact us and we will reply you as soon as possible', 'htsa' ); ?> </h4>
            <div class="col-lg-6 mx-auto-">
                <?php echo do_shortcode( '[' . HTSA_CONTACT_FORM_SHORTCODE . ']' ); ?>
            </div>
            <!-- End Contact Form ShortCode -->
        <?php endif; ?>

    </div>

    <div class="ui hidden section divider"></div>

</main>
<!-- End Main Content -->

<?php

get_footer();

?>
