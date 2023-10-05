
@if (is_plugin_active('blog'))
    @php
        $posts = get_recent_posts(3);
    @endphp
    <div class="lates-news-area pt-100 pb-70 bg-f4f6f9">
        <div class="container">
            <div class="section-title">
                <h2>{{__('Latest News')}}</h2>
            </div>
            <div class="row justify-content-center align-items-center">
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
            <div class="more-latest-news text-center">
                @if(theme_option('news_url'))
                    <p><a href="{{theme_option('news_url')}}" class="read-more-btn active"> {{ __('More on News') }}<i class="flaticon-next"></i></a></p>
                @endif
            </div>
        </div>
    </div>

@endif
