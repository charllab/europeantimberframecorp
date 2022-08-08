<?php get_header(); ?>

    <main class="pt-1 pt-lg-3" id="main">

        <section id="intro" class="pb-1 pb-md-150 pb-lg-2">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="pr-lg-150">
                            <h2 class="text-primary mb-1"><?php the_field('intro_title'); ?></h2>
                            <?php if (get_field('intro_button_label')): ?>
                                <div class="mt-auto">
                                    <a href="<?php the_field('intro_button_link'); ?>" class="btn btn-primary">
                                        <?php the_field('intro_button_label'); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div><!-- pr -->
                    </div><!-- col -->
                    <div class="col-lg-6 column-lg-count--2">
                        <?php the_field('intro_paragraph'); ?>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </section>

        <?php if (have_rows('reason_block')): ?>
            <section id="reasonsSection" class="mb-1 mb-lg-4">
                <div class="container px-0">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="position-relative">
                                <div class="owl-carousel owl-theme" id="reasonsSlider">
                                    <?php while (have_rows('reason_block')) : the_row(); ?>
                                        <?php $image = get_sub_field('reason_image');
                                        if ($image):
                                            $url = $image['url'];
                                            $title = $image['title'];
                                            $alt = $image['alt'];
                                        endif;
                                        ?>
                                        <div class="item mb-45"
                                             style="background-image: url(<?php echo $image['sizes']['reason_image']; ?>);">
                                            <div class="reason-block bg-dark p-1 p-lg-2">
                                                <p class="font-weight-bold text-white mb-50">
                                                    “<?php the_sub_field('reason'); ?>”</p>
                                                <p class="small text-grey mb-0"><?php the_sub_field('reason_author'); ?></p>
                                            </div><!-- reason-block -->
                                        </div><!-- item -->
                                    <?php endwhile; ?>
                                </div><!-- owl-carousel -->
                            </div><!-- position-relative -->
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </section>
        <?php endif; ?>

        <section class="ping-pong ping-pong--carousel hide-overflow">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ping-pong--txt-column">
                        <h2 class="mb-1"><?php the_field('block_title'); ?></h2>
                        <?php the_field('block_content'); ?>
                    </div><!-- col -->
                    <?php if (have_rows('carousel_images')): ?>
                        <div class="col-lg-6 col-sm---wider">
                            <div class="pl-xl-25 ping-pong--carousel-column">
                                <div class="position-relative">
                                    <div class="owl-carousel owl-theme js-pingPongSlider">
                                        <?php while (have_rows('carousel_images')) : the_row(); ?>
                                            <?php $image = get_sub_field('carousel_image');
                                            if ($image):
                                                $url = $image['url'];
                                                $title = $image['title'];
                                                $alt = $image['alt'];
                                            endif;
                                            ?>
                                            <div class="item"
                                                 style="background-image: url(<?php echo $image['sizes']['ping-pong-carousel']; ?>);">
                                            </div><!-- item -->
                                        <?php endwhile; ?>
                                    </div><!-- owl-carousel -->
                                </div><!-- position-relative -->
                            </div><!-- pl ping-pong--carousel-column -->
                        </div><!-- col -->
                    <?php endif; ?>
                </div><!-- row -->
            </div><!-- container -->
        </section>

        <?php if (have_rows('testimonials')): ?>
            <section id="testimonials" class="bg-md-half-and-half position-relative">
                <div class="container">
                    <div class="row no-gutters align-content-center">
                        <div class="col-md-2">
                            <p class="small mb-0 d-none d-md-block ml-50"><span
                                    class="rotated-md small d-inline-block font-weight-bold">TESTIMONIALS</span></p>
                        </div><!-- col -->
                        <div class="col-12 col-md-10 bg-dark">
                            <div class="pt-1 pt-md-7 pb-md-4">
                                <div class="owl-carousel owl-theme js-testimonialsSlider pb-5 pb-md-0">
                                    <?php while (have_rows('testimonials')) : the_row(); ?>
                                        <div class="item">
                                            <h4 class="text-white mb-2 font-weight-bold">
                                                “<?php the_sub_field('testimonial'); ?>”</h4>
                                            <p class="text-grey"><?php the_sub_field('testimonial_author'); ?></p>
                                        </div><!-- item -->
                                    <?php endwhile; ?>
                                </div><!-- owl-carousel -->
                            </div><!-- position-relative -->
                        </div><!-- row -->
                    </div><!-- container -->
            </section>
        <?php endif; ?>

    </main>




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
                         style="background-image: url('<?php echo esc_url($url); ?>');">
                        <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                             class="d-xl-none img-fluid d-block">
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php if (have_rows('ping_pong_narrow')): ?>
    <?php while (have_rows('ping_pong_narrow')): the_row(); ?>

        <section class="ping-pong ping-pong--<?php the_sub_field('layout'); ?> ping-pong--txt-btns">
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
                        <img src="http://via.placeholder.com/768x578" alt=" " class="img-fluid d-block">
                        <?php if (get_sub_field('buttons_below_image')): ?>
                            <?php if (have_rows('buttons_below_image')): ?>
                                <?php while (have_rows('buttons_below_image')): the_row(); ?>
                                    <a href="<?php the_sub_field('link'); ?>"
                                       class="btn btn-primary"><?php the_sub_field('label'); ?></a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div><!-- col -->

                </div><!-- row -->
            </div><!-- container -->
        </section>

    <?php endwhile; ?>
