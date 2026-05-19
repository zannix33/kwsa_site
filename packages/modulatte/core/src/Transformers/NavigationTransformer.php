<?php

namespace Modulatte\Core\Transformers;

use Modulatte\Core\Models\Page;
use Modulatte\Core\Transformers\BaseTransformer;

class NavigationTransformer extends BaseTransformer
{

    /**
     * Default transform
     *
     * @param \App\Models\Page $model
     * @return array
     */
    public function transform($model)
    {
        return $model->toArray();
    }

    /**
     * As Homepage display
     *
     * @param App\Models\Member $model
     * @return array
     */
    public function display(Page $model)
    {
        $pages = [
            'title' => $model->title,
            'url' => route('front.page.show', $model->slug)
        ];

        return $pages;
    }
}
