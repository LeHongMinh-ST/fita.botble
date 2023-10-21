<div class="form-group">
    <label class="control-label">{{ __('Image section') }}</label>
    {!! Form::mediaImage('image_about', Arr::get($attributes, 'image_about')) !!}
</div>

<div class="form-group">
    <label class="control-label">{{ __('Link') }}</label>
    <input name="link" class="form-control" placeholder="{{ __('Link') }}" value="{{ Arr::get($attributes, 'link') }}"></input >
</div>
