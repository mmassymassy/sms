import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from 'vue';
import router from './router';
import Home from './components/Home.vue';


const app = createApp(Home).use(router).mount('#root');
