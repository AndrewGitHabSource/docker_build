<template>
    <div class="container">
        <h1>Home</h1>

        <button @click="auth()">Login Google</button>
    </div>
</template>

<script>
import { inject } from "vue";
import { computed } from "vue";
import { onMounted } from "vue";

export default {
    setup() {
        const auth = () => {

        };

        return {
            auth,
        }
    }
}
</script>

<style scoped>

</style>
