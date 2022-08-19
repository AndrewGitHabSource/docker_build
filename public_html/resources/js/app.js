import { createApp } from 'vue';
import Main from './Main.vue';
import { Ziggy } from './ziggy';
import * as ZiggyVue from '/vendor/tightenco/ziggy/dist/vue';
import router from './router';
import axios from 'axios';
import { UniversalSocialauth } from 'universal-social-auth';
import Notifications from '@kyvg/vue3-notification';
import store from './settings/store';
import ElementPlus from 'element-plus';
import 'element-plus/dist/index.css';
import vScrollLook from './directives/vScrollLook';


window.Ziggy = Ziggy;

const options = {
    providers: {
        google: {
            clientId: import.meta.env.VITE_GOOGLE_CLIENT_ID,
            redirectUri: import.meta.env.VITE_REDIRECT,
        },
    },
}
const Oauth = new UniversalSocialauth(axios, options);
axios.defaults.headers.common['Access-Control-Allow-Origin'] = '*';

const vue = createApp(Main);
vue.directive('scroll-look', vScrollLook);
vue.config.globalProperties.$Oauth = Oauth;
vue.config.globalProperties.$axios = axios;
vue.use(Oauth);
vue.use(ZiggyVue, Ziggy);
vue.use(Notifications);
vue.use(router);
vue.use(store);
vue.use(ElementPlus)
vue.provide('store', store);
vue.provide('router', router);
vue.provide('ZiggyVue', ZiggyVue);
vue.provide('Oauth', Oauth);
vue.mount('#app');
