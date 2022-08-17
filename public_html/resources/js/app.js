import { createApp } from 'vue';
import Main from './Main.vue';
import * as VueRouter from 'vue-router';
import { Ziggy } from './ziggy';
import * as ZiggyVue from '/vendor/tightenco/ziggy/dist/vue';
import { routes } from './routes';
import axios from 'axios';
import { UniversalSocialauth } from 'universal-social-auth';
import Notifications from '@kyvg/vue3-notification';

const router = VueRouter.createRouter({
    mode: "history",
    history: VueRouter.createWebHistory(),
    routes,
});

window.Ziggy = Ziggy;

const options = {
    providers: {
        google: {
            clientId: '246513807134-p9e3q6aapg87ejabp2qnc7cmtdq1kqbi.apps.googleusercontent.com',
            redirectUri: 'http://localhost/auth/redirect',
        },
    }
}
const Oauth = new UniversalSocialauth(axios, options);
axios.defaults.headers.common['Access-Control-Allow-Origin'] = '*';

const vue = createApp(Main);
vue.config.globalProperties.$Oauth = Oauth;
vue.config.globalProperties.$axios = axios;
vue.use(Oauth);
vue.use(ZiggyVue, Ziggy);
vue.use(Notifications);
vue.use(router);
vue.provide('ZiggyVue', ZiggyVue);
vue.provide('Oauth', Oauth);
vue.mount('#app');
