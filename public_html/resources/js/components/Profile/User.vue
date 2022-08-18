<template>
    <div v-if="user">
        <img :src="user.avatar">
        <h4>Hello - {{user.name}}</h4>
        <h4>Email - {{user.email}}</h4>
        <h4>Date register - {{user.created_at}}</h4>
    </div>
</template>

<script>

import { computed, inject } from "vue";

export default {
    setup() {
        let store = inject("store");
        const user = computed(() => store.getters.user);

        return {
            user,
        }
    }
}
</script>

<style scoped>
    h4 {
        color: #fff;
    }

    img {
        margin-top: 10px;
    }
</style>
