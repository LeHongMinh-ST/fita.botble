@if (is_plugin_active('simple-slider') && count($sliders) > 0)
    <div class="banner-area pb-50">
        <div class="container-fluid">
            <div class="hero-slider owl-carousel owl-theme" data-slider-id="1">
                @foreach($sliders as $key => $slider)
                    <div class="slider-item banner-bg-{{$key+1}}"
                         style="background-image: url({{ RvMedia::getImageUrl($slider->image, null, false, RvMedia::getDefaultImage()) }})">
                        <div class="container-fluid">
                            <div class="slider-content ">
                                @if($slider->title)
                                    <h1>{{$slider->title}}</h1>
                                @endif
                                @if($slider->description)
                                    <p>{!! clean($slider->description) !!}</p>
                                @endif
                                @if ($slider->link)
                                    <a href="{{ url($slider->link) }}" class="default-btn btn">{{__('Read More')}} <i
                                            class="flaticon-next"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="owl-thumbs" data-slider-id="1">
                @foreach($sliders as $slider)
                    <button class="owl-thumb-item">
                        <img src="{{ RvMedia::getImageUrl($slider->image, null, false, RvMedia::getDefaultImage()) }}"
                             alt="{{$slider->title}}">
                    </button>
                @endforeach
            </div>
        </div>
    </div>
@endif

