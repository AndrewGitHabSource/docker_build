<template>
    <div class="container">
        <Menu/>

        <div v-if="user">
            <h4>Hello - {{user.name}}</h4>
        </div>

        <button class="login" @click="useAuthProvider('google', Google)">Login Google</button>
    </div>
</template>

<script>
import { inject, computed } from "vue";
import { Google } from 'universal-social-auth';
import { loginGoogle } from '../../endpoints.js';
import { notify } from "@kyvg/vue3-notification";
import { notifyError } from "../../helpers/notify";
import Menu from "./Menu.vue";

export default {
    components: {
        Menu,
    },
    setup() {
        let $auth = inject('Oauth');
        let store = inject("store");
        let authResponseData = {
            "code": '',
            "provider": '',
        };
        const user = computed(() => store.getters.user);

        const socialLogin = async () => {
            try {
                let {data} = await loginGoogle(authResponseData);

                store.commit('setUser', data);

                notify({
                    title: "Authorization Success",
                    text: "You have been logged in!",
                    type: "success",
                });
            } catch (error) {
                notifyError(error);

                console.log(error);
            }
        };

        const useAuthProvider = (provider, proData) => {
            $auth.authenticate(provider, proData).then((response) => {
                if (response.code) {
                    authResponseData.code = response.code;
                    authResponseData.provider = provider;
                    socialLogin();
                }
            }).catch((error) => {
                notifyError(error);

                console.log(error)
            })
        }

        return {
            socialLogin,
            useAuthProvider,
            Google,
            user,
        }
    }
}
</script>

<style scoped>
    .login {
        background-color: rgb(29, 155, 240);
        color: #fff;
        box-shadow: rgba(0, 0, 0, 0.08) 0 8px 28px;
        transition-duration: 0.2s;
        transition-property: background-color, box-shadow;
        width: 20%;
        min-height: 52px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        font: 17px TwitterChirp;
        cursor: pointer;
        border-radius: 100px;
    }
</style>
