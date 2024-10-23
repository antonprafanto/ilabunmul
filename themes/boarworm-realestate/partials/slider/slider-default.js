$(function() {
    new Swiper(".js-slider-default", {
        modules: [Autoplay],
        loop: true,
        slidesPerView: 1,
        speed: 1000,
        autoplay: {
            delay: 4000,
        },
    });
});
