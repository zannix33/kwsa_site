<?php

namespace Modulatte\Core\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;
use Modulatte\Core\Repositories\NewsCategoryRepository;

class NewsController extends ModuleController
{
    protected $moduleName = 'news';

    protected $indexOptions = [
    ];

    protected function formData($request)
    {
        return [
            'categories' => app()->make(NewsCategoryRepository::class)->listAll(),
        ];
    }
}
