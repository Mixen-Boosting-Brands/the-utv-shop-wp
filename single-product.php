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
                    <?php if (function_exists("is_woocommerce")) {
                        if (is_cart()) {
                            echo "Carrito de Compras";
                        } elseif (is_checkout()) {
                            echo "Finalizar Compra";
                        } elseif (is_account_page()) {
                            echo "Mi Cuenta";
                        } else {
                            the_title();
                        }
                    } else {
                        echo "Power your ride";
                    } ?>
                </h1>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1200">
            <div class="col-12">
                <?php echo get_custom_breadcrumb(); ?>
            </div>
        </div>
    </div>
</section>

<section class="pb-30">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1400">
            <div class="col-12">
                <div class="row mb-4">
                    <div class="col-lg-6">
                        <a
                            href="#"
                            target="_blank"
                            class="rounded-corners img-zoom-container"
                        >
                            <img
                                class="img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/thumb-belt.png"
                                alt="EVP Alpha Drive Belts for Can-Am Maverick X3"
                            />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <h1>
                            EVP Alpha Drive Belts for Can-Am Maverick X3
                        </h1>
                        <p class="price fw-bold">$1,111</p>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Nisi aperiam sed
                            cupiditate dignissimos id magni laudantium
                            facere nostrum. Fugiat veniam porro odit
                            corporis nam! Magni nulla nemo
                            exercitationem laudantium velit.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.
                        </p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a
                                    class="btn btn-secondary rounded-pill"
                                    href="#"
                                >
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to Cart
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a
                                    class="btn btn-primary rounded-pill"
                                    href="#"
                                >
                                    <i class="fas fa-shopping-cart"></i>
                                    Buy Now
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>Product Info</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Dignissimos, delectus
                            molestias? Ea similique fugiat doloremque
                            accusamus praesentium ab libero mollitia
                            quos, dolorum voluptatibus exercitationem
                            assumenda sequi quas veritatis natus eum!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="marquee-secondary" class="marquee">
    <div class="marquee-content">
        <h1>You might also like</h1>
        <h1>You might also like</h1>
        <h1>You might also like</h1>
        <h1>You might also like</h1>
        <h1>You might also like</h1>
        <h1>You might also like</h1>
        <h1>You might also like</h1>
        <h1>You might also like</h1>
        <h1>You might also like</h1>
        <h1>You might also like</h1>
        <h1>You might also like</h1>
        <h1>You might also like</h1>
        <h1>You might also like</h1>
        <h1>You might also like</h1>
        <h1>You might also like</h1>
        <h1>You might also like</h1>
    </div>
</section>

<section class="pt-30 pb-15">
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

<section class="pt-15 pb-30">
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
