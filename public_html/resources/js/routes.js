import Home from './components/Front/Home.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home,
    },
    {
        name: 'callback',
        path: '/auth/google/callback',
        component: {
            template: '<div class="auth-component"></div>'
        }
    },
];
