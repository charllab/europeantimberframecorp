<?php get_header(); ?>

<main>
    <!--main content here-->
</main>
<?php if( have_rows('ping_pong_general') ): ?>

        <?php while( have_rows('ping_pong_general') ): the_row();?>

        <?php $image = get_sub_field('image');
        if( $image ):
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

                            <?php if( get_sub_field('buttons') ): ?>
                                <?php if( have_rows('buttons') ): ?>
                                    <?php while( have_rows('buttons') ): the_row(); ?>

                                        <a href="<?php the_sub_field('link'); ?>" class="btn btn-primary"><?php the_sub_field('label'); ?></a>

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


<?php if( have_rows('ping_pong_narrow') ): ?>

    <?php while( have_rows('ping_pong_narrow') ): the_row();?>

        <section class="ping-pong ping-pong--<?php the_sub_field('layout'); ?> ping-pong--txt-btns">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 ping-pong--txt-column">
                        <div class="ping-pong--max-width">
                            <?php the_sub_field('content'); ?>

                            <?php if( get_sub_field('buttons') ): ?>
                                <?php if( have_rows('buttons') ): ?>
                                    <?php while( have_rows('buttons') ): the_row(); ?>

                                        <a href="<?php the_sub_field('link'); ?>" class="btn btn-primary"><?php the_sub_field('label'); ?></a>

                                    <?php endwhile; ?>
                                <?php endif; ?>

                            <?php endif; ?>

                        </div><!-- ping-pong--max-width -->
                    </div><!-- col -->

                    <div class="col-lg-6 text-center ping-pong--img-column px-0">
                        <?php if( get_sub_field('text_above_image') ): ?>
                            <p class="font-weight-bold mb-1"><?php the_sub_field('text_above_image'); ?></p>
                        <?php endif; ?>
                        <img src="http://via.placeholder.com/768x578" alt=" " class="img-fluid d-block">
                        <?php if( get_sub_field('buttons_below_image') ): ?>
                            <?php if( have_rows('buttons_below_image') ): ?>
                                <?php while( have_rows('buttons_below_image') ): the_row(); ?>

                                    <a href="<?php the_sub_field('link'); ?>" class="btn btn-primary"><?php the_sub_field('label'); ?></a>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        <?php endif; ?>
                    </div><!-- col -->

                </div><!-- row -->
            </div><!-- container -->
        </section>

    <?php endwhile; ?>

<?php endif; ?>










    <section class="ping-pong ping-pong--carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ping-pong--txt-column">
                    <h2>We Build Your Dream Timber Frame Home</h2>
                    <p class="font-weight-bold">Your Vision for the Perfect Home</p>
                    European Timberframe Corp. understands how important your home means to you. Designing and building
                    your very own custom home can be a thrilling experience and we believe that our clients should be
                    there every step of the way. We work with you to ensure that your vision and expectations are
                    brought to reality to create a home that is truly unique to you.</p>
                    <p class="font-weight-bold">Team of Seasoned Timber Frame Specialists</p>
                    <p>Our team is made up of some of the finest timber frame craftsmen in North America. Trained
                        extensively in the centuries old techniques of european timber framing, they are capable of
                        crafting modern wonders of architecture. Our team of professionals is fully equipped to design
                        your home to your vision, build every custom beam and post, and erect them to create your home
                        ensuring that the highest quality is implemented every step of the way.</p>
                    <p class="font-weight-bold">We Only use the Finest Timber for Your Home</p>
                    <p>Your home deserves nothing less than the finest materials on earth and luckily we are blessed
                        with the finest timber on earth for timber framed homes, the BC Douglas fir. This specific tree
                        species provides unparalleled quality and beauty, while also having a variety of benefits such
                        as humidity regulation, fire resistance, and natural insulation. The oils the Douglas fir
                        produce are capable of various health benefits from easing lung problems and lowering heart
                        rate. Your home will not only be beautiful but it will also be excellent for your health.</p>
                </div><!-- col -->
                <div class="col-lg-6">
                    <div class="pl-lg-50 ping-pong--carousel-column">
                        <div class="owl-carousel js-owl-carousel--ping-pong owl-theme">
                            <div class="item"><h4>1</h4></div>
                            <div class="item"><h4>2</h4></div>
                            <div class="item"><h4>3</h4></div>
                            <div class="item"><h4>4</h4></div>
                            <div class="item"><h4>5</h4></div>
                            <div class="item"><h4>6</h4></div>
                            <div class="item"><h4>7</h4></div>
                            <div class="item"><h4>8</h4></div>
                            <div class="item"><h4>9</h4></div>
                            <div class="item"><h4>10</h4></div>
                            <div class="item"><h4>11</h4></div>
                            <div class="item"><h4>12</h4></div>
                        </div><!-- carousel -->
                    </div><!-- pl-lg -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section>

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

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section>

<?php get_footer();
