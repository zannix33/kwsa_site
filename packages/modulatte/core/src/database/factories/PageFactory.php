<?php

namespace Modulatte\Core\Database\Factories;

use Modulatte\Core\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    protected $model = Page::class;

    public function definition(): array
    {
        return [
            'published' => true,
        ];
    }
}
