<?php


namespace Modulatte\Core\Http\Responses;

use Modulatte\Core\Models\Page;
use Modulatte\Core\Transformers\MemberTransformer;
use Illuminate\Contracts\Support\Responsable;

class OurPeoplePageResponse implements Responsable
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
            'people' => $this->item->blocks ? (new MemberTransformer())->transformCollection(getBlocksByType($this->item, 'member_block'), 'display') : [],
        ]);
    }
}
