<?php

namespace Botble\Blog\Http\Requests;

use Botble\Blog\Supports\PostFormat;
use Botble\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;
use Botble\Blog\Enums\PostBaseStatusEnum;

class PostRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name'        => 'required|max:255',
            'description' => 'max:400',
            'categories'  => 'required',
            'status'      => Rule::in(PostBaseStatusEnum::values()),
            'status' => auth()->user()->hasPermission('Confirm') ? ['nullable', 'in:' . implode(',', PostBaseStatusEnum::toArray())] : [ 'in:' . PostBaseStatusEnum::INACTIVE],
            
        ];

        $postFormats = PostFormat::getPostFormats(true);

        if (count($postFormats) > 1) {
            $rules['format_type'] = Rule::in(array_keys($postFormats));
        }

        return $rules;
    }
}
