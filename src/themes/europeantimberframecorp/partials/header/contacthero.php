<section id="hero-image" class="position-relative">
    <?php $heroimageurl = get_field('hero_image'); ?>
    <div class="position-relative bg-dark"
         style="background: #3050A0 url(<?php echo $heroimageurl['sizes']['hero_image']; ?>) no-repeat center center; background-size: cover;">
        <div class="pt-13 pt-lg-8 overflow-hidden">
            <div class="container position-relative z-index-100">
                <div class="row justify-content-end align-items-end">
                    <div class="col-lg-6 position-relative">
                        <div class="position-relative z-index-500 pl-2 pt-2 pl-lg-4 pt-lg-25">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div><!-- position-relative -->
                        <div class="position-absolute white-background-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="5000" height="2000" viewBox="0 0 5000 2000">
                                <rect id="Rectangle" width="5000" height="2000" fill="#fff"/>
                            </svg>
                        </div><!-- position-absolute white-background-svg -->
                        <div class="position-absolute mail-icon-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="18" height="14" viewBox="0 0 18 14">
                                <defs>
                                    <clipPath id="clip-path">
                                        <path id="Shape"
                                              d="M17,14H1a1,1,0,0,1-1-1V1A1,1,0,0,1,1,0H17a1,1,0,0,1,1,1V13A1,1,0,0,1,17,14ZM2,3v9H16V3L10.2,7.35a2,2,0,0,1-2.4,0ZM4,2,9,5.75,14,2Z"
                                              transform="translate(2 4)" fill="#fff"/>
                                    </clipPath>
                                </defs>
                                <g id="Icon" transform="translate(-2 -4)">
                                    <path id="Shape-2" data-name="Shape"
                                          d="M17,14H1a1,1,0,0,1-1-1V1A1,1,0,0,1,1,0H17a1,1,0,0,1,1,1V13A1,1,0,0,1,17,14ZM2,3v9H16V3L10.2,7.35a2,2,0,0,1-2.4,0ZM4,2,9,5.75,14,2Z"
                                          transform="translate(2 4)" fill="#fff"/>
                                    <g id="Mask_Group_21" data-name="Mask Group 21" clip-path="url(#clip-path)">
                                        <g id="Color">
                                            <rect id="Rectangle" width="22" height="22" fill="#fff"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div><!-- position-absolute mail-icon-svg -->
                    </div><!-- col -->
                    <div class="col-lg-3">
                        <div class="position-relative z-index-100 mb-lg-5 pl-2 pb-1 pt-2">
                            <?php if (have_rows('social_links', 'option')): ?>
                                <div class="rotated-ops-md d-none d-lg-block mb-1">
                                    <?php while (have_rows('social_links', 'option')): the_row(); ?>
                                        <a class="text-dark mr-lg-50" target="_blank"
                                           href="<?php the_sub_field('url'); ?>">
                                            <?php the_sub_field('label'); ?>
                                        </a>
                                    <?php endwhile; ?>
                                </div><!--rotated-ops-md-->
                            <?php endif; ?>
                            <p class="text-primary text-lg-right">
                                <?php echo get_field('physical_address', 'option'); ?>
                            </p>
                            <p class="text-lg-right">
                                <a href="tel:+1<?php echo strip_tel(get_field('phone_number', 'option')); ?>"
                                   class="text-primary font-weight-normal d-block"
                                >
                                    <?php echo get_field('phone_number', 'option'); ?></a>
                            </p>
                        </div><!--position-relative-->
                    </div><!--col-->
                    <div class="col-lg-9 position-relative z-index-100 submit-pull-me-text d-none d-xxl-block">
                        <div class="pl-lg-45">
                            <div class="position-relative z-index-100">
                                <div class="position-relative z-index-100 pt-1">
                                    <p class="text-grey ml-lg-8"><?php echo get_field('contact_option', 'option'); ?>
                                        <a
                                            href="mailto:<?php echo get_field('website_email', 'option'); ?>"
                                            class="text-white font-weight-bold"
                                        >
                                            <?php echo get_field('website_email', 'option'); ?>
                                        </a>
                                    </p>
                                </div><!-- position-relative -->
                                <div class="position-absolute dark-background-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="5000" height="200"
                                         viewBox="0 0 5000 200">
                                        <rect id="Rectangle" width="5000" height="200" fill="#1c1c1c"/>
                                    </svg>
                                </div><!--position-absolute-->
                            </div><!--position-relative-->
                        </div><!--pl-lg-5-->
                    </div><!--col-->
                </div><!--row-->
            </div><!--container-->
        </div><!--pt-->
</section><!-- #hero-image -->
