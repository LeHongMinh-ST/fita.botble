<div class="form-group mb-3">
    <label for="widget-name">{{ trans('core/base::forms.name') }}</label>
    <input type="text" class="form-control" name="name" value="{{ $config['name'] }}">
</div>

<div class="form-group mb-3">
    <label for="widget-name">{{ __('Placeholder') }}</label>
    <input type="text" class="form-control" name="placeholder" value="{{ $config['placeholder'] }}">
</div>
