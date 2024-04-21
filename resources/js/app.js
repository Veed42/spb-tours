import './bootstrap.js';

import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import {init} from "debug";



//подгрузка статики с помощью Vite:: ищет в папке img все статические фотки , если не статическеи то будут идти в storage
import.meta.glob([
    '../img/**',
    // '../fonts/**',
])


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



// $('.slider').slick({
//     dots: true,
//     speed: 500,
//     slidesToShow: 2,
//     arrows:true,
//     slidesToScroll: 2,
//     autoplay:true,
//     slideDown:true,
//     responsive: [
//         {
//             breakpoint: 1024,
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 3,
//                 infinite: true,
//                 dots: true,
//             }
//         },
//         {
//             breakpoint: 600,
//             settings: {
//                 slidesToShow: 2,
//                 slidesToScroll: 2
//             }
//         },
//         {
//             breakpoint: 480,
//             settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1
//             }
//         },
//
//     ]});

// import Swiper styles


const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: "auto",
    speed:700,
    autoplay:false,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
        hide: false,  // не скрывать прокатный бар
        snapOnRelease: true,  // Если он установлен на false, слайд не будет установлен автоматически, когда вы отпустите полосу прокрутки (я не видел, что его изменило)
        dragSize: 180,   // длина ползунка проката
        draggable: true,  // Rolling Bar можно перетаскивать и нажать, чтобы нажать
    },

});





