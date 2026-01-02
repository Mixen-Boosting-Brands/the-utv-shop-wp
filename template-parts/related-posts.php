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

<section class="py-30">
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
