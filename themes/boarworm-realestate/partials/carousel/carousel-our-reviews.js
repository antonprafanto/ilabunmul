document.addEventListener("DOMContentLoaded", function (event) {
    new Swiper(".js-carousel-our-reviews", {
        modules: [Navigation, Pagination],
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: ".swiper-pagination",
            bulletClass: "w-3 h-3 rounded-full bg-gray-200 mr-4 last:mr-0 transition cursor-pointer",
            bulletActiveClass: "!bg-primary",
            clickable: true
        },
        breakpoints: {
            600: {
                slidesPerView: 2,
                slidesPerGroup: 1,
            },
            900: {
                slidesPerView: 3,
                slidesPerGroup: 1,
            }
        }
    });
});
