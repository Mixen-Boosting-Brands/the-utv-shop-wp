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

<?php get_template_part("template-parts/best-sellers"); ?>

<!-- ?php get_template_part("template-parts/blog-section"); ? -->

<?php get_footer(); ?>
