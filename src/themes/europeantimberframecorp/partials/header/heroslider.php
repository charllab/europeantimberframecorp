<?php if (have_rows('hero_slide')): ?>
    <section>
        <div class="owl-carousel owl-theme z-index-1 position-relative" id="hero-slider">

            <?php while (have_rows('hero_slide')) : the_row(); ?>

                <?php $herosliderimageurl = get_sub_field('hero_slide_image'); ?>

                <div class="is-full-height position-relative bg-dark"
                     style="background: #3050A0 url(<?php echo $herosliderimageurl['sizes']['hero_image']; ?>) no-repeat center center; background-size: cover;">
                    <div class="block__tint-overlay position-absolute h-100"></div>
                    <div class="item h-100" data-dot="<?php the_sub_field('hero_slide_nav_title'); ?>">
                        <div class="container position-relative h-100">
                            <div class="row justify-content-lg-end align-items-center h-100">
                                <div class="col-lg-8 text-right">
                                    <h1 class="text-white ml-lg-auto mb-1">
                                        <?php the_sub_field('hero_slide_title'); ?>
                                    </h1>
                                    <p class="lead text-white mb-2 ml-lg-auto"><?php the_sub_field('hero_slide_blurb'); ?></p>
                                    <?php if (get_sub_field('hero_slide_button_text')): ?>
                                        <!-- Create variable Link, that includes array with link info -->
                                        <?php $link = get_sub_field('hero_slide_button_link'); ?>
                                        <a href="<?php echo $link['url']; ?>"
                                           target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"
                                           class="btn btn-light" class="text-white mb-1">
                                            <?php the_sub_field('hero_slide_button_text'); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

        </div><!-- owl-carousel -->
    </section>
<?php endif; ?>

<div class="scroll-down--arrow">
    <a href="#main" class="scrollable-anchor">
        <img src="<?php bloginfo('template_url'); ?>/images/arrow-down.svg"
             alt=" "
             class="d-block mx-auto">
    </a>
</div>
