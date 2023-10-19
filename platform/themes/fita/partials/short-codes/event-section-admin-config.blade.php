<div class="form-group">
    <label class="control-label">{{ __('Category') }}</label>
    {!! Form::customSelect('category_id', $categories, Arr::get($attributes, 'category_id')) !!}
</div>
