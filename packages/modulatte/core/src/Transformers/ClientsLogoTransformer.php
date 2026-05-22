<?php

namespace Modulatte\Core\Transformers;

use A17\Twill\Models\Block;

class ClientsLogoTransformer extends BaseTransformer
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
            'title' => @$model->content['logo_title'],
            'image' => @$model->hasImage('image', 'desktop') ? $model->image('image', 'desktop') : '',
        ];
    }
}
