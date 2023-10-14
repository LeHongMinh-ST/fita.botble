<?php

namespace Botble\Department\Forms;

use Botble\Base\Forms\FormAbstract;
use Botble\Department\Enums\DepartmentStatusEnum;
use Botble\Department\Http\Requests\DepartmentRequest;
use Botble\Department\Models\Department;

class DepartmentForm extends FormAbstract
{

    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
        $this
            ->setupModel(new Department)
            ->setValidatorClass(DepartmentRequest::class)
            ->withCustomFields()
            ->add('code', 'text', [
                'label'      => trans('plugins/department::department.forms.code'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('plugins/department::department.forms.name_placeholder'),
                    'data-counter' => 10,
                ],
            ])
            ->add('name', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
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
    }
}
