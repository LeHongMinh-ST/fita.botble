<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>
<title>{{ SeoHelper::getTitle() }}</title>
<meta name="keywords" content="Fita">
<meta name="description" content="Fita - Khoa công nghệ thông tin - Học viện nông nghiệp Việt Nam">
<meta name="author" content="Fita">
@if(!theme_option('favicon'))
    <link rel="shortcut icon" href="{{ Theme::asset()->url('images/favicon.png') }}">
@else
    <link rel="shortcut icon" href="{{ theme_option('favicon') }}">
@endif
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
<!-- Fonts-->
<link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('primary_font', 'Roboto')) }}" rel="stylesheet" type="text/css">
<!-- CSS Library-->

<style>
    :root {
        --primary-color: {{ theme_option('primary_color', '#ff2b4a') }};
        --primary-font: '{{ theme_option('primary_font', 'Roboto') }}', sans-serif;
    }
</style>

{!! Theme::header() !!}
