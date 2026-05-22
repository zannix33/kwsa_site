<?php

namespace Modulatte\Core\Transformers;

use A17\Twill\Models\Block;

class JoinReasonTransformer extends BaseTransformer
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
            'title' => @$model->content['title'],
            'lead' => @$model->content['lead'],
            'content' => @$model->content['content'],
        ];
    }
}
