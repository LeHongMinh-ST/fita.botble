<div class="academic-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>{!! $shortcode->{'title_header'} !!}</h2>
            <p>{!! $shortcode->{'description_header'} !!}</p>
        </div>
        <div class="row justify-content-center">
            @for($i=0; $i<4;$i++)
                @if (clean($shortcode->{'title' . $i}))
                    <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" data-aos-once="true">

                        <div
                            @if($shortcode->{'image' . $i})
                                class="single-academics-card2 bg-1"
                            @else
                                class="single-academics-card"
                            @endif
                             style="background-image: url({{ RvMedia::getImageUrl($shortcode->{'image' . $i}, null, false, RvMedia::getDefaultImage()) }})">
                            <div class="serial">
                                <p>0{{$i}}.</p>
                            </div>
                            <div class="academic-content">
                                <div class="academic-top-content">
                                    <i class="flaticon-graduation"></i>
                                    <a href="{{ $shortcode->{'link' . $i} }}"><h3>{{ $shortcode->{'title' . $i} }}</h3></a>
                                </div>
                                <p>{{ $shortcode->{'description' . $i} }}</p>
                                <a href="{{ $shortcode->{'link' . $i} }}" class="read-more-btn white-color">{{__('Read more')}}<i class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                @endif
            @endfor


        </div>
    </div>
</div>
