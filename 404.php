<?php get_header(); ?>

<?php get_template_part("template-parts/top-marquee"); ?>

<section id="jumbotron">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col">
                <h1 class="big-heading text-uppercase">
                    404 - Page Not Found
                </h1>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1200">
            <div class="col-12">
                <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo home_url("/"); ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item active">404 Error</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="pb-30">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1400">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="error-404-content">
                    <h2 class="display-1 fw-bold text-primary">404</h2>
                    <h3 class="mb-4">Oops! This Trail Doesn't Exist</h3>
                    <p class="lead mb-4">
                        Looks like you've hit a dead end. The page you're looking for might have been moved, deleted, or never existed in the first place.
                    </p>
                    <p class="mb-5">
                        Don't worry—even the best riders get lost sometimes. Let's get you back on track.
                    </p>

                    <div class="row mb-5">
                        <div class="col-md-4 mb-3">
                            <a href="<?php echo home_url(
                                "/",
                            ); ?>" class="btn btn-primary rounded-pill w-100">
                                <i class="fa-solid fa-house"></i> Go Home
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="<?php echo get_permalink(
                                wc_get_page_id("shop"),
                            ); ?>" class="btn btn-secondary rounded-pill w-100">
                                <i class="fa-solid fa-cart-shopping"></i> Shop Products
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="<?php echo get_permalink(
                                get_option("page_for_posts"),
                            ); ?>" class="btn btn-outline-primary rounded-pill w-100">
                                <i class="fa-solid fa-newspaper"></i> Read Blog
                            </a>
                        </div>
                    </div>

                    <div class="search-form-wrapper">
                        <h5 class="mb-3">Or search for what you need:</h5>
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="marquee-secondary" class="marquee">
    <div class="marquee-content">
        <h1>Popular Products</h1>
        <h1>Popular Products</h1>
        <h1>Popular Products</h1>
        <h1>Popular Products</h1>
        <h1>Popular Products</h1>
        <h1>Popular Products</h1>
        <h1>Popular Products</h1>
        <h1>Popular Products</h1>
        <h1>Popular Products</h1>
        <h1>Popular Products</h1>
        <h1>Popular Products</h1>
        <h1>Popular Products</h1>
        <h1>Popular Products</h1>
        <h1>Popular Products</h1>
        <h1>Popular Products</h1>
        <h1>Popular Products</h1>
    </div>
</section>

<section class="pt-30 pb-15">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-6 my-auto">
                <h1 class="text-uppercase">Best Sellers</h1>
                <p>Check out our most popular products.</p>
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
