<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {!! Theme::partial('header') !!}
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
</head>
<body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>
{!! apply_filters(THEME_FRONT_BODY, null) !!}

{!! Theme::partial('navbar') !!}

{!! Theme::content() !!}

{!! Theme::partial('footer') !!}

{!! Theme::footer() !!}
</body>
</html>
