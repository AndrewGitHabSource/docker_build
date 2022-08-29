<?php

namespace App\GraphQL\Types;

use App\Models\Post;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use Rebing\GraphQL\Support\Facades\GraphQL;

class PostType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Post',
        'description' => 'Collection of Posts',
        'model' => Post::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of a particular Post',
            ],
            'text' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The title of the Post',
            ],
            'user' => [
                'type'          => GraphQL::type('User'),
                'description'   => 'User',
            ],
            'user_name' => [
                'type' => Type::string(),
                'description' => 'The user name of user',
                'resolve' => function($root, array $args) {
                    return stristr($root->user->email, '@', true);
                }
            ],
        ];
    }
}
