<?php
/**
 *
 * Template Name: FAQ
 *
 */
get_header(); ?>

    <main>
        <div class="container">
            <div class="row justify-content-between align-items-center mb-1 mb-lg-2">
                <div class="col-lg-6">
                    <h2><?php the_title();?></h2>
                </div><!-- col -->
                <div class="col-lg-3">
                    <?php the_content();?>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <?php
        $faq_sets = get_field('faqs');
        $faqs = $faq_sets['questions_and_answers'];
        if (get_field('faqs')): ?>

            <section class="accordion-questions pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="accordion" id="questions">
                                <?php $count = 0;
                                foreach ($faqs as $faq) : ?>
                                    <div class="accordion-item border border-0 mb-75">

                                        <a class="faq-accordion-button d-md-flex align-items-center bg-primary collapsed" type="button"
                                           data-toggle="collapse"
                                           data-target="#collapseQuestion--<?php echo $count; ?>"
                                           aria-expanded="true"
                                           aria-controls="collapseQuestion--<?php echo $count; ?>">
                                            <div class="state-ico">
                                                <div class="line horizontal"></div>
                                                <div class="line vertical"></div>
                                            </div>
                                            <span class="the-quest"><?php echo $faq['question']; ?></span>
                                        </a>

                                        <div id="collapseQuestion--<?php echo $count; ?>"
                                             class="accordion-collapse collapse"
                                             data-bs-parent="#questions">
                                            <div class="accordion-body faq-accordion-body">
                                                <p><?php echo $faq['answer']; ?></p>
                                            </div><!-- accordion-body -->
                                        </div><!-- accordion-collapse -->
                                    </div><!-- accordion-item -->
                                    <?php
                                    $count++;
                                endforeach; ?>
                            </div><!-- accordion -->
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </section>
        <?php endif; ?>


    </main>

<?php get_footer();
