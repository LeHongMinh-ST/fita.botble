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
        $rules = [
            'name'   => 'required',
            'status' => Rule::in(DepartmentStatusEnum::values()),
        ];
        if(!is_null($this->id)) {
            $rules['code'] = "required|unique:departments,code,{$this->id},id";
        }
        return $rules;
    }

    public function attributes()
    {
        return [
            'name' => trans('core/base::forms.name'),
        ];
    }
}
