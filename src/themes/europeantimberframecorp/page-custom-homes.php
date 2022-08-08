<?php
/**
 *
 * Template Name: Custom Homes
 *
 */
get_header(); ?>

    <main>
        <?php get_template_part('partials/header/toptipslider'); ?>

        <section class="bg-primary py-1 py-lg-4 mb-1 mb-lg-6">
            <div class="container">
                <div class="row text-white">
                    <div class="col-lg-12">
                        <h2 class="text-white"><?php the_field('module_title'); ?></h2>
                    </div><!-- col -->
                    <div class="col-lg-11">
                        <?php the_field('module_blurb'); ?>
                    </div><!-- col -->
                </div><!-- row -->
                <?php if (have_rows('blocks')): ?>
                    <div class="row justify-content-center justify-content-lg-start text-white">
                        <?php while (have_rows('blocks')) : the_row(); ?>
                            <?php $image = get_sub_field('block_image');
                            if ($image):
                                $url = $image['url'];
                                $title = $image['title'];
                                $alt = $image['alt'];
                            endif;
                            ?>
                            <div class="col-8 col-md-4 col-lg-2">
                                <img
                                    src="<?php echo $image['sizes']['product-block']; ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>"
                                    class="img-fluid d-block mb-1">
                                <p class="font-weight-bold mb-50"><?php the_sub_field('block_title'); ?></p>
                                <p class="mb-0"><?php the_sub_field('block_blurb'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    </div><!-- row -->
                <?php endif; ?>
            </div><!-- container -->
        </section>

        <?php if (have_rows('product_card')): ?>
            <section class="card-stack pb-1 pb-lg-4">
                <div class="container">
                    <div class="row col-container">
                        <div class="row">
                            <?php while (have_rows('product_card')) :
                                the_row(); ?>
                                <?php $image = get_sub_field('card_image');
                                if ($image):
                                    $url = $image['url'];
                                    $title = $image['title'];
                                    $alt = $image['alt'];
                                endif;
                                ?>
                                <div class="col-lg-6 col-100 mb-1">
                                    <div class="d-flex flex-column h-100 px-lg-50">
                                        <img
                                            src="<?php echo $image['sizes']['product-col']; ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>"
                                            class="img-fluid d-block mb-1">
                                        <h2 class="font-weight-bold h3 mb-150"><?php the_sub_field('card_title'); ?></h2>
                                        <p><?php the_sub_field('card_blurb'); ?></p>
                                        <?php if (get_sub_field('button_label')): ?>
                                            <div class="mt-auto">
                                                <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-primary">
                                                    <?php the_sub_field('button_label'); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div><!-- d-flex flex-column h-100 -->
                                </div><!-- col -->
                            <?php endwhile; ?>
                            <!--repeater end -->
                        </div><!-- row -->
                    </div><!-- container -->
            </section>
        <?php endif; ?>

    </main>

<?php get_footer();