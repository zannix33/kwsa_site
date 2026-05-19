<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Modulatte\Core\Database\Seeders;

use Modulatte\Core\Concepts\News\NewsSettings;
use Modulatte\Core\Models\News;
use Modulatte\Core\Models\NewsCategory;

/**
 * Description of NewsSeeder
 *
 * @author BrownPaperbag
 */
class NewsSeeder extends CreatorSeeder
{
    public function run()
    {
        NewsSettings::categories([
            'Category 1',
            'Category 2',
            'Category 3',
        ]);

        $categoryList = [];
        collect(NewsSettings::$categories)->each(function ($title) use (&$categoryList) {
            $categoryList[] = NewsCategory::factory()->create([
                    'title' => $title,
                ]);
        });

        $titles = ['Item 1', 'Item 2', 'Item 3'];
        foreach ($titles as $index => $titleItem) {
            $page = News::factory()->create(
                [
                    'title' => $titleItem,
                    'publish_start_date' => \Carbon\Carbon::now(),
                ]
            );
        }
    }
}
