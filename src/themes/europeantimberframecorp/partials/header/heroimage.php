<section id="hero-image" class="position-relative">
    <?php $heroimageurl = get_field('hero_image'); ?>
    <div class="block__tint-overlay position-absolute z-index-1"></div>
    <div class="is-full-height position-relative bg-dark"
         style="background: #3050A0 url(<?php echo $heroimageurl['sizes']['large']; ?>) no-repeat center center; background-size: cover;">
        <div class="hero-content">
        <div class="container position-relative z-index-100">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 position-relative">
                    <div class="pl-lg-350 py-250">
                        <h1 class="h3 text-white text-capitalize font-weight-bold position-relative pr-1 z-index-100">Timber Frame Beauty built to last for generations</h1>
                        <div class="underlay-svg z-index-1">
                            <svg xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 0 2600 114">
                                <path id="Rectangle_157" data-name="Rectangle 157" d="M0,0H2595a5,5,0,0,1,5,5V109a5,5,0,0,1-5,5H0a0,0,0,0,1,0,0V0A0,0,0,0,1,0,0Z" opacity="0.502"/>
                            </svg>
                        </div><!-- underlay-svg -->
                    </div><!-- pl -->
                </div><!-- col -->
                <div class="col-md-4 col-lg-3">
                    <div class="pr-lg-2 pt-1 mt-md-0">
                        <p class="text-white font-weight-bold">A Canadian EuroTimber Cabana Kit</p>
                    </div><!-- pr -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
        </div><!-- hero-content -->
    </div><!-- is-full-height -->
</section><!-- #hero-image -->
