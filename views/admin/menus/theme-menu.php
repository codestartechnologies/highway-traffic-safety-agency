<div class="wrap">

    <h3 class="htsa-main-title"> <?php printf( esc_html__( '%1$s: Version %2$s', 'htsa' ), HTSA_THEME_NAME, HTSA_THEME_VERSION ); ?> </h3>

    <p class="htsa-main-content">
        <?php printf( __(
            '
                <i>%1$s</i> is a WordPress theme for developing web applications that relates to a road/highway traffic safety agency.
                It comes with different page archives, examples are <b>blogs/news archive</b> for displaying posts relating to the agency,
                <b>profiles archive</b> for displaying lists of all officers and staffs employed by the agency, <b>commanding/principal officers
                archive</b> for displaying contact information for top ranking officers/staffs, <b>branches/head offices archive</b> for
                displaying information relating to all agency branches/head offices, and <b>penalty tariffs archive</b> for displaying tariffs
                from the agency for road traffic offenders. <br /><br />
                The theme also comes with a custom <b>contact page</b>, that can be easily customized via the customizer interface. <br /><br />
                This theme recommends that you install <a href="%2$s" target="_blank">%3$s</a>. %3$s is responsible for adding all the above
                mentioned archives in the theme.
            ',
            'htsa'
        ), HTSA_THEME_NAME, HTSA_THEME_RP_HTSA_PLUGIN_URL, HTSA_THEME_RP_HTSA_PLUGIN_NAME ); ?>
    </p>

    <h4 class="htsa-section-title"> <i class="dashicons dashicons-arrow-right-alt"></i> <?php esc_html_e( 'Features', 'htsa' ); ?> </h4>

    <div class="htsa-grid htsa-section-features">

        <div>
            <div class="htsa-grid-item">
                <h6 class="htsa-grid-item-title"> <?php esc_html_e( 'Customizer', 'htsa' ); ?> </h6>
                <div class="htsa-grid-content">
                    <?php
                        printf( __(
                            '
                                <p>
                                    This theme comes with customizer settings for customizing the site social links, front/home page, contact page, penalties archive page, and comments.
                                </p>
                                <ul>
                                    <li><b>Customize Social Links</b> <p>Go to <mark>customize</mark> &rarr; <mark>Site Identity</mark></p> </li>
                                    <li><b>Customize Front/Home Page</b> <p>Go to <mark>customize</mark> &rarr; <mark>Homepage Settings</mark></p> </li>
                                    <li><b>Customize Contact Page</b> <p>Go to <mark>customize</mark> &rarr; <mark>Contact Page</mark> (visible only on the contact page having a slug of "contact-us")</p> </li>
                                    <li><b>Customize Penalty Tariffs Archive Page</b> <p>Go to <mark>customize</mark> &rarr; <mark>Penalties Archive Page</mark> (visible only on the penalty tariffs archive page registered by <a href="%1$s" target="_blank">%2$s</a>)</p> </li>
                                    <li><b>Customize Post Comments</b> <p>Go to <mark>customize</mark> &rarr; <mark>Comments</mark> (visible only on a single post page, with comments enabled)</p> </li>
                                </ul>
                            ',
                            'htsa'
                        ), HTSA_THEME_RP_HTSA_PLUGIN_URL, HTSA_THEME_RP_HTSA_PLUGIN_NAME );
                    ?>
                </div>
                <a href="<?php echo admin_url( 'customize.php' ); ?>" class="htsa-grid-item-link"> <?php esc_html_e( 'Customize Website', 'htsa' ); ?> </a>
            </div>
        </div>

        <div>
            <div class="htsa-grid-item">
                <h6 class="htsa-grid-item-title"> <?php esc_html_e( 'Widgets', 'htsa' ); ?> </h6>
                <div class="htsa-grid-content">
                    <?php
                        _e(
                            '
                                <p>
                                    This theme comes with seven (7) widgets.
                                </p>
                                <ul>
                                    <li><b>HTSA Call To Action</b> <p>A widget to display text and image, along with an action link. Recommended sidebar areas: Front Page</p></li>
                                    <li><b>HTSA Card</b> <p>A card widget. Recommended sidebar areas: Front Page Cards</p></li>
                                    <li><b>HTSA Featured Posts</b> <p>An image carousel widget for displaying featured posts. Recommended sidebar areas: Front Page Aside, Archive Pages, and Single Pages</p></li>
                                    <li><b>HTSA Image Background With Content</b> <p>A widget to display text with an image background. Recommended sidebar areas: Front Page</p></li>
                                    <li><b>HTSA Recent Posts</b> <p>Widget for displaying recent posts. Recommended sidebar areas: Front Page Aside, Archive Pages, and Single Pages</p></li>
                                    <li><b>HTSA Search</b> <p>Search form widget. Recommended sidebar areas: Front Page Aside, Archive Pages, and Single Pages</p></li>
                                    <li><b>HTSA Tag Cloud</b> <p>Widget for displaying post tags. Recommended sidebar areas: Front Page Aside, Archive Pages, and Single Pages</p></li>
                                </ul>
                            ',
                            'htsa'
                        );
                    ?>
                </div>
                <a href="<?php echo admin_url( 'widgets.php' ); ?>" class="htsa-grid-item-link"> <?php esc_html_e( 'See Theme Widgets', 'htsa' ); ?> </a>
            </div>
        </div>

        <div>
            <div class="htsa-grid-item">
                <h6 class="htsa-grid-item-title"> <?php esc_html_e( 'Sidebars', 'htsa' ); ?> </h6>
                <div class="htsa-grid-content">
                    <?php
                        _e(
                            '
                                <p>
                                    This theme comes with five (5) sidebar areas.
                                </p>
                                <ul>
                                    <li><b>Front Page Cards</b> <p>Widgets in this area are shown in the front page, immediately after the Mayor welcome address</p></li>
                                    <li><b>Front Page</b> <p>Widgets in this area are shown in the front page, before the blog/news section</p></li>
                                    <li><b>Front Page Aside</b> <p>Widgets in this area are shown in the front page, beside the featured and latest blog section</p></li>
                                    <li><b>Archive Pages</b> <p>Widgets in this area are shown in archive pages</p></li>
                                    <li><b>Single Pages</b> <p>Widgets in this area are shown in single pages</p></li>
                                </ul>
                            ',
                            'htsa'
                        );
                    ?>
                </div>
                <a href="<?php echo admin_url( 'widgets.php' ); ?>" class="htsa-grid-item-link"> <?php esc_html_e( 'See Theme Sidebars', 'htsa' ); ?> </a>
            </div>
        </div>

    </div>

    <h4 class="htsa-section-title"> <i class="dashicons dashicons-arrow-right-alt"></i> <?php esc_html_e( 'Suggestions', 'htsa' ); ?> </h4>

    <div class="htsa-grid htsa-section-suggestions">

        <?php if ( '0' === get_option( 'htsa_license_valid' ) ) : ?>
        <div>
            <div class="htsa-grid-item">
                <h6 class="htsa-grid-item-title"> <?php esc_html_e( 'Check your license settings', 'htsa' ); ?> </h6>
                <p>
                    <?php esc_html_e( 'Your license setting may be invalid or empty. Please ensure your settings are valid so that your theme can receive new updates.', 'htsa' ); ?>
                </p>
                <a href="<?php echo admin_url( 'options-general.php?page=htsa-license-settings' ); ?>" class="htsa-grid-item-link"> <?php esc_html_e( 'License Settings', 'htsa' ); ?> </a>
            </div>
        </div>
        <?php endif; ?>

        <?php
            $query = get_posts( array(
                'pagename'  => 'contact-us',
                'post_type' => 'page',
                'fields'    => 'ids',
            ) );
        ?>
        <?php if ( empty( $query ) ) : ?>
        <div>
            <div class="htsa-grid-item">
                <h6 class="htsa-grid-item-title"> <?php esc_html_e( 'Create Contact page', 'htsa' ); ?> </h6>
                <p>
                    <?php _e( 'We recommend you create a <b>contact page</b> for your website. Note that the slug for the contact page <b>MUST</b> be <mark>contact-us</mark> in order to be customizable via the customizer.', 'htsa' ); ?>
                </p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=page' ); ?>" class="htsa-grid-item-link"> <?php esc_html_e( 'New Page', 'htsa'); ?> </a>
            </div>
        </div>
        <?php endif; ?>

        <div>
            <div class="htsa-grid-item">
                <h6 class="htsa-grid-item-title"> <?php esc_html_e( 'Install recommended plugins', 'htsa' ); ?> </h6>
                <div class="htsa-grid-content">
                    <?php
                        printf( __(
                            '
                                <p>
                                    The following plugins are recommended for use with this theme.
                                </p>
                                <ul>
                                    <li> <a href="%1$s" target="_blank"><b>%2$s:</b></a> A plugin for Highway Traffic Security Agency WordPress Theme </li>
                                    <li> <a href="%3$s" target="_blank"><b>Simple Share Buttons Adder:</b></a> A simple plugin that enables you to add share buttons to all of your posts and/or pages. </li>
                                    <li> <a href="%4$s" target="_blank"><b>Yoast SEO:</b></a> The first true all-in-one SEO solution for WordPress, including on-page content analysis, XML sitemaps and much more.</li>
                                </ul>
                            ',
                            'htsa'
                        ), HTSA_THEME_RP_HTSA_PLUGIN_URL, HTSA_THEME_RP_HTSA_PLUGIN_NAME, 'https://simplesharebuttons.com/', 'https://yoa.st/1uk' );
                    ?>
                </div>
            </div>
        </div>

    </div>

    <h4 class="htsa-section-title"> <i class="dashicons dashicons-arrow-right-alt"></i> <?php esc_html_e( 'Support', 'htsa' ); ?> </h4>

    <div class="htsa-grid htsa-section-support">

        <div>
            <div class="htsa-grid-item">
                <p>
                    <?php printf( __( 'You can get support on our website when you have an active support plan. Visit <a href="%s">Codestar Technologies</a>', 'htsa' ), HTSA_THEME_SUPPORT_PLANS ); ?>
                </p>
            </div>
        </div>

    </div>

</div>
