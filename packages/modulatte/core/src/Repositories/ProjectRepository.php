<?php

namespace Modulatte\Core\Repositories;

use Modulatte\Core\Models\Project;
use A17\Twill\Repositories\ModuleRepository;

class ProjectRepository extends ModuleRepository
{

    public function __construct(Project $model)
    {
        $this->model = $model;
    }
}
