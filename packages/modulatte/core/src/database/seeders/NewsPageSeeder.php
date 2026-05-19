<?php

namespace Modulatte\Core\Database\Seeders;

class NewsPageSeeder extends CreatorSeeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'title' => 'News',
            'data' => [],
        ];

        $this->createPage($data, true);
    }
}
