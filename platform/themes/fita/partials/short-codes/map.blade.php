<div style=" width: 100%; position: relative; text-align: right;">
    @if($addressMap)
        <div  style="height: 400px; width: 100%; overflow: hidden; background: none!important;">
            <iframe width="100%" height="100%" src="{{$addressMap}}"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    @endif
    @if($address || $wordHours || $phoneNumber)
        <div class="section-indent-extra">
            <div class="container container-lg-fluid">
                <div class="section__wrapper02 tt-contact-wrapper">
                    <div class="row justify-content-center">
                        @if($address)
                        <div class="col-sm-6 col-md-4">
                            <div class="tt-contact" style="text-align: left">
                                <div class="tt-icon">
                                    <i class="icon-map-marker"></i>
                                </div>
                                <div class="tt-content">
                                    <div class="tt-title">Địa chỉ:</div>
                                    <address>
                                        {{$address}}
                                    </address>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($wordHours)
                            <div class="col-sm-6 col-md-4">
                                <div class="tt-contact" style="text-align: left">
                                    <div class="tt-icon">
                                        <i class="icon-clock-circular-outline-1"></i>
                                    </div>
                                    <div class="tt-content">
                                        <div class="tt-title">Giờ làm việc:</div>
                                        {{$wordHours}}
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($phoneNumber)
                        <div class="col-sm-6 col-md-4">
                            <div class="tt-contact" style="text-align: left !important;">
                                <div class="tt-icon">
                                    <i class="icon-telephone"></i>
                                </div>
                                <div class="tt-content">
                                    <div class="tt-title">Liên hệ:</div>
                                    <address class="style-phone">
                                        {!! $phoneNumber !!}
                                    </address>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    @endif
</div>

