<template>
    <div class="content">
        <h1>Application</h1>

        <h2>Hello World</h2>

        <button @click="auth()">Login Google</button>
    </div>
</template>

<script>
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
    h1 {
        font: 28px Verdana;
        text-align: center;
        color: #718096;
    }

    .content {
        padding: 0 15px;
    }
</style>
