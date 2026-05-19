<?php


namespace Modulatte\Core\Http\Responses;

use Modulatte\Core\Models\Page;
use Illuminate\Contracts\Support\Responsable;

class PageResponse implements Responsable
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
        ]);
    }
}
