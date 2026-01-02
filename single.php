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

<?php get_template_part("template-parts/related-posts"); ?>

<?php get_template_part("template-parts/best-sellers"); ?>

<?php get_footer(); ?>
