import createPersistedState from "vuex-persistedstate";

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
        },

        isAuthenticated(state) {
            return !!state.user;
        }
    },

    mutations: {
        setUser(state, user) {
            state.user = user;
        }
    },

    plugins: [createPersistedState()],
}
