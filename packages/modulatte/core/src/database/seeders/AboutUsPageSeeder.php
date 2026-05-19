<?php

namespace Modulatte\Core\Database\Seeders;

class AboutUsPageSeeder extends CreatorSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'title' => 'About Us',
            'data' => [
                'lead_copy' => 'Hello World',
            ],
        ];

        $this->createPage($data);
    }
}
