<template>
    <div class="container">
        <h1>Home</h1>

        <button @click="useAuthProvider('google', Google)">Login Google</button>
    </div>
</template>

<script>
import { inject } from "vue";
import { Google } from 'universal-social-auth';
import { loginGoogle } from '../../endpoints.js';
import { notify } from "@kyvg/vue3-notification";
import { notifyError } from "../../helpers/notify";

export default {
    setup() {
        let $auth = inject('Oauth');
        let authResponseData = {
            "code": '',
            "provider": '',
        };

        const socialLogin = async () => {
            try {
                await loginGoogle(authResponseData);

                console.log($auth);

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
        }
    }
}
</script>

<style scoped>

</style>
