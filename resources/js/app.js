import './bootstrap';
import '../assets/css/font-icon.min.css';
import.meta.glob([
    '../assets/images/**',
    '../assets/logo/**',
    '../assets/js/',
    '../assets/css/base.css',
]);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
