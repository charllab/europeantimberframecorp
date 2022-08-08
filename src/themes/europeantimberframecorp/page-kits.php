<?php
/**
 *
 * Template Name: Kits
 *
 */
get_header(); ?>

    <main class="pt-1 pt-lg-3">
        <?php get_template_part('partials/header/toptipslider'); ?>

        <?php if (have_rows('ping_pong_general')): ?>
            <?php while (have_rows('ping_pong_general')): the_row(); ?>
                <?php $image = get_sub_field('image');
                if ($image):
                    // Image variables.
                    $url = $image['url'];
                    $title = $image['title'];
                    $alt = $image['alt'];
                endif;
                ?>
                <section class="ping-pong ping-pong--img-full ping-pong--<?php the_sub_field('layout'); ?> ping-pong--txt-btns">
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
                            <div class="col-lg-6 text-center ping-pong--img-column px-0"
                                 style="background-image: url(<?php echo $image['sizes']['ping-pong-carousel']; ?>);">
                                <img src="<?php echo $image['sizes']['ping-pong-carousel']; ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                                     class="d-xl-none img-fluid d-block">
                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->
                </section>
            <?php endwhile; ?>
        <?php endif; ?>

        <section id="outro" class="pb-1 pb-md-150 pb-lg-2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                            <h3 class="mb-1 mb-lg-4"><?php the_field('kit_include_title_block'); ?></h3>
                    </div><!-- col -->
                    <div class="col-lg-12 column-lg-count--2">
                        <?php the_field('kit_include_blurb'); ?>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </section>

    </main>

<?php get_footer();