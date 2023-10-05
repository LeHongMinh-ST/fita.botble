<div class="page-banner-area bg-1">
    <div class="container">
        <div class="page-banner-content">
            <h1>{{ $post->name }}</h1>
            <ul>
                <li><a href="{{ route('public.single') }}">{{ __('Home') }}</a></li>
                <li>{{ $post->name }}</li>
            </ul>
        </div>
    </div>
</div>
<div class="news-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="news-details">
                    <div class="news-simple-card">
                        @if($post->image)
                            <img src="{{ RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage()) }}"
                                 alt="{{ $post->name }}">
                        @endif
                        <div class="list">
                            <ul>
                                <ul>
                                    <li><i class="flaticon-user"></i>By <a
                                            href="#">{{ $post->author->getFullName() }}</a>
                                    </li>
                                    <li><i class="flaticon-clock"></i>
                                        {{ $post->created_at->translatedFormat('H:m d/m/Y') }}
                                    </li>
                                </ul>
                            </ul>
                        </div>
                        <h2>{{ $post->name }}</h2>
                        <p>{{$post->description}}</p>
                    </div>
                    {!! BaseHelper::clean($post->content) !!}
                    <div class="tags-and-share">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="tags">
                                    <ul>
                                        <li><span>{{ __('Tags') }} :</span></li>
                                        @foreach ($post->tags as $tag)
                                            <li><a href="{{ $tag->url }}">{{ $tag->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="share">
                                    <ul>
                                        <li><span>Share :</span></li>
                                        <li>
                                            <a href="{{ Request::url() }}" target="_blank"><i class="flaticon-facebook"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                {!! dynamic_sidebar('right_sidebar') !!}
            </div>
        </div>
    </div>
</div>
