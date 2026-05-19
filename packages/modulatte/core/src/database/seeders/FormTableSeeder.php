<?php

namespace Modulatte\Core\Database\Seeders;

use Modulatte\Core\Concepts\Forms\FormSettings;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class FormTableSeeder extends Seeder
{
    public function run()
    {
        if (FormSettings::$hasForms) {
            collect(FormSettings::$forms)
                ->each(function ($item) {
                    Artisan::call('make:form', ['name' => $item]);
                });
        }
    }
}
