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
                    <?php if (is_shop()) {
                        echo "Fuel your next journey";
                    } elseif (is_product_category()) {
                        single_term_title();
                    } elseif (is_product_tag()) {
                        echo "Tag: ";
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
            <div class="col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-duration="1400">
                <h5>Categories</h5>
                <div class="list-group list-group-flush">
                    <?php
                    $product_categories = get_terms([
                        "taxonomy" => "product_cat",
                        "hide_empty" => true,
                        "parent" => 0,
                    ]);

                    if (
                        !empty($product_categories) &&
                        !is_wp_error($product_categories)
                    ):
                        foreach ($product_categories as $category):
                            $current_class = is_product_category(
                                $category->slug,
                            )
                                ? "active"
                                : ""; ?>
                        <a href="<?php echo get_term_link($category); ?>"
                           class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 <?php echo $current_class; ?>">
                            <span><?php echo esc_html(
                                $category->name,
                            ); ?></span>
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12 mb-4" data-aos="fade-up" data-aos-duration="1600">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>
                                <?php if (is_product_category()) {
                                    single_term_title();
                                } else {
                                    echo "All Products";
                                } ?>
                            </h2>

                            <?php woocommerce_catalog_ordering(); ?>
                        </div>

                        <?php // Show category description if it exists

if (is_product_category()) {
                            $term = get_queried_object();
                            if ($term->description) {
                                echo '<p class="category-description">' .
                                    $term->description .
                                    "</p>";
                            }
                        } ?>
                    </div>

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
                                    <a class="card-img-top-link rounded-corners img-zoom-container" href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()):
                                            the_post_thumbnail("thumb-square", [
                                                "class" => "card-img-top",
                                            ]);
                                        else:
                                             ?>
                                            <img src="<?php echo esc_url(
                                                wc_placeholder_img_src(),
                                            ); ?>"
                                                 class="card-img-top"
                                                 alt="<?php echo esc_attr(
                                                     get_the_title(),
                                                 ); ?>">
                                        <?php
                                        endif; ?>
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

                                        <?php if ($product->is_in_stock()): ?>
                                            <a href="<?php echo esc_url(
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
                                               rel="nofollow">
                                                <i class="fas fa-shopping-cart"></i>
                                                <?php echo esc_html(
                                                    $product->add_to_cart_text(),
                                                ); ?>
                                            </a>
                                        <?php else: ?>
                                            <span class="badge bg-danger mt-2">Out of Stock</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        <?php $duration += 200;
                            endwhile;
                        endif;
                        ?>

                    <?php else: ?>
                        <div class="col-12"><p>No products found.</p></div>
                    <?php endif; ?>
                </div>

                <?php // Paginación

if (woocommerce_product_loop()):
                    echo '<div class="row mt-4"><div class="col-12">';
                    woocommerce_pagination();
                    echo "</div></div>";
                endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="marquee-secondary" class="marquee">
    <div class="marquee-content">
        <h1>Recently Viewed Products</h1>
        <h1>Recently Viewed Products</h1>
        <h1>Recently Viewed Products</h1>
        <h1>Recently Viewed Products</h1>
        <h1>Recently Viewed Products</h1>
        <h1>Recently Viewed Products</h1>
        <h1>Recently Viewed Products</h1>
        <h1>Recently Viewed Products</h1>
        <h1>Recently Viewed Products</h1>
        <h1>Recently Viewed Products</h1>
        <h1>Recently Viewed Products</h1>
        <h1>Recently Viewed Products</h1>
        <h1>Recently Viewed Products</h1>
        <h1>Recently Viewed Products</h1>
        <h1>Recently Viewed Products</h1>
        <h1>Recently Viewed Products</h1>
    </div>
</section>

<section class="pt-30 pb-15">
    <div class="container">
        <div class="row">
            <?php
            // Recently viewed products (WooCommerce 3.0+ is required)
            $viewed_products = !empty($_COOKIE["woocommerce_recently_viewed"])
                ? (array) explode(
                    "|",
                    wp_unslash($_COOKIE["woocommerce_recently_viewed"]),
                )
                : [];
            $viewed_products = array_reverse(
                array_filter(array_map("absint", $viewed_products)),
            );

            if (!empty($viewed_products)):
                $args = [
                    "post_type" => "product",
                    "post__in" => $viewed_products,
                    "posts_per_page" => 4,
                    "orderby" => "post__in",
                ];

                $viewed_query = new WP_Query($args);
                $duration = 1000;

                if ($viewed_query->have_posts()):
                    while ($viewed_query->have_posts()):

                        $viewed_query->the_post();
                        global $product;
                        ?>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="<?php echo $duration; ?>">
                <div class="card">
                    <a class="card-img-top-link rounded-corners img-zoom-container" href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail("medium", [
                                "class" => "card-img-top",
                            ]);
                        } else {
                            echo '<img src="' .
                                wc_placeholder_img_src() .
                                '" class="card-img-top" alt="' .
                                esc_attr(get_the_title()) .
                                '" />';
                        } ?>
                    </a>
                    <div class="card-body">
                        <a href="<?php the_permalink(); ?>">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                        </a>
                        <p class="card-text"><?php echo wp_trim_words(
                            get_the_excerpt(),
                            15,
                        ); ?></p>
                        <p class="price fw-bold"><?php echo $product->get_price_html(); ?></p>
                    </div>
                </div>
            </div>
            <?php $duration += 200;
                    endwhile;
                    wp_reset_postdata();
                endif;
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/blog-section"); ?>

<?php get_footer(); ?>
