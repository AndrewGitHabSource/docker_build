import { createApp } from 'vue';
import Main from './Main.vue';
import { Ziggy } from './ziggy';
import * as ZiggyVue from '/vendor/tightenco/ziggy/dist/vue';
import router from './router';
import axios from 'axios';
import { UniversalSocialauth } from 'universal-social-auth';
import Notifications from '@kyvg/vue3-notification';
import { createStore } from 'vuex';
import storeData from './store/index';

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

const store = createStore(storeData);

const vue = createApp(Main);
vue.config.globalProperties.$Oauth = Oauth;
vue.config.globalProperties.$axios = axios;
vue.use(Oauth);
vue.use(ZiggyVue, Ziggy);
vue.use(Notifications);
vue.use(router);
vue.use(store);
vue.provide('store', store);
vue.provide('ZiggyVue', ZiggyVue);
vue.provide('Oauth', Oauth);
vue.mount('#app');
