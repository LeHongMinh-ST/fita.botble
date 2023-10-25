@if ($departments->count() > 0)
    <div class="latest-news-card-area">
        <div class="row">
            @foreach($departments as $department)
                <div class="col-lg-4 col-md-6">
                    <div class="single-news-card">
                        <div class="news-img">
                            <a href="news-details.html"><img src="{{RvMedia::getImageUrl($department->image) }}"
                                                             data-bgslide="{{ RvMedia::getImageUrl($department->image)}}"
                                                             alt="{{$department->name}}"></a>
                        </div>
                        <div class="news-content">
                            <a href="news-details.html"><h3>{{$department->name}}</h3></a>
                            <a href="news-details.html" class="read-more-btn">Read More<i
                                    class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
