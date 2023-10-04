@if (is_plugin_active('blog'))
    @php
        $posts = get_recent_posts($config['number_display']);
    @endphp
    <div class="related-post-area">
        <h3>{{ $config['name'] }}</h3>
        @foreach ($posts as $post)
            <div class="related-post-box">
                <div class="related-post-content">
                    <a href="{{ $post->url }}">
                        <img src="{{ RvMedia::getImageUrl($post->image, 'thumb', false, RvMedia::getDefaultImage()) }}" alt="{{ $post->name }}">
                    </a>
                    <h4><a href="{{ $post->url }}">{{ $post->name }}</a></h4>
                    <p><i class="flaticon-clock"></i>  {{ $post->created_at->translatedFormat('H:m d/m/Y') }}</p>
                </div>
            </div>
        @endforeach

    </div>
@endif
