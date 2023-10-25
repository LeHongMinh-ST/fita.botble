<div class="top-header-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="header-left-content">
                    <p>{!! theme_option('notice') !!}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header-right-content">
                    <div class="list d-lg-flex justify-content-lg-end gap-3">
                        {!!
                            Menu::renderMenuLocation('header-menu', [
                                'options' => [],
                                'theme'   => true,
                            ])
                        !!}
                        <ul>
                            <li>
                                {{--                                {!! apply_filters('language_switcher') !!}--}}
                                {!! Theme::partial('language-switcher') !!}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-area nav-bg-1">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="{{ route('public.single') }}">
                        @if(theme_option('logo'))
                            <img
                                src="{{  RvMedia::getImageUrl(theme_option('logo'), null, false, RvMedia::getDefaultImage()) }} "
                                class="main-logo fita-main-logo" alt="logo">
                            <img
                                src="{{ RvMedia::getImageUrl(theme_option('logo'), null, false, RvMedia::getDefaultImage()) }} "
                                class=" fita-main-logo white-logo" alt="white-logo">
                        @else
                            <img src="{{  Theme::asset()->url('images/logo.png') }} " class="main-logo fita-main-logo"
                                 alt="logo">
                            <img src="{{ heme::asset()->url('images/logo.png') }} " class=" fita-main-logo white-logo"
                                 alt="white-logo">
                        @endif

                    </a>
                    <a href="{{theme_option('logo-text-link')}}">
                        <span class="text-logo text-logo-mb">{{theme_option('logo-text')}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('public.single') }}">
                    @if(theme_option('logo'))
                        <img
                            src="{{  RvMedia::getImageUrl(theme_option('logo'), null, false, RvMedia::getDefaultImage()) }} "
                            class="main-logo fita-main-logo" alt="logo">
                        <img
                            src="{{ RvMedia::getImageUrl(theme_option('logo'), null, false, RvMedia::getDefaultImage()) }} "
                            class=" fita-main-logo white-logo" alt="white-logo">
                    @else
                        <img src="{{  Theme::asset()->url('images/logo.png') }} " class="main-logo fita-main-logo"
                             alt="logo">
                        <img src="{{ heme::asset()->url('images/logo.png') }} " class=" fita-main-logo white-logo"
                             alt="white-logo">
                    @endif
                </a>
                <a href="{{theme_option('logo-text-link')}}">
                    <span class="text-logo">{{theme_option('logo-text')}}</span>
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    {!!
                            Menu::renderMenuLocation('main-menu', [
                                'options' => ['class' => 'navbar-nav ms-auto'],
                                'view'    => 'main-menu',
                            ])
                        !!}
                    <div class="others-options">
                        <div class="icon">
                            <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="icon">
                        <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Theme::partial('sidebar') !!}
