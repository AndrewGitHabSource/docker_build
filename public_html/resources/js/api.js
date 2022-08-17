import axios from "axios";
import { Ziggy } from './ziggy';
import * as ZiggyVue from '/vendor/tightenco/ziggy/dist/vue';

export const $http = axios.create({
    "baseURL": Ziggy.url,
    "headers": {
        "Content-Type": "application/json",
        "Authorization": `Bearer ${localStorage.auth_token_default}`,
        "X-XSRF-TOKEN": window.Laravel.csrfToken,
        "X-Requested-With": "XMLHttpRequest",
    }
});
