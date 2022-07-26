(function ($) {
    $(document).ready(function () {

        $('.carroussel').slick({
            infinite: true,
            adaptiveHeight: false,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 800,
            fade: true,
            arrows: true,
            prevArrow: '.presentation-controls #control-left',
            nextArrow: '.presentation-controls #control-right'
        });

    });
})(jQuery);
