
<div class="latest-news-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="latest-news-left-content pr-20">
                    @if(count($posts) > 0)
                        <div class="latest-news-card-area">
                            <div class="row">
                                @foreach ($posts as $post)
                                    <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600" data-aos-once="true">
                                        <div class="single-news-card">
                                            <div class="news-img">
                                                <a href="{{ $post->url }}">
                                                    <img src="{{ RvMedia::getImageUrl($post->image, '', false, RvMedia::getDefaultImage()) }}" alt="{{ $post->name }}">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <div class="list">
                                                    <ul>
                                                        <li><i class="flaticon-user"></i>By <a
                                                                href="#">{{ $post->author->getFullName() }}</a>
                                                        </li>
                                                        <li><i class="flaticon-clock"></i>  {{ $post->created_at->translatedFormat('H:m d/m/Y') }}</li>
                                                    </ul>
                                                </div>
                                                <a href="{{ $post->url }}"><h3>{{ $post->name }}</h3></a>
                                                <a href="{{ $post->url }}" class="read-more-btn">{{__('Read More')}}<i class="flaticon-next"></i></a>
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
        </div>
    </div>
</div>
