import './bootstrap';
import '../assets/css/font-icon.min.css';
import '../assets/css/base.css';
import.meta.glob([
    '../assets/images/**',
    '../assets/logo/**',
    '../assets/js/**',
]);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
