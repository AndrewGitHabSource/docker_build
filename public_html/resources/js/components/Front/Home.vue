<template>
    <div class="container">
        <h1>Home</h1>

        <div v-if="user">
            <h4>Hello - {{user.name}}</h4>
        </div>

        <button @click="useAuthProvider('google', Google)">Login Google</button>
    </div>
</template>

<script>
import { inject, computed } from "vue";
import { Google } from 'universal-social-auth';
import { loginGoogle } from '../../endpoints.js';
import { notify } from "@kyvg/vue3-notification";
import { notifyError } from "../../helpers/notify";

export default {
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

</style>
