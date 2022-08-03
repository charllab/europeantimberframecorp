jQuery(function () {

    // front-page Hero OwlCarousel ==================================

    var owlHero = jQuery('#hero-slider').owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
        dots: true,
        nav: false,
        autoplaySpeed: 1500,
        autoplayTimeout: 9000,
        autoplay: true,
        dotsData: false,
        items: 1,
        responsive: {
            768: {
                dotsData: true,
            }
        }
    });

    //set const to check if exist
    const heroSlider = document.getElementById('hero-slider');

    if (heroSlider && $(window).width() >= 768) {

        // add click to custom dotsData
        // https://stackoverflow.com/questions/52749200/owl-carousel-2-custom-dots-not-clickable
        $('.owl-dot').click(function () {
            owlHero.trigger('to.owl.carousel', [$(this).index(), 1000]);
        })

        // owl nav animation
        // https://stackoverflow.com/questions/56162467/owlcarousel2-animated-dots-onchange
        // https://jsfiddle.net/mazinoukah/m45hx3v2/3/
        navigationFill();

        owlHero.on('changed.owl.carousel', function (event) {
            navigationFill();
        })

        function navigationFill() {
            let pr = $('.owl-theme .owl-dots .owl-dot');
            $(pr).removeClass('animate');

            let progressbar = $(".owl-theme .owl-dots .owl-dot.active");
            $(progressbar).addClass('animate');
        }

        // end of front-page Hero OwlCarousel ===========================

    }


    // front-page Reasons OwlCarousel ==================================
    jQuery('#reasonsSlider').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplaySpeed: 1500,
        autoplayTimeout: 9000,
        nav: true,
        dots: false,
        items: 1,
        navText: ''
    });
    // end of Reasons OwlCarousel ===========================

    // Ping Pong OwlCarousel ==================================
    jQuery('.js-pingPongSlider').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplaySpeed: 1500,
        autoplayTimeout: 9000,
        nav: true,
        dots: false,
        items: 1,
        navText: ''
    });
    // end of Ping Pong OwlCarousel ===========================

    // Testimonials OwlCarousel ==================================
    jQuery('.js-testimonialsSlider').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplaySpeed: 1500,
        autoplayTimeout: 9000,
        nav: true,
        dots: false,
        items: 1,
        navText: ''
    });

    // end of Ping Pong OwlCarousel ===========================

    // Auto target _blank external links
    targetBlankExternalLinks();

    // Remove WP Block element iframe classes
    if (jQuery('.wp-block-embed-youtube').length) {
        jQuery('.wp-block-embed-youtube').removeClass().addClass('embed-responsive-item');
    }

    // Scrolling anchors
    jQuery('.scrollable-anchor').on('click', function (e) {
        e.preventDefault();

        jQuery('html,body').animate({
            scrollTop: jQuery(this.hash).offset().top
        }, 1000);
    });
});

var trackEvent = function (name, options) {
    trackGA(name, options);
    trackPixel(name, options);
};

var trackGA = function (name, options) {
    if (typeof gtag !== 'undefined') {
        gtag('event', name, {
            'event_category': options.category,
            'event_label': options.label,
            'value': options.value || 0
        });
    }
};

var trackPixel = function (name, options) {
    if (typeof gtag !== 'undefined') {
        fbq('track', 'Lead', {
            'event_category': options.category,
            'event_action': name,
            'value': options.value || 0,
            'currency': 'CAD'
        });
    }
};

var targetBlankExternalLinks = function () {
    var internalLinkRegex = new RegExp('^((((http:\\/\\/|https:\\/\\/)(www\\.)?)?'
        + window.location.hostname
        + ')|(localhost:\\d{4})|(\\/.*))(\\/.*)?$', '');

    jQuery('a').filter(function () {
        var href = jQuery(this).attr('href');
        return !internalLinkRegex.test(href);
        })
        .each(function () {
            jQuery(this).attr('target', '_blank');
        });
};