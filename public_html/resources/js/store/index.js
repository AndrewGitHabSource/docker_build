import { $http } from '../api.js';

export default {
    state() {
        return {
            user: null,
        }
    },

    getters: {
        user(state) {
            return state.user;
        },

        getId(state) {
            return state.user ? state.user.id : null
        },

        getToken(state) {
            return state.user ? state.user.token : null
        }
    },

    mutations: {
        setUser(state, user) {
            state.user = user;
        }
    },

    actions: {
    },
}
