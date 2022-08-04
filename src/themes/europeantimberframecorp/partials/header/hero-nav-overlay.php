<header id="header" class="hero-nav-overlay position-relative z-index-1">

    <nav class="navbar navbar-expand-lg navbar-dark">

        <div class="container d-flex justify-content-between align-items-start position-relative">
            <div class="nav-logo position-relative z-index-100" style="margin-left: -4px;">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php get_template_part('partials/header/svg-logo-grey'); ?>
                    <span class="sr-only"><?php bloginfo('name'); ?></span>
                    <span class="bar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="5000" height="48" viewBox="0 0 5000 48">
                          <path id="Path_1112" data-name="Path 1112" d="M0,0H5000V48H0Z" fill="#1c1c1c" opacity="0.25"/>
                        </svg>
                    </span>
                </a>
            </div><!-- nav-logo -->


                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target=".mainnav-m"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>


            <div class="d-none d-lg-flex mt-lg-1 mainnav">

                <?php wp_nav_menu([
                    'theme_location' => 'primary',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'mainnav',
                    'menu_class' => 'navbar-nav ml-auto',
                    'fallback_cb' => '',
                    'menu_id' => 'main-menu',
                    'walker' => new understrap_WP_Bootstrap_Navwalker(),
                ]); ?>

                <div class="social-links ml-lg-50">
                    <?php while (have_rows('social_links', 'options')): the_row(); ?>
                        <a class="social-link text-white" target="_blank" href="<?php the_sub_field('url'); ?>">
                            <i class="<?php the_sub_field('icon_class'); ?>">
                                <span class="sr-only"><?php the_sub_field('label'); ?></span>
                            </i>
                        </a>
                    <?php endwhile; ?>
                </div>

            </div>
        </div>
    </nav>

    <div class="mainnav-m collapse navbar-collapse position-relative d-lg-none" id="mobile-nav">

        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container d-flex justify-content-between align-items-start position-relative">
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target=".mainnav-m"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>


        <div class="container">
            <div class="row justify-content-center">
                <?php wp_nav_menu([
                    'theme_location' => 'primary',
                    'container_class' => 'col-10',
                    'container_id' => 'mobile-nav-container',
                    'menu_class' => 'navbar-nav ml-auto',
                    'fallback_cb' => '',
                    'menu_id' => 'main-menu',
                    'walker' => new understrap_WP_Bootstrap_Navwalker(),
                ]); ?>

                <div class="col-10">

                    <div class="social-links">
                        <?php while (have_rows('social_links', 'options')): the_row(); ?>
                            <a class="social-link text-white" target="_blank" href="<?php the_sub_field('url'); ?>">
                                <i class="<?php the_sub_field('icon_class'); ?>">
                                    <span class="sr-only"><?php the_sub_field('label'); ?></span>
                                </i>
                            </a>
                        <?php endwhile; ?>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- #mobile-nav -->


    <?php
    if (is_front_page()) :
        get_template_part('partials/header/heroslider');
    else :
        get_template_part('partials/header/heroimage');
    endif;
    ?>


</header>