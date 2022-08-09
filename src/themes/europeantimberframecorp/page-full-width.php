<?php
/**
 *
 * Template Name: Full Width
 *
 */
get_header();
?>
    <main class="pt-1 pb-2">
        <div class="container">

            <div class="row">
                <div class="col-12">

                    <h2><?php the_title(); ?></h2>

                    <?php if (have_posts()) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

    </main>

<?php get_footer();