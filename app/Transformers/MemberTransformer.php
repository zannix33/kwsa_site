<?php

namespace App\Transformers;

use A17\Twill\Models\Block;
use App\Transformers\BaseTransformer;

class MemberTransformer extends BaseTransformer
{

    /**
     * Default transform
     *
     * @param \Modulatte\Strategi\Models\Member $model
     * @return array
     */
    public function transform($model)
    {
        return $model->toArray();
    }

    /**
     * As Homepage display
     *
     * @param A17\Twill\Models\Block $model
     * @return array
     */
    public function display(Block $model)
    {
        return [
            'name' => @$model->content['title'],
            'title' => @$model->content['job_title'],
            'content' => @$model->content['description'],
            'image' => $model->hasImage('image', 'desktop') ? $model->image('image', 'desktop') : '',
        ];
    }
}
