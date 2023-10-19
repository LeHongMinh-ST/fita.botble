<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>
            <div class="modal-body">
                <a href="index.html">
                    <img src="{{ Theme::asset()->url('images/logo-vnua.png') }} " class="main-logo fita-main-logo" alt="logo">
                    <img src="{{ Theme::asset()->url('images/logo.png') }} " class="main-logo fita-main-logo" alt="logo">
                </a>
                <div class="sidebar-content">
                    <h3>{{__('About Us')}}</h3>
                    <p>{{ theme_option('short_description') }}</p>
                    <div class="sidebar-btn">
                        <a href="contact.html" class="default-btn">{{ __('Contract Us') }}</a>
                    </div>
                </div>
                <div class="sidebar-contact-info">
                    <h3>Contact Information</h3>
                    <ul class="info-list">
                        <li><i class="ri-phone-fill"></i> <a href="tel:{{ theme_option('phone_number') }}">{{ theme_option('phone_number') }}</a></li>
                        <li><i class="ri-mail-line"></i><a
                                href="{{ theme_option('email') }}"><span
                                    class="__cf_email__" >{{ theme_option('email') }}</span></a>
                        </li>
                        <li><i class="ri-map-pin-line"></i> {{ theme_option('address') }}</li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li>
                        <a href="https://www.facebook.com/" target="_blank"><i class="flaticon-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/" target="_blank"><i class="flaticon-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/?lang=en" target="_blank"><i class="flaticon-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="https://instagram.com/?lang=en" target="_blank"><i class="flaticon-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
