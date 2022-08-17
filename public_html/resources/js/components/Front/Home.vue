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

export default {
    setup() {
        let $auth = inject('Oauth');
        let authResponseData = {
            "code": '',
            "provider": '',
        };

        const socialLogin = async () => {
            await loginGoogle(authResponseData);
        };

        const useAuthProvider = (provider, proData) => {
            $auth.authenticate(provider, proData).then((response) => {
                if (response.code) {
                    authResponseData.code = response.code;
                    authResponseData.provider = provider;
                    socialLogin();
                }
            }).catch((err) => {
                console.log(err)
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
