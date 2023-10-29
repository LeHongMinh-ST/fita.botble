<div class="page-banner-area bg-1">
    <div class="container">
        <div class="page-banner-content">
            <h1>{{ $department->name }}</h1>
            <ul>
                <li><a href="{{ route('public.single') }}">{{ __('Home') }}</a></li>
                <li><a href="{{ route('public.single') }}">{{ __('plugins/department::department.name') }}</a></li>
                <li>{{ $department->name }}</li>
            </ul>
        </div>
    </div>
</div>
<div class="health-care-area pt-100 pb-70">
    <div class="container">
        <div class="academics-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="academics-left-content">
                            <div class="row">
                                @foreach($departmentItems as $item)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="single-academics-card3">
                                            <div class="icon py-3">
                                                <i class="{{$item->icon ?? 'flaticon-pc'}} size-custom"
                                                   style="height: 125px; width: 125px; font-size: 65px; line-height: 152px;"
                                                ></i>
                                            </div>
                                            <a href="{{$item->link}}"><h3>{{$item->title}}</h3></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        {!! dynamic_sidebar('right_sidebar') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
