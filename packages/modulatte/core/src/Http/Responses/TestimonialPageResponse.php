<?php


namespace Modulatte\Core\Http\Responses;

use Modulatte\Core\Models\Page;
use Modulatte\Core\Transformers\TestimonialTransformer;
use Illuminate\Contracts\Support\Responsable;

class TestimonialPageResponse implements Responsable
{
    private Page $item;

    public function __construct(Page $item)
    {
        $this->item = $item;
    }

    public function toResponse($request)
    {
        return view($this->item->view, [
            'item' => $this->item,
            'data' => json_decode($this->item->data, true),
            'testimonials' => $this->item->blocks ? (new TestimonialTransformer())->transformCollection(getBlocksByType($this->item, 'testimonial'), 'display') : [],
        ]);
    }
}
