<?php

namespace App\GraphQL\Queries;

use App\Models\Post;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use Illuminate\Database\Eloquent\Collection;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;
use Closure;

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

    public function resolve($root, array $args, $context, ResolveInfo $info, Closure $getSelectFields): Collection
    {
        $fields = $getSelectFields();
        $select = $fields->getSelect();
        $with = $fields->getRelations();

        return Post::select($select)->with($with)->orderBy('created_at', 'DESC')->get();
    }
}
