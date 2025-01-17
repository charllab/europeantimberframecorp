<?php
get_header();
?>

<?php get_template_part('partials/header/toptipslider'); ?>


<main>
        <div class="container py-2">

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


<?php get_footer(); ?>
