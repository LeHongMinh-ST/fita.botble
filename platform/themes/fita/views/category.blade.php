<div class="page-banner-area bg-1">
    <div class="container">
        <div class="page-banner-content">
            <h1>{{ $category->name }}</h1>
            <ul>
                <li><a href="{{ route('public.single') }}">{{ __('Home') }}</a></li>
                <li>{{ $category->name }}</li>
            </ul>
        </div>
    </div>
</div>
<div class="latest-news-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="latest-news-left-content pr-20">
                    @if(count($posts) > 0)
                        @php $post = $posts->first(); @endphp
                        <div class="latest-news-simple-card" style="background-image: url({{ RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage()) }})">
                            <div class="news-content">
                                <div class="list">
                                    <ul>
                                        <li><i class="flaticon-user"></i>By <a
                                                href="#">{{ $post->author->getFullName() }}</a>
                                        </li>
                                        <li><i class="flaticon-clock"></i>
                                            {{ $post->created_at->translatedFormat('H:m d/m/Y') }}
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{ $post->url }}"><h3>{{ $post->name }}</h3></a>
                                <a href="{{ $post->url }}" class="read-more-btn">{{__('Read More')}}<i
                                        class="flaticon-next"></i></a>
                            </div>
                        </div>
                        <div class="latest-news-card-area">
                            <h3>{{ __('Latest News') }}</h3>
                            <div class="row">
                                @foreach ($posts as $post)
                                    @continue($loop->first)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-news-card">
                                            <div class="news-img">
                                                <a href="{{ $post->url }}"><img
                                                        src="{{ RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage()) }}"
                                                        class="lazyload"
                                                        data-src="{{ RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage()) }}"
                                                        alt="{{ $post->name }}"></a>
                                            </div>
                                            <div class="news-content">
                                                <div class="list">
                                                    <ul>
                                                        <li><i class="flaticon-user"></i>By <a
                                                                href="#">{{ $post->author->getFullName() }}</a>
                                                        </li>
                                                        <li><i class="flaticon-clock"></i>
                                                            {{ $post->created_at->translatedFormat('H:m d/m/Y') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="{{ $post->url }}"><h3>{{ $post->name }}</h3></a>
                                                <a href="{{ $post->url }}" class="read-more-btn">{{__('Read More')}}<i
                                                        class="flaticon-next"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="paginations">
                            {{ $posts->withQueryString()->links() }}
                        </div>
                    @else
                        <div class="alert alert-warning">
                            <p>{{ __('There is no data to display!') }}</p>
                        </div>
                    @endif

                </div>
            </div>
            <div class="col-lg-4">
                {!! dynamic_sidebar('right_sidebar') !!}
            </div>
        </div>
    </div>
</div>
