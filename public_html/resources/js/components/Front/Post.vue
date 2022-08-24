<template>
    <div class="post">
        <div class="left">
            <svg viewBox="0 0 24 24" aria-hidden="true" class="r-115tad6 r-4qtqp9 r-yyyyoo r-10ptun7 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1janqcz"><g><path d="M12.225 12.165c-1.356 0-2.872-.15-3.84-1.256-.814-.93-1.077-2.368-.805-4.392.38-2.826 2.116-4.513 4.646-4.513s4.267 1.687 4.646 4.513c.272 2.024.008 3.46-.806 4.392-.97 1.106-2.485 1.255-3.84 1.255zm5.849 9.85H6.376c-.663 0-1.25-.28-1.65-.786-.422-.534-.576-1.27-.41-1.968.834-3.53 4.086-5.997 7.908-5.997s7.074 2.466 7.91 5.997c.164.698.01 1.434-.412 1.967-.4.505-.985.785-1.648.785z"></path></g></svg>

            <div class="logo">
                <img src="/images/logo.jpg" alt="logo">
            </div>
        </div>

        <div class="post-content">
            <h4 class="channel">
                <a href="#">
                    {{post.user.name}}
                </a>

                <svg viewBox="0 0 24 24" aria-label="Verified account" role="img" class="r-jwli3a r-4qtqp9 r-yyyyoo r-1xvli5t r-9cviqr r-f9ja8p r-og9te1 r-bnwqim r-1plcrui r-lrvibr"><g><path d="M22.5 12.5c0-1.58-.875-2.95-2.148-3.6.154-.435.238-.905.238-1.4 0-2.21-1.71-3.998-3.818-3.998-.47 0-.92.084-1.336.25C14.818 2.415 13.51 1.5 12 1.5s-2.816.917-3.437 2.25c-.415-.165-.866-.25-1.336-.25-2.11 0-3.818 1.79-3.818 4 0 .494.083.964.237 1.4-1.272.65-2.147 2.018-2.147 3.6 0 1.495.782 2.798 1.942 3.486-.02.17-.032.34-.032.514 0 2.21 1.708 4 3.818 4 .47 0 .92-.086 1.335-.25.62 1.334 1.926 2.25 3.437 2.25 1.512 0 2.818-.916 3.437-2.25.415.163.865.248 1.336.248 2.11 0 3.818-1.79 3.818-4 0-.174-.012-.344-.033-.513 1.158-.687 1.943-1.99 1.943-3.484zm-6.616-3.334l-4.334 6.5c-.145.217-.382.334-.625.334-.143 0-.288-.04-.416-.126l-.115-.094-2.415-2.415c-.293-.293-.293-.768 0-1.06s.768-.294 1.06 0l1.77 1.767 3.825-5.74c.23-.345.696-.436 1.04-.207.346.23.44.696.21 1.04z"></path></g></svg>

                <span>@BBC_ua · 22h</span>
            </h4>

            <p>
                {{post.text}}
            </p>

            <div class="image-post">
                <img src="/images/image.jpg">
            </div>

            <ul class="bottom-block">
                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true" class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"><g><path d="M14.046 2.242l-4.148-.01h-.002c-4.374 0-7.8 3.427-7.8 7.802 0 4.098 3.186 7.206 7.465 7.37v3.828c0 .108.044.286.12.403.142.225.384.347.632.347.138 0 .277-.038.402-.118.264-.168 6.473-4.14 8.088-5.506 1.902-1.61 3.04-3.97 3.043-6.312v-.017c-.006-4.367-3.43-7.787-7.8-7.788zm3.787 12.972c-1.134.96-4.862 3.405-6.772 4.643V16.67c0-.414-.335-.75-.75-.75h-.396c-3.66 0-6.318-2.476-6.318-5.886 0-3.534 2.768-6.302 6.3-6.302l4.147.01h.002c3.532 0 6.3 2.766 6.302 6.296-.003 1.91-.942 3.844-2.514 5.176z"></path></g></svg>

                    <span>229</span>
                </li>

                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true" class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"><g><path d="M23.77 15.67c-.292-.293-.767-.293-1.06 0l-2.22 2.22V7.65c0-2.068-1.683-3.75-3.75-3.75h-5.85c-.414 0-.75.336-.75.75s.336.75.75.75h5.85c1.24 0 2.25 1.01 2.25 2.25v10.24l-2.22-2.22c-.293-.293-.768-.293-1.06 0s-.294.768 0 1.06l3.5 3.5c.145.147.337.22.53.22s.383-.072.53-.22l3.5-3.5c.294-.292.294-.767 0-1.06zm-10.66 3.28H7.26c-1.24 0-2.25-1.01-2.25-2.25V6.46l2.22 2.22c.148.147.34.22.532.22s.384-.073.53-.22c.293-.293.293-.768 0-1.06l-3.5-3.5c-.293-.294-.768-.294-1.06 0l-3.5 3.5c-.294.292-.294.767 0 1.06s.767.293 1.06 0l2.22-2.22V16.7c0 2.068 1.683 3.75 3.75 3.75h5.85c.414 0 .75-.336.75-.75s-.337-.75-.75-.75z"></path></g></svg>

                    <span>249</span>
                </li>

                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true" class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"><g><path d="M12 21.638h-.014C9.403 21.59 1.95 14.856 1.95 8.478c0-3.064 2.525-5.754 5.403-5.754 2.29 0 3.83 1.58 4.646 2.73.814-1.148 2.354-2.73 4.645-2.73 2.88 0 5.404 2.69 5.404 5.755 0 6.376-7.454 13.11-10.037 13.157H12zM7.354 4.225c-2.08 0-3.903 1.988-3.903 4.255 0 5.74 7.034 11.596 8.55 11.658 1.518-.062 8.55-5.917 8.55-11.658 0-2.267-1.823-4.255-3.903-4.255-2.528 0-3.94 2.936-3.952 2.965-.23.562-1.156.562-1.387 0-.014-.03-1.425-2.965-3.954-2.965z"></path></g></svg>

                    <span>748</span>
                </li>

                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true" class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"><g><path d="M17.53 7.47l-5-5c-.293-.293-.768-.293-1.06 0l-5 5c-.294.293-.294.768 0 1.06s.767.294 1.06 0l3.72-3.72V15c0 .414.336.75.75.75s.75-.336.75-.75V4.81l3.72 3.72c.146.147.338.22.53.22s.384-.072.53-.22c.293-.293.293-.767 0-1.06z"></path><path d="M19.708 21.944H4.292C3.028 21.944 2 20.916 2 19.652V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 .437.355.792.792.792h15.416c.437 0 .792-.355.792-.792V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 1.264-1.028 2.292-2.292 2.292z"></path></g></svg>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import { reactive } from "vue";

