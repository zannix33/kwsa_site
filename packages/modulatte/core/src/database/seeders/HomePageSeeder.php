<?php

namespace Modulatte\Core\Database\Seeders;

class HomePageSeeder extends CreatorSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'title' => 'Home',
            'data' => [
                'lead_copy' => 'Hello World',
            ],
        ];

        $this->createPage($data);
    }
}
