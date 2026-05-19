<?php

namespace Modulatte\Core\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Modulatte\Core\Repositories\NewsRepository;
use Modulatte\Core\Repositories\PageRepository;

class SiteMapController extends Controller
{
    protected $newsRepo;
    protected $repository;

    /**
     *
     */
    public function __construct(
        NewsRepository $newsRepo,
        PageRepository $repository
    ) {
        $this->newsRepo = $newsRepo;
        $this->repository = $repository;
    }

    public function __invoke()
    {
        $maps = [];
        //Pages
        $pages = $this->repository->get();
        $pageMaps = $this->mapModels($pages);

        //News
        $news = $this->newsRepo->get();
        $newsMaps = $this->mapModels($news, 'front.news.detail');

        $maps = array_merge($pageMaps, $newsMaps);

        return response()->view('sitemaps.page-xml', compact('maps'))
            ->header('Content-Type', 'application/xml');
    }

    /**
     * 
     * @param Illuminate\Support\Collection $pages
     * 
     * @return array
     */
    private function mapModels($pages, $routeName = '') 
    {
        $maps = [];
        if ($pages->count()) {
            foreach ($pages as $page) {
                
                if ($page->slug == 'page-not-found' || $page->slug == 'error') {
                    continue;    
                }
                $url = $routeName != '' ? route($routeName, $page->slug) : url($page->slug);
                $maps[] = (object) [
                    'loc' => $url,
                    'lastmod' => $page->updated_at->format('Y-m-d')
                ];
            }
        }

        return $maps;
    }
}