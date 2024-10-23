const header = document.querySelector('.js-header');
const mobileMenu = document.querySelector('.js-mobile-menu');
const mobileMenuCheckbox = document.querySelector('.js-mobile-menu-trigger input[type=checkbox]');

let scrollPos = 0;
window.addEventListener('scroll', fixedHeader);

function fixedHeader() {
    if ((document.body.getBoundingClientRect()).top > scrollPos) {
        header.classList.remove('-top-28');
    } else {
        header.classList.add('-top-28');
        mobileMenu.classList.remove('!right-0');
        mobileMenuCheckbox.checked = false;
    }
    scrollPos = (document.body.getBoundingClientRect()).top;
}
