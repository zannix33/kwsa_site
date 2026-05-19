<?php

namespace Modulatte\Core\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class NewsCategoryController extends ModuleController
{
    protected $moduleName = 'newsCategories';

    protected $permalinkBase = 'news/category';

    protected $defaultIndexOptions = [
        'create' => true,
        'edit' => true,
        'publish' => true,
        'bulkPublish' => true,
        'feature' => false,
        'bulkFeature' => false,
        'restore' => true,
        'bulkRestore' => true,
        'forceDelete' => true,
        'bulkForceDelete' => true,
        'delete' => true,
        'duplicate' => false,
        'bulkDelete' => true,
        'reorder' => false,
        'permalink' => true,
        'bulkEdit' => true,
        'editInModal' => true,
        'skipCreateModal' => false,
    ];
}
