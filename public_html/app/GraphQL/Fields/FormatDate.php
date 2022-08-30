<?php

namespace App\GraphQL\Fields;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Field;

class FormatDate extends Field
{
    protected $attributes = [
        'description' => 'Format Date',
    ];

    public function __construct(array $settings = [])
    {
        $this->attributes = \array_merge($this->attributes, $settings);
    }

    public function type(): Type
    {
        return Type::string();
    }

    public function args(): array
    {
        return [
            'format' => [
                'type' => Type::string(),
                'defaultValue' => 'Y M D H:i',
                'description' => 'Defaults: Y M D H:i',
            ],
        ];
    }

    protected function resolve($root, array $args): ?string
    {
        $date = $root->{$this->getProperty()};

        return $date->format($args['format']);
    }

    protected function getProperty(): string
    {
        return $this->attributes['alias'] ?? $this->attributes['name'];
    }
}
