<!doctype html>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo("charset"); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?php bloginfo("description"); ?>">
        <title><?php
        wp_title("");
        if (wp_title("", false)) {
            echo " - ";
        }
        bloginfo("name");
        ?></title>

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo(
      "name",
  ); ?>" href="<?php bloginfo("rss2_url"); ?>" />

        <link
            rel="icon"
            type="image/png"
            href="<?php echo esc_url(
                get_template_directory_uri(),
            ); ?>/favicon-96x96.png"
            sizes="96x96"
        />
        <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/favicon.svg" />
        <link rel="shortcut icon" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/favicon.ico" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url(
                get_template_directory_uri(),
            ); ?>/apple-touch-icon.png"
        />
        <meta name="apple-mobile-web-app-title" content="The UTV Shop" />
        <link rel="manifest" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/site.webmanifest" />

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/css/styles.css" />

        <?php wp_head(); ?>
    </head>
    <body>
        <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="<?php echo esc_url(
                    home_url(),
                ); ?>">
                    <img
                        class="logo img-fluid"
                        alt=""
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/logo-light@2x.png"
                        data-theme-light="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/logo-light@2x.png"
                        data-theme-dark="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/logo-dark@2x.png"
                    />
                </a>
                <nav>
                    <ul id="navmenu" class="list-unstyled mb-0">
                        <!-- Home -->
                        <li>
                            <a
                                class="anchor"
                                id="btn-nav-1"
                                href="<?php echo esc_url(home_url("/")); ?>"
                            >
                                Home
                            </a>
                        </li>

                        <!-- Our Story (About Us – page ID 19) -->
                        <li>
                            <a
                                class="anchor"
                                id="btn-nav-2"
                                href="<?php echo esc_url(get_permalink(19)); ?>"
                            >
                                Our story
                            </a>
                        </li>

                        <!-- Best Sellers -->
                        <li>
                            <a
                                class="anchor"
                                id="btn-nav-3"
                                href="<?php echo esc_url(
                                    add_query_arg(
                                        "orderby",
                                        "popularity",
                                        wc_get_page_permalink("shop"),
                                    ),
                                ); ?>"
                            >
                                Best sellers
                            </a>
                        </li>

                        <!-- Contact Us (anchor on same page) -->
                        <li>
                            <a
                                class="anchor"
                                id="btn-nav-4"
                                href="#contact-us"
                            >
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav>
                <div id="social">
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
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="Instagram"
                                >
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($social["youtube"])): ?>
                            <li class="list-inline-item">
                                <a
                                    href="<?php echo esc_url(
                                        $social["youtube"],
                                    ); ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="YouTube"
                                >
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($social["tiktok"])): ?>
                            <li class="list-inline-item">
                                <a
                                    href="<?php echo esc_url(
                                        $social["tiktok"],
                                    ); ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="TikTok"
                                >
                                    <i class="fab fa-tiktok"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <?php endif;
                    ?>
                </div>
                <div id="contacto-menu">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:info@theutv.com">info@theutv.com</a>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:+526141234567">(915) 123-4567</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <header id="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-4 my-auto">
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img
                                id="logo-navbar"
                                class="logo img-fluid"
                                alt=""
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo-light@2x.png"
                                data-theme-light="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo-light@2x.png"
                                data-theme-dark="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo-dark@2x.png"
                            />
                        </a>
                    </div>
                    <div class="col-lg-6 my-auto d-none d-lg-block text-center">
                        <nav>
                            <ul class="list-inline mb-0">
                                <!-- Home -->
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        home_url("/"),
                                    ); ?>">
                                        Home
                                    </a>
                                </li>

                                <!-- Our Story (About Us – page ID 19) -->
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        get_permalink(19),
                                    ); ?>">
                                        Our story
                                    </a>
                                </li>

                                <!-- Best Sellers -->
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        add_query_arg(
                                            "orderby",
                                            "popularity",
                                            wc_get_page_permalink("shop"),
                                        ),
                                    ); ?>">
                                        Best sellers
                                    </a>
                                </li>

                                <!-- Contact Us (anchor on same page) -->
                                <li class="list-inline-item">
                                    <a href="#contact-us">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-6 col-lg-2 my-auto text-end">
                        <ul class="list-inline mb-0">
                        <?php if (function_exists("WC")): ?>
                            <li class="list-inline-item">
                                <a id="btn-cart" class="badge text-bg-primary" href="<?php echo wc_get_cart_url(); ?>">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                            <li class="list-inline-item">
                                <a
                                    id="mburger"
                                    class="d-lg-none"
                                    href="javascript:void(0)"
                                >
                                    <i class="fas fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
