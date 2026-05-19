<?php
namespace Modulatte\Core\Database\Factories;

use Modulatte\Core\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProjectFactory extends Factory
{

    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->text(30),
            'content' => $this->faker->text(500),
            'published' => true,
        ];
    }

  
}
