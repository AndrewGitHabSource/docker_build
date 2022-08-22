import axios from "axios";
import { Ziggy } from './ziggy';

const token = localStorage.vuex ? JSON.parse(localStorage.vuex).user.token : '';
export const $http = axios.create({
    "baseURL": Ziggy.url,
    "headers": {
        "Content-Type": "application/json",
        "Authorization": `Bearer ${token}`,
        "X-CSRF-TOKEN": window.Laravel.csrfToken,
        "X-Requested-With": "XMLHttpRequest",
    }
});
