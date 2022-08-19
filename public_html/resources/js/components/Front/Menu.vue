<template>
    <nav>
        <ul>
            <li>
                <router-link :to="{'name': 'home'}">
                    <svg viewBox="0 0 24 24" aria-hidden="true" class="r-jwli3a r-4qtqp9 r-yyyyoo r-16y2uox r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-lrsllp"><g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g></svg>
                </router-link>>
            </li>

            <li class="active">
                <svg viewBox="0 0 24 24" aria-hidden="true" class="r-vlxjld r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"><g><path d="M22.58 7.35L12.475 1.897c-.297-.16-.654-.16-.95 0L1.425 7.35c-.486.264-.667.87-.405 1.356.18.335.525.525.88.525.16 0 .324-.038.475-.12l.734-.396 1.59 11.25c.216 1.214 1.31 2.062 2.66 2.062h9.282c1.35 0 2.444-.848 2.662-2.088l1.588-11.225.737.398c.485.263 1.092.082 1.354-.404.263-.486.08-1.093-.404-1.355zM12 15.435c-1.795 0-3.25-1.455-3.25-3.25s1.455-3.25 3.25-3.25 3.25 1.455 3.25 3.25-1.455 3.25-3.25 3.25z"></path></g></svg>

                <span>Home</span>
            </li>

            <li>
                <svg viewBox="0 0 24 24" aria-hidden="true" class="r-vlxjld r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"><g><path d="M21 7.337h-3.93l.372-4.272c.036-.412-.27-.775-.682-.812-.417-.03-.776.27-.812.683l-.383 4.4h-6.32l.37-4.27c.037-.413-.27-.776-.68-.813-.42-.03-.777.27-.813.683l-.382 4.4H3.782c-.414 0-.75.337-.75.75s.336.75.75.75H7.61l-.55 6.327H3c-.414 0-.75.336-.75.75s.336.75.75.75h3.93l-.372 4.272c-.036.412.27.775.682.812l.066.003c.385 0 .712-.295.746-.686l.383-4.4h6.32l-.37 4.27c-.036.413.27.776.682.813l.066.003c.385 0 .712-.295.746-.686l.382-4.4h3.957c.413 0 .75-.337.75-.75s-.337-.75-.75-.75H16.39l.55-6.327H21c.414 0 .75-.336.75-.75s-.336-.75-.75-.75zm-6.115 7.826h-6.32l.55-6.326h6.32l-.55 6.326z"></path></g></svg>

                <span>Explore</span>
            </li>

            <li>
                <svg viewBox="0 0 24 24" aria-hidden="true" class="r-vlxjld r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"><g><path d="M21.697 16.468c-.02-.016-2.14-1.64-2.103-6.03.02-2.532-.812-4.782-2.347-6.335C15.872 2.71 14.01 1.94 12.005 1.93h-.013c-2.004.01-3.866.78-5.242 2.174-1.534 1.553-2.368 3.802-2.346 6.334.037 4.33-2.02 5.967-2.102 6.03-.26.193-.366.53-.265.838.102.308.39.515.712.515h4.92c.102 2.31 1.997 4.16 4.33 4.16s4.226-1.85 4.327-4.16h4.922c.322 0 .61-.206.71-.514.103-.307-.003-.645-.263-.838zM12 20.478c-1.505 0-2.73-1.177-2.828-2.658h5.656c-.1 1.48-1.323 2.66-2.828 2.66zM4.38 16.32c.74-1.132 1.548-3.028 1.524-5.896-.018-2.16.644-3.982 1.913-5.267C8.91 4.05 10.397 3.437 12 3.43c1.603.008 3.087.62 4.18 1.728 1.27 1.285 1.933 3.106 1.915 5.267-.024 2.868.785 4.765 1.525 5.896H4.38z"></path></g></svg>

                <span>Notifications</span>
            </li>

            <li>
                <svg viewBox="0 0 24 24" aria-hidden="true" class="r-vlxjld r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"><g><path d="M19.25 3.018H4.75C3.233 3.018 2 4.252 2 5.77v12.495c0 1.518 1.233 2.753 2.75 2.753h14.5c1.517 0 2.75-1.235 2.75-2.753V5.77c0-1.518-1.233-2.752-2.75-2.752zm-14.5 1.5h14.5c.69 0 1.25.56 1.25 1.25v.714l-8.05 5.367c-.273.18-.626.182-.9-.002L3.5 6.482v-.714c0-.69.56-1.25 1.25-1.25zm14.5 14.998H4.75c-.69 0-1.25-.56-1.25-1.25V8.24l7.24 4.83c.383.256.822.384 1.26.384.44 0 .877-.128 1.26-.383l7.24-4.83v10.022c0 .69-.56 1.25-1.25 1.25z"></path></g></svg>

                <span>Messages</span>
            </li>

            <li>
                <svg viewBox="0 0 24 24" aria-hidden="true" class="r-vlxjld r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"><g><path d="M12 11.816c1.355 0 2.872-.15 3.84-1.256.814-.93 1.078-2.368.806-4.392-.38-2.825-2.117-4.512-4.646-4.512S7.734 3.343 7.354 6.17c-.272 2.022-.008 3.46.806 4.39.968 1.107 2.485 1.256 3.84 1.256zM8.84 6.368c.162-1.2.787-3.212 3.16-3.212s2.998 2.013 3.16 3.212c.207 1.55.057 2.627-.45 3.205-.455.52-1.266.743-2.71.743s-2.255-.223-2.71-.743c-.507-.578-.657-1.656-.45-3.205zm11.44 12.868c-.877-3.526-4.282-5.99-8.28-5.99s-7.403 2.464-8.28 5.99c-.172.692-.028 1.4.395 1.94.408.52 1.04.82 1.733.82h12.304c.693 0 1.325-.3 1.733-.82.424-.54.567-1.247.394-1.94zm-1.576 1.016c-.126.16-.316.246-.552.246H5.848c-.235 0-.426-.085-.552-.246-.137-.174-.18-.412-.12-.654.71-2.855 3.517-4.85 6.824-4.85s6.114 1.994 6.824 4.85c.06.242.017.48-.12.654z"></path></g></svg>

                <span>Profile</span>
            </li>
        </ul>
    </nav>

    <div class="dropdown" v-if="isAuth">
        <el-dropdown
            :hide-on-click="true"
            :trigger="'click'"
            :size="'large'"
            :popper-class="'user-dropdown'">
            <div class="el-dropdown-link">
                <div class="avatar">
                    <img :src="user.avatar">
                </div>

                <div class="info">
                    <span class="name">{{user.name}}</span>
                    <span class="email">{{user.email}}</span>
                </div>
            </div>
            <template #dropdown>
                <div class="dropdown-content">
                    <div class="dropdown-info">
                        <div>
                            <div class="avatar dropdown-avatar">
                                <img :src="user.avatar">
                            </div>

                            <div class="info">
                                <span class="name">{{user.name}}</span>
                                <span class="email">{{user.email}}</span>
                            </div>
                        </div>

                        <svg viewBox="0 0 24 24" aria-hidden="true" class="r-1cvl2hr r-4qtqp9 r-yyyyoo r-1q142lx r-1xvli5t r-19u6a5r r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M9 20c-.264 0-.52-.104-.707-.293l-4.785-4.785c-.39-.39-.39-1.023 0-1.414s1.023-.39 1.414 0l3.946 3.945L18.075 4.41c.32-.45.94-.558 1.395-.24.45.318.56.942.24 1.394L9.817 19.577c-.17.24-.438.395-.732.42-.028.002-.057.003-.085.003z"></path></g></svg>
                    </div>

                    <el-dropdown-menu class="dropdown-menu">
                        <el-dropdown-item @click="toProfile()">{{ user.name }}</el-dropdown-item>
                        <el-dropdown-item @click="logout()">Logout</el-dropdown-item>
                    </el-dropdown-menu>
                </div>
            </template>
        </el-dropdown>
    </div>
    <Login v-else @login="isUserLogin"/>
