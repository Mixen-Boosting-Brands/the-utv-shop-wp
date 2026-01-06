<?php get_header(); ?>

<?php get_template_part("template-parts/top-marquee"); ?>

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

<?php get_template_part("template-parts/best-sellers"); ?>

<!-- ?php get_template_part("template-parts/blog-section"); ? -->

<?php get_footer(); ?>
