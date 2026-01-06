<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3390.27632456575!2d-106.18290268723648!3d31.817467173971362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e7479836ce9de3%3A0x2126ab9d484587e7!2s14350%20Montana%20Ave%2C%20Clint%2C%20TX%2079836%2C%20EE.%20UU.!5e0!3m2!1ses-419!2smx!4v1766439626046!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="container pt-60 pb-60">
        <div class="row">
            <div class="col-lg-7 mb-4">
                <h1 class="big-heading text-uppercase">
                    Drive hard, drive strong
                </h1>
            </div>
            <div class="col-lg-5 mb-4">
                <div class="row">
                    <div class="col-6">
                        <p><strong>Shop</strong></p>
                        <nav>
                            <ul class="list-unstyled">
                                <!-- All products -->
                                <li>
                                    <a href="<?php echo esc_url(
                                        wc_get_page_permalink("shop"),
                                    ); ?>">
                                        All products
                                    </a>
                                </li>

                                <?php
                                $vehicle_models = get_terms([
                                    "taxonomy" => "pa_vehicle-model",
                                    "hide_empty" => true,
                                    "orderby" => "name",
                                    "order" => "ASC",
                                ]);

                                if (
                                    !empty($vehicle_models) &&
                                    !is_wp_error($vehicle_models)
                                ):
                                    foreach ($vehicle_models as $model):
                                        $link = add_query_arg(
                                            "filter_vehicle-model",
                                            $model->slug,
                                            wc_get_page_permalink("shop"),
                                        ); ?>
                                        <li>
                                            <a href="<?php echo esc_url(
                                                $link,
                                            ); ?>">
                                                <?php echo esc_html(
                                                    $model->name,
                                                ); ?>
                                            </a>
                                        </li>
                                    <?php
                                    endforeach;
                                endif;
                                ?>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-6">
                        <p><strong>Policies</strong></p>
                        <nav>
                            <ul class="list-unstyled">
                                <?php
                                $footer_pages = [
                                    13 => "Terms & Conditions",
                                    3 => "Privacy Policy",
                                    15 => "Shipping Policy",
                                    11 => "Refund Policy",
                                ];

                                foreach (
                                    $footer_pages
                                    as $page_id => $fallback_title
                                ):
                                    if (get_post_status($page_id)): ?>
                                <li>
                                    <a href="<?php echo esc_url(
                                        get_permalink($page_id),
                                    ); ?>">
                                        <?php echo esc_html(
                                            get_the_title($page_id),
                                        ); ?>
                                    </a>
                                </li>
                                <?php endif;
                                endforeach;
                                ?>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-6">
                        <p><strong>Contact Us</strong></p>
                        <address>
                            14350 Montana Ave<br />
                            El Paso, TX 79938<br />
                            <a href="tel:+19151234567">(915) 123-4567</a
                            ><br />
                            <a href="mailto:info@theutv.com"
                                >info@theutv.com</a
                            >
                        </address>
                    </div>
                    <div class="col-6">
                        <p><strong>Follow Us</strong></p>
                        <?php
                        $social = get_field("social_media", "option");

                        if ($social): ?>
                        <ul class="list-inline">
                            <?php if (!empty($social["instagram"])): ?>
                                <li class="list-inline-item">
                                    <a
                                        href="<?php echo esc_url(
                                            $social["instagram"],
                                        ); ?>"
                                        aria-label="Instagram"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    >
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (!empty($social["youtube"])): ?>
                                <li class="list-inline-item">
                                    <a
                                        href="<?php echo esc_url(
                                            $social["youtube"],
                                        ); ?>"
                                        aria-label="YouTube"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    >
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (!empty($social["tiktok"])): ?>
                                <li class="list-inline-item">
                                    <a
                                        href="<?php echo esc_url(
                                            $social["tiktok"],
                                        ); ?>"
                                        aria-label="TikTok"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    >
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <?php endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p>
                    &copy; <?php echo the_date("Y"); ?> <?php bloginfo(
     "name",
 ); ?>. All rights reserved. |
                    Made with <i class="fa-solid fa-heart"></i> by
                    <a href="https://mixen.mx/" target="_blank"
                        >Mixen</a
                    >
                </p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="<?php echo esc_url(
    get_template_directory_uri(),
); ?>/assets/js/app.bundle.js" defer></script>
</body>
</html>
