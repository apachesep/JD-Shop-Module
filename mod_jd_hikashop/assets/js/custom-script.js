jQuery(document).ready(function($ ){
    $('.jd-hikashop-category-item-wrapper').slick({
        slidesToShow: 4,
        dots: true,
        arrows: false,
        touchMove: true,
        autoplay: true,
        pauseOnHover: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3
                }
    },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2
                }
    },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    });
});
