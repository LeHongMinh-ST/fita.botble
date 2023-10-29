<?php

namespace Botble\Department\Forms;

use Botble\Base\Forms\FormAbstract;
use Botble\Department\Enums\DepartmentStatusEnum;
use Botble\Department\Http\Requests\DepartmentRequest;
use Botble\Department\Models\Department;
use Botble\Department\Models\DepartmentItem;
use Botble\Department\Tables\DepartmentItemTable;
use Botble\Table\TableBuilder;

class DepartmentForm extends FormAbstract
{
    /**
     * @var TableBuilder
     */
    protected $tableBuilder;

    /**
     * SimpleSliderForm constructor.
     * @param TableBuilder $tableBuilder
     */
    public function __construct(TableBuilder $tableBuilder)
    {
        parent::__construct();
        $this->tableBuilder = $tableBuilder;
    }
    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
        $this
            ->setupModel(new Department)
            ->setValidatorClass(DepartmentRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('icon', 'text', [
                'label'      => trans('plugins/department::department.forms.icon'),
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'placeholder'  => trans('plugins/department::department.forms.icon_placeholder'),
                    'data-counter' => 50,
                ],
            ])
            ->add('status', 'customSelect', [
                'label'      => trans('core/base::tables.status'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'class' => 'form-control select-full',
                ],
                'choices'    => DepartmentStatusEnum::labels(),
            ])
            ->setBreakFieldPoint('status');

        if ($this->model->id) {
            $this->addMetaBoxes([
                'department-items' => [
                    'title'   => trans('plugins/department::department.department_item.name'),
                    'content' => $this->tableBuilder->create(DepartmentItemTable::class)
                        ->setAjaxUrl(route('department-item.index',
                            $this->getModel()->id ?: 0))
                        ->renderTable(),
                ],
            ]);
        }
    }
}
