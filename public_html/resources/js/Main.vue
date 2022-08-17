<template>
    <div class="content">
        <notifications />

        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        setup() {
            return {
            }
        }
    }
</script>

<style>
    body {
        background-color: rgb(21, 32, 43);
    }

    h1 {
        font: 28px Verdana;
        text-align: center;
        color: #718096;
    }

    .content {
        padding: 10px 15px;
        width: 1248px;
        margin: 0 auto;
    }
</style>
