import { notify } from "@kyvg/vue3-notification";

export const notifyError = (error) => {
    notify({
        title: "Authorization Error",
        text: error,
        type: "error",
    });
}

export const notifyErrorSavePost = (error) => {
    notify({
        title: "Server Error",
        text: error,
        type: "error",
    });
}
