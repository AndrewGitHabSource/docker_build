<?php

namespace App\GraphQL\Types;

use App\Models\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'User',
        'description' => 'Collection of User',
        'model' => User::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of a particular User',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the User',
            ],
            'avatar' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The avatar of the User',
            ],
        ];
    }
}
