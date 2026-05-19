<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Modulatte\Core\Database\Factories\News;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modulatte\Core\Models\NewsCategory;

/**
 * Description of NewsCategory
 *
 * @author BrownPaperbag
 */
class NewsCategoryFactory extends Factory
{
    protected $model = NewsCategory::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->text(30),
            'description' => $this->faker->text(400),
            'published' => true,
        ];
    }
}
