<?php

namespace Modulatte\Core\Http\Controllers\Front\News;

use App\Http\Controllers\Controller;
use Modulatte\Core\Http\Responses\News\NewsIndexResponse;
use Modulatte\Core\Repositories\NewsRepository;
use Modulatte\Core\Repositories\PageRepository;

class NewsArchiveController extends Controller
{
    public function __invoke(
        PageRepository $pageRepository,
        NewsRepository $repository,
        string $slug
    ): NewsIndexResponse {
        abort_unless($page = $pageRepository->forSlug('clinic-news'), 404);

        if (seoEnabled()) {
            buildSEOForItem($page);
        }

        $archives = $repository->getArchive();

        return new NewsIndexResponse($page, $repository->getArchiveNewss($slug), $archives);
    }
}
