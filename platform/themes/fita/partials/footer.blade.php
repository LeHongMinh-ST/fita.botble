<div class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="footer-logo-area">
                    <img src="{{ Theme::asset()->url('images/logo-vnua.png') }} " class="main-logo fita-main-logo" alt="logo">
                    <img src="{{ Theme::asset()->url('images/logo.png') }} " class="main-logo fita-main-logo" alt="logo">
                    <p>{{ theme_option('footer_description') }}</p>
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
                    <h3>Campus Life</h3>
                    <div class="list">
                        <ul>
                            <li><a href="campus-life.html">Accessibility</a></li>
                            <li><a href="campus-life.html">Financial Aid</a></li>
                            <li><a href="campus-life.html">Food Services</a></li>
                            <li><a href="campus-life.html">Housing</a></li>
                            <li><a href="campus-life.html">Information Technologies</a></li>
                            <li><a href="campus-life.html">Student Life</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widjet">
                    <h3>Our Campus</h3>
                    <div class="list">
                        <ul>
                            <li><a href="campus-life.html">Acedemic</a></li>
                            <li><a href="campus-life.html">Planning & AdminiStartion</a></li>
                            <li><a href="campus-life.html">Campus Safety</a></li>
                            <li><a href="campus-life.html">Office of the Chancellor</a></li>
                            <li><a href="campus-life.html">Facility Services</a></li>
                            <li><a href="campus-life.html">Human Resources</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="footer-widjet">
                    <h3>Academics</h3>
                    <div class="list">
                        <ul>
                            <li><a href="academics.html">Canvas</a></li>
                            <li><a href="academics.html">Catalyst</a></li>
                            <li><a href="academics.html">Library</a></li>
                            <li><a href="academics.html">Time Schedule</a></li>
                            <li><a href="academics.html">Apply For Admissions</a></li>
                            <li><a href="academics.html">Pay My Tuition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="{{ Theme::asset()->url('images/shape-1.png') }} " alt="Image">
        </div>
    </div>
</div>


<div class="copyright-area">
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-lg-6 col-md-4">
                    <div class="social-content">
                        <ul>
                            <li><span>Follow Us On</span></li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank"><i class="ri-facebook-fill"></i></a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" target="_blank"><i class="ri-twitter-fill"></i></a>
                            </li>
                            <li>
                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                        class="ri-instagram-line"></i></a>
                            </li>
                            <li>
                                <a href="https://linkedin.com/?lang=en" target="_blank"><i class="ri-linkedin-fill"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="copy">
                        <p>{!! BaseHelper::clean(theme_option('copyright')) !!}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="go-top">
    <i class="ri-arrow-up-s-line"></i>
    <i class="ri-arrow-up-s-line"></i>
</div>
