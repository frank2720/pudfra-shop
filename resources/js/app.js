import './bootstrap';
import '../assets/css/font-icon.min.css';
import '../assets/css/base.css';

import '../assets/js/jarallax.min.js';
import '../assets/js/interface.js';
import '../assets/js/packery.pkgd.min.js';
import '../assets/js/jquery.hoverIntent.min.js';
import '../assets/js/magnific-popup.min.js';
import '../assets/js/flickity.pkgd.min.js';
import '../assets/js/lazysizes.min.js';
import '../assets/js/js-cookie.min.js';
import '../assets/js/jquery.countdown.min.js';

import.meta.glob([
    '../assets/images/**',
    '../assets/logo/**',
    '../assets/fonts/**'
]);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
