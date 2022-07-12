<footer>
    <section id="letstalk" class="bg-primary py-3 py-lg-5">
        <div class="container">
            <span class="text-white text-uppercase">- Hello!</span>
            <h2 class="text-white text-capitalize mb-150">Ready to make your dreams of a timber frame home a reality?</h2>
            <a href="#" class="btn btn-outline-primary">Feeling Inspired? Let’s Talk</a>
        </div><!-- container -->
    </section>


    <section id="footernav" class="position-relative">
        <?php wp_nav_menu([
            'theme_location' => 'secondary',
            'container_class' => 'container bg-danger',
            'container_id' => 'footernav',
            'menu_class' => 'navbar-footer list-unstyled mb-0',
            'fallback_cb' => '',
            'menu_id' => 'footer-menu',
            'walker' => new understrap_WP_Bootstrap_Navwalker(),
        ]); ?>

        <div class="container">

            <div class="social-links">
                <?php while( have_rows('social_links', 'options') ): the_row(); ?>
                    <a class="social-link" target="_blank" href="<?php the_sub_field('url'); ?>">
                        <i class="<?php the_sub_field('icon_class'); ?>">
                            <span class="sr-only"><?php the_sub_field('label'); ?></span>
                        </i>
                    </a>
                <?php endwhile; ?>
            </div><!-- social-links -->

            <div class="nav-logo position-relative d-flex justify-content-center">
                <a href="<?php echo esc_url(home_url('/')); ?>">

                    <?php get_template_part('partials/header/svg-logo-grey'); ?>
                    <span class="sr-only"><?php bloginfo('name'); ?></span>

                    <span class="bar d-none d-lg-block">
                       <svg xmlns="http://www.w3.org/2000/svg" width="5000" height="48" viewBox="0 0 5000 48">
                          <path id="Path_1112" data-name="Path 1112" d="M0,0H5000V48H0Z" fill="#374377"/>
                        </svg>
                    </span>
                </a>
            </div><!-- nav-logo -->

            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p>&copy; <?php echo Date('Y') . ' ' . get_bloginfo('name'); ?></p>
                </div><!-- col -->
                <div class="col-lg-6 text-center text-lg-right">
                    <p>Designed, Developed and Hosted by <a href="https://sproing.ca" target="_blank">Sproing&nbsp;Creative</a>
                    </p>
                </div><!-- col -->
            </div><!-- row -->

        </div><!-- container -->

    </section>
</footer>

<?php wp_footer(); ?>

</body>

</html>