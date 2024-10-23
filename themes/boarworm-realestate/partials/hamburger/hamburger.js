window.addEventListener('DOMContentLoaded', function () {
    const burger = document.querySelector('.js-mobile-menu-trigger');
    const menu = document.getElementById('mobile-menu');
    if (burger && menu) {
        burger.addEventListener('click', function () {
            menu.classList.toggle('!right-0');
        });
    }
});
