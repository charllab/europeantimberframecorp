<?php if (have_rows('hero_slide')): ?>
    <section>
        <div class="owl-carousel owl-theme z-index-1 position-relative" id="hero-slider">

            <?php while (have_rows('hero_slide')) : the_row(); ?>

                <?php $herosliderimageurl = get_sub_field('hero_slide_image'); ?>

                <div class="is-full-height position-relative bg-dark"
                     style="background: #3050A0 url(<?php echo $herosliderimageurl['sizes']['large']; ?>) no-repeat center center; background-size: cover;">
                    <div class="block__tint-overlay position-absolute h-100"></div>
                    <div class="item h-100" data-dot="<?php the_sub_field('hero_slide_nav_title'); ?>">
                        <div class="container position-relative h-100">
                            <div class="row justify-content-lg-end align-items-center h-100">
                                <div class="col-lg-8 text-right">
                                    <h1 class="text-white ml-lg-auto mb-1">
                                        <?php the_sub_field('hero_slide_title'); ?>
                                    </h1>
                                    <p class="lead text-white mb-2 ml-lg-auto"><?php the_sub_field('hero_slide_blurb'); ?></p>
                                    <?php if (get_sub_field('hero_slide_button_text')): ?>
                                        <!-- Create variable Link, that includes array with link info -->
                                        <?php $link = get_sub_field('hero_slide_button_link'); ?>
                                        <a href="<?php echo $link['url']; ?>"
                                           target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"
                                           class="btn btn-light" class="text-white mb-1">
                                            <?php the_sub_field('hero_slide_button_text'); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

        </div><!-- owl-carousel -->
    </section>
<?php endif; ?>

<div class="scroll-down--arrow">
    <a href="#main" class="scrollable-anchor">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="11.274" height="7.547" viewBox="0 0 11.274 7.547">
            <defs>
                <clipPath id="clip-path">
                    <path id="Shape" d="M11.3.761a.962.962,0,0,0-1.411,0L6,4.945,2.116.76A.962.962,0,0,0,.7.761L.629.843a1,1,0,0,0,0,1.359L6,8l5.371-5.8a1,1,0,0,0,0-1.359Z" transform="translate(5 7)" fill="rgba(0,0,0,0.7)"/>
                </clipPath>
            </defs>
            <g id="Scroll" transform="translate(-5.363 -7.453)">
                <g id="Icon">
                    <path id="Shape-2" data-name="Shape" d="M11.3.761a.962.962,0,0,0-1.411,0L6,4.945,2.116.76A.962.962,0,0,0,.7.761L.629.843a1,1,0,0,0,0,1.359L6,8l5.371-5.8a1,1,0,0,0,0-1.359Z" transform="translate(5 7)" fill="#fff"/>
                    <g id="Mask_Group_48" data-name="Mask Group 48" clip-path="url(#clip-path)">
                        <g id="Color">
                            <rect id="Rectangle" width="22" height="22" fill="#fff"/>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
    </a>
</div>
