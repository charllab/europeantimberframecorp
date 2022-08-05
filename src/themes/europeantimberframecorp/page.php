<?php
get_header();
?>

<?php get_template_part('partials/header/toptipslider'); ?>


<main>

    <section class="bg-primary py-1 py-lg-4 mb-1 mb-lg-6">
        <div class="container">
            <div class="row text-white">
                <div class="col-lg-12">
                    <h2 class="text-white"><?php the_field('module_title');?></h2>
                </div><!-- col -->
                <div class="col-lg-11">
                    <?php the_field('module_blurb');?>
                </div><!-- col -->
            </div><!-- row -->
                <?php if (have_rows('blocks')): ?>
                <div class="row text-white">
                    <?php while (have_rows('blocks')) : the_row(); ?>
                        <?php $image = get_sub_field('block_image');
                        if ($image):
                            $url = $image['url'];
                            $title = $image['title'];
                            $alt = $image['alt'];
                        endif;
                        ?>
                        <div class="col-12 col-md-4 col-lg-2">
                            <img
                                src="<?php echo $image['sizes']['product-block']; ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>"
                                class="img-fluid d-block mb-1">
                            <p class="font-weight-bold mb-50"><?php the_sub_field('block_title');?></p>
                            <p class="mb-0"><?php the_sub_field('block_blurb');?></p>
                        </div>
                    <?php endwhile; ?>
                </div><!-- row -->
                <?php endif; ?>
        </div><!-- container -->
    </section>

    <section class="card-stack py-1 py-lg-4">
        <div class="container">
            <div class="row col-container">
                <!--repeater start -->
                <div class="col-lg-6 col-100">
                    <div class="d-flex flex-column h-100 px-lg-50">
                        <img src="http://via.placeholder.com/552x312" alt="" class="d-block mb-1">
                        <h2 class="font-weight-bold h3 mb-150">Eurotimber Cabana Kits</h2>
                        <p>If you are looking to add your own dedicated timber frame structure to your yard for
                            barbecues and family dinners or a shady shelter by the pool. Consider our prefabricated cabana kits, they
                            are all handcrafted with all the quality and beauty our clients have come to expect from
                            European Timberframe Corp. Whether you are a contractor or looking to build your own beautiful
                            backyard structure our cabana kits are delivered fully ready to be assembled. To learn more
                            about our cabana kits and see the various sizing and customization options, please follow the
                            link below.
                            <br>(img 992by755)</p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div><!-- d-flex flex-column h-100 -->
                </div><!-- col -->

                <!--repeats-->

                <div class="col-lg-6 col-100">
                    <div class="d-flex flex-column h-100 px-lg-50">
                        <img src="http://via.placeholder.com/552x312" alt="" class="d-block mb-1">
                        <h2 class="font-weight-bold h3 mb-150">Start Your Dream Home Today</h2>
                        <p>Our team is dedicated to creating just a taste of the wonder and beauty of European
                            timber framed homes and we are excited to see what new and creative ideas our clients come up
                            with for their custom timber frame homes. If you are curious about what some of our clients
                            timber framed homes look like or simply want to curate some inspiration for your own home,
                            please enjoy our gallery. If you wish to start the consultation process for your very own custom
                            timber frame home or have any questions for our team about timber frame homes and various
                            accenting projects, please feel free to contact us either by phone or follow the link below and
                            fill out our contact form.
                            <br>(img 992by755)</p>
                        </p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div><!-- col -->

                <!--repeater end -->
            </div><!-- row -->
        </div><!-- container -->
    </section>


    <?php if (is_page([1716])) : ?>

        <?php if (have_rows('faq_block')) : $i = 0; ?>
            <div class="container py-2 py-md-4">
                <div class="row justify-content-center">

                    <?php while (have_rows('faq_block')) : the_row();
                        $i++; ?>

                        <div class="colps col-12">
                            <div href="#panel_<?php echo $i; ?>" data-toggle="collapse"
                                 class="col-12 px-0 faq__question-block">
                                <span class="faq__question-number"><strong><?php echo $i; ?></strong></span>
                                <span
                                    class="faq__question-text fas <?php if ($i == 1) : ?> fa-minus <?php else : ?> fa-plus <?php endif; ?>"><strong><?php echo the_sub_field('question'); ?></strong></span>
                            </div><!-- faq__question-block -->
                        </div><!-- col -->
                        <div class="col-10 collapse <?php if ($i == 1) : ?> show <?php endif; ?>"
                             id="panel_<?php echo $i; ?>">
                            <div class="faq__question-answer"><?php echo the_sub_field('answer'); ?></div>
                        </div><!-- col -->

                    <?php endwhile; ?>

                </div><!-- row -->

            </div><!-- container -->
        <?php endif; ?>

    <?php elseif (is_page([1725])) : ?>

        <section class="py-3">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 px-0">
                        <?php if (have_posts()) : ?>
                            <h2><?php the_title(); ?></h2>
                            <p>Please add markup to the page.php template…</p>

                            <?php /* Start the Loop */ ?>

                            <?php while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>

                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div>
                </div>

            </div><!-- container -->
        </section>

    <?php elseif (is_page([9999])) : ?>

        <section class="py-3">
            <div class="container">
                <?php if (is_page([9999])) : ?>
                    <div class="row justify-content-between">
                        <div class="col-lg-6 section-pd">
                            <h1 class="text-capitalize"><?php the_title(); ?></h1>
                            <?php if (have_posts()) : ?>

                                <?php /* Start the Loop */ ?>

                                <?php while (have_posts()) : the_post(); ?>
                                    <?php the_content(); ?>

                                <?php endwhile; ?>

                            <?php endif; ?>
                        </div><!-- col -->
                        <div class="col-lg-5">
                            <div class="bg-secondary">

                                <div class="page-aside-pd p-5">
                                    <h2 class="ffs">Contact Information</h2>
                                    <?php echo get_field('contact_details', 'option'); ?>
                                </div><!-- col -->

                                <div class="col-12 px-0">
                                    <?php echo get_field('map_embed_code', 'option'); ?>
                                </div><!-- col -->

                            </div><!-- col -->
                        </div><!-- col -->
                    </div><!-- row -->
                <?php else : ?>
                    <div class="row py-3">
                        <div class="col-12 px-0">
                            <?php if (have_posts()) : ?>

                                <?php /* Start the Loop */ ?>

                                <?php while (have_posts()) : the_post(); ?>
                                    <?php the_content(); ?>

                                <?php endwhile; ?>

                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div><!-- container -->
        </section>

    <?php else : ?>

        <div class="container py-2">

            <div class="row">
                <div class="col-12">

                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs" class="spr-breadcrumb mb-1">', '</p>');
                    }
                    ?>

                    <h1 class="text-capitalize"><?php the_title(); ?></h1>

                    <?php if (have_posts()) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->


    <?php endif; ?>

</main>


<?php get_footer(); ?>