<?php endif; ?>

    <section class="ping-pong ping-pong--img-full ping-pong--left">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 ping-pong--txt-column">
                    <div class="ping-pong--max-width">
                        <h2 class="text-primary">Custom<br>Homes</h2>
                        <br>
                        <p>We have honed and pushed our capabilities to create a seamless experience for our clients and
                            to
                            create some of the finest timber framed homes. Our team collectively has decades of
                            experience
                            with designing and crafting custom timber frame homes. We have created dozens of timber
                            frame
                            homes, pergolas, deck structures and many custom accent pieces in the Okanagan and across
                            North
                            America.</p>
                    </div><!-- ping-pong--max-width -->
                </div><!-- col -->
                <div class="col-md-6 ping-pong--img-column"
                     style="background-image: url('http://via.placeholder.com/702x528');">
                    <img src="http://via.placeholder.com/702x528" alt=" "
                         class="d-xl-none img-fluid">
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>

    <section class="ping-pong ping-pong--img-full ping-pong--left ping-pong--txt-btns">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 ping-pong--txt-column">
                    <div class="ping-pong--max-width">
                        <h2>Large Eurotimber Cabana 12’x16’</h2>
                        <h3 class="text-primary">$10,200</h3>
                        <p>Do not miss out on the outdoor lifestyle! Our largest cabana kit provides an elegant shelter
                            for
                            your outdoor dining or seating areas. Enjoy the beauty of this timber frame structure for
                            years
                            to come. Your kit comes with everything you need to build it yourself or we can install for
                            you.
                            Get ready for summer now!</p>
                        <a href="#" class="btn btn-primary">Order Now</a>
                        <a href="#" class="btn btn-outline-primary">Download Plans</a>
                    </div><!-- ping-pong--max-width -->
                </div><!-- col -->
                <div class="col-lg-6 text-center ping-pong--img-column"
                     style="background-image: url('http://via.placeholder.com/702x528');">
                    <img src="http://via.placeholder.com/702x528" alt=" "
                         class="d-xl-none img-fluid">
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section>

    <section class="ping-pong ping-pong--text-img-btn">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ping-pong--txt-column">
                    <p>Our team of expert craftsmen and designers have been delivering stunning timber creations to
                        homeowners in the Okanagan and throughout North America. Heading the team and the company owner,
                        Daniel Kilchenmann . Daniel is a native of Switzerland, where he trained as an architectural
                        draftsman for several years. Seeing the final timber frame creations come to life based on his
                        designs ignited a passion for building. Daniel began his timber frame apprenticeship as well
                        studied wood construction engineering for over a decade, working on both modern and traditional
                        timber frame projects. Daniel’s passion for Adventure landed him in the Okanagan BC where he
                        discovered that by complete coincidence he chose to take root where the finest timber in the
                        world is found, the BC Douglas fir. Daniel built a home and founded European Timberframe Corp.
                        and ever since he and his team have been curating, designing, and building some of the highest
                        quality and most beautiful timber frame homes across BC and North America.</p>
                    <p>If you are ready to bring some of finest timber frame craftsmanship to your home, contact Daniel
                        and his team today and let them bring your vision to life. (*Add contact page link*)</p>
                </div><!-- col -->
                <div class="col-lg-6 text-center ping-pong--img-column">
                    <p class="font-weight-bold">— The Team Bringing Your Vision To Reality</p>
                    <img src="http://via.placeholder.com/555x420" alt=" " class="img-fluid d-block">
                    <a href="#" class="btn btn-primary">Get Inspired! Photos of our Work</a>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Something is in the way</p>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section>

<?php get_footer();
