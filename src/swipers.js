// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, Pagination, Scrollbar, Autoplay } from "swiper/modules";

// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/scrollbar";
import "swiper/css/autoplay";

/* ------------------------------------
 * Featured Brands Swiper
 * ------------------------------------ */
const swiperBrands = new Swiper(".swiper-brands", {
    modules: [Navigation, Pagination, Scrollbar, Autoplay],

    centeredSlides: true,
    slidesPerView: 1,
    spaceBetween: 20,

    breakpoints: {
        480: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        992: {
            slidesPerView: 5,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 7,
            spaceBetween: 50,
        },
    },

    loop: false,

    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },

    speed: 300,

    scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
        dragSize: "auto",
    },
});
