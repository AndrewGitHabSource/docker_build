import { $http } from "./api";
import { Ziggy } from './ziggy';

export const loginGoogle = async (data) => {
    return await $http.get(Ziggy.routes.callback.uri, {
        "params": {...data},
    });
}

export const logoutUser = async () => {
    return await $http.get(Ziggy.routes.logout.uri);
}

export const savePost = async (post) => {
    console.log(Ziggy.routes);
    return await $http.post(Ziggy.routes["post.save"].uri, post);
}
