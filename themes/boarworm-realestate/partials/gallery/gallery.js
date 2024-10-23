$(function() {
    new Swiper(".js-lightbox-gallery", {
        modules: [Navigation],
        loop: false,
        slidesPerView: 1,
        speed: 1000,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 5,
            }
        }
    });
});
