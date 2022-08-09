<?php
/**
 *
 * Template Name: Gallery
 *
 */
get_header(); ?>

    <main class="pb-1 pb-lg-3">


        <?php if (have_rows('ping_pong_gallery')): ?>
            <?php while (have_rows('ping_pong_gallery')): the_row(); ?>
                <?php $image = get_sub_field('image');
                if ($image):
                    // Image variables.
                    $url = $image['url'];
                    $title = $image['title'];
                    $alt = $image['alt'];
                endif;
                ?>
                <section
                    class="ping-pong ping-pong--gallery ping-pong--img-full ping-pong--<?php the_sub_field('layout'); ?> ping-pong--txt-btns">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 ping-pong--txt-column">
                                <div class="ping-pong--max-width">
                                    <h2><?php the_sub_field('gallery_name'); ?></h2>
                                    <?php the_sub_field('content'); ?>
                                    <?php if (get_sub_field('content_list_details')): ?>
                                        <ul class="my-1 my-lg-2 column-lg-count--2 pl-50">
                                            <?php while (have_rows('content_list_details')) : the_row(); ?>
                                                <li><?php the_sub_field('list_item'); ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <?php if (have_rows('gallery')): ?>
                                        <div class="gallery">
                                            <?php while (have_rows('gallery')): the_row(); ?>
                                                <?php $gallery_image = get_sub_field('gallery_image');
                                                if ($gallery_image):
                                                    // Image variables.
                                                    $url = $gallery_image['url'];
                                                    $title = $gallery_image['title'];
                                                    $alt = $gallery_image['alt'];
                                                endif;
                                                ?>
                                                <a href="<?php echo $gallery_image['sizes']['hero_image']; ?>" class="btn btn-primary mb-2 btn-gallery">See All Photos</a>
                                            <?php endwhile; ?>
                                        </div><!--gallery-->
                                    <?php endif; ?>

                                </div><!-- ping-pong--max-width -->
                            </div><!-- col -->
                            <div class="col-lg-6 text-center ping-pong--img-column px-0"
                                 style="background-image: url('<?php echo $image['sizes']['landscape_feature']; ?>');">
                                <img src="<?php echo $image['sizes']['landscape_feature']; ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                     class="d-xl-none img-fluid d-block mb-1">
                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->
                </section>

                <!--<div class="gallery">-->
                <!--    <a href="path-to-image.jpg">Open image 1 (gallery #2)</a>-->
                <!--    <a href="http://vimeo.com/123123" class="mfp-iframe">Open video (gallery #2). Class mfp-iframe forces "iframe" content type on this item.</a>-->
                <!--</div>-->
            <?php endwhile; ?>
        <?php endif; ?>

    </main>

<?php get_footer();