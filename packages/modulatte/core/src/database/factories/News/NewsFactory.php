<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Modulatte\Core\Database\Factories\News;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modulatte\Core\Models\News;

/**
 * Description of NewsFactory
 *
 * @author BrownPaperbag
 */
class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->text(30),
            'headline' => $this->faker->text(100),
            'content' => $this->faker->text(500),
            'published' => true,
        ];
    }
}
