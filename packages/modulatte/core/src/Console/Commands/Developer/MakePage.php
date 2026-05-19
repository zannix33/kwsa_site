<?php

namespace Modulatte\Core\Console\Commands\Developer;

use Modulatte\Core\Models\Page;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MakePage extends Command
{
    protected $signature = 'make:page {name}';

    protected $description = 'Create a new page';

    public function handle()
    {
        $item = $this->argument('name');
        $formNames = Str::kebab($item);
        Page::factory()->create([
            'title' => Str::ucfirst($item),
            'form' => Str::lower("admin.pages._${formNames}"),
            'view' => Str::lower("front.pages.${formNames}"),
        ]);

        copyFormAndViewStubs(Str::lower($formNames));
    }
}
