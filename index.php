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
                <h2 class="text-uppercase"><?php echo get_the_title(19); ?></h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Sed euismod, nisl vel aliquam aliquet, nisl
                    nisl aliquet nisl, vel aliquet nisl nisl vel aliquet
                    nisl.
                </p>
                <?php if (get_post_status(19)): ?>
                <a href="<?php echo get_permalink(
                    19,
                ); ?>" class="btn btn-primary rounded-pill">
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
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1200"
            >
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="#"
                    >
                        <span class="badge text-bg-primary rounded-pill"
                            >Can-Am Maverick R</span
                        >
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
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1400"
            >
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="#"
                    >
                        <span class="badge text-bg-primary rounded-pill"
                            >Can-Am Maverick X3</span
                        >
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
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1600"
            >
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="#"
                    >
                        <span class="badge text-bg-primary rounded-pill"
                            >Polaris Pro R</span
                        >
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
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1600"
            >
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="#"
                    >
                        <span class="badge text-bg-primary rounded-pill"
                            >Polaris Pro XP & Turbo R</span
                        >
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
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1600"
            >
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="#"
                    >
                        <span class="badge text-bg-primary rounded-pill"
                            >Kawasaki Teryx H2</span
                        >
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

<section id="marquee-secondary" class="marquee">
    <div class="marquee-content">
        <h1>Engineered for Adventure, Designed for Speed</h1>
        <h1>Engineered for Adventure, Designed for Speed</h1>
        <h1>Engineered for Adventure, Designed for Speed</h1>
        <h1>Engineered for Adventure, Designed for Speed</h1>
        <h1>Engineered for Adventure, Designed for Speed</h1>
        <h1>Engineered for Adventure, Designed for Speed</h1>
        <h1>Engineered for Adventure, Designed for Speed</h1>
        <h1>Engineered for Adventure, Designed for Speed</h1>
        <h1>Engineered for Adventure, Designed for Speed</h1>
        <h1>Engineered for Adventure, Designed for Speed</h1>
        <h1>Engineered for Adventure, Designed for Speed</h1>
        <h1>Engineered for Adventure, Designed for Speed</h1>
        <h1>Engineered for Adventure, Designed for Speed</h1>
        <h1>Engineered for Adventure, Designed for Speed</h1>
        <h1>Engineered for Adventure, Designed for Speed</h1>
        <h1>Engineered for Adventure, Designed for Speed</h1>
    </div>
</section>

<section class="py-30">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-6 my-auto">
                <h1 class="text-uppercase">Best Sellers</h1>
                <p>Chosen for peak performance.</p>
            </div>
            <div class="col-6 my-auto text-end">
                <a
                    class="btn btn-primary rounded-pill"
                    href="#"
                    target="_blank"
                    >Shop now</a
                >
            </div>
        </div>
        <div class="row">
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1200"
            >
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="#"
                    >
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/thumb-product.png"
                            class="card-img-top"
                            alt="EVP Number Plate Kit for Can-Am Maverick X3"
                        />
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">
                                EVP Number Plate Kit for Can-Am Maverick
                                X3
                            </h5>
                        </a>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.
                        </p>
                        <p class="price fw-bold">$1,111</p>
                    </div>
                </div>
            </div>
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1400"
            >
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="#"
                    >
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/thumb-product.png"
                            class="card-img-top"
                            alt="EVP Number Plate Kit for Can-Am Maverick X3"
                        />
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">
                                EVP Number Plate Kit for Can-Am Maverick
                                X3
                            </h5>
                        </a>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.
                        </p>
                        <p class="price fw-bold">$1,111</p>
                    </div>
                </div>
            </div>
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1600"
            >
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="#"
                    >
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/thumb-product.png"
                            class="card-img-top"
                            alt="EVP Number Plate Kit for Can-Am Maverick X3"
                        />
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">
                                EVP Number Plate Kit for Can-Am Maverick
                                X3
                            </h5>
                        </a>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.
                        </p>
                        <p class="price fw-bold">$1,111</p>
                    </div>
                </div>
            </div>
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1800"
            >
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="#"
                    >
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/thumb-product.png"
                            class="card-img-top"
                            alt="EVP Number Plate Kit for Can-Am Maverick X3"
                        />
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">
                                EVP Number Plate Kit for Can-Am Maverick
                                X3
                            </h5>
                        </a>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.
                        </p>
                        <p class="price fw-bold">$1,111</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-60">
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
</section>

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
                                ); ?>/assets/images/logoipsum@2x.png"
                                alt="Logoipsum"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logoipsum@2x.png"
                                alt="Logoipsum"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logoipsum@2x.png"
                                alt="Logoipsum"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logoipsum@2x.png"
                                alt="Logoipsum"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logoipsum@2x.png"
                                alt="Logoipsum"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logoipsum@2x.png"
                                alt="Logoipsum"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logoipsum@2x.png"
                                alt="Logoipsum"
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

<section class="py-30">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-12">
                <h1>Off-Road Updates</h1>
                <p>
                    Race reports, tuning guides and rider inspiration.
                </p>
            </div>
        </div>
        <div class="row">
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1200"
            >
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="#"
                    >
                        <span
                            class="badge text-bg-primary rounded-circle rounded-badge"
                        >
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </span>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/thumb-product-tall.png"
                            class="card-img-top"
                            alt="EVP Number Plate Kit for Can-Am Maverick X3"
                        />
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">
                                EVP Number Plate Kit for Can-Am Maverick
                                X3
                            </h5>
                        </a>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1400"
            >
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="#"
                    >
                        <span
                            class="badge text-bg-primary rounded-circle rounded-badge"
                        >
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </span>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/thumb-product-tall.png"
                            class="card-img-top"
                            alt="EVP Number Plate Kit for Can-Am Maverick X3"
                        />
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">
                                EVP Number Plate Kit for Can-Am Maverick
                                X3
                            </h5>
                        </a>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1600"
            >
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="#"
                    >
                        <span
                            class="badge text-bg-primary rounded-circle rounded-badge"
                        >
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </span>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/thumb-product-tall.png"
                            class="card-img-top"
                            alt="EVP Number Plate Kit for Can-Am Maverick X3"
                        />
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">
                                EVP Number Plate Kit for Can-Am Maverick
                                X3
                            </h5>
                        </a>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1800"
            >
                <div class="card">
                    <a
                        class="card-img-top-link rounded-corners img-zoom-container"
                        href="#"
                    >
                        <span
                            class="badge text-bg-primary rounded-circle rounded-badge"
                        >
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </span>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/thumb-product-tall.png"
                            class="card-img-top"
                            alt="EVP Number Plate Kit for Can-Am Maverick X3"
                        />
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">
                                EVP Number Plate Kit for Can-Am Maverick
                                X3
                            </h5>
                        </a>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
