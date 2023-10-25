<div class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="footer-logo-area">
                    <div>
                        <img src="{{ Theme::asset()->url('images/logo.png') }} " class="main-logo fita-main-logo"
                             alt="logo">
                        <span class="text-logo">{{ theme_option('logo-text')}}</span>
                    </div>

                    <p>{{ theme_option('short_description') }}</p>
                    <div class="contact-list">
                        <ul>
                            <li><a href="javascript:void(0)">{{ theme_option('address') }}
                                </a></li>
                            <li><a href="tel:{{ theme_option('phone_number') }}">{{ theme_option('phone_number') }}
                                </a></li>
                            <li>
                                <a href="{{ theme_option('email') }}"><span
                                            class="__cf_email__">{{ theme_option('email') }}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widjet">
                    <h3>{{ $config['footer_menu_label_1'] }}</h3>
                    <div class="list">
                        {!!
                             Menu::generateMenu([
                                 'slug'    => $config['footer_menu_id_1'],
                             ])
                         !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widjet">
                    <h3>{{ $config['footer_menu_label_2'] }}</h3>
                    <div class="list">
                        {!!
                             Menu::generateMenu([
                                 'slug'    => $config['footer_menu_id_2'],
                             ])
                         !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="footer-widjet">
                    <h3>{{ $config['footer_menu_label_3'] }}</h3>
                    <div class="list">
                        {!!
                             Menu::generateMenu([
                                 'slug'    => $config['footer_menu_id_3'],
                             ])
                         !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="{{ Theme::asset()->url('images/shape-1.png') }}" alt="Image">
        </div>
    </div>
</div>
