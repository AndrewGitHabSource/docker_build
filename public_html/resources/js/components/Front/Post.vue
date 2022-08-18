<template>
    <div class="post">
        <div class="left">
            <div class="logo">
                <img src="/images/logo.jpg">
            </div>
        </div>

        <div class="post-content">
            <h4 class="channel">
                <a href="#">BBC News</a>

                <span>@BBC_ua · 22h</span>
            </h4>

            <p>
                Sub-Saharan Africa is a major force for the future. I met with ​young members of the African
                diaspora this week because the partnerships we hope to build extends beyond government. For us,
                this is not about what we do for Africa, but what we do with Africa.
            </p>

            <div class="image-post">
                <img src="/images/image.jpg">
            </div>
        </div>
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

<style scoped>
    .post {
        padding: 10px 20px;
        border-bottom: 1px solid rgb(56, 68, 77);
        display: flex;
    }

    .logo {
        width: 48px;
        height: 48px;
        border-radius: 100%;
        overflow: hidden;
    }

    .logo img {
        object-fit: contain;
        height: 100%;
        width: 100%;
    }

    .image-post img {
        max-width: 100%;
    }

    .post-content {
        padding-left: 5%;
    }

    .channel a {
        color: #fff;
        font: 700 15px TwitterChirp;
        text-decoration: none;
    }

    .channel a:hover {
        text-decoration: underline;
    }

    .post-content p {
        font-size: 15px;
        font-weight: 400;
        color: #fff;
    }
</style>
