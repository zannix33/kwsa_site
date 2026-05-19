<?php

namespace Modulatte\Core\Console\Commands\Developer;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeForm extends Command
{
    protected $signature = 'make:form {name}';

    protected $description = 'Create a new form to handle submissions';

    public function handle()
    {
        $name = Str::ucfirst($this->argument('name'));
        $modelName = "Forms/${name}Form";
        if (
            ! File::exists(app_path("Models/${modelName}"))
            && ! function_exists(ucwords("Create${name}FormsTable"))
            && ! function_exists(ucwords("${name}FormFactory"))
        ) {
            $this->callSilent('make:model', [
                'name' => $modelName,
                '--migration' => true,
                '--factory' => true,
            ]);
        }
    }
}
