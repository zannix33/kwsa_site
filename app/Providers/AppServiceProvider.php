<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {

        $this->projectHelpers();

    }

    /**
     * @return void
     */
    private function projectHelpers()
    {
        foreach (glob(
            app_path() . DIRECTORY_SEPARATOR . 'Helpers' .
                DIRECTORY_SEPARATOR . '*.php'
        ) as $filename) {
            require_once($filename);
        }
    }
}
