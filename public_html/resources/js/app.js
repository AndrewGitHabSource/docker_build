import { createApp } from 'vue';
import Main from './Main.vue';
import * as VueRouter from 'vue-router';
import { Ziggy } from './ziggy';
import * as ZiggyVue from '/vendor/tightenco/ziggy/dist/vue';
import { routes } from './routes';

const router = VueRouter.createRouter({
    mode: "history",
    history: VueRouter.createWebHistory(),
    routes,
});

const vue = createApp(Main);

vue.use(ZiggyVue, Ziggy);
vue.use(router);
vue.mount('#app');
