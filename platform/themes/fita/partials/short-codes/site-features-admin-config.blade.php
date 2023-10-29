<div class="form-group">
    <label class="control-label">{{ __('Title header') }}</label>
    <input type="text" name="title_header" value="{{ Arr::get($attributes, 'title_header') }}" class="form-control" placeholder="{{ __('Title header') }}">
</div>
<div class="form-group">
    <label class="control-label">{{ __('Description header') }}</label>
    <textarea name="description_header" class="form-control" placeholder="{{ __('Description header') }}" rows="4">{{ Arr::get($attributes, 'description_header') }}</textarea >
</div>

@for ($i = 1; $i < 4; $i++)
    <div class="form-group">
        <label class="control-label">{{ __('Image :number', ['number' => $i]) }}</label>
        {!! Form::mediaImage('image' . $i, Arr::get($attributes, 'image' . $i)) !!}
    </div>

    <div class="form-group">
        <label class="control-label">{{ __('Title :number', ['number' => $i]) }}</label>
        <input type="text" name="title{{ $i }}" value="{{ Arr::get($attributes, 'title' . $i) }}" class="form-control" placeholder="{{ __('Title :number', ['number' => $i]) }}">
    </div>

    <div class="form-group">
        <label class="control-label">{{ __('Description :number', ['number' => $i]) }}</label>
        <textarea name="description{{ $i }}"  class="form-control"
                  placeholder="{{ __('Description :number', ['number' => $i]) }}" rows="4">{{ Arr::get($attributes, 'description' . $i) }}</textarea>
    </div>

    <div class="form-group">
        <label class="control-label">{{ __('Link :number', ['number' => $i]) }}</label>
        <input type="text" name="link{{ $i }}" value="{{ Arr::get($attributes, 'link' . $i) }}" class="form-control" placeholder="{{ __('Link :number', ['number' => $i]) }}">
    </div>
@endfor
