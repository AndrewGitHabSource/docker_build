<template>
    <button class="login" @click="useAuthProvider('google', Google)">Login Google</button>

    <div v-if="loading" v-loading="loading" class="login-loading"></div>
</template>

<script>
    import { inject, computed, ref } from "vue";
    import { Google } from 'universal-social-auth';
    import { loginGoogle } from '../../endpoints.js';
    import { notify } from "@kyvg/vue3-notification";
    import { notifyError } from "../../helpers/notify";

    export default {
        emits: ['login'],

        setup(props, {emit}) {
            let loading = ref(false);
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

                    emit("login", true);
                } catch (error) {
                    notifyError(error);
                    console.log(error);
                } finally {
                    loading.value = false;
                }
            };

            const useAuthProvider = (provider, proData) => {
                loading.value = true;

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
                loading,
            }
        }
    }
</script>

<style scoped>
    .login {
        width: 87%;
        background-color: rgb(29, 155, 240);
        color: #fff;
        box-shadow: rgba(0, 0, 0, 0.08) 0 8px 28px;
        transition-duration: 0.2s;
        transition-property: background-color, box-shadow;
        min-height: 52px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        font: 700 17px TwitterChirp;
        cursor: pointer;
        border-radius: 100px;
    }

    .login:hover {
        background-color: rgb(26, 140, 216);
    }

    .login-loading {
        width: 100%;
        height: 100%;
        position: absolute;
        background: rgba(0, 0, 0, 0.5);
        top: 0;
        left: 0;
        overflow: hidden;
    }
</style>
