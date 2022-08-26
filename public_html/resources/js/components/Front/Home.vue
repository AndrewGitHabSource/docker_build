<template>
    <section v-loading="loading" class="posts">
        <AddPost @save-post="savePost"/>

        <Post v-for="post in posts.key" :key="post.id" :post="post"/>
    </section>
</template>

<script>
import { inject, computed, onMounted, reactive, ref } from "vue";
import Post from "./Post.vue";
import AddPost from "./AddPost.vue";
import { getAllPosts } from "../../endpoints";

export default {
    components: {
        Post,
        AddPost,
    },

    setup() {
        let store = inject("store");
        let loading = ref(false);
        const user = computed(() => store.getters.user);
        let posts = reactive({
            "key": {},
        });

        const getPosts = async () => {
            try {
                loading.value = true;

                let {data} = await getAllPosts();

                posts.key = data;
            } catch (error) {
                console.log(error);
            } finally {
                loading.value = false;
            }
        }

        const savePost = () => {
            getPosts();
        }

        onMounted(getPosts);

        return {
            user,
            posts,
            savePost,
            loading,
        }
    }
}
</script>

<style scoped>
    .posts {
        width: 50%;
        border-left: 1px solid rgb(56, 68, 77);
        border-right: 1px solid rgb(56, 68, 77);
    }

    .login {
        width: 87%;
        background-color: rgb(29, 155, 240);
        color: #fff;
        box-shadow: rgba(0, 0, 0, 0.08) 0 8px 28px;
        transition-duration: 0.2s;
        transition-property: background-color, box-shadow;
        min-height: 52px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        font: 700 17px TwitterChirp;
        cursor: pointer;
        border-radius: 100px;
    }

    .login:hover {
        background-color: rgb(26, 140, 216);
    }

    h4 {
        color: #fff;
    }

    .posts {
        min-height: 400px;
    }
</style>
