<div class="page-banner-area bg-1">
    <div class="container">
        <div class="page-banner-content">
            <h1>{{ __('Galleries') }}</h1>
            <ul>
                <li><a href="{{ route('public.single') }}">{{ __('Home') }}</a></li>
                <li>{{ __('Galleries') }}</li>
            </ul>
        </div>
    </div>
</div>
<div class="main-content pt-100 pb-70">
    <div class="container">
        <article class="post post--single">
            <div class="post__content row">
                @if (isset($galleries) && !$galleries->isEmpty())
                    <div class="gallery-wrap">
                        @foreach ($galleries as $gallery)
                            <div class="gallery-item col-12 col-md-4 col-sm-6">
                                <div class="img-wrap">
                                    <a href="{{ $gallery->url }}"><img src="{{ RvMedia::getImageUrl($gallery->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="{{ $gallery->name }}"></a>
                                </div>
                                <div class="gallery-detail">
                                    <div class="gallery-title"><a href="{{ $gallery->url }}">{{ $gallery->name }}</a></div>
                                    <div class="gallery-author">{{ __('By') }} {{ $gallery->user->name }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </article>
    </div>
</div>

