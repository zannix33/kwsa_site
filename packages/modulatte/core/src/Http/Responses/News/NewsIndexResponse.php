<?php


namespace Modulatte\Core\Http\Responses\News;

use Illuminate\Contracts\Support\Responsable;

class NewsIndexResponse implements Responsable
{
    private $articles;
    private $archives;
    private $page;

    public function __construct($page, $articles, $archives)
    {
        $this->articles = $articles;
        $this->archives = $archives;
        $this->page = $page;
    }

    public function toResponse($request)
    {
        return view('front.news.index', [
            'page' => $this->page,
            'data' => json_decode($this->page->data, true),
            'items' => $this->articles,
            'archives' => $this->archives,
        ]);
    }
}
