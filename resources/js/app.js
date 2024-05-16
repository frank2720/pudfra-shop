import './bootstrap';
import.meta.glob([
    '../assets/images/**',
    '../assets/logo/**',
]);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
