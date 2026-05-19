<?php
namespace Modulatte\Core\Database\Seeders;

use Modulatte\Core\Concepts\Projects\ProjectSettings;
use Modulatte\Core\Models\Project;
use Illuminate\Database\Seeder;
use Modulatte\Core\Models\ProjectCategory;

class ProjectSeeder extends Seeder
{
   public function run()
   {
      
        if (ProjectSettings::$hasProjects) {
            
            Project::factory(3)->create();
            // collect(ProjectSettings::$categories)
            //     ->each(function ($title) {
            //         ProjectCategory::factory()->create([
            //             'title' => $title,
            //         ]);
            //     });
        }
    }
}
