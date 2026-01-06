<?php get_header(); ?>

<?php get_template_part("template-parts/top-marquee"); ?>

<?php
$featured_item = get_field("featured_item", "option");

if ($featured_item):

    $title = $featured_item["title"] ?? "";
    $subtitle = $featured_item["subtitle"] ?? "";
    $image = $featured_item["image"] ?? "";
    $link = $featured_item["link"] ?? "";
    ?>

<section id="jumbotron">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col">
                <?php if ($title): ?>
                    <h1 class="big-heading text-uppercase">
                        <?php echo esc_html($title); ?>
                    </h1>
                <?php endif; ?>
            </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-duration="1200">
            <div class="col-6 my-auto">
                <?php if ($subtitle): ?>
                    <p class="mb-0">
                        <?php echo esc_html($subtitle); ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="col-6 my-auto text-end">
                <?php if ($link): ?>
                    <a
                        class="btn btn-primary rounded-pill"
                        href="<?php echo esc_url($link); ?>"
                    >
                        Shop now
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php if ($image): ?>
<section class="pb-30">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="1400">
            <div class="col text-center">
                <a
                    href="<?php echo esc_url($link ?: "#"); ?>"
                    class="rounded-corners img-zoom-container"
                >
                    <img
                        class="img-fluid"
                        src="<?php echo esc_url($image); ?>"
                        alt="<?php echo esc_attr($title ?: "Featured item"); ?>"
                    />
                </a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
endif;
?>

<section id="our-story" class="cta py-60">
    <div class="container">
        <div class="row">
            <div
                class="col-lg-7 my-auto"
                data-aos="fade-up"
                data-aos-duration="2000"
            >
                <h1 class="big-heading">
                    Off-Road<br />
                    Excellence,<br />
                    Made Simple
                </h1>
            </div>

            <div
                class="col-lg-5 my-auto"
                data-aos="fade-up"
                data-aos-duration="2100"
            >
                <?php
                $about_page_id = 19;
                $about_post = get_post($about_page_id);
                ?>

                <?php if (
                    $about_post &&
                    $about_post->post_status === "publish"
                ): ?>
                    <h2 class="text-uppercase">
                        <?php echo esc_html(get_the_title($about_page_id)); ?>
                    </h2>

                    <p>
                        <?php echo esc_html(
                            has_excerpt($about_page_id)
                                ? get_the_excerpt($about_page_id)
                                : wp_trim_words($about_post->post_content, 35),
                        ); ?>
                    </p>

                    <div class="text-end">
                        <a
                            href="<?php echo esc_url(
                                get_permalink($about_page_id),
                            ); ?>"
                            class="btn btn-primary rounded-pill"
                        >
                            Learn More
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="py-30">
    <div class="container">

        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-12">
                <h1 class="text-uppercase">Featured Vehicles</h1>
                <p>Browse parts and accessories for your vehicle.</p>
            </div>
        </div>

        <div class="row">
            <?php if (have_rows("featured_vehicles", "option")):
                $duration = 1200;

                while (have_rows("featured_vehicles", "option")):

                    the_row();

                    $vehicle_term = get_sub_field("vehicle_model"); // Term object
                    $image = get_sub_field("image"); // URL

                    if (!$vehicle_term || !is_object($vehicle_term)) {
                        continue;
                    }

                    $name = $vehicle_term->name;
                    $slug = $vehicle_term->slug;

                    $link = add_query_arg(
                        "filter_vehicle-model",
                        $slug,
                        wc_get_page_permalink("shop"),
                    );
                    ?>
                <div
                    class="col-12 col-md-6 col-lg-4 mb-4"
                    data-aos="fade-up"
                    data-aos-duration="<?php echo esc_attr($duration); ?>"
                >
                    <div class="card">
                        <a
                            class="card-img-top-link rounded-corners img-zoom-container"
                            href="<?php echo esc_url($link); ?>"
                        >
                            <span class="badge text-bg-primary rounded-pill">
                                <?php echo esc_html($name); ?>
                            </span>

                            <?php if ($image): ?>
                                <?php $attachment_id = attachment_url_to_postid(
                                    $image,
                                ); ?>

                                <?php if ($attachment_id): ?>
                                    <?php echo wp_get_attachment_image(
                                        $attachment_id,
                                        "thumb-square",
                                        false,
                                        ["class" => "card-img-top"],
                                    ); ?>
                                <?php else: ?>
                                    <img
                                        src="<?php echo esc_url($image); ?>"
                                        class="card-img-top"
                                        alt="<?php echo esc_attr($name); ?>"
                                    />
                                <?php endif; ?>
                            <?php else: ?>
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri(),
                                    ); ?>/assets/images/thumb-product.png"
                                    class="card-img-top"
                                    alt="<?php echo esc_attr($name); ?>"
                                />
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
            <?php $duration += 200;
                endwhile;
            endif; ?>
        </div>

    </div>
</section>

<?php get_template_part("template-parts/best-sellers"); ?>

<!-- section class="pb-60">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
            <div class="col-12">
                <div class="ratio ratio-16x9">
                    <iframe
                        class="rounded-corners"
                        width="100%"
                        src="https://www.youtube.com/embed/ScMzIvxBSi4?si=UTbCVEpsiwpTZFlN"
                        title="YouTube video player"
                        frameborder="0"
                        allow="
                            accelerometer;
                            autoplay;
                            clipboard-write;
                            encrypted-media;
                            gyroscope;
                            picture-in-picture;
                            web-share;
                        "
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen
                    ></iframe>
                </div>
            </div>
        </div>
    </div>
</section -->

<?php get_template_part("template-parts/featured-brands"); ?>

<?php get_template_part("template-parts/blog-section"); ?>

<?php get_footer(); ?>
