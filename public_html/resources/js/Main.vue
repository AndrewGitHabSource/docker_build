<template>
    <div class="content">
        <notifications />

        <div class="container">
            <aside class="left-side">
                <Menu/>
            </aside>

            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    import Menu from "./components/Front/Menu.vue";

    export default {
        components: {
            Menu,
        },

        setup() {
            return {
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
        margin-right: 2%;
    }
</style>
