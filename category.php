<?php get_header(); ?>

<section class="py-30">
    <div class="container">

        <!-- Page Header -->
        <div class="row mb-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-12 col-lg-6 my-auto">
                <h1><?php single_cat_title(); ?></h1>
                <?php if (category_description()): ?>
                    <p><?php echo category_description(); ?></p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Posts Grid -->
        <div class="row">

            <?php
            $duration = 1200;

            if (have_posts()):
                while (have_posts()):
                    the_post(); ?>

                <div class="col-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="<?php echo esc_attr(
                    $duration,
                ); ?>">
                    <div class="card h-100">
                        <a class="card-img-top-link rounded-corners img-zoom-container" href="<?php the_permalink(); ?>">
                            <span class="badge text-bg-primary rounded-circle rounded-badge">
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </span>

                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail("blog-thumb", [
                                    "class" => "card-img-top",
                                ]); ?>
                            <?php else: ?>
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri(),
                                    ); ?>/assets/images/thumb-product-tall.png"
                                    class="card-img-top"
                                    alt="<?php echo esc_attr(
                                        get_the_title(),
                                    ); ?>">
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
                        </div>
                    </div>
                </div>

            <?php $duration += 200;
                endwhile;
            else:
                 ?>
                <div class="col-12">
                    <p><?php esc_html_e(
                        "No posts found.",
                        "your-textdomain",
                    ); ?></p>
                </div>
            <?php
            endif;
            ?>

        </div>

        <!-- Pagination -->
        <div class="row mt-4">
            <div class="col-12">
                <?php the_posts_pagination([
                    "mid_size" => 2,
                    "prev_text" => __("← Previous", "your-textdomain"),
                    "next_text" => __("Next →", "your-textdomain"),
                ]); ?>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>
