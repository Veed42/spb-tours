import './bootstrap.js';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import {init} from "debug";



//подгрузка статики с помощью Vite:: ищет в папке img все статические фотки , если не статическеи то будут идти в storage
import.meta.glob([
    '../img/**',
    // '../fonts/**',
])

//mask phone
$(document).ready(function() {
    $.mask.definitions['h'] = "[0|1|3|4|5|6|7|9]"
    $(".mask-phone").mask("+7 (h99) 999-99-99");
});
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



// import Swiper styles


const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: "auto",
    speed:700,
    autoplay:true,

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




