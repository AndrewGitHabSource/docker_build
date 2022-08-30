<?php

declare(strict_types = 1);

return [
    'route' => [
        'prefix' => 'graphql',

        'controller' => \Rebing\GraphQL\GraphQLController::class . '@query',

        'middleware' => [],

        'group_attributes' => [],
    ],

    'default_schema' => 'default',

    'batching' => [
        'enable' => true,
    ],

    'schemas' => [
        'default' => [
            'query' => [
                'post' => App\GraphQL\Queries\PostQuery::class,
                'posts' => App\GraphQL\Queries\PostsQuery::class,
            ],
            'middleware' => null,
            'method' => ['GET', 'POST'],
            'execution_middleware' => null,
        ],
        'access' => [
            'mutation' => [
                'createPost' => App\GraphQL\Mutations\CreatePostMutation::class,
            ],
            'middleware' => ['auth.graph'],
            'method' => ['POST', 'GET'],
        ],
    ],

    'types' => [
        'Post' => App\GraphQL\Types\PostType::class,
        'User' => App\GraphQL\Types\UserType::class,
    ],

    'lazyload_types' => true,

    'error_formatter' => [\Rebing\GraphQL\GraphQL::class, 'formatError'],

    'errors_handler' => [\Rebing\GraphQL\GraphQL::class, 'handleErrors'],

    'security' => [
        'query_max_complexity' => null,
        'query_max_depth' => null,
        'disable_introspection' => false,
    ],

    'pagination_type' => \Rebing\GraphQL\Support\PaginationType::class,

    'simple_pagination_type' => \Rebing\GraphQL\Support\SimplePaginationType::class,

    'graphiql' => [
        'prefix' => 'graphiql',
        'controller' => \Rebing\GraphQL\GraphQLController::class . '@graphiql',
        'middleware' => [],
        'view' => 'graphql::graphiql',
        'display' => env('ENABLE_GRAPHIQL', true),
    ],

    'defaultFieldResolver' => null,

    'headers' => [],

    'json_encoding_options' => 0,

    'apq' => [
        'enable' => env('GRAPHQL_APQ_ENABLE', false),

        'cache_driver' => env('GRAPHQL_APQ_CACHE_DRIVER', config('cache.default')),

        'cache_prefix' => config('cache.prefix') . ':graphql.apq',

        'cache_ttl' => 300,
    ],

    'execution_middleware' => [
        \Rebing\GraphQL\Support\ExecutionMiddleware\ValidateOperationParamsMiddleware::class,
        \Rebing\GraphQL\Support\ExecutionMiddleware\AutomaticPersistedQueriesMiddleware::class,
        \Rebing\GraphQL\Support\ExecutionMiddleware\AddAuthUserContextValueMiddleware::class,
        // \Rebing\GraphQL\Support\ExecutionMiddleware\UnusedVariablesMiddleware::class,
    ],
];
