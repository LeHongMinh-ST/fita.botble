@php
    $posts = get_posts_by_category($shortcode->{'category_id'}, 5);
@endphp

<div class="events-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>{{ __('Event') }}</h2>
        </div>
        <div class="events-slider owl-carousel owl-theme">
            @foreach($posts as $post)
                <div class="single-events-card style-3 mlr-5">
                    <div class="events-image">
                        <a href="{{ $post->url }}">
                            <img src="{{ RvMedia::getImageUrl($post->image, '', false, RvMedia::getDefaultImage()) }}"
                                 alt="{{ $post->name }}">

                        </a>
                    </div>
                    <div class="events-content">
                        <a href="events-details.html"><h3>{{ $post->name }}</h3></a>
                        <p>{{ $post->description }}</p>
                        <div class="date-and-read-more">
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <p>
                                        <i class="ri-calendar-2-line"></i>{{ \Carbon\Carbon::make($post->created_at)->format('d/m/y') }}
                                    </p>
                                </li>
                                <li>
                                    <a href="{{ $post->url }}" class="read-more-btn active">{{ __('Read more') }} <i
                                            class="flaticon-next"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
