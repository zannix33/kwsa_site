<?php

namespace Modulatte\Core\Transformers;

use A17\Twill\Models\Block;

class FeatureTransformer extends BaseTransformer
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
            'title' => @$model->content['feature_title'],
            'content' => @$model->content['feature_content'],
            'icon' => @$model->hasImage('image', 'desktop') ? $model->image('image', 'desktop') : '',
        ];
    }
}
