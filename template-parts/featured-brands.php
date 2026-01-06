<section class="brands py-60">
    <div class="container">
        <div
            class="row mb-lg-4"
            data-aos="fade-up"
            data-aos-duration="1000"
        >
            <div class="col text-center">
                <h1>Featured Brands</h1>
                <p>Top performance brands trusted by riders worldwide.</p>
            </div>
        </div>

        <?php if (have_rows("featured_brands", "option")): ?>
            <div class="row" data-aos="fade-up" data-aos-duration="1200">
                <div class="col-12 overflow-x-hidden">
                    <!-- Slider main container -->
                    <div class="swiper-brands">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            <?php while (
                                have_rows("featured_brands", "option")
                            ):

                                the_row();

                                $brand_logo = get_sub_field("brand_logo");
                                $brand_name = get_sub_field("brand_name");
                                ?>

                                <?php if ($brand_logo): ?>
                                    <div class="swiper-slide">
                                        <img
                                            class="img-fluid"
                                            src="<?php echo esc_url(
                                                $brand_logo,
                                            ); ?>"
                                            alt="<?php echo esc_attr(
                                                $brand_name ?: "Brand logo",
                                            ); ?>"
                                        />
                                    </div>
                                <?php endif; ?>

                            <?php
                            endwhile; ?>

                        </div>

                        <!-- Scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
