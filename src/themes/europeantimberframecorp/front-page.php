<?php get_header(); ?>

    <main class="pt-1 pt-lg-3" id="main">

        <section id="intro" class="pb-1 pb-md-150 pb-lg-2">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="pr-lg-150">
                            <h2 class="text-primary mb-1"><?php the_field('intro_title'); ?></h2>
                            <?php if (get_field('intro_button_label')): ?>
                                <div class="mt-auto">
                                    <a href="<?php the_field('intro_button_link'); ?>" class="btn btn-primary">
                                        <?php the_field('intro_button_label'); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div><!-- pr -->
                    </div><!-- col -->
                    <div class="col-lg-6 column-lg-count--2">
                        <?php the_field('intro_paragraph'); ?>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </section>

        <?php if (have_rows('reason_block')): ?>
            <section id="reasonsSection" class="mb-1 mb-lg-4">
                <div class="container px-0">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="position-relative">
                                <div class="owl-carousel owl-theme" id="reasonsSlider">
                                    <?php while (have_rows('reason_block')) : the_row(); ?>
                                        <?php $image = get_sub_field('reason_image');
                                        if ($image):
                                            $url = $image['url'];
                                            $title = $image['title'];
                                            $alt = $image['alt'];
                                        endif;
                                        ?>
                                        <div class="item mb-45"
                                             style="background-image: url(<?php echo $image['sizes']['reason_image']; ?>);">
                                            <div class="reason-block bg-dark p-1 p-lg-2">
                                                <p class="font-weight-bold text-white mb-50">
                                                    “<?php the_sub_field('reason'); ?>”</p>
                                                <p class="small text-grey mb-0"><?php the_sub_field('reason_author'); ?></p>
                                            </div><!-- reason-block -->
                                        </div><!-- item -->
                                    <?php endwhile; ?>
                                </div><!-- owl-carousel -->
                            </div><!-- position-relative -->
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </section>
        <?php endif; ?>

        <section class="ping-pong ping-pong--carousel hide-overflow">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ping-pong--txt-column">
                        <h2 class="mb-1"><?php the_field('block_title'); ?></h2>
                        <?php the_field('block_content'); ?>
                    </div><!-- col -->
                    <?php if (have_rows('carousel_images')): ?>
                        <div class="col-lg-6 col-sm---wider">
                            <div class="pl-xl-25 ping-pong--carousel-column">
                                <div class="position-relative">
                                    <div class="owl-carousel owl-theme js-pingPongSlider">
                                        <?php while (have_rows('carousel_images')) : the_row(); ?>
                                            <?php $image = get_sub_field('carousel_image');
                                            if ($image):
                                                $url = $image['url'];
                                                $title = $image['title'];
                                                $alt = $image['alt'];
                                            endif;
                                            ?>
                                            <div class="item"
                                                 style="background-image: url(<?php echo $image['sizes']['ping-pong-carousel']; ?>);">
                                            </div><!-- item -->
                                        <?php endwhile; ?>
                                    </div><!-- owl-carousel -->
                                </div><!-- position-relative -->
                            </div><!-- pl ping-pong--carousel-column -->
                        </div><!-- col -->
                    <?php endif; ?>
                </div><!-- row -->
            </div><!-- container -->
        </section>

        <?php if (have_rows('testimonials')): ?>
            <section id="testimonials" class="bg-md-half-and-half position-relative">
                <div class="container">
                    <div class="row no-gutters align-content-center">
                        <div class="col-md-2">
                            <p class="small mb-0 d-none d-md-block ml-50"><span
                                    class="rotated-md small d-inline-block font-weight-bold">TESTIMONIALS</span></p>
                        </div><!-- col -->
                        <div class="col-12 col-md-10 bg-dark">
                            <div class="pt-1 pt-md-7 pb-md-4">
                                <div class="owl-carousel owl-theme js-testimonialsSlider pb-5 pb-md-0">
                                    <?php while (have_rows('testimonials')) : the_row(); ?>
                                        <div class="item">
                                            <h4 class="text-white mb-2 font-weight-bold">
                                                “<?php the_sub_field('testimonial'); ?>”</h4>
                                            <p class="text-grey"><?php the_sub_field('testimonial_author'); ?></p>
                                        </div><!-- item -->
                                    <?php endwhile; ?>
                                </div><!-- owl-carousel -->
                            </div><!-- position-relative -->
                        </div><!-- row -->
                    </div><!-- container -->
            </section>
        <?php endif; ?>

    </main>

<?php get_footer();
