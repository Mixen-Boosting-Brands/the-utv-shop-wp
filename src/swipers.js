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

/* ------------------------------------
 * Featured Vehicles (Mobile Only)
 * ------------------------------------ */
let featuredVehiclesSwiper = null;

function initFeaturedVehiclesSwiper() {
    const el = document.querySelector(".featured-vehicles-swiper");

    if (!el) return;

    // Enable swiper only below lg (Bootstrap 992px)
    if (window.innerWidth < 992 && !featuredVehiclesSwiper) {
        featuredVehiclesSwiper = new Swiper(".featured-vehicles-swiper", {
            modules: [Pagination],

            slidesPerView: 1.1,
            spaceBetween: 16,
            grabCursor: true,

            breakpoints: {
                576: {
                    slidesPerView: 1.4,
                },
                768: {
                    slidesPerView: 2.2,
                },
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    }

    // Destroy swiper on desktop
    if (window.innerWidth >= 992 && featuredVehiclesSwiper) {
        featuredVehiclesSwiper.destroy(true, true);
        featuredVehiclesSwiper = null;
    }
}

// Init on load + resize
window.addEventListener("load", initFeaturedVehiclesSwiper);
window.addEventListener("resize", initFeaturedVehiclesSwiper);
