@if (is_plugin_active('simple-slider') && count($sliders) > 0)
    <div class="banner-area">
        <div class="hero-slider2 style2 owl-carousel owl-theme">
            @foreach($sliders as $slider)
                <div class="slider-item banner-bg-6" style="background-image: url({{ RvMedia::getImageUrl($slider->image, null, false, RvMedia::getDefaultImage()) }})">
                    <div class="container-fluid">
                        <div class="slider-content style2">
                            @if($slider->title)
                                <h1>{{$slider->title}}</h1>
                            @endif
                            @if($slider->description)
                                <p>{!! clean($slider->description) !!}</p>
                            @endif
                            @if ($slider->link)
                                <a href="{{ url($slider->link) }}" class="default-btn btn">{{__('Read More')}} <i class="flaticon-next"></i></a>

                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
