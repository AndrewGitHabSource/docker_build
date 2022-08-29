import { $http } from "./api";
import { Ziggy } from './ziggy';
import { useQuery } from 'villus';
import { useMutation } from 'villus';

export const loginGoogle = async (data) => {
    return await $http.get(Ziggy.routes.callback.uri, {
        "params": {...data},
    });
}

export const getAllPosts = () => {
    const AllPosts = `query AllPosts
        {
            posts {
                id,
                text,
                user {
                   name,
                   avatar
                }
            }
        }`;

    return new Promise((resolve, reject) => {
        const data = useQuery({
            query: AllPosts,
        });

        resolve(data);
    });
}

export const logoutUser = async () => {
    return await $http.get(Ziggy.routes.logout.uri);
}

export const savePost = async (post) => {
    const createPost = `mutation createPostMutation($text: String!) {
        createPost (text: $text) {
           text
        }
    }`;

    const { data, execute } = useMutation(createPost);
    const variables = {
        text: post.text,
    };

    await execute(variables);
}
