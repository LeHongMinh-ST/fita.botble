<?php

namespace Botble\Department\Http\Requests;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Department\Enums\DepartmentStatusEnum;
use Botble\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class DepartmentRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'   => 'required',
            'code'   => 'required|unique:departments,code',
            'status' => Rule::in(DepartmentStatusEnum::values()),
        ];
    }

    public function attributes()
    {
        return [
            'code' => trans('plugins/department::department.forms.code'),
            'name' => trans('core/base::forms.name'),
        ];
    }
}
