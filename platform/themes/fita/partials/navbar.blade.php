<div class="top-header-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="header-left-content">
                    <p>Get the latest updates and Sanu's response to COVID-19</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header-right-content">
                    <div class="list">
                        <ul>
                            <li><a href="graduate-admission.html">Students</a></li>
                            <li><a href="campus-life.html">Faculty & Staff</a></li>
                            <li><a href="admission.html">Visitors</a></li>
                            <li><a href="academics.html">Academics</a></li>
                            <li><a href="alumni.html">Alumni</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-area nav-bg-2">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="index-3.html">
                        <img src="{{ Theme::asset()->url('images/logo-vnua.png') }} " class="main-logo fita-main-logo" alt="logo">
                        <img src="{{ Theme::asset()->url('images/logo.png') }} " class="main-logo fita-main-logo" alt="logo">
                        <img src="{{ Theme::asset()->url('images/logo-vnua.png') }} " class="main-logo fita-main-logo white-logo" alt="white-logo">
                        <img src="{{ Theme::asset()->url('images/logo.png') }} " class="main-logo fita-main-logo white-logo" alt="white-logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index-3.html">
                    <img src="{{ Theme::asset()->url('images/logo-vnua.png') }} " class="main-logo fita-main-logo" alt="logo">
                    <img src="{{ Theme::asset()->url('images/logo.png') }} " class="main-logo fita-main-logo" alt="logo">
                    <img src="{{ Theme::asset()->url('images/logo-vnua.png') }} " class="main-logo fita-main-logo white-logo" alt="white-logo">
                    <img src="{{ Theme::asset()->url('images/logo.png') }} " class="main-logo fita-main-logo white-logo" alt="white-logo">
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
