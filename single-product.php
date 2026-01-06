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

<?php while (have_posts()):

    the_post();
    global $product;
    ?>

<section id="jumbotron">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col">
                <h1 class="big-heading text-uppercase">
                    <?php the_title(); ?>
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
                        <div class="rounded-corners img-zoom-container">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail("large", [
                                    "class" => "img-fluid",
                                ]);
                            } else {
                                echo '<img class="img-fluid" src="' .
                                    wc_placeholder_img_src() .
                                    '" alt="' .
                                    esc_attr(get_the_title()) .
                                    '" />';
                            } ?>
                        </div>

                        <?php
                        // Product image gallery
                        $attachment_ids = $product->get_gallery_image_ids();
                        if ($attachment_ids) {
                            echo '<div class="product-gallery mt-3">';
                            foreach ($attachment_ids as $attachment_id) {
                                echo '<a href="' .
                                    esc_url(
                                        wp_get_attachment_url($attachment_id),
                                    ) .
                                    '" class="rounded-corners img-zoom-container d-inline-block me-2 mb-2" style="width: 100px;">';
                                echo wp_get_attachment_image(
                                    $attachment_id,
                                    "thumbnail",
                                    false,
                                    ["class" => "img-fluid"],
                                );
                                echo "</a>";
                            }
                            echo "</div>";
                        }
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <h1><?php the_title(); ?></h1>

                        <p class="price fw-bold">
                            <?php echo $product->get_price_html(); ?>
                        </p>

                        <div class="product-short-description">
                            <?php echo $product->get_short_description(); ?>
                        </div>

                        <?php if ($product->is_in_stock()): ?>
                            <form class="cart" action="<?php echo esc_url(
                                apply_filters(
                                    "woocommerce_add_to_cart_form_action",
                                    $product->get_permalink(),
                                ),
                            ); ?>" method="post" enctype='multipart/form-data'>

                                <?php do_action(
                                    "woocommerce_before_add_to_cart_button",
                                ); ?>

                                <?php if (!$product->is_sold_individually()): ?>
                                    <div class="quantity mb-3">
                                        <label class="form-label" for="quantity">Quantity:</label>
                                        <?php woocommerce_quantity_input([
                                            "min_value" => apply_filters(
                                                "woocommerce_quantity_input_min",
                                                $product->get_min_purchase_quantity(),
                                                $product,
                                            ),
                                            "max_value" => apply_filters(
                                                "woocommerce_quantity_input_max",
                                                $product->get_max_purchase_quantity(),
                                                $product,
                                            ),
                                            "input_value" => isset(
                                                $_POST["quantity"],
                                            )
                                                ? wc_stock_amount(
                                                    wp_unslash(
                                                        $_POST["quantity"],
                                                    ),
                                                )
                                                : $product->get_min_purchase_quantity(),
                                        ]); ?>
                                    </div>
                                <?php endif; ?>

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <button type="submit" name="add-to-cart" value="<?php echo esc_attr(
                                            $product->get_id(),
                                        ); ?>" class="btn btn-secondary rounded-pill single_add_to_cart_button">
                                            <i class="fas fa-shopping-cart"></i>
                                            <?php echo esc_html(
                                                $product->single_add_to_cart_text(),
                                            ); ?>
                                        </button>
                                    </li>
                                </ul>

                                <?php do_action(
                                    "woocommerce_after_add_to_cart_button",
                                ); ?>
                            </form>
                        <?php else: ?>
                            <p class="stock out-of-stock">
                                <span class="badge bg-danger">Out of Stock</span>
                            </p>
                        <?php endif; ?>

                        <?php do_action("woocommerce_product_meta_start"); ?>

                        <div class="product_meta mt-4">
                            <?php if (
                                wc_product_sku_enabled() &&
                                ($product->get_sku() ||
                                    $product->is_type("variable"))
                            ): ?>
                                <span class="sku_wrapper">
                                    <strong>SKU:</strong>
                                    <span class="sku"><?php echo ($sku = $product->get_sku())
                                        ? $sku
                                        : esc_html__(
                                            "N/A",
                                            "woocommerce",
                                        ); ?></span>
                                </span>
                            <?php endif; ?>

                            <?php echo wc_get_product_category_list(
                                $product->get_id(),
                                ", ",
                                '<span class="posted_in d-block mt-2"><strong>' .
                                    _n(
                                        "Categoría:",
                                        "Categorías:",
                                        count($product->get_category_ids()),
                                        "woocommerce",
                                    ) .
                                    "</strong> ",
                                "</span>",
                            ); ?>

                            <?php echo wc_get_product_tag_list(
                                $product->get_id(),
                                ", ",
                                '<span class="tagged_as d-block mt-2"><strong>' .
                                    _n(
                                        "Etiqueta:",
                                        "Etiquetas:",
                                        count($product->get_tag_ids()),
                                        "woocommerce",
                                    ) .
                                    "</strong> ",
                                "</span>",
                            ); ?>
                        </div>

                        <?php do_action("woocommerce_product_meta_end"); ?>
                    </div>
                </div>

                <?php if ($product->get_description()): ?>
                <div class="row">
                    <div class="col-12">
                        <h5>Product Info</h5>
                        <div class="product-description">
                            <?php echo $product->get_description(); ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php // Reviews / Comments

    comments_template(); ?>
            </div>
        </div>
    </div>
</section>

<?php
endwhile; ?>

<?php get_template_part("template-parts/recently-viewed"); ?>

<?php get_template_part("template-parts/best-sellers"); ?>

<?php get_template_part("template-parts/blog-section"); ?>

<?php get_footer(); ?>
