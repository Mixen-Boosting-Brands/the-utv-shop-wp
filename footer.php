<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5737.734251150566!2d-106.49281868736671!3d31.76191483505824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e758fdee20fdc5%3A0xe78c631c77d5997!2sHUB%20International!5e1!3m2!1sen!2smx!4v1764869033420!5m2!1sen!2smx"
                    width="100%"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
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
                    <div class="col-6 col-lg-4">
                        <p><strong>Shop</strong></p>
                        <nav>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" target="_blank"
                                        >All products</a
                                    >
                                </li>
                                <li>
                                    <a href="#" target="_blank"
                                        >Best sellers</a
                                    >
                                </li>
                                <li>
                                    <a href="#" target="_blank"
                                        >New arrivals</a
                                    >
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sale</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-6 col-lg-4">
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
                    <div class="col-6 col-lg-4">
                        <p><strong>Contact Us</strong></p>
                        <address>
                            500 Terry Francine St.<br />
                            El Paso, TX 79952<br />
                            <a href="tel:+19151234567">(915) 123-4567</a
                            ><br />
                            <a href="mailto:info@theutv.com"
                                >info@theutv.com</a
                            >
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mb-4 text-center text-md-start">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a
                            href="https://www.instagram.com/"
                            alt="Instagram"
                            target="_blank"
                        >
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a
                            href="https://www.youtube.com/"
                            alt="YouTube"
                            target="_blank"
                        >
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a
                            href="https://www.tiktok.com/"
                            alt="TikTok"
                            target="_blank"
                        >
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </li>
                </ul>
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
