<section id="marquee-secondary" class="marquee">
    <div class="marquee-content">
        <h1>Best sellers</h1>
        <h1>Best sellers</h1>
        <h1>Best sellers</h1>
        <h1>Best sellers</h1>
        <h1>Best sellers</h1>
        <h1>Best sellers</h1>
        <h1>Best sellers</h1>
        <h1>Best sellers</h1>
        <h1>Best sellers</h1>
        <h1>Best sellers</h1>
        <h1>Best sellers</h1>
        <h1>Best sellers</h1>
        <h1>Best sellers</h1>
        <h1>Best sellers</h1>
        <h1>Best sellers</h1>
        <h1>Best sellers</h1>
    </div>
</section>

<section class="<?php if (
    is_page()
): ?>pt-30 pb-15<?php else: ?>pt-15 pb-30<?php endif; ?>">
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
                            the_post_thumbnail("thumb-square", [
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
