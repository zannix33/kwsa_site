<?php

namespace Modulatte\Core\Http\Controllers\Front\News;

use App\Http\Controllers\Controller;
use Modulatte\Core\Http\Responses\News\NewsDetailResponse;
use Modulatte\Core\Repositories\NewsRepository;

class NewsDetailController extends Controller
{
    public function __invoke(NewsRepository $repository, string $slug): NewsDetailResponse
    {
        abort_unless($item = $repository->forSlug($slug), 404);

        if (seoEnabled()) {
            buildSEOForItem($item);
        }

        return new NewsDetailResponse($item);
    }
}
