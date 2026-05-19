<?php

namespace Modulatte\Core\Http\Controllers\Admin;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use A17\Twill\Http\Controllers\Admin\ModuleController;
use Maatwebsite\Excel\Facades\Excel as ExcelFacade;
use App\Exports\ContactEntriesExport;
use Maatwebsite\Excel\Excel;

class ContactEntryController extends ModuleController
{
    protected $moduleName = 'contactEntries';

    protected $titleColumnKey = 'full_name';

    protected function formData($request): array
    {
        return [
            'editor' => false,
            'translate' => false,
            'translateTitle' => false,
            'reorder' => false,
        ];
    }

    protected $defaultIndexOptions = [
        'create' => false,
        'edit' => true,
        'publish' => false,
        'bulkPublish' => false,
        'feature' => false,
        'bulkFeature' => false,
        'restore' => false,
        'bulkRestore' => false,
        'forceDelete' => true,
        'bulkForceDelete' => true,
        'delete' => true,
        'duplicate' => false,
        'bulkDelete' => true,
        'reorder' => false,
        'permalink' => false,
        'bulkEdit' => false,
        'editInModal' => false,
        'skipCreateModal' => false,
    ];

    protected $indexColumns = [

        // 'id' => [
        //     'title' => 'ID',
        //     'field' => 'id',
        //     'sort' => false
        // ],

        'full_name' => [
            'title' => 'Name',
            'field' => 'full_name',
            'sort' => false
        ],

        'email' => [
            'title' => 'Email',
            'field' => 'email',
            'sort' => false
        ],

        'subject' => [
            'title' => 'Form',
            'field' => 'subject',
            'sort' => false
        ],

        'created_at' => [
            'title' => 'Date',
            'field' => 'submitted_at',
            'sort' => false
        ],

    ];

    /**
     * @param int $id
     * @param int|null $submoduleId
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function edit($id, $submoduleId = null)
    {
        $params = $this->request->route()->parameters();

        $this->submodule = count($params) > 1;
        $this->submoduleParentId = $this->submodule
            ? $this->getParentModuleIdFromRequest($this->request) ?? $id
            : head($params);

        $id = last($params);

        if ($this->getIndexOption('editInModal')) {
            return $this->request->ajax()
                ? Response::json($this->modalFormData($id))
                : Redirect::to(moduleRoute($this->moduleName, $this->routePrefix, 'index'));
        }

        $this->setBackLink();

        $view = Collection::make([
            "$this->viewPrefix.form",
            "twill::$this->moduleName.form",
            "twill::layouts.form",
        ])->first(function ($view) {
            return View::exists($view);
        });
        return View::make($view, $this->form($id));
    }

    public function exportContactEntries()
    {
        $file = ExcelFacade::download(new ContactEntriesExport, 'contact-entries.csv', Excel::CSV);

        ob_end_clean();

        return $file;
    }
}
