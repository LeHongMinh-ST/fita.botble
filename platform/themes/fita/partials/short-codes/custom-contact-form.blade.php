<div class="row">
    <div class="col-lg-6">
        <div class="contacts-form">
            <h3>{{ __('Leave a message') }}</h3>
            {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST', 'class' => 'contact-form']) !!}
            @if(session()->has('success_msg') || session()->has('error_msg') || isset($errors))
                @if (session()->has('success_msg'))
                    <div class="alert alert-success">
                        <p>{{ session('success_msg') }}</p>
                    </div>
                @endif
                @if (session()->has('error_msg'))
                    <div class="alert alert-danger">
                        <p>{{ session('error_msg') }}</p>
                    </div>
                @endif
                @if (isset($errors) && count($errors))
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <span>{{ $error }}</span> <br>
                        @endforeach
                    </div>
                @endif
            @endif
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <label>{{__('Name')}}</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required="" data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <label>{{__('Email')}}</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required="" data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <label>{{__('Phone')}}</label>
                        <input type="text" name="phone" id="phone_number" required="" value="{{ old('phone') }}" data-error="Please enter your number" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <label>{{__('Subject')}}</label>
                        <input type="text" name="subject" id="msg_subject" class="form-control" required="" value="{{ old('content') }}" data-error="Please enter your subject">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>{{__('Message')}}</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="8" required="" data-error="Write your message">{{ old('content') }}</textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
{{--                <div class="form-group">--}}
{{--                    <div class="form-check">--}}
{{--                        <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required="">--}}
{{--                        <label class="form-check-label" for="gridCheck">--}}
{{--                            I agree to the <a href="terms-conditions.html">terms</a> and <a href="privacy-policy.html">privacy policy</a>--}}
{{--                        </label>--}}
{{--                        <div class="help-block with-errors gridCheck-error"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-lg-12 col-md-12">
                    <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">
                        <span>{{__('Send message')}}</span>
                    </button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="contact-and-address">
            <h2>{{__('Let\'s Contact Us')}}</h2>
            <p>{{ __('For any comments or suggestions, please contact us via the information below') }} </p>
            <div class="contact-and-address-content">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-card">
                            <div class="icon">
                                <i class="ri-phone-line"></i>
                            </div>
                            <h4>{{__('Contact')}}</h4>
                            <p>{{__('Phone')}}: <a href="tel:{{theme_option('phone_number')}}">{{theme_option('phone_number')}}</a></p>
                            <p>Mail: <a href="{{ theme_option('email') }}">{{ theme_option('email') }}</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-card">
                            <div class="icon">
                                <i class="ri-map-pin-line"></i>
                            </div>
                            <h4>{{__('Address')}}</h4>
                            {{ theme_option('address') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-media">
                <h3>{{__('Social Media')}}</h3>
                <ul>
                    @if (theme_option('social_links'))
                        @foreach(json_decode(theme_option('social_links'), true) as $socialLink)
                            <li>
                                <a href="{{$socialLink[2]['value']}}" target="_blank"><i class="{{$socialLink[1]['value']}}"></i></a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
