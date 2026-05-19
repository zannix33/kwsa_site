<?php
namespace Modulatte\Core\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modulatte\Core\Models\ProjectCategory;

class ProjectCategoryFactory extends Factory
{

    protected $model = ProjectCategory::class;
    
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(30),
            'description' => $this->faker->text(400)
        ];
    }
}
