<?php

namespace Botble\Department\Http\Requests;

use Botble\Support\Http\Requests\Request;

class DepartmentItemRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'department_id' => 'required',
            'title'         => 'max:255|required',
            'order'         => 'required|integer|min:0|max:1000',
            'link'          => 'required',
        ];
    }
}
