<template>
    <el-form class="form" :model="form" label-width="120px">
        <el-input
            class="text"
            v-model="form.text"
            type="textarea"
            :label-position="top"
            :placeholder="'What\'s happening?'"
            :label-width="0"/>

        <el-button class="button-tweet" type="primary" @click="onSubmit">Tweet</el-button>
    </el-form>
</template>

<script>
    import { reactive } from "vue";
    import { savePost } from "../../endpoints";
    import { notifyErrorSavePost } from "../../helpers/notify";

    export default {
        emits: ['login'],

        setup(props, {emit}) {
            let form = reactive({
                "text": "",
            });

            const onSubmit = async () => {
                try {
                    let {data} = await savePost(form);
                    emit("save-post", true);
                } catch (error) {
                    notifyErrorSavePost(error);
                }
            }

            return {
                form,
                onSubmit,
            }
        }
    }
</script>

<style scoped>
    .button-tweet {
        background-color: rgb(29, 155, 240);
        min-width: 36px;
        min-height: 36px;
        font-size: 15px;
        font-weight: 700;
        margin-top: 20px;
    }

    .form {
        padding: 10px 10px;
    }

    ::v-deep(textarea) {
        background: #15202b;
        box-shadow: none;
        color: #fff;
    }

    ::v-deep(textarea)::placeholder {
        color: #8B98A5;
        font-size: 20px;
    }
</style>
