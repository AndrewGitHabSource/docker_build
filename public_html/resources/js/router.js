import Home from './components/Front/Home.vue';
import User from './components/Profile/User.vue';
import * as VueRouter from 'vue-router';
import store from './settings/store';

const routes = [
    {
        name: 'home',
        path: '/',
        component: Home,
        meta: {
            middleware: "guest",
        },
    },
    {
        name: 'user',
        path: '/profile',
        component: User,
        meta: {
            middleware: "auth",
        },
    },
    {
        name: 'callback',
        path: '/auth/google/callback',
        component: {
            template: '<div class="auth-component"></div>'
        }
    },
];

const router = VueRouter.createRouter({
    mode: "history",
    history: VueRouter.createWebHistory(),
    routes: routes,
});

router.beforeEach((to, from, next) => {
    if (to.meta.middleware === "auth") {
        store.getters.isAuthenticated ? next() : next({ name: "home" });
    } else {
        next();
    }
});

export default router;
