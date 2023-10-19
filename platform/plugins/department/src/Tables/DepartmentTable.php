<?php

namespace Botble\Department\Tables;

use Botble\Department\Enums\DepartmentStatusEnum;
use Illuminate\Support\Facades\Auth;
use BaseHelper;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Department\Repositories\Interfaces\DepartmentInterface;
use Botble\Table\Abstracts\TableAbstract;
use Illuminate\Contracts\Routing\UrlGenerator;
use Yajra\DataTables\DataTables;
use Html;

class DepartmentTable extends TableAbstract
{

    /**
     * @var bool
     */
    protected $hasActions = true;

    /**
     * @var bool
     */
    protected $hasFilter = true;

    /**
     * DepartmentTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlGenerator
     * @param DepartmentInterface $departmentRepository
     */
    public function __construct(DataTables $table, UrlGenerator $urlGenerator, DepartmentInterface $departmentRepository)
    {
        parent::__construct($table, $urlGenerator);

        $this->repository = $departmentRepository;

        if (!Auth::user()->hasAnyPermission(['department.edit', 'department.destroy'])) {
            $this->hasOperations = false;
            $this->hasActions = false;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function ajax()
    {
        $data = $this->table
            ->eloquent($this->query())
            ->editColumn('name', function ($item) {
                if (!Auth::user()->hasPermission('department.edit')) {
                    return $item->name;
                }
                return Html::link(route('department.edit', $item->id), $item->name);
            })
            ->editColumn('code', function ($item) {
                return $item->code;
            })
            ->editColumn('checkbox', function ($item) {
                return $this->getCheckbox($item->id);
            })
            ->editColumn('created_at', function ($item) {
                return BaseHelper::formatDate($item->created_at);
            })
            ->editColumn('status', function ($item) {
                return $item->status->toHtml();
            })
            ->addColumn('operations', function ($item) {
                return $this->getOperations('department.edit', 'department.destroy', $item);
            });

        return $this->toJson($data);
    }

    /**
     * {@inheritDoc}
     */
    public function query()
    {
        $query = $this->repository->getModel()
            ->select([
               'id',
               'code',
               'name',
               'created_at',
               'status',
           ]);

        return $this->applyScopes($query);
    }

    /**
     * {@inheritDoc}
     */
    public function columns()
    {
        return [
            'id' => [
                'title' => trans('core/base::tables.id'),
                'width' => '20px',
            ],
            'name' => [
                'title' => trans('core/base::tables.name'),
                'class' => 'text-start',
            ],
            'code' => [
                'title' => trans('plugins/department::department.forms.code'),
                'width' => '100px',
            ],
            'created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'width' => '100px',
            ],
            'status' => [
                'title' => trans('core/base::tables.status'),
                'width' => '100px',
            ],
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function buttons()
    {
        return $this->addCreateButton(route('department.create'), 'department.create');
    }

    /**
     * {@inheritDoc}
     */
    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('department.deletes'), 'department.destroy', parent::bulkActions());
    }

    /**
     * {@inheritDoc}
     */
    public function getBulkChanges(): array
    {
        return [
            'code' => [
                'title'    => trans('plugins/department::department.forms.code'),
                'type'     => 'text',
                'validate' => 'required|max:10',
            ],
            'name' => [
                'title'    => trans('core/base::tables.name'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'status' => [
                'title'    => trans('core/base::tables.status'),
                'type'     => 'select',
                'choices'  => DepartmentStatusEnum::labels(),
                'validate' => 'required|in:' . implode(',', DepartmentStatusEnum::values()),
            ],
            'created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'type'  => 'date',
            ],
        ];
    }

    /**
     * @return array
     */
    public function getFilters(): array
    {
        return $this->getBulkChanges();
    }
}