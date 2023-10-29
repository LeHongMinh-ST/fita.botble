    <div class="health-care-area pb-70">
        <div class="container">
            <div class="academics-area pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="academics-left-content">
                                <div class="row">
                                    @foreach($departments as $department)
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="single-academics-card3">
                                                <div class="icon py-3">
                                                    <i class="{{$department->icon ?? 'flaticon-pc'}} size-custom"
                                                       style="height: 125px; width: 125px; font-size: 65px; line-height: 152px;"
                                                    ></i>
                                                </div>
                                                <a href="{{$department->url}}"><h3>{{$department->name}}</h3></a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
