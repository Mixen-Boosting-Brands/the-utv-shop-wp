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
                    <?php printf(
                        esc_html__("Search Results for: %s", "textdomain"),
                        '<span class="search-query">' .
                            get_search_query() .
                            "</span>",
                    ); ?>
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
                <h5>Refine Your Search</h5>

                <?php
// Search form
?>
                <div class="search-widget mb-4">
                    <?php get_search_form(); ?>
                </div>

                <h5>Product Categories</h5>
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
                        foreach ($product_categories as $category): ?>
                        <a href="<?php echo get_term_link($category); ?>"
                           class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0">
                            <span><?php echo esc_html(
                                $category->name,
                            ); ?></span>
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    <?php endforeach;
                    endif;
                    ?>
                </div>

                <?php
// Blog categories
?>
                <?php
                $blog_categories = get_categories([
                    "hide_empty" => true,
                    "number" => 5,
                ]);

                if (!empty($blog_categories)): ?>
                <h5 class="mt-4">Blog Categories</h5>
                <div class="list-group list-group-flush">
                    <?php foreach ($blog_categories as $category): ?>
                        <a href="<?php echo get_category_link($category); ?>"
                           class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0">
                            <span><?php echo esc_html(
                                $category->name,
                            ); ?></span>
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
                <?php endif;
                ?>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12 mb-4" data-aos="fade-up" data-aos-duration="1600">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>
                                <?php
                                global $wp_query;
                                $result_count = $wp_query->found_posts;
                                printf(
                                    esc_html(
                                        _n(
                                            "%s Result Found",
                                            "%s Results Found",
                                            $result_count,
                                            "textdomain",
                                        ),
                                    ),
                                    "<strong>" . $result_count . "</strong>",
                                );
                                ?>
                            </h2>
                        </div>
                    </div>

                    <?php if (have_posts()):
                        $duration = 1800;

                        while (have_posts()):
                            the_post();
                            $post_type = get_post_type();

                            // Check if it's a product
                            if ($post_type === "product"):
                                global $product; ?>

                    <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-duration="<?php echo $duration; ?>">
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

                                <?php if ($product->is_in_stock()): ?>
                                    <a href="<?php echo esc_url(
                                        $product->add_to_cart_url(),
                                    ); ?>"
                                       data-quantity="1"
                                       class="btn btn-primary rounded-pill ajax_add_to_cart add_to_cart_button"
                                       data-product_id="<?php echo $product->get_id(); ?>"
                                       data-product_sku="<?php echo esc_attr(
                                           $product->get_sku(),
                                       ); ?>"
                                       aria-label="<?php echo esc_attr(
                                           $product->add_to_cart_description(),
                                       ); ?>"
                                       rel="nofollow">
                                        <i class="fas fa-shopping-cart"></i>
                                        <?php echo esc_html(
                                            $product->add_to_cart_text(),
                                        ); ?>
                                    </a>
                                <?php else: ?>
                                    <span class="badge bg-danger">Out of Stock</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <?php
                                // If it's a blog post
                                // If it's a page or other post type


                            elseif ($post_type === "post"): ?>

                    <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-duration="<?php echo $duration; ?>">
                        <div class="card">
                            <a class="card-img-top-link rounded-corners img-zoom-container" href="<?php the_permalink(); ?>">
                                <span class="badge text-bg-primary rounded-circle rounded-badge">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail("medium", [
                                        "class" => "card-img-top",
                                    ]);
                                } else {
                                    echo '<img src="' .
                                        esc_url(get_template_directory_uri()) .
                                        '/assets/images/thumb-product-tall.png" class="card-img-top" alt="' .
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
                                <p class="text-muted small">
                                    <i class="fa-regular fa-calendar"></i> <?php echo get_the_date(); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary rounded-pill">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php else: ?>

                    <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-duration="<?php echo $duration; ?>">
                        <div class="card">
                            <a class="card-img-top-link rounded-corners img-zoom-container" href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail("medium", [
                                        "class" => "card-img-top",
                                    ]);
                                } else {
                                    echo '<img src="' .
                                        esc_url(get_template_directory_uri()) .
                                        '/assets/images/thumb-product.png" class="card-img-top" alt="' .
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
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary rounded-pill">
                                    View Page
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php endif;
                            $duration += 200;
                        endwhile;
                    else:
                         ?>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1800">
                            <div class="no-results text-center py-5">
                                <i class="fa-solid fa-magnifying-glass fa-4x text-muted mb-4"></i>
                                <h3>No Results Found</h3>
                                <p class="lead">Sorry, we couldn't find any results for "<strong><?php echo get_search_query(); ?></strong>"</p>
                                <p>Try searching with different keywords or browse our categories.</p>
                                <a href="<?php echo get_permalink(
                                    wc_get_page_id("shop"),
                                ); ?>" class="btn btn-primary rounded-pill mt-3">
                                    Browse All Products
                                </a>
                            </div>
                        </div>
                    <?php
                    endif; ?>
                </div>

                <?php // Pagination

if (have_posts()):
                    echo '<div class="row mt-4"><div class="col-12">';
                    the_posts_pagination([
                        "mid_size" => 2,
                        "prev_text" =>
                            '<i class="fa-solid fa-chevron-left"></i> Previous',
                        "next_text" =>
                            'Next <i class="fa-solid fa-chevron-right"></i>',
                        "class" => "pagination justify-content-center",
                    ]);
                    echo "</div></div>";
                endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="marquee-secondary" class="marquee">
    <div class="marquee-content">
        <h1>Popular Searches</h1>
        <h1>Popular Searches</h1>
        <h1>Popular Searches</h1>
        <h1>Popular Searches</h1>
        <h1>Popular Searches</h1>
        <h1>Popular Searches</h1>
        <h1>Popular Searches</h1>
        <h1>Popular Searches</h1>
        <h1>Popular Searches</h1>
        <h1>Popular Searches</h1>
        <h1>Popular Searches</h1>
        <h1>Popular Searches</h1>
        <h1>Popular Searches</h1>
        <h1>Popular Searches</h1>
        <h1>Popular Searches</h1>
        <h1>Popular Searches</h1>
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
                <a class="btn btn-primary rounded-pill" href="<?php echo get_permalink(
                    wc_get_page_id("shop"),
                ); ?>">Shop now</a>
            </div>
        </div>
        <div class="row">
            <?php
            // Query for best selling products
            $args = [
                "post_type" => "product",
                "posts_per_page" => 4,
                "meta_key" => "total_sales",
                "orderby" => "meta_value_num",
                "order" => "DESC",
            ];

            $bestsellers = new WP_Query($args);
            $duration = 1200;

            if ($bestsellers->have_posts()):
                while ($bestsellers->have_posts()):

                    $bestsellers->the_post();
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
            ?>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/blog-section"); ?>

<?php get_footer(); ?>
