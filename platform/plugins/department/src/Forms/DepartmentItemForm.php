<?php

namespace Botble\Department\Forms;

use Botble\Base\Forms\FormAbstract;
use Botble\Department\Http\Requests\DepartmentItemRequest;
use Botble\Department\Models\DepartmentItem;

class DepartmentItemForm extends FormAbstract
{

    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
        $this
            ->setFormOption('template', 'core/base::forms.form-modal')
            ->setupModel(new DepartmentItem)
            ->setValidatorClass(DepartmentItemRequest::class)
            ->withCustomFields()
            ->add('department_id', 'hidden', [
                'value' => request()->input('department_id'),
            ])
            ->add('title', 'text', [
                'label'      => trans('core/base::forms.title'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'data-counter' => 120,
                ],
            ])
            ->add('link', 'text', [
                'label'      => trans('core/base::forms.link'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => 'http://',
                    'data-counter' => 120,
                ],
            ])
            ->add('order', 'number', [
                'label'         => trans('core/base::forms.order'),
                'label_attr'    => ['class' => 'control-label'],
                'attr'          => [
                    'placeholder' => trans('core/base::forms.order_by_placeholder'),
                ],
                'default_value' => 0,
            ])
            ->add('icon', 'text', [
                'label'      => trans('plugins/department::department.forms.icon'),
                'label_attr' => [
                    'class' => 'control-label'],
                'attr' => [
                    'placeholder'  => trans('plugins/department::department.forms.icon_placeholder'),
                ]
            ])
            ->add('close', 'button', [
                'label' => trans('core/base::forms.cancel'),
                'attr'  => [
                    'class'               => 'btn btn-warning',
                    'data-fancybox-close' => true,
                ],
            ])
            ->add('submit', 'submit', [
                'label' => trans('core/base::forms.save'),
                'attr'  => [
                    'class' => 'btn btn-info float-end',
                ],
            ]);
    }
}
