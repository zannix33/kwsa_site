<?php

namespace Modulatte\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Modulatte\Core\Concepts\Pages\PageSettings;

class PageTableSeeder extends Seeder
{
    public function run()
    {
        // collect(PageSettings::$pages)
        //     ->each(function ($item) {
        //         Artisan::call('make:page', ['name' => $item]);
        //     });
    }
}
