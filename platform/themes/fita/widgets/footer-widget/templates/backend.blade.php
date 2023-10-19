<div class="form-group mb-3">
    <label for="widget-name">{{ trans('core/base::forms.name') }}</label>
    <input type="text" class="form-control" name="name" value="{{ $config['name'] }}">
</div>


<div class="form-group mb-3">
    <label for="widget-name">{{ trans('Menu Label 1') }}</label>
    <input type="text" class="form-control" name="footer_menu_label_1" value="{{ $config['footer_menu_label_1'] }}">
</div>

<div class="form-group">
    <label for="widget_menu">{{ __('Select menu 1') }}</label>
    {!! Form::customSelect('footer_menu_id_1', app(\Botble\Menu\Repositories\Interfaces\MenuInterface::class)->pluck('name', 'slug'), $config['footer_menu_id_1'], ['class' => 'form-control select-full']) !!}
</div>


<div class="form-group mb-3">
    <label for="widget-name">{{ trans('Menu Label 2') }}</label>
    <input type="text" class="form-control" name="footer_menu_label_2" value="{{ $config['footer_menu_label_2'] }}">
</div>

<div class="form-group">
    <label for="widget_menu">{{ __('Select menu 2') }}</label>
    {!! Form::customSelect('footer_menu_id_2', app(\Botble\Menu\Repositories\Interfaces\MenuInterface::class)->pluck('name', 'slug'), $config['footer_menu_id_2'], ['class' => 'form-control select-full']) !!}
</div>


<div class="form-group mb-3">
    <label for="widget-name">{{ trans('Menu Label 3') }}</label>
    <input type="text" class="form-control" name="footer_menu_label_3" value="{{ $config['footer_menu_label_3'] }}">
</div>

<div class="form-group">
    <label for="widget_menu">{{ __('Select menu 3') }}</label>
    {!! Form::customSelect('footer_menu_id_3', app(\Botble\Menu\Repositories\Interfaces\MenuInterface::class)->pluck('name', 'slug'), $config['footer_menu_id_3'], ['class' => 'form-control select-full']) !!}
</div>
