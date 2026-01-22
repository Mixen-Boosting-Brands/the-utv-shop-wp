<?php get_header(); ?>

<?php get_template_part("template-parts/top-marquee"); ?>

<section id="jumbotron">
    <div class="container">
        <?php
        $vehicle_model_name = "";

        if (!empty($_GET["filter_vehicle-model"])) {
            $vehicle_slug = sanitize_text_field(
                wp_unslash($_GET["filter_vehicle-model"]),
            );
            $vehicle_term = get_term_by(
                "slug",
                $vehicle_slug,
                "pa_vehicle-model",
            );

            if ($vehicle_term && !is_wp_error($vehicle_term)) {
                $vehicle_model_name = $vehicle_term->name;
            }
        }
        ?>

        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col">
                <h1 class="big-heading text-uppercase">
                    <?php if (is_shop() && $vehicle_model_name) {
                        echo esc_html($vehicle_model_name . " Parts");
                    } elseif (is_shop()) {
                        echo esc_html__(
                            "Fuel your next journey",
                            "the-utv-shop",
                        );
                    } elseif (is_product_category()) {
                        single_term_title();
                        if ($vehicle_model_name) {
                            echo ' <span class="text-muted">for ' .
                                esc_html($vehicle_model_name) .
                                "</span>";
                        }
                    } elseif (is_product_tag()) {
                        echo esc_html__("Tag: ", "the-utv-shop");
                        single_term_title();
                    } else {
                        woocommerce_page_title();
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
        <div class="row">

            <?php
            // Active vehicle model
            $vehicle_filter = "";

            if (!empty($_GET["filter_vehicle-model"])) {
                $vehicle_filter = sanitize_text_field(
                    wp_unslash($_GET["filter_vehicle-model"]),
                );
            }
            ?>

            <!-- Sidebar -->
            <aside class="col-lg-3 mb-4 mb-lg-0 category-brand-menu"
                data-aos="fade-up"
                data-aos-duration="1400">

                <!-- Search -->
                <div class="mb-4">
                    <h5><?php esc_html_e("Search", "the-utv-shop"); ?></h5>

                    <form role="search"
                        method="get"
                        action="<?php echo esc_url(
                            get_permalink(wc_get_page_id("shop")),
                        ); ?>"
                        class="d-flex gap-2">

                        <input
                            type="search"
                            class="form-control"
                            placeholder="Search parts…"
                            value="<?php echo isset($_GET["s"])
                                ? esc_attr($_GET["s"])
                                : ""; ?>"
                            name="s"
                        >

                        <input type="hidden" name="post_type" value="product">

                        <?php if ($vehicle_filter): ?>
                            <input
                                type="hidden"
                                name="filter_vehicle-model"
                                value="<?php echo esc_attr($vehicle_filter); ?>"
                            >
                        <?php endif; ?>

                        <button class="btn btn-primary rounded-pill">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>

                <!-- Categories -->
                <h5><?php esc_html_e("Categories", "the-utv-shop"); ?></h5>

                <ul class="list-group list-group-flush">

                    <?php
                    $categories = get_terms([
                        "taxonomy" => "product_cat",
                        "hide_empty" => true,
                        "parent" => 0,
                    ]);

                    foreach ($categories as $category):

                        // Base category link
                        $category_link = get_term_link($category);

                        if ($vehicle_filter) {
                            $category_link = add_query_arg(
                                "filter_vehicle-model",
                                $vehicle_filter,
                                $category_link,
                            );
                        }

                        /**
                         * 1️⃣ Get product IDs in THIS category (+ vehicle model if active)
                         */
                        $tax_query = [
                            [
                                "taxonomy" => "product_cat",
                                "field" => "term_id",
                                "terms" => $category->term_id,
                            ],
                        ];

                        if ($vehicle_filter) {
                            $tax_query[] = [
                                "taxonomy" => "pa_vehicle-model",
                                "field" => "slug",
                                "terms" => $vehicle_filter,
                            ];
                        }

                        $product_ids = get_posts([
                            "post_type" => "product",
                            "posts_per_page" => -1,
                            "fields" => "ids",
                            "tax_query" => $tax_query,
                        ]);

                        /**
                         * 2️⃣ Get brands ONLY from those products
                         */
                        $brands = [];

                        if (!empty($product_ids)) {
                            $brands = wp_get_object_terms(
                                $product_ids,
                                "product_brand",
                                ["hide_empty" => true],
                            );
                        }
                        ?>

                        <li class="list-group-item border-0 px-0">

                            <!-- Category row -->
                            <div class="d-flex justify-content-between align-items-center">

                                <a href="<?php echo esc_url($category_link); ?>"
                                class="fw-semibold text-decoration-none">
                                    <?php echo esc_html($category->name); ?>
                                </a>

                                <?php if (!empty($brands)): ?>
                                    <!-- Mobile toggle -->
                                    <button
                                        class="btn btn-sm d-lg-none"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#brands-<?php echo esc_attr(
                                            $category->term_id,
                                        ); ?>"
                                    >
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                <?php endif; ?>
                            </div>

                            <!-- Brand submenu -->
                            <?php if (!empty($brands)): ?>
                                <ul
                                    id="brands-<?php echo esc_attr(
                                        $category->term_id,
                                    ); ?>"
                                    class="brand-submenu collapse d-lg-block mt-2"
                                >
                                    <?php foreach ($brands as $brand):
                                        $brand_link = add_query_arg(
                                            [
                                                "filter_product_brand" =>
                                                    $brand->slug,
                                                "filter_vehicle-model" => $vehicle_filter,
                                            ],
                                            $category_link,
                                        ); ?>
                                        <li>
                                            <a href="<?php echo esc_url(
                                                $brand_link,
                                            ); ?>">
                                                <?php echo esc_html(
                                                    $brand->name,
                                                ); ?>
                                            </a>
                                        </li>
                                    <?php
                                    endforeach; ?>
                                </ul>
                            <?php endif; ?>

                        </li>

                    <?php
                    endforeach;
                    ?>

                </ul>
            </aside>

            <!-- Products -->
            <div class="col-lg-9">
                <div class="row">

                    <!-- Header -->
                    <div class="col-12 mb-4" data-aos="fade-up" data-aos-duration="1600">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                            <h2 class="mb-0">
                               	<?php if (is_product_category()) {
                                    single_term_title();
                                } else {
                                    echo esc_html__(
                                        "All Products",
                                        "the-utv-shop",
                                    );
                                } ?>
                            </h2>

                            <?php woocommerce_catalog_ordering(); ?>
                        </div>

                        <?php if (is_product_category()) {
                            $term = get_queried_object();
                            if (!empty($term->description)) {
                                echo '<p class="category-description mt-2">' .
                                    wp_kses_post($term->description) .
                                    "</p>";
                            }
                        } ?>
                    </div>

                    <!-- Product Loop -->
                    <?php if (woocommerce_product_loop()): ?>

                        <?php
                        $duration = 1800;

                        if (wc_get_loop_prop("total")):
                            while (have_posts()):

                                the_post();
                                global $product;
                                ?>

                                <div class="col-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="<?php echo esc_attr(
                                    $duration,
                                ); ?>">
                                    <div class="card h-100">
                                        <a
                                            class="card-img-top-link rounded-corners img-zoom-container"
                                            href="<?php the_permalink(); ?>"
                                        >
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail(
                                                    "thumb-square",
                                                    ["class" => "card-img-top"],
                                                ); ?>
                                            <?php else: ?>
                                                <img
                                                    src="<?php echo esc_url(
                                                        wc_placeholder_img_src(),
                                                    ); ?>"
                                                    class="card-img-top"
                                                    alt="<?php echo esc_attr(
                                                        get_the_title(),
                                                    ); ?>"
                                                >
                                            <?php endif; ?>
                                        </a>

                                        <div class="card-body d-flex flex-column">
                                            <a href="<?php the_permalink(); ?>">
                                                <h5 class="card-title"><?php the_title(); ?></h5>
                                            </a>

                                            <p class="card-text">
                                                <?php echo wp_trim_words(
                                                    get_the_excerpt(),
                                                    15,
                                                ); ?>
                                            </p>

                                            <p class="price fw-bold mt-auto">
                                                <?php echo $product->get_price_html(); ?>
                                            </p>

                                            <?php if (
                                                $product->is_in_stock()
                                            ): ?>
                                                <a
                                                    href="<?php echo esc_url(
                                                        $product->add_to_cart_url(),
                                                    ); ?>"
                                                    data-quantity="1"
                                                    class="btn btn-primary rounded-pill ajax_add_to_cart add_to_cart_button mt-2"
                                                    data-product_id="<?php echo esc_attr(
                                                        $product->get_id(),
                                                    ); ?>"
                                                    data-product_sku="<?php echo esc_attr(
                                                        $product->get_sku(),
                                                    ); ?>"
                                                    aria-label="<?php echo esc_attr(
                                                        $product->add_to_cart_description(),
                                                    ); ?>"
                                                    rel="nofollow"
                                                >
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <?php echo esc_html(
                                                        $product->add_to_cart_text(),
                                                    ); ?>
                                                </a>
                                            <?php else: ?>
                                                <span class="badge bg-danger mt-2">
                                                    <?php esc_html_e(
                                                        "Out of Stock",
                                                        "the-utv-shop",
                                                    ); ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                        <?php $duration += 200;
                            endwhile;
                        endif;
                        ?>

                    <?php else: ?>
                        <div class="col-12">
                            <p><?php esc_html_e(
                                "No products found.",
                                "the-utv-shop",
                            ); ?></p>
                        </div>
                    <?php endif; ?>

                </div>

                <!-- Pagination -->
                <?php if (woocommerce_product_loop()): ?>
                    <div class="row mt-4">
                        <div class="col-12">
                            <?php
                            global $wp_query;
                            echo bootstrap_pagination($wp_query);
                            ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<?php get_template_part("template-parts/recently-viewed"); ?>

<!-- ?php get_template_part("template-parts/blog-section"); ? -->

<?php get_footer(); ?>
