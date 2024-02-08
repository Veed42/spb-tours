import './bootstrap';


$(window).scroll(function() {
    var header = $(document).scrollTop();
    var headerHeight = $(".header").outerHeight();
    if (header > headerHeight) {
        $(".header").addClass("fixed");
    } else {
        $(".header").removeClass("fixed");
    }
});
// header script


$('.slider').slick({
    dots: true,
    speed: 200,
    slidesToShow: 2,
    arrows:true,
    slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]});


