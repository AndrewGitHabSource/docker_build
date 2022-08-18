<template>
    <div v-if="user">
        <h4>Hello - {{user.name}}</h4>
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
</style>
