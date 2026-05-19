<?php

namespace Modulatte\Core\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use Modulatte\Core\Models\NewsCategory;

class NewsCategoryRepository extends ModuleRepository
{
    use HandleSlugs;
    use HandleMedias;

    public function __construct(NewsCategory $model)
    {
        $this->model = $model;
    }
}
