@php Theme::set('section-name', $gallery->name) @endphp
<div class="page-banner-area bg-1">
    <div class="container">
        <div class="page-banner-content">
            <h1>{{ $gallery->name }}</h1>
            <ul>
                <li><a href="{{ route('public.single') }}">{{ __('Home') }}</a></li>
                <li>{{ $gallery->name }}</li>
            </ul>
        </div>
    </div>
</div>
<div class="main-content pt-100 pb-70">
    <div class="container">
        <article class="post post--single">
            <div class="post__content">
                <p>
                    {{ $gallery->description }}
                </p>
                <div id="list-photo">
                    @foreach (gallery_meta_data($gallery) as $image)
                        @if ($image)
                            <div class="item" data-src="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}" data-sub-html="{{ BaseHelper::clean(Arr::get($image, 'description')) }}">
                                <div class="photo-item">
                                    <div class="thumb">
                                        <a href="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}">
                                            <img src="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}" alt="{{ BaseHelper::clean(Arr::get($image, 'description')) }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <br>
{{--                {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, theme_option('facebook_comment_enabled_in_gallery', 'yes') == 'yes' ? Theme::partial('comments') : null) !!}--}}
            </div>
        </article>
    </div>
</div>

