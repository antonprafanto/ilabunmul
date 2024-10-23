import '../../../../../modules/system/assets/js/framework';
import '../../../../../modules/system/assets/js/framework-extras';

// Vendor
import Swiper, {Navigation, Pagination, Autoplay} from 'swiper';
import 'swiper/css';
window.Swiper = Swiper;
window.Navigation = Navigation;
window.Pagination = Pagination;
window.Autoplay = Autoplay;

require("@fancyapps/fancybox");
$('[data-fancybox="gallery"]').fancybox({
    thumbs: {
        autoStart: true
    }
});

import '../../../partials/hamburger/hamburger'
import '../../../partials/google-map/google-map'
import '../../../partials/header/header'
import '../../../partials/gallery/gallery'
import '../../../partials/carousel/carousel-our-team'
import '../../../partials/carousel/carousel-our-reviews'
import '../../../partials/carousel/carousel-partners'
