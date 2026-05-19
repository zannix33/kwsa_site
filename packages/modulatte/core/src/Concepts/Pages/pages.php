<?php

use Modulatte\Core\Constants\FileLocations;
use Illuminate\Support\Facades\File;

if (! function_exists('createFormAndViewFields')) {
    function createFormAndViewFields($table)
    {
        $table->string('form')->nullable();
        $table->string('view')->default('front.pages.default');
    }
}

if (! function_exists('copyFormAndViewStubs')) {
    function copyFormAndViewStubs($name)
    {
        $formPath = resource_path(
            FileLocations::PAGES_ADMIN_FORM_VIEW . "_${name}.blade.php"
        );
        $viewPath = resource_path(
            FileLocations::PAGES_FRONTEND_VIEW . "${name}.blade.php"
        );

        if (! File::exists($formPath)) {
            File::copy(
                resource_path(FileLocations::ADMIN_FORM_STUB),
                $formPath
            );
            file_put_contents($formPath, str_replace('__REPLACE__', "Edit Form Fields For ${name} here", file_get_contents($formPath)));
        }
        if (! File::exists($viewPath)) {
            File::copy(
                resource_path(FileLocations::FRONTEND_VIEW_STUB),
                $viewPath
            );
            file_put_contents($viewPath, str_replace('__REPLACE__', "this is a view for ${name} page", file_get_contents($viewPath)));
        }
    }
}
