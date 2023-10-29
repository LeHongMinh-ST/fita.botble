<div class="campus-information-area pb-70 bg-f4f6f9">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="campus-image">
                    @if($shortcode->{'image_about'})
                        <img src="{{ RvMedia::getImageUrl($shortcode->{'image_about'}, '', false, RvMedia::getDefaultImage()) }}" alt="Image">

                    @else
                        <img src="{{ Theme::asset()->url('images/campus-information/campus-2.jpg') }}" alt="Image">
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="campus-content style-2">
                    <div class="campus-title">
                        <h2>Về chúng tôi</h2>
                        <p>{{ theme_option('short_description') }}</p>
                    </div>
                    <div class="list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <ul>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>{{__('Graduate Programs')}}</p>
                                    </li>

                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>{{__('Alumni & Giving')}}</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <ul>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>{{__('Undergraduate')}}</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>{{__('Global Students')}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="counter">
                        <div class="row">
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer odometer-auto-theme" data-count="20"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">6</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div></span>
                                    </h1>
                                    <p>{{ __('Years Of Experience') }}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer odometer-auto-theme" data-count="10"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>
                                        <span class="target heading-color">k</span><span class="target">+</span>
                                    </h1>
                                    <p>{{ __('Students') }}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer odometer-auto-theme" data-count="22"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span></div></span>
                                        <span class="target">+</span>
                                    </h1>
                                    <p>{{__('Partner')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if( $shortcode->{'link'})
                        <a href="{{ $shortcode->{'link'} }}" class="default-btn btn">{{ __('Learn more') }}<i class="flaticon-next"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
