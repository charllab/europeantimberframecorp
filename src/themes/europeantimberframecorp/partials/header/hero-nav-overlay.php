<header id="header" class="hero-nav-overlay bg-warning">

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container d-flex justify-content-between align-items-start">
            <div class="nav-logo position-relative">
                <a href="<?php echo esc_url(home_url('/')); ?>">

                    <?php get_template_part('partials/header/svg-logo-grey'); ?>
                    <span class="sr-only"><?php bloginfo('name'); ?></span>
                    <span class="bar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="5000" height="48" viewBox="0 0 5000 48">
                          <path id="Path_1112" data-name="Path 1112" d="M0,0H5000V48H0Z" fill="#1c1c1c" opacity="0.25"/>
                        </svg>
                    </span>
                </a>
            </div>

            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target=".mainnav-m" aria-expanded="false" aria-label="Toggle navigation">
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
                    <?php while( have_rows('social_links', 'options') ): the_row(); ?>
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

    <div class="mainnav-m collapse navbar-collapse">
        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'container_class' => 'container',
            'container_id' => 'mainnav',
            'menu_class' => 'navbar-nav ml-auto d-lg-none',
            'fallback_cb' => '',
            'menu_id' => 'main-menu',
            'walker' => new understrap_WP_Bootstrap_Navwalker(),
        ]); ?>

        <div class="container">
            <a class="btn btn-link text-white px-0" href="tel:<?php echo strip_tel(get_field('phone_number', 'options')); ?>"><?php the_field('phone_number', 'options'); ?></a>

            <div class="social-links">
                <?php while( have_rows('social_links', 'options') ): the_row(); ?>
                    <a class="social-link text-white" target="_blank" href="<?php the_sub_field('url'); ?>">
                        <i class="<?php the_sub_field('icon_class'); ?>">
                            <span class="sr-only"><?php the_sub_field('label'); ?></span>
                        </i>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <section class="section section--lg">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-10 col-lg-7 col-xl-6">
                    <h2 class="h1 text-white">Maecenas sed diam eget</h2>
                    <p class="lead text-muted">
                        Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                    </p>
                </div>
            </div>
        </div>
    </section>
</header>