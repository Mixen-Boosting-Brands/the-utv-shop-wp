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

            <?php // Active vehicle filter
            $vehicle_filter = !empty($_GET["filter_vehicle-model"])
                ? sanitize_text_field(wp_unslash($_GET["filter_vehicle-model"]))
                : ""; ?>

            <!-- Sidebar -->
            <aside class="col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-duration="1400">

                <!-- Product Search -->
                <div class="mb-4">
                    <h5><?php esc_html_e("Search", "the-utv-shop"); ?></h5>

                    <form method="get"
                          action="<?php echo esc_url(
                              get_permalink(wc_get_page_id("shop")),
                          ); ?>"
                          class="d-flex gap-2">

                        <input
                            type="search"
                            class="form-control"
                            placeholder="Search parts…"
                            name="s"
                            value="<?php echo isset($_GET["s"])
                                ? esc_attr($_GET["s"])
                                : ""; ?>"
                        >

                        <input type="hidden" name="post_type" value="product">

                        <?php if ($vehicle_filter): ?>
                            <input type="hidden" name="filter_vehicle-model" value="<?php echo esc_attr(
                                $vehicle_filter,
                            ); ?>">
                        <?php endif; ?>

                        <button class="btn btn-primary rounded-pill">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>

                <!-- Categories + Brands -->
                <h5><?php esc_html_e("Categories", "the-utv-shop"); ?></h5>

                <ul class="list-group list-group-flush category-brand-menu">

                    <?php
                    $categories = get_terms([
                        "taxonomy" => "product_cat",
                        "hide_empty" => true,
                        "parent" => 0,
                    ]);

                    $brands = get_terms([
                        "taxonomy" => "pa_brand",
                        "hide_empty" => true,
                    ]);

                    foreach ($categories as $category):

                        $cat_link = get_term_link($category);

                        if ($vehicle_filter) {
                            $cat_link = add_query_arg(
                                "filter_vehicle-model",
                                $vehicle_filter,
                                $cat_link,
                            );
                        }
                        ?>

                        <li class="list-group-item border-0 px-0">

                            <!-- Category row -->
                            <div class="d-flex justify-content-between align-items-center">

                                <a href="<?php echo esc_url($cat_link); ?>"
                                   class="fw-medium text-decoration-none">
                                    <?php echo esc_html($category->name); ?>
                                </a>

                                <!-- Mobile toggle -->
                                <button
                                    class="btn btn-sm d-lg-none"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#brands-<?php echo esc_attr(
                                        $category->term_id,
                                    ); ?>"
                                    aria-expanded="false"
                                >
                                    <i class="fa-solid fa-chevron-down"></i>
                                </button>

                            </div>

                            <!-- Brand submenu -->
                            <ul
                                class="brand-submenu collapse d-lg-block"
                                id="brands-<?php echo esc_attr(
                                    $category->term_id,
                                ); ?>"
                            >
                                <?php foreach ($brands as $brand):
                                    $brand_link = add_query_arg(
                                        [
                                            "filter_pa_brand" => $brand->slug,
                                            "filter_vehicle-model" => $vehicle_filter,
                                        ],
                                        get_term_link($category),
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

                        </li>

                    <?php
                    endforeach;
                    ?>

                </ul>
            </aside>

            <!-- Products -->
            <div class="col-lg-9">
                <div class="row">

                    <div class="col-12 mb-4" data-aos="fade-up" data-aos-duration="1600">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                            <h2 class="mb-0">
                                <?php if (is_product_category()) {
                                    single_term_title();
                                } else {
                                    esc_html_e("All Products", "the-utv-shop");
                                } ?>
                            </h2>
                            <?php woocommerce_catalog_ordering(); ?>
                        </div>
                    </div>

                    <?php if (woocommerce_product_loop()):
                        $duration = 1800;

                        while (have_posts()):

                            the_post();
                            global $product;
                            ?>

                        <div class="col-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="<?php echo esc_attr(
                            $duration,
                        ); ?>">
                            <div class="card h-100">

                                <a href="<?php the_permalink(); ?>" class="img-zoom-container rounded-corners">
                                    <?php has_post_thumbnail()
                                        ? the_post_thumbnail("thumb-square", [
                                            "class" => "card-img-top",
                                        ])
                                        : printf(
                                            '<img src="%s" class="card-img-top">',
                                            esc_url(wc_placeholder_img_src()),
                                        ); ?>
                                </a>

                                <div class="card-body d-flex flex-column">
                                    <h5><?php the_title(); ?></h5>
                                    <p class="price fw-bold mt-auto"><?php echo $product->get_price_html(); ?></p>
                                </div>
                            </div>
                        </div>

                    <?php $duration += 200;
                        endwhile;
                    endif; ?>

                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <?php
                        global $wp_query;
                        echo bootstrap_pagination($wp_query);
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_template_part("template-parts/recently-viewed"); ?>

<!-- ?php get_template_part("template-parts/blog-section"); ? -->

<?php get_footer(); ?>
