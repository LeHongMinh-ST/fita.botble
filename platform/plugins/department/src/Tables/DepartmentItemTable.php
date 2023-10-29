<?php

namespace Botble\Department\Tables;

use BaseHelper;
use Botble\Department\Repositories\Interfaces\DepartmentItemInterface;
use Botble\Table\Abstracts\TableAbstract;
use Html;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class DepartmentItemTable extends TableAbstract
{
    /**
     * @var string
     */
    protected $type = self::TABLE_TYPE_SIMPLE;

    /**
     * @var string
     */
    protected $view = 'plugins/department::items';

    /**
     * @var DepartmentItemInterface
     */
    protected $repository;

    /**
     * SimpleSliderItemTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlGenerator
     * @param DepartmentItemInterface $departmentItemRepository
     */
    public function __construct(
        DataTables $table,
        UrlGenerator $urlGenerator,
        DepartmentItemInterface $departmentItemRepository
    ) {
        parent::__construct($table, $urlGenerator);
        $this->setOption('id', 'department-items-table');

        $this->repository = $departmentItemRepository;

        if (!Auth::user()->hasAnyPermission(['department-item.edit', 'department-item.destroy'])) {
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
            ->editColumn('title', function ($item) {
                if (!Auth::user()->hasPermission('department-item.edit')) {
                    return $item->title;
                }

                return Html::link('#', $item->title, [
                    'data-fancybox' => true,
                    'data-type'     => 'ajax',
                    'data-src'      => route('department-item.edit', $item->id),
                ]);
            })
            ->editColumn('icon', function ($item) {
                return $item->icon;
            })
            ->editColumn('checkbox', function ($item) {
                return $this->getCheckbox($item->id);
            })
            ->editColumn('created_at', function ($item) {
                return BaseHelper::formatDate($item->created_at);
            })
            ->addColumn('operations', function ($item) {
                return view('plugins/department::partials.actions', compact('item'))->render();
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
                'title',
                'icon',
                'order',
                'created_at',
            ])
            ->orderBy('order')
            ->where('department_id', request()->route()->parameter('id'));

        return $this->applyScopes($query);
    }

    /**
     * {@inheritDoc}
     */
    public function columns()
    {
        return [
                'id'         => [
                    'title' => trans('core/base::tables.id'),
                    'width' => '20px',
                ],

                'title'      => [
                    'title' => trans('core/base::tables.title'),
                    'class' => 'text-start',
                ],
                'icon'      => [
                    'title' => trans('plugins/department::department.forms.icon'),
                    'class' => 'text-center',
                ],
                'order'      => [
                    'title' => trans('core/base::tables.order'),
                    'class' => 'text-start order-column',
                ],
                'created_at' => [
                    'title' => trans('core/base::tables.created_at'),
                    'width' => '100px',
                ],
            ] + $this->getOperationsHeading();
    }

    /**
     * {@inheritDoc}
     */
    public function getOperationsHeading()
    {
        return array_merge(parent::getOperationsHeading(), ['operations' => ['width' => '170px']]);
    }
}
