<?php if (have_rows('tt_slide')): ?>
    <section class="tiptopSlider">
        <section class="my-1 mb-md-2">
            <div class="bg-primary--soft py-1">
                <div class="container">
                    <div class="row">
                        <div class="tt-dots">
                        </div><!-- col tt-dots-->
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- bg-grey -->
        </section><!-- my -->
        <section>
            <div class="owl-carousel owl-theme z-index-1 position-relative js-tiptopSlider">
                <?php while (have_rows('tt_slide')) : the_row(); ?>

                        <div class="item" data-dot="<?php the_sub_field('tt_slide_nav_title'); ?>">
                            <?php $image = get_sub_field('tt_slide_image');
                            if ($image):
                                $url = $image['url'];
                                $title = $image['title'];
                                $alt = $image['alt'];
                            endif;
                            ?>
                            <section class="ping-pong ping-pong--img-full ping-pong--txt-btns overflow-hidden">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5 ping-pong--txt-column offset-lg-1 order-lg-1">
                                            <div class="ping-pong--max-width">
                                                <h2 class="mb-1">
                                                    <?php the_sub_field('tt_slide_title'); ?>
                                                </h2>
                                                <p class="mb-0"><?php the_sub_field('tt_slide_blurb'); ?></p>

                                                <?php if (get_sub_field('tt_slide_button_text')): ?>
                                                    <!-- Create variable Link, that includes array with link info -->
                                                    <?php $link = get_sub_field('tt_slide_button_link'); ?>
                                                    <a href="<?php echo $link['url']; ?>"
                                                       target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"
                                                       class="btn btn-primary" class="text-white mb-1">
                                                        <?php the_sub_field('tt_slide_button_text'); ?>
                                                    </a>
                                                <?php endif; ?>
                                            </div><!-- ping-pong--max-width -->
                                        </div><!-- col -->
                                        <div class="col-lg-6 text-center ping-pong--img-column px-0 order-lg-0"
                                             style="background-image: url('<?php echo esc_url($url); ?>');">
                                            <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="d-xl-none img-fluid d-block">
                                        </div><!-- col -->
                                    </div><!-- row -->
                                </div><!-- container -->
                            </section><!-- ping-pong--img-full -->
                        </div><!-- item -->

                <?php endwhile; ?>
            </div><!-- owl-carousel -->
        </section>
    </section>
<?php endif; ?>
