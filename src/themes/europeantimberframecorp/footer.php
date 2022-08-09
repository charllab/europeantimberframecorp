<footer class="position-relative z-index-100">

    <section id="letstalk" class="bg-primary py-3 py-lg-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 text-lg-center d-none d-lg-block">
                    <span class="text-white text-uppercase font-weight-bold">- Hello!</span>
                </div><!-- col -->
                <div class="col-lg-8 text-center text-lg-left">
                    <h2 class="text-white text-capitalize mb-150">Ready to make your dreams of a timber frame home a
                        reality?</h2>
                    <a href="#" class="btn btn-outline-primary">Feeling Inspired? Let’s Talk</a>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- #letstalk -->

    <section id="footernav" class="py-1 py-lg-50">
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-lg-8 offset-lg-2">
                    <?php wp_nav_menu([
                        'theme_location' => 'secondary',
                        'container_class' => '',
                        'container_id' => 'footer-nav',
                        'menu_class' => 'navbar-footer list-unstyled mb-0 d-lg-flex justify-content-center',
                        'fallback_cb' => '',
                        'menu_id' => 'footer-menu',
                        'walker' => new understrap_WP_Bootstrap_Navwalker(),
                    ]); ?>
                </div><!-- col -->
                <div class="col-lg-2">
                    <div class="social-links mb-1 mb-lg-0">
                        <?php while (have_rows('social_links', 'options')): the_row(); ?>
                            <a class="social-link" target="_blank" href="<?php the_sub_field('url'); ?>">
                                <i class="<?php the_sub_field('icon_class'); ?>">
                                    <span class="sr-only"><?php the_sub_field('label'); ?></span>
                                </i>
                            </a>
                        <?php endwhile; ?>
                    </div><!-- social-links -->
                    <div class="nav-logo d-flex justify-content-center d-lg-none">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo-footer.svg"
                                 alt="<?php bloginfo('name'); ?> - Logo"
                                 class="img-fluid">
                            <span class="sr-only"><?php bloginfo('name'); ?></span>
                        </a>
                    </div><!-- nav-logo -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- #footernav -->

    <section class="footer pt-50">
        <div class="container position-relative">

            <div class="nav-logo d-none d-lg-block">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo-footer.svg"
                         alt="<?php bloginfo('name'); ?> - Logo"
                         class="img-fluid">
                    <span class="sr-only"><?php bloginfo('name'); ?></span>
                </a>
            </div><!-- nav-logo -->
            <div class="row text-white justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-4 offset-lg-2 text-center text-lg-left">
                    <p class="mb-50">&copy; <?php echo Date('Y') . ' ' . get_bloginfo('name'); ?></p>
                </div><!-- col -->
                <div class="col-10 col-lg-6 text-center text-lg-right">
                    <p class="mb-50">Designed, Developed and Hosted by
                        <a href="https://sproing.ca" target="_blank" class="text-white">Sproing&nbsp;Creative</a>
                    </p>
                </div><!-- col -->
            </div><!-- row -->
            <span class="whiteout d-none d-lg-block">
               <svg xmlns="http://www.w3.org/2000/svg" width="5000" height="120" viewBox="0 0 5000 120">
                  <rect id="Rectangle_2290" data-name="Rectangle 2290" width="5000" height="120" fill="#fff"/>
                </svg>
            </span>
        </div><!-- container -->
    </section><!-- .footer -->

</footer>

<?php wp_footer(); ?>

</body>

</html>