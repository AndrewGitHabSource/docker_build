import { $http } from "./api";
import { Ziggy } from './ziggy';

export const loginGoogle = async (data) => {
    return await $http.get(Ziggy.routes.callback.uri, {
        "params": {...data},
    });
}
