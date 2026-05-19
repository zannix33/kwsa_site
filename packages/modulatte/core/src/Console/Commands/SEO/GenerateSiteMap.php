<?php

namespace Modulatte\Core\Console\Commands\SEO;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSiteMap extends Command
{
    protected $signature = 'seo:sitemap';

    protected $description = 'Generates and Publishes a Site Map';

    public function handle()
    {
        SitemapGenerator::create(config('app.url'))
            ->writeToFile(public_path('sitemap.xml'));
    }
}
