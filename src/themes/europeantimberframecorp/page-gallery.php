<?php
/**
 * Template Name: Gallery
 */
get_header(); ?>

<main class="pb-1 pb-lg-3">
    <?php
    $counter = 0; // Counter to track the number of displayed items
    if (have_rows('ping_pong_gallery')):
        while (have_rows('ping_pong_gallery')): the_row();
            $counter++;
            $hidden_class = $counter > 3 ? 'hidden-item' : ''; // Hide items after the third one
            $image = get_sub_field('image');
            if ($image):
                // Image variables.
                $url = $image['url'];
                $title = $image['title'];
                $alt = $image['alt'];
            endif;
            ?>
            <section class="ping-pong ping-pong--gallery ping-pong--img-full ping-pong--<?php the_sub_field('layout'); ?> ping-pong--txt-btns <?php echo $hidden_class; ?>">
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
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if ($counter > 3): // Show button if there are more than 3 items ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <button id="load-more-gallery" class="btn btn-primary mb-2">Load More Projects</button>
            </div>
        </div>
    </div>
    <?php endif; ?>
</main>

<script>
    jQuery(document).ready(function($) {
        $('#load-more-gallery').click(function() {
            // Show next 3 hidden items
            $('.hidden-item').slice(0, 3).removeClass('hidden-item');
            if ($('.hidden-item').length === 0) {
                $(this).hide(); // Hide the button if no more items to show
            }
        });
    });
</script>

<style>
    .hidden-item {
        display: none;
    }
</style>

<?php get_footer();
