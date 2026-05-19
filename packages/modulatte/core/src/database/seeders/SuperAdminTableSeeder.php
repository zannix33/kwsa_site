<?php

namespace Modulatte\Core\Database\Seeders;

use A17\Twill\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SuperAdminTableSeeder extends Seeder
{
    public function run()
    {
        app()->environment('production')
            ? $this->prepareForProduction()
            : $this->prepareForLocal();
    }

    protected function prepareForProduction()
    {
        User::create([
            'name' => 'KWSA',
            'email' => 'admin@kingwizardsecurity.com',
            'password' => bcrypt('kwsa005'),
            'role' => 'SUPERADMIN',
            'published' => true,
        ]);
    }

    public function prepareForLocal()
    {
        User::create([
            'name' => 'KWSA',
            'email' => 'admin@kingwizardsecurity.com',
            'password' => bcrypt('kwsa005'),
            'role' => 'SUPERADMIN',
            'published' => true,
        ]);
    }
}
