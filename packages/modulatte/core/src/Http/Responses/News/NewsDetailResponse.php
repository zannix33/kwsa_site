<?php


namespace Modulatte\Core\Http\Responses\News;

use Illuminate\Contracts\Support\Responsable;
use Modulatte\Core\Models\News;

class NewsDetailResponse implements Responsable
{
    private News $item;

    public function __construct(News $article)
    {
        $this->item = $article;
    }

    public function toResponse($request)
    {
        return view('front.news.show', [
            'item' => $this->item,
        ]);
    }
}
