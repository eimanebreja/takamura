const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const body = document.getElementById("body-area");


menuIcon.addEventListener("click", function () {
    if (slideoutMenu.style.opacity == "1") {
        slideoutMenu.style.opacity = "0";
        slideoutMenu.style.pointerEvents = "none";
        // navcolored.style.boxShadow = "0 1px 2px rgba(0, 0, 0, 0.5)";
        body.style.overflow = "auto";

        $('.hamburger').toggleClass('is-active');
    } else {
        slideoutMenu.style.opacity = "1";
        slideoutMenu.style.pointerEvents = "auto";
        body.style.overflow = "hidden";
        // navcolored.style.boxShadow = "none";
        $('.hamburger').toggleClass('is-active');
    }
});

(function () {
    $('.menu-lists').on('click', function () {
        $('.hamburger').toggleClass('is-active');
    })
})();

$(document).ready(function () {
    $("#showMenu1").click(function () {
        $("#menu1").slideToggle("fast");
        if ($("#arrow1").attr("src") ===
            "assets/images/ic_arrow_up.svg") {
            $("#arrow1").attr(
                "src",
                "assets/images/ic_arrow_down.svg"
            );
        } else {
            $("#arrow1").attr(
                "src",
                "assets/images/ic_arrow_up.svg"
            );
        }
    });
    $("#showMenu2").click(function () {
        $("#menu2").slideToggle("fast");
        if ($("#arrow2").attr("src") ===
            "assets/images/ic_arrow_up.svg") {
            $("#arrow2").attr(
                "src",
                "assets/images/ic_arrow_down.svg"
            );
        } else {
            $("#arrow2").attr(
                "src",
                "assets/images/ic_arrow_up.svg"
            );
        }
    });
    $("#showMenu3").click(function () {
        $("#menu3").slideToggle("fast");
        if ($("#arrow3").attr("src") ===
            "assets/images/ic_arrow_up.svg") {
            $("#arrow3").attr(
                "src",
                "assets/images/ic_arrow_down.svg"
            );
        } else {
            $("#arrow3").attr(
                "src",
                "assets/images/ic_arrow_up.svg"
            );
        }
    });
    $("#showMenu4").click(function () {
        $("#menu4").slideToggle("fast");
        if ($("#arrow4").attr("src") ===
            "assets/images/ic_arrow_up.svg") {
            $("#arrow4").attr(
                "src",
                "assets/images/ic_arrow_down.svg"
            );
        } else {
            $("#arrow4").attr(
                "src",
                "assets/images/ic_arrow_up.svg"
            );
        }
    });
    $("#showMenu5").click(function () {
        $("#menu5").slideToggle("fast");
        if ($("#arrow5").attr("src") ===
            "assets/images/ic_arrow_up.svg") {
            $("#arrow5").attr(
                "src",
                "assets/images/ic_arrow_down.svg"
            );
        } else {
            $("#arrow5").attr(
                "src",
                "assets/images/ic_arrow_up.svg"
            );
        }
    });
    $("#showMenu6").click(function () {
        $("#menu6").slideToggle("fast");
        if ($("#arrow6").attr("src") ===
            "assets/images/ic_arrow_up.svg") {
            $("#arrow6").attr(
                "src",
                "assets/images/ic_arrow_down.svg"
            );
        } else {
            $("#arrow6").attr(
                "src",
                "assets/images/ic_arrow_up.svg"
            );
        }
    });

});

$('.slider-single').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    adaptiveHeight: true,
    infinite: true,
    useTransform: true,
    speed: 400,
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',

});

$('.slider-nav')
    .on('init', function (event, slick) {
        $('.slider-nav .slick-slide.slick-current').addClass('is-active');
    })
    .slick({
        arrows: false,
        slidesToShow: 7,
        slidesToScroll: 7,
        dots: false,
        focusOnSelect: false,
        infinite: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 7,
                slidesToScroll: 7,
            }
        }, {
            breakpoint: 640,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
            }
        }, {
            breakpoint: 420,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        }]
    });

$('.slider-single').on('afterChange', function (event, slick, currentSlide) {
    $('.slider-nav').slick('slickGoTo', currentSlide);
    var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
    $('.slider-nav .slick-slide.is-active').removeClass('is-active');
    $(currrentNavSlideElem).addClass('is-active');
});

$('.slider-nav').on('click', '.slick-slide', function (event) {
    event.preventDefault();
    var goToSingleSlide = $(this).data('slick-index');

    $('.slider-single').slick('slickGoTo', goToSingleSlide);
});