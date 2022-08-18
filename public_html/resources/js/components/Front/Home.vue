<template>
    <div class="container">
        <aside class="left-side">
            <Menu/>

            <button class="login" @click="useAuthProvider('google', Google)">Login Google</button>
        </aside>

        <section class="posts">
            <Post/>
        </section>
    </div>
</template>

<script>
import { inject, computed } from "vue";
import { Google } from 'universal-social-auth';
import { loginGoogle } from '../../endpoints.js';
import { notify } from "@kyvg/vue3-notification";
import { notifyError } from "../../helpers/notify";
import Menu from "./Menu.vue";
import Post from "./Post.vue";

export default {
    components: {
        Menu,
        Post,
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
    .container {
        display: flex;
    }

    .left-side {
        width: 20%;
    }

    .posts {
        width: 50%;
        border-left: 1px solid rgb(56, 68, 77);
        border-right: 1px solid rgb(56, 68, 77);
    }

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

    h4 {
        color: #fff;
    }
</style>
