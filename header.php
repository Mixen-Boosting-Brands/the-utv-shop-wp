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
                        ); ?>/assets/images/logo@2x.png"
                        data-theme-light="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/logo@2x.png"
                        data-theme-dark="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/logo@2x.png"
                    />
                </a>
                <nav>
                    <ul id="navmenu" class="list-unstyled mb-0">
                        <li>
                            <a class="anchor" id="btn-nav-1" href="#"
                                >Element 1</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-2" href="#"
                                >Element 2</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-3" href="#"
                                >Element 3</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-4" href="#"
                                >Element 4</a
                            >
                        </li>
                    </ul>
                </nav>
                <div id="social">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a
                                href="https://www.instagram.com/"
                                target="_blank"
                            >
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.tiktok.com/" target="_blank">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </li>
                    </ul>
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
                                ); ?>/assets/images/logo@2x.png"
                                data-theme-light="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo@2x.png"
                                data-theme-dark="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo@2x.png"
                            />
                        </a>
                    </div>
                    <div class="col-lg-6 my-auto d-none d-lg-block text-center">
                        <nav>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#">Element 1</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Element 2</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Element 3</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Element 4</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-6 col-lg-2 my-auto text-end">
                        <ul class="list-inline mb-0">
                        <?php if (function_exists("WC")): ?>
                            <li class="list-inline-item">
                                <a class="badge text-bg-primary" href="<?php echo wc_get_cart_url(); ?>">
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
