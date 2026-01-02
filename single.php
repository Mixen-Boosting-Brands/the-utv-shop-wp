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
            <div class="col-lg-8 offset-lg-2">
                <?php
    // Post meta information
    ?>
                <div class="post-meta mb-4">
                    <span class="post-date">
                        <i class="fa-regular fa-calendar"></i>
                        <?php echo get_the_date(); ?>
                    </span>

                    <?php if (has_category()): ?>
                    <span class="post-category ms-3">
                        <i class="fa-solid fa-folder"></i>
                        <?php the_category(", "); ?>
                    </span>
                    <?php endif; ?>

                    <span class="post-author ms-3">
                        <i class="fa-solid fa-user"></i>
                        <?php the_author_posts_link(); ?>
                    </span>

                    <?php if (has_tag()): ?>
                    <span class="post-tags d-block mt-2">
                        <i class="fa-solid fa-tags"></i>
                        <?php the_tags("", ", "); ?>
                    </span>
                    <?php endif; ?>
                </div>

                <?php // Check if post has featured image

    if (has_post_thumbnail()): ?>
                <div class="post-featured-image mb-4">
                    <?php the_post_thumbnail("large", [
                        "class" => "img-fluid rounded-corners",
                    ]); ?>
                </div>
                <?php endif; ?>

                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <?php // Display post links for multi-page content

    wp_link_pages([
                    "before" =>
                        '<div class="page-links mt-4"><span class="page-links-title">Pages:</span>',
                    "after" => "</div>",
                    "link_before" => "<span>",
                    "link_after" => "</span>",
                ]); ?>

                <?php
    // Post navigation (Previous/Next post)
    ?>
                <div class="post-navigation mt-5 mb-4">
                    <div class="row">
                        <div class="col-6">
                            <?php
                            $prev_post = get_previous_post();
                            if ($prev_post): ?>
                            <a href="<?php echo get_permalink(
                                $prev_post,
                            ); ?>" class="btn btn-primary rounded-pill">
                                <i class="fa-solid fa-arrow-left"></i> Previous Post
                            </a>
                            <?php endif;
                            ?>
                        </div>
                        <div class="col-6 text-end">
                            <?php
                            $next_post = get_next_post();
                            if ($next_post): ?>
                            <a href="<?php echo get_permalink(
                                $next_post,
                            ); ?>" class="btn btn-primary rounded-pill">
                                Next Post <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <?php endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
endwhile; ?>

<section id="marquee-secondary" class="marquee">
    <div class="marquee-content">
        <h1>Related Articles</h1>
        <h1>Related Articles</h1>
        <h1>Related Articles</h1>
        <h1>Related Articles</h1>
        <h1>Related Articles</h1>
        <h1>Related Articles</h1>
        <h1>Related Articles</h1>
        <h1>Related Articles</h1>
        <h1>Related Articles</h1>
        <h1>Related Articles</h1>
        <h1>Related Articles</h1>
        <h1>Related Articles</h1>
        <h1>Related Articles</h1>
        <h1>Related Articles</h1>
        <h1>Related Articles</h1>
        <h1>Related Articles</h1>
    </div>
</section>

<section class="pt-30 pb-15">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-12">
                <h1 class="text-uppercase">Related Posts</h1>
                <p>More stories from our blog.</p>
            </div>
        </div>
        <div class="row">
            <?php
            // Query for related posts by category
            $categories = get_the_category();
            $category_ids = [];

            if ($categories) {
                foreach ($categories as $category) {
                    $category_ids[] = $category->term_id;
                }
            }

            $args = [
                "post_type" => "post",
                "posts_per_page" => 4,
                "post__not_in" => [get_the_ID()],
                "orderby" => "rand",
            ];

            // Add category filter if categories exist
            if (!empty($category_ids)) {
                $args["category__in"] = $category_ids;
            }

            $related_posts = new WP_Query($args);
            $duration = 1200;

            if ($related_posts->have_posts()):
                while ($related_posts->have_posts()):
                    $related_posts->the_post(); ?>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="<?php echo $duration; ?>">
                <div class="card">
                    <a class="card-img-top-link rounded-corners img-zoom-container" href="<?php the_permalink(); ?>">
                        <span class="badge text-bg-primary rounded-circle rounded-badge">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </span>
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail("thumb-blog", [
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

<section class="pt-15 pb-30">
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

<?php get_footer(); ?>
