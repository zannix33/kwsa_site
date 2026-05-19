<?php

namespace Modulatte\Core;

use Illuminate\Support\ServiceProvider;
use Modulatte\Core\Concepts\Forms\FormSettings;
use Modulatte\Core\Concepts\Globals\GlobalSettings;
use Modulatte\Core\Concepts\News\NewsSettings;
use Modulatte\Core\Concepts\Pages\PageSettings;
use Modulatte\Core\Concepts\Projects\ProjectSettings;

class ModulatteServiceProvider extends ServiceProvider
{
    protected $commands = [
        \Modulatte\Core\Console\Commands\Install::class,
        \Modulatte\Core\Console\Commands\Developer\MakePage::class,
        \Modulatte\Core\Console\Commands\Developer\MakeForm::class,
        \Modulatte\Core\Console\Commands\SEO\GenerateSiteMap::class,
    ];

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Migration Scripts
        $this->loadMigrationsFrom(
            __DIR__ . DIRECTORY_SEPARATOR .
            'database' . DIRECTORY_SEPARATOR .
            'migrations'
        );

        // register helper functions
        $this->helperFunctions();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // merge configuration files
        $this->mergeConfigFrom(
            __DIR__ . DIRECTORY_SEPARATOR . 'config' .
            DIRECTORY_SEPARATOR . 'mcore.php',
            'mcore'
        );


        // register commands
        $this->commands($this->commands);

        // PageSettings::pages([
        //     'Home',
        //     'Privacy',
        //     'Contact',
        //     'Terms',
        // ]);


        // ProjectSettings::hasProjects(config('modulatte.projects.enabled', false));

        // if (ProjectSettings::$hasProjects) {
        //     ProjectSettings::categories([
        //         'Category 1',
        //     ]);
        // }

        // NewsSettings::hasNews(config('modulatte.news.enabled', false));

        // if (NewsSettings::$hasNews) {
        //     NewsSettings::categories([
        //         'Category 1',
        //         'Category 2',
        //         'Category 3',
        //     ]);
        // }


        // FormSettings::hasForms(true);
        // if (FormSettings::$hasForms) {
        //     FormSettings::forms([
        //         'Contact',
        //     ]);
        // }

        // GlobalSettings::socials([
        //     'facebook',
        // ]);
    }

    /**
     *
     */
    protected function helperFunctions()
    {
        foreach (glob(
            __DIR__ . DIRECTORY_SEPARATOR . 'Helpers' .
            DIRECTORY_SEPARATOR . '*.php'
        ) as $filename) {
            require_once($filename);
        }
    }
}
