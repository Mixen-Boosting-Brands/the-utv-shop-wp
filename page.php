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
    the_post(); ?>

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
                <?php // Check if page has featured image
                if (has_post_thumbnail()): ?>
                <div class="page-featured-image mb-4">
                    <?php the_post_thumbnail("large", [
                        "class" => "img-fluid rounded-corners",
                    ]); ?>
                </div>
                <?php endif; ?>

                <div class="page-content">
                    <?php the_content(); ?>
                </div>

                <?php // Display page links for multi-page content
                wp_link_pages([
                    "before" =>
                        '<div class="page-links mt-4"><span class="page-links-title">Pages:</span>',
                    "after" => "</div>",
                    "link_before" => "<span>",
                    "link_after" => "</span>",
                ]); ?>

                <?php // Comments section (if enabled for pages)
                if (comments_open() || get_comments_number()):
                    comments_template();
                endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
endwhile; ?>

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
