<?php
/**
 *
 * Template Name: About
 *
 */
get_header(); ?>

    <div class="container">
        <div class="row justify-content-between align-items-center mb-1 mb-lg-2">
            <div class="col-lg-6">
                <h2>The Legacy Of Our Canadian Timber Frame Company</h2>
            </div><!-- col -->
            <div class="col-lg-3">
                <p class="mb-lg-0">A Canadian Timber Frame Company With European Roots</p>
            </div><!-- col -->
        </div><!-- row -->
        <div class="row">
            <div class="col-12">
                <?php $heroimage = get_field('hero_image');
                if ($heroimage):
                    // Image variables.
                    $url = $heroimage['url'];
                    $title = $heroimage['title'];
                    $alt = $heroimage['alt'];
                endif;
                ?>
                <img src="<?php echo esc_attr($heroimage['url']); ?>" alt="<?php echo esc_attr($heroimage['alt']); ?>"
                     class="img-fluid d-block">
            </div>
        </div>
    </div><!-- container -->

    <main class="pt-1 pt-lg-3">

        <?php if (have_rows('ping_pong_narrow')): ?>
            <?php while (have_rows('ping_pong_narrow')): the_row(); ?>

                <?php $image = get_sub_field('image');
                if ($image):
                    // Image variables.
                    $url = $image['url'];
                    $title = $image['title'];
                    $alt = $image['alt'];
                endif;
                ?>

                <section class="ping-pong ping-pong--<?php the_sub_field('layout'); ?> ping-pong--txt-btns mb-lg-2">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 ping-pong--txt-column">
                                <div class="ping-pong--max-width">
                                    <?php the_sub_field('content'); ?>

                                    <?php if (get_sub_field('buttons')): ?>
                                        <?php if (have_rows('buttons')): ?>
                                            <?php while (have_rows('buttons')): the_row(); ?>

                                                <a href="<?php the_sub_field('link'); ?>"
                                                   class="btn btn-primary"><?php the_sub_field('label'); ?></a>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    <?php endif; ?>

                                </div><!-- ping-pong--max-width -->
                            </div><!-- col -->

                            <div class="col-lg-6 text-center ping-pong--img-column px-0">
                                <?php if (get_sub_field('text_above_image')): ?>
                                    <p class="font-weight-bold mb-1"><?php the_sub_field('text_above_image'); ?></p>
                                <?php endif; ?>
                                <img src="<?php echo $image['sizes']['ping-pong-narrow']; ?>" alt=" "
                                     class="img-fluid d-block">
                                <?php if (get_sub_field('buttons_below_image')): ?>
                                    <?php if (have_rows('buttons_below_image')): ?>
                                        <?php while (have_rows('buttons_below_image')): the_row(); ?>
                                            <a href="<?php the_sub_field('link'); ?>"
                                               class="btn btn-primary mt-2"><?php the_sub_field('label'); ?></a>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div><!-- col -->

                        </div><!-- row -->
                    </div><!-- container -->
                </section>

            <?php endwhile; ?>
        <?php endif; ?>


        <?php if (have_rows('team_members')): ?>
            <section id="team">
                <div class="container mb-250 mb-lg-4">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <a href="#">
                                <img src="http://via.placeholder.com/526x538" alt=" "
                                     class="d-block img-fluid mb-1 mb-lg-0">
                            </a>
                        </div>
                        <!--repeat start-->
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <a href="#">
                                <img src="http://via.placeholder.com/526x538" alt=" "
                                     class="d-block img-fluid mb-1 mb-lg-0">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <a href="#">
                                <img src="http://via.placeholder.com/526x538" alt=" "
                                     class="d-block img-fluid mb-1 mb-lg-0">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <a href="#">
                                <img src="http://via.placeholder.com/526x538" alt=" "
                                     class="d-block img-fluid mb-1 mb-lg-0">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <a href="#">
                                <img src="http://via.placeholder.com/526x538" alt=" "
                                     class="d-block img-fluid mb-1 mb-lg-0">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2">
                            <a href="#">
                                <img src="http://via.placeholder.com/526x538" alt=" "
                                     class="d-block img-fluid mb-1 mb-lg-0">
                            </a>
                        </div>
                        <!--repeat end-->
                    </div><!-- row -->
                </div><!-- container -->

                <div class="container position-relative" id="teamSlider">
                    <div class="row">
                        <div class="col">
                            <div class="bg-dark py-1 pt-lg-2">

                                <div class="owl-carousel owl-theme js-teamSlider pb-5 pb-md-0">
                                    <?php while (have_rows('team_members')) : the_row(); ?>
                                        <div class="item">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-6 col-lg-3">
                                                        <p class="text-grey mb-50"><?php the_sub_field('title');?></p>
                                                        <h3 class="text-white"><?php the_sub_field('name');?></h3>
                                                    </div><!-- col -->
                                                    <div class="col-md-6 col-lg-8 text-white">
                                                        <p>
                                                            <?php the_sub_field('bio');?>
                                                        </p>
                                                    </div><!-- col -->
                                                </div><!-- row -->
                                            </div><!-- container -->
                                        </div><!-- item -->

                                    <?php endwhile; ?>

                                </div><!-- owl-carousel -->
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-lg-3 text-white">
                                            <div class="navHere"></div>
                                        </div><!-- col -->
                                        <div class="col-md-6 col-lg-8"></div>
                                    </div><!-- row -->
                                </div><!-- container -->

                            </div><!-- bg-dark -->
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container position-relative -->
            </section><!-- #team -->
        <?php endif; ?>


    </main>

<?php get_footer();