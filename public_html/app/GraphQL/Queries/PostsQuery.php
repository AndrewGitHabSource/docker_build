<?php

namespace App\GraphQL\Queries;

use App\Models\Post;
use App\Models\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use Illuminate\Database\Eloquent\Collection;

class PostsQuery extends Query
{
    protected $attributes = [
        'name' => 'posts',
        'model' => Post::class,
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Post'));
    }

    public function resolve(): Collection
    {
        return Post::with('user')->orderBy('created_at', 'DESC')->get();
    }
}
