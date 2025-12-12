// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, Pagination, Scrollbar, Autoplay } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/scrollbar";
import "swiper/css/autoplay";

// swiperBrands
const swiperBrands = new Swiper(".swiper-brands", {
    modules: [Navigation, Pagination, Scrollbar, Autoplay],

    // Center the active slide
    centeredSlides: true,

    // Slides per view configuration for different breakpoints
    slidesPerView: 1,
    spaceBetween: 20,

    // Responsive breakpoints
    breakpoints: {
        // Mobile landscape and up
        480: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        // Tablet and up
        768: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        // Desktop and up
        992: {
            slidesPerView: 5,
            spaceBetween: 40,
        },
        // Wide desktop and up
        1024: {
            slidesPerView: 7,
            spaceBetween: 50,
        },
    },

    // Enable loop mode for infinite scrolling
    loop: false,

    // Autoplay configuration
    autoplay: {
        delay: 3000, // 3 seconds between transitions
        disableOnInteraction: false, // Continue autoplay after user interactions
        pauseOnMouseEnter: true, // Pause when hovering over the slider
    },

    // Speed of transition
    speed: 300,

    // Optional: Scrollbar
    scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
        dragSize: "auto",
    },
});
