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

// Team Owner Sections
$(document).ready(function () {
    $('.owner_section').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 3,
        arrows: true,
        dots: false,
        margin: 10,
        prevArrow: $(".custom-prev-owner"),
        nextArrow: $(".custom-next-owner"),
        autoplaySpeed: 2000,
        centerMode: true, // This will help with the centered sliding effect
        centerPadding: '0', // No extra padding
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 640,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    });
});


$(document).ready(function () {
    $('.management_section').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: false,
        dots: false,
        margin: 10,
        // autoplay: true, // Enables auto-scroll
        autoplaySpeed: 2000, // Speed of auto-scroll
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
        {
            breakpoint: 640,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    });
});


// About Us Story Section
$(document).ready(function () {
    $('.story_section').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: false,
        dots: false,
        margin: 10,
        // autoplay: true, // Enables auto-scroll
        autoplaySpeed: 2000, // Speed of auto-scroll
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },

        {
            breakpoint: 640,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    });
});