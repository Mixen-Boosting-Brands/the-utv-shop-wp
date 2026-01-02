<section id="marquee-secondary" class="marquee">
    <div class="marquee-content">
        <h1>Off-Road Updates</h1>
        <h1>Off-Road Updates</h1>
        <h1>Off-Road Updates</h1>
        <h1>Off-Road Updates</h1>
        <h1>Off-Road Updates</h1>
        <h1>Off-Road Updates</h1>
        <h1>Off-Road Updates</h1>
        <h1>Off-Road Updates</h1>
        <h1>Off-Road Updates</h1>
        <h1>Off-Road Updates</h1>
        <h1>Off-Road Updates</h1>
        <h1>Off-Road Updates</h1>
        <h1>Off-Road Updates</h1>
        <h1>Off-Road Updates</h1>
        <h1>Off-Road Updates</h1>
        <h1>Off-Road Updates</h1>
    </div>
</section>

<section class="py-30">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-6 my-auto">
                <h1>Off-Road Updates</h1>
                <p>Race reports, tuning guides and rider inspiration.</p>
            </div>
            <div class="col-6 my-auto text-end">
                <a
                    class="btn btn-primary rounded-pill"
                    href="<?php echo esc_url(
                        get_category_link(get_cat_ID("blog")),
                    ); ?>"
                    >Read more posts</a
                >
            </div>
        </div>
        <div class="row">
            <?php
            $args = [
                "post_type" => "post",
                "posts_per_page" => 4,
                "orderby" => "date",
                "order" => "DESC",
            ];

            $recent_posts = new WP_Query($args);
            $duration = 1200;

            if ($recent_posts->have_posts()):
                while ($recent_posts->have_posts()):
                    $recent_posts->the_post(); ?>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="<?php echo $duration; ?>">
                <div class="card">
                    <a class="card-img-top-link rounded-corners img-zoom-container" href="<?php the_permalink(); ?>">
                        <span class="badge text-bg-primary rounded-circle rounded-badge">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </span>
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail("blog-thumb", [
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
