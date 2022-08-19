<template>
    <div v-if="user">
        <div class="logo">
            <img :src="user.avatar" alt="logo">
        </div>

        <h4 class="name">{{user.name}}</h4>

        <h4 class="email">{{user.email}}</h4>

        <div class="date-start">
            <svg viewBox="0 0 24 24" aria-hidden="true" class="r-115tad6 r-4qtqp9 r-yyyyoo r-1xvli5t r-1d4mawv r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M19.708 2H4.292C3.028 2 2 3.028 2 4.292v15.416C2 20.972 3.028 22 4.292 22h15.416C20.972 22 22 20.972 22 19.708V4.292C22 3.028 20.972 2 19.708 2zm.792 17.708c0 .437-.355.792-.792.792H4.292c-.437 0-.792-.355-.792-.792V6.418c0-.437.354-.79.79-.792h15.42c.436 0 .79.355.79.79V19.71z"></path><circle cx="7.032" cy="8.75" r="1.285"></circle><circle cx="7.032" cy="13.156" r="1.285"></circle><circle cx="16.968" cy="8.75" r="1.285"></circle><circle cx="16.968" cy="13.156" r="1.285"></circle><circle cx="12" cy="8.75" r="1.285"></circle><circle cx="12" cy="13.156" r="1.285"></circle><circle cx="7.032" cy="17.486" r="1.285"></circle><circle cx="12" cy="17.486" r="1.285"></circle></g></svg>

            Joined {{date}}
        </div>
    </div>
</template>

<script>

import { computed, inject } from "vue";
import moment from 'moment';

export default {
    setup() {
        let store = inject("store");
        const user = computed(() => store.getters.user);
        const date = computed(() => {
            return moment(user.created_at).format('MMMM Do YYYY');
        });


        return {
            user,
            date,
        }
    }
}
</script>

<style scoped>
    h4 {
        color: #fff;
        margin: 0;
    }

    h4.name {
        font-size: 20px;
        font-weight: 700;
        color: rgb(247, 249, 249);
    }

    h4.email {
        font-weight: 400;
        color: rgb(139, 152, 165);
        font-size: 15px;
    }

    .logo {
        margin: 10px 0 20px 0;
        width: 134px;
        height: 134px;
        overflow: hidden;
        border-radius: 100%;
        border: 3px solid black;
    }

    .logo img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    .date-start {
        color: rgb(139, 152, 165);;
        font-weight: 400;
        font-size: 15px;
        margin-top: 10px;
    }

    .date-start svg {
        fill: rgb(139, 152, 165);;
        width: 19px;
        height: 19px;
        position: relative;
        top: 4px;
    }
</style>
