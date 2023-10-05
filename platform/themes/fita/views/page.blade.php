@if (!BaseHelper::isHomepage($page->id))
    @php
        Theme::set('section-name', SeoHelper::getTitle());
        $page->loadMissing('metadata');

        $bannerImage = $page->getMetaData('banner_image', true);

        if ($bannerImage) {
            Theme::set('breadcrumbBannerImage', RvMedia::getImageUrl($bannerImage));
        }

    @endphp
    <div class="page-banner-area bg-1">
        <div class="container">
            <div class="page-banner-content">
                <h1>{{ $page->name }}</h1>
                <ul>
                    <li><a href="{{ route('public.single') }}">{{ __('Home') }}</a></li>
                    <li>{{ $page->name }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-content pt-100 pb-70">
        <div class="container">
            {!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, BaseHelper::clean($page->content), $page) !!}
        </div>
    </div>



@else
    {!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, BaseHelper::clean($page->content), $page) !!}
@endif
