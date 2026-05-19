<?php

namespace App\Transformers;

use A17\Twill\Models\Block;
use App\Transformers\BaseTransformer;

class TestimonialTransformer extends BaseTransformer
{

    /**
     * Default transform
     *
     * @param A17\Twill\Models\Block; $model
     * @return array
     */
    public function transform(Block $model)
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
            'text' => $model->title
        ];
    }
}
