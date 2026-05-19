<?php

namespace Modulatte\Core\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PageController extends ModuleController
{
    protected $moduleName = 'pages';

    protected $permalinkBase = false;

    protected $indexOptions = [
        'reorder' => true,
    ];

    protected function formData($request): array
    {
        return [
            'editor' => false,
            'editableTitle' => ! app()->environment('production'),
            'sideFieldsetLabel' => 'SEO Options',
            'customTitle' => 'Editing Page',
        ];
    }

    public function restoreRevision($id)
    {
        if ($this->request->has('revisionId')) {
            $item = $this->repository->previewForRevision($id, $this->request->get('revisionId'));
            $item[$this->identifierColumnKey] = $id;
            $item->cmsRestoring = true;
        } else {
            throw new NotFoundHttpException();
        }

        $this->setBackLink();

        $view = Collection::make([
            "$this->viewPrefix.form",
            "twill::$this->moduleName.form",
            "twill::layouts.form",
        ])->first(function ($view) {
            return View::exists($view);
        });
        $revision = $item->revisions()->where('id', $this->request->get('revisionId'))->first();
        $date = $revision->created_at->toDayDateTimeString();
        Session::flash('restoreMessage', twillTrans('twill::lang.publisher.restore-message', ['user' => $revision->byUser, 'date' => $date]));
        $item = $this->repository->forSlug($item->slug);
        $item->cmsRestoring = true;

        return View::make($view, $this->form($id, $item));
    }

    protected function indexData($request)
    {
        return [
            'nested' => config('modulatte.pages.nested'),
            'nestedDepth' => config('modulatte.pages.nested'),
        ];
    }

    protected function transformIndexItems($items)
    {
        return $items->toTree();
    }

    protected function indexItemData($item)
    {
        return ($item->children ? [
            'children' => $this->getIndexTableData($item->children),
        ] : []);
    }

    protected function getBrowserItems($scopes = [])
    {
        return $this->repository->get(
            $this->indexWith,
            $scopes,
            $this->orderScope(),
            request('offset') ?? $this->perPage ?? 50,
            true
        );
    }    
}
