<?php get_header(); ?>

<section id="marquee-primary" class="marquee">
    <div class="marquee-content">
        <h1>Turbocharged Adventures, Built to Last</h1>
        <h1>Turbocharged Adventures, Built to Last</h1>
        <h1>Turbocharged Adventures, Built to Last</h1>
        <h1>Turbocharged Adventures, Built to Last</h1>
        <h1>Turbocharged Adventures, Built to Last</h1>
        <h1>Turbocharged Adventures, Built to Last</h1>
        <h1>Turbocharged Adventures, Built to Last</h1>
        <h1>Turbocharged Adventures, Built to Last</h1>
        <h1>Turbocharged Adventures, Built to Last</h1>
        <h1>Turbocharged Adventures, Built to Last</h1>
        <h1>Turbocharged Adventures, Built to Last</h1>
        <h1>Turbocharged Adventures, Built to Last</h1>
        <h1>Turbocharged Adventures, Built to Last</h1>
        <h1>Turbocharged Adventures, Built to Last</h1>
        <h1>Turbocharged Adventures, Built to Last</h1>
        <h1>Turbocharged Adventures, Built to Last</h1>
    </div>
</section>

<section id="jumbotron">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col">
                <h1 class="big-heading text-uppercase">
                    It's time for adventure
                </h1>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1200">
            <div class="col-6 my-auto">
                <p class="mb-0">
                    Let's find the perfect buggy for your trip.
                </p>
            </div>
            <div class="col-6 my-auto text-end">
                <a class="btn btn-primary rounded-pill" href="#"
                    >Shop now</a
                >
            </div>
        </div>
    </div>
</section>

<section class="pb-30">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1400">
            <div class="col text-center">
                <a
                    href="#"
                    target="_blank"
                    class="rounded-corners img-zoom-container"
                >
                    <img
                        class="img-fluid"
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/banner.png"
                        alt="Logo"
                    />
                </a>
            </div>
        </div>
    </div>
</section>

<section class="cta py-60">
    <div class="container">
        <div class="row">
            <div
                class="col-lg-7 my-auto"
                data-aos="fade-up"
                data-aos-duration="2000"
            >
                <h1 class="big-heading">
                    Off-Road<br />
                    Excellence,<br />
                    Made Simple
                </h1>
            </div>

            <div
                class="col-lg-5 my-auto"
                data-aos="fade-up"
                data-aos-duration="2100"
            >
                <?php
                $about_page_id = 19;
                $about_post = get_post($about_page_id);
                ?>

                <?php if (
                    $about_post &&
                    $about_post->post_status === "publish"
                ): ?>
                    <h2 class="text-uppercase">
                        <?php echo esc_html(get_the_title($about_page_id)); ?>
                    </h2>

                    <p>
                        <?php echo esc_html(
                            has_excerpt($about_page_id)
                                ? get_the_excerpt($about_page_id)
                                : wp_trim_words($about_post->post_content, 35),
                        ); ?>
                    </p>

                    <a
                        href="<?php echo esc_url(
                            get_permalink($about_page_id),
                        ); ?>"
                        class="btn btn-primary rounded-pill"
                    >
                        Learn More
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="py-30">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-12">
                <h1 class="text-uppercase">Featured Vehicles</h1>
                <p>Browse parts and accessories for your vehicle.</p>
            </div>
        </div>

        <div class="row">
            <!-- Can-Am Maverick R -->
            <div class="col-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="1200">
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="<?php echo esc_url(
                            wc_get_page_permalink("shop") .
                                "?filter_vehicle-model=can-am-maverick-r",
                        ); ?>"
                    >
                        <span class="badge text-bg-primary rounded-pill">Can-Am Maverick R</span>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/thumb-product.png"
                            class="card-img-top"
                            alt="Can-Am Maverick R"
                        />
                    </a>
                </div>
            </div>

            <!-- Can-Am Maverick X3 -->
            <div class="col-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="1400">
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="<?php echo esc_url(
                            wc_get_page_permalink("shop") .
                                "?filter_vehicle-model=can-am-maverick-x3",
                        ); ?>"
                    >
                        <span class="badge text-bg-primary rounded-pill">Can-Am Maverick X3</span>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/thumb-product.png"
                            class="card-img-top"
                            alt="Can-Am Maverick X3"
                        />
                    </a>
                </div>
            </div>

            <!-- Polaris Pro R -->
            <div class="col-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="1600">
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="<?php echo esc_url(
                            wc_get_page_permalink("shop") .
                                "?filter_vehicle-model=polaris-pro-r",
                        ); ?>"
                    >
                        <span class="badge text-bg-primary rounded-pill">Polaris Pro R</span>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/thumb-product.png"
                            class="card-img-top"
                            alt="Polaris Pro R"
                        />
                    </a>
                </div>
            </div>

            <!-- Polaris Pro XP & Turbo R -->
            <div class="col-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="1800">
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="<?php echo esc_url(
                            wc_get_page_permalink("shop") .
                                "?filter_vehicle-model=polaris-pro-xp-turbo-r",
                        ); ?>"
                    >
                        <span class="badge text-bg-primary rounded-pill">Polaris Pro XP &amp; Turbo R</span>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/thumb-product.png"
                            class="card-img-top"
                            alt="Polaris Pro XP & Turbo R"
                        />
                    </a>
                </div>
            </div>

            <!-- Kawasaki Teryx H2 -->
            <div class="col-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="2000">
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="<?php echo esc_url(
                            wc_get_page_permalink("shop") .
                                "?filter_vehicle-model=kawasaki-teryx-h2",
                        ); ?>"
                    >
                        <span class="badge text-bg-primary rounded-pill">Kawasaki Teryx H2</span>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/thumb-product.png"
                            class="card-img-top"
                            alt="Kawasaki Teryx H2"
                        />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/best-sellers"); ?>

<!-- section class="pb-60">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
            <div class="col-12">
                <div class="ratio ratio-16x9">
                    <iframe
                        class="rounded-corners"
                        width="100%"
                        src="https://www.youtube.com/embed/ScMzIvxBSi4?si=UTbCVEpsiwpTZFlN"
                        title="YouTube video player"
                        frameborder="0"
                        allow="
                            accelerometer;
                            autoplay;
                            clipboard-write;
                            encrypted-media;
                            gyroscope;
                            picture-in-picture;
                            web-share;
                        "
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen
                    ></iframe>
                </div>
            </div>
        </div>
    </div>
</section -->

<section class="brands py-60">
    <div class="container">
        <div
            class="row mb-lg-4"
            data-aos="fade-up"
            data-aos-duration="1000"
        >
            <div class="col text-center">
                <h1>Featured Brands</h1>
                <p>
                    Top performance brands trusted by riders worldwide.
                </p>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1200">
            <div class="col-12 overflow-x-hidden">
                <!-- Slider main container -->
                <div class="swiper-brands">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/brands/brand-1.png"
                                alt="Baja Designs"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/brands/brand-2.png"
                                alt="Fox Racing"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/brands/brand-3.png"
                                alt="DRT Motorsports"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/brands/brand-1.png"
                                alt="Baja Designs"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/brands/brand-2.png"
                                alt="Fox Racing"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/brands/brand-3.png"
                                alt="DRT Motorsports"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/brands/brand-1.png"
                                alt="Baja Designs"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/brands/brand-2.png"
                                alt="Fox Racing"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/brands/brand-3.png"
                                alt="DRT Motorsports"
                            />
                        </div>
                    </div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/blog-section"); ?>

<?php get_footer(); ?>
