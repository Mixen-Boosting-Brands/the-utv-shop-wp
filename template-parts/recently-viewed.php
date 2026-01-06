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

<section class="pt-60 pb-30">
    <div class="container">
        <div class="row">

            <?php
            // Get recently viewed product IDs from cookie
            $viewed_products = [];

            if (!empty($_COOKIE["woocommerce_recently_viewed"])) {
                $viewed_products = explode(
                    "|",
                    wp_unslash($_COOKIE["woocommerce_recently_viewed"]),
                );

                $viewed_products = array_reverse(
                    array_filter(array_map("absint", $viewed_products)),
                );
            }

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

                        <div class="col-6 col-lg-3 mb-4"
                             data-aos="fade-up"
                             data-aos-duration="<?php echo esc_attr(
                                 $duration,
                             ); ?>">

                            <div class="card h-100">
                                <a class="card-img-top-link rounded-corners img-zoom-container"
                                   href="<?php the_permalink(); ?>">

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
