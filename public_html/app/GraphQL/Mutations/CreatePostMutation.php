<?php

namespace App\GraphQL\Mutations;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreatePostMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createPost'
    ];

    public function type(): Type
    {
        return GraphQL::type('Post');
    }

    public function args(): array
    {
        return [
            'text' => [
                'name' => 'text',
                'type' =>  Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, array $args): Post
    {
        $post = new Post();
        $args['user_id'] = Auth::user()->id;
        $post->fill($args);
        $post->save();

        return $post;
    }
}
