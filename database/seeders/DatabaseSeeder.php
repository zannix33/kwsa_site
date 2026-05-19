<?php

namespace Database\Seeders;

use Google\Service\Drive\About;
use Illuminate\Database\Seeder;
//use Modulatte\Core\Database\Seeders\ContactPageSeeder;
use Modulatte\Core\Database\Seeders\HomePageSeeder;
//use Modulatte\Core\Database\Seeders\NewsPageSeeder;
//use Modulatte\Core\Database\Seeders\NewsSeeder;
use Modulatte\Core\Database\Seeders\PageTableSeeder;
//use Modulatte\Core\Database\Seeders\PrivacyPageSeeder;
//use Modulatte\Core\Database\Seeders\ProjectSeeder;
use Modulatte\Core\Database\Seeders\SuperAdminTableSeeder;
//use Modulatte\Core\Database\Seeders\TermsPageSeeder;
use Modulatte\Core\Database\Seeders\AboutUsPageSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            SuperAdminTableSeeder::class,
            PageTableSeeder::class,
            //PrivacyPageSeeder::class,
            //ContactPageSeeder::class,
            //TermsPageSeeder::class,
            //ProjectSeeder::class,
            //NewsSeeder::class,
            HomePageSeeder::class,
            AboutUsPageSeeder::class,
            //NewsPageSeeder::class,
            // FormTableSeeder::class,
        ]);
    }
}
