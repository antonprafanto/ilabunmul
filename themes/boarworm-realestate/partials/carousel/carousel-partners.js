document.addEventListener("DOMContentLoaded", function (event) {
    new Swiper(".js-carousel-partners", {
        modules: [Autoplay],
        loop: true,
        autoplay: true,
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: false,
        navigation: false,
        breakpoints: {
            400: {
                slidesPerView: 2,
            },
            600: {
                slidesPerView: 3,
            },
            900: {
                slidesPerView: 5,
            }
        }
    });
});