</template>

<script>
    import Login from "./Login.vue";
    import { computed, inject, onMounted, ref } from 'vue';
    import { notifyError } from "../../helpers/notify";
    import { logoutUser } from '../../endpoints.js';

    export default {
        components: {
            Login,
        },

        setup() {
            let router = inject("router");
            const profileDropDown = ref(null);
            let store = inject("store");
            let isAuth = ref(false);
            const user = computed(() => store.getters.user);

            const isUserLogin = (event) => {
                if(event) {
                    checkAuth();
                }
            };

            const show = () => {
                profileDropDown.value.handleOpen();
            }

            const checkAuth = () => {
                store.getters.isAuthenticated ? isAuth.value = true : isAuth.value = false;
            }

            const toProfile = () => {
                router.push({name: 'user'});
            }

            const logout = async () => {
                try {
                    await logoutUser();

                    store.replaceState({
                        "user": null,
                    });
                    localStorage.removeItem('vuex');
                    checkAuth();

                    router.push({name: 'home'});
                } catch (error) {
                    notifyError(error);
                    console.log(error);
                }
            }

            onMounted(checkAuth);

            return {
                isUserLogin,
                show,
                user,
                isAuth,
                profileDropDown,
                toProfile,
                logout,
            }
        }
    }
</script>

<style scoped>
    svg {
        width: 1.75rem;
        color: rgb(247, 249, 249);
        fill: #fff;
    }

    ul {
        padding: 0;
        margin-top: 0;
    }

    nav li {
        display: flex;
        flex-basis: auto;
        flex-shrink: 0;
        align-items: center;
        padding: 12px;
        cursor: pointer;
        border-radius: 102px;
        transition-property: background-color, box-shadow;
        transition-duration: 0.2s;
    }

    nav li.active span {
        font-weight: 700;
    }

    nav li:hover {
        background-color: rgba(247, 249, 249, 0.1);
    }

    nav span {
        color: #fff;
        font-size: 20px;
        font-weight: 400;
        line-height: 24px;
        margin-left: 20px;
    }

    .el-dropdown {
        width: 100%;
        cursor: pointer;
    }

    .el-dropdown-link {
        display: flex;
        align-items: center;
        width: 100%;
    }

    .avatar {
        width: 40px;
        height: 40px;
        border-radius: 100px;
        overflow: hidden;
        margin-right: 3%;
    }

    .avatar img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    .info span {
        display: block;
        font-size: 15px;
    }

    .info .name {
        color: rgb(247, 249, 249);
        font-weight: 700;
    }

    .info .email {
        color: rgb(139, 152, 165);
        font-weight: 400;
    }

    .dropdown-content, .dropdown-menu {
        background-color: rgb(21, 32, 43);
    }

    .dropdown-info {
        width: 300px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid rgb(56, 68, 77);
        padding: 12px 16px;
    }

    .dropdown-info > div {
        display: flex;
        width: 90%;
    }

    .dropdown-menu {
        padding: 0 0 12px 0;
    }

    .dropdown-menu ::v-deep(li) {
        color: #fff;
        padding: 16px 16px;
    }

    .dropdown-menu ::v-deep(li):hover {
        background: rgb(30, 39, 50);
        color: #fff;
    }

    .dropdown-avatar {
        width: 48px;
        height: 48px;
    }

    .dropdown-info svg {
        fill: rgb(29, 155, 240);
        width: 14px;
        height: 14px;
    }
</style>
