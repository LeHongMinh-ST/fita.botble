
<div class="category-list">
    <h3>{{ $config['name'] }}</h3>
    <ul>
        {!!
            Menu::generateMenu([
                'slug'    => $config['menu_id'],
                'options' => ['class' => ($config['menu_id'] == 'social' ? 'social social--simple social--widget' : 'list list--fadeIn') . ($sidebar == 'footer_sidebar' ? ' list--light' : '') ]
            ])
        !!}

    </ul>
</div>
