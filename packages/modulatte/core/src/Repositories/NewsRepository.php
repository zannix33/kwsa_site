<?php

namespace Modulatte\Core\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleTags;
use A17\Twill\Repositories\ModuleRepository;
use Modulatte\Core\Models\News;

class NewsRepository extends ModuleRepository
{
    use HandleBlocks;
    use HandleSlugs;
    use HandleMedias;
    use HandleFiles;
    use HandleRevisions;
    use HandleTags;

    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function afterSave($object, $fields)
    {
        $object->categories()->sync($fields['categories'] ?? []);

        parent::afterSave($object, $fields);
    }

    /**
     *
     */
    public function getArchive()
    {
        $archives = $this->model->where('published', 1)
            ->orderBy('publish_start_date', 'DESC')
            ->get()->groupBy(function ($model) {
                return \Carbon\Carbon::parse($model->publish_start_date)->format('F Y');
            });

        if ($archives->count()) {
            $data = [];
            foreach ($archives as $key => $values) {
                $module = $values->first();
                if ($module->publish_start_date) {
                    $dateUrl = $module->publish_start_date->startOfMonth()->format('m-Y');
                    $data[] = (object) [
                        'label' => $key,
                        'url' => url('/news/archive/' . $dateUrl),
                    ];
                }
            }

            return collect($data);
        }

        return collect([]);
    }

    /**
     *
     */
    public function getArchiveArticles($slug)
    {
        $date = explode("-", $slug);
        $archives = $this->model
            ->where('published', 1)
            ->whereYear('publish_start_date', '=', $date[1])
            ->whereMonth('publish_start_date', '=', $date[0])
            ->orderBy('publish_start_date', 'DESC')
            ->get();

        if ($archives->count()) {
            return collect($archives);
        }

        return collect([]);
    }
}
