// Upcoming Matches Slider Initialization
$(document).ready(function () {
    $(".upcoming-matches").slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        prevArrow: $(".custom-prev"),
        nextArrow: $(".custom-next"),
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
});

// Magic Moments Slider Initialization
$(document).ready(function () {
    $(".magic_moments").slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1440,
                settings: {
                    slidesToShow: 5,
                },
            },
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 765,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 2,
                },
            },
        ],
    });
});
