@php
    SeoHelper::setTitle(__('404 - Not found'));
    Theme::fireEventGlobalAssets();
@endphp
    <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {!! Theme::partial('header') !!}
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
</head>
<body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>
{!! apply_filters(THEME_FRONT_BODY, null) !!}

{!! Theme::partial('navbar') !!}
<div class="error-area ptb-100">
    <div class="container">
        <div class="top-content">
            <ul>
                <li>4</li>
                <li>0</li>
                <li>4</li>
            </ul>
        </div>
        <h2>Error 404 : Page Not Found</h2>
        <a href="{{route('public.index')}}" class="btn default-btn">Back To Homepage</a>
    </div>
</div>


{!! Theme::partial('footer') !!}

{!! Theme::footer() !!}
</body>
</html>