export default {
    props: {
        post: Object,
    },
    setup(props) {
        const post = reactive(props.post);
        return {
            post,
        }
    }
}
</script>

<style scoped>
    .post {
        padding: 10px 20px;
        border-bottom: 1px solid rgb(56, 68, 77);
        display: flex;
        cursor: pointer;
    }

    .logo {
        width: 48px;
        height: 48px;
        border-radius: 100%;
        overflow: hidden;
        position: relative;
        margin: 21px 0 0 0;
    }

    .logo img {
        object-fit: contain;
        height: 100%;
        width: 100%;
    }

    .left {
        position: relative;
    }

    .left svg {
        position: absolute;
        width: 16px;
        height: 16px;
        fill: rgb(139, 152, 165);
        right: 0;
        z-index: 1;
    }

    .image-post {
        border-radius: 15px;
        overflow: hidden;
    }

    .image-post img {
        max-width: 100%;
    }

    .post-content {
        padding-left: 2%;
    }

    .channel {
        margin: 0;
    }

    .channel a {
        color: #fff;
        font: 700 15px TwitterChirp;
        text-decoration: none;
    }

    .channel svg {
        margin: 0 4px;
        position: relative;
        top: 5px;
        max-height: 20px;
        max-width: 20px;
        fill: #fff;
    }

    .channel a:hover {
        text-decoration: underline;
    }

    .channel span {
        font-size: 15px;
        font-weight: 400;
        color: rgb(139, 152, 165);
    }

    .post-content p {
        font-size: 15px;
        font-weight: 400;
        color: #fff;
    }

    .bottom-block {
        max-width: 425px;
        display: flex;
        list-style: none;
        padding: 0;
        justify-content: space-between;
        margin: 4px 0 0 0;
    }

    .bottom-block span {
        color: rgb(139, 152, 165);
        transition: 0.5s color;
    }

    .bottom-block svg {
        width: 1.25em;
        fill: rgb(139, 152, 165);
        margin-right: 10px;
        position: relative;
        top: 4px;
        transition: 0.5s fill;
    }

    .bottom-block li:hover span {
        color: rgb(29, 155, 240);
    }

    .bottom-block li:hover svg {
        fill: rgb(29, 155, 240);
    }

    .bottom-block li:nth-child(2):hover span {
        color: rgb(0, 186, 124);
    }

    .bottom-block li:nth-child(2):hover svg {
        fill: rgb(0, 186, 124);
    }

    .bottom-block li:nth-child(3):hover span {
        color: rgb(249, 24, 128);
    }

    .bottom-block li:nth-child(3):hover svg {
        fill: rgb(249, 24, 128);
    }
</style>
