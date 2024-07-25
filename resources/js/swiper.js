import { Swiper, Navigation, Pagination } from "swiper";
window.onload = function () {
    const swiper = new Swiper(".mySwiperClass", {
        spaceBetween: 15,
        slidesPerView: 3,
        loop: true,
        modules: [Pagination, Navigation],
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        breakpoints: {
            // when window width is >= 640px
            319: {
                slidesPerView: 1,
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 2,
            },
            1000: {
                slidesPerView: 5,
            },
        },
    });
};
