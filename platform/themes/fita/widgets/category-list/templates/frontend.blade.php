<div class="category-list">
    <h3>{{ $config['name'] }}</h3>
    <ul>
        @foreach(get_featured_categories($config['number_display']) as $category)
            <li><a href="{{$category->url}}">{{$category->name}} <i class="ri-arrow-drop-right-fill"></i></a></li>
        @endforeach

    </ul>
</div>
