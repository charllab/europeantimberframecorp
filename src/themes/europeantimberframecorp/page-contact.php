<?php
/**
 *
 * Template Name: Contact
 *
 **/
get_header(); ?>

    <div class="col-lg-12 position-relative z-index-100 d-xxl-none bg-dark py-2">

        <p class="text-grey ml-lg-8 text-center mb-0">
            <?php echo get_field('contact_option', 'option'); ?>
            <a
                href="mailto:<?php echo get_field('website_email', 'option'); ?>"
                class="text-white font-weight-bold"
            >
                <?php echo get_field('website_email', 'option'); ?>
            </a>
        </p>
    </div><!-- col -->

<?php get_footer();