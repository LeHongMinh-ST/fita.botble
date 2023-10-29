@for ($i = 1; $i < 4; $i++)
    <div class="form-group">
        <label class="control-label">{{ __('Link video :number', ['number' => $i]) }}</label>
        <input type="text" name="link{{ $i }}" value="{{ Arr::get($attributes, 'link' . $i) }}" class="form-control" placeholder="{{ __('Link video :number', ['number' => $i]) }}">
    </div>
@endfor
