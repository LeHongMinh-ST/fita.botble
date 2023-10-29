{!! dynamic_sidebar('footer_sidebar') !!}


<div class="copyright-area">
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-lg-6 col-md-4">
                    <div class="social-content">
                        <ul>

                            @if (theme_option('social_links'))
                                <li><span>{{__('Follow Us On')}}:</span></li>

                                @foreach(json_decode(theme_option('social_links'), true) as $socialLink)
                                    <li>
                                        <a href="{{$socialLink[2]['value']}}" target="_blank"><i class="{{$socialLink[1]['value']}}"></i></a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="copy">
                        <p>{!! BaseHelper::clean(theme_option('copyright')) !!}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="go-top">
    <i class="ri-arrow-up-s-line"></i>
    <i class="ri-arrow-up-s-line"></i>
</div>
