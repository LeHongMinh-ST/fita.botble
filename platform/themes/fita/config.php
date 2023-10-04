<?php

use Botble\Theme\Theme;

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these events can be overridden by package config.
    |
    */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function (Theme $theme)
        {
            // Partial composer.
            // $theme->partialComposer('header', function($view) {
            //     $view->with('auth', \Auth::user());
            // });

            // You may use this event to set up your assets.
            $theme->asset()->usePath()->add('bootstrap', 'css/bootstrap.min.css');
            $theme->asset()->usePath()->add('meanmenu', 'css/meanmenu.css');
            $theme->asset()->usePath()->add('owl.carousel', 'css/owl.carousel.min.css');
            $theme->asset()->usePath()->add('owl.theme', 'css/owl.theme.default.min.css');
            $theme->asset()->usePath()->add('magnific-popup', 'css/magnific-popup.css');
            $theme->asset()->usePath()->add('flaticon', 'css/flaticon.css');
            $theme->asset()->usePath()->add('remixicon', 'css/remixicon.css');
            $theme->asset()->usePath()->add('odometer', 'css/odometer.min.css');
            $theme->asset()->usePath()->add('aos', 'css/aos.css');
            $theme->asset()->usePath()->add('style', 'css/style.css');
            $theme->asset()->usePath()->add('dark', 'css/dark.css');
            $theme->asset()->usePath()->add('responsive', 'css/responsive.css');
            $theme->asset()->usePath()->add('custom', 'css/custom.css');

//            $theme->asset()->container('footer')->add('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
            $theme->asset()->container('footer')->usePath()->add('jquery', 'js/jquery.min.js');
            $theme->asset()->container('footer')->usePath()->add('bootstrap.bundle', 'js/bootstrap.bundle.min.js');
            $theme->asset()->container('footer')->usePath()->add('jquery.meanmenu', 'js/jquery.meanmenu.js');
            $theme->asset()->container('footer')->usePath()->add('owl.carousel', 'js/owl.carousel.min.js');
            $theme->asset()->container('footer')->usePath()->add('carousel-thumbs', 'js/carousel-thumbs.min.js');
            $theme->asset()->container('footer')->usePath()->add('jquery.magnific-popup', 'js/jquery.magnific-popup.js');
            $theme->asset()->container('footer')->usePath()->add('aos', 'js/aos.js');
            $theme->asset()->container('footer')->usePath()->add('odometer', 'js/odometer.min.js');
            $theme->asset()->container('footer')->usePath()->add('appear', 'js/appear.min.js');
            $theme->asset()->container('footer')->usePath()->add('form-validator', 'js/form-validator.min.js');
            $theme->asset()->container('footer')->usePath()->add('contact-form-script', 'js/contact-form-script.js');
            $theme->asset()->container('footer')->usePath()->add('ajaxchimp', 'js/ajaxchimp.min.js');
            $theme->asset()->container('footer')->usePath()->add('custom', 'js/custom.js');

            $theme->asset()->container('footer')->usePath()->add('script', 'js/script.js');

            if (function_exists('shortcode')) {
                $theme->composer(['page', 'post'], function (\Botble\Shortcode\View\View $view) {
                    $view->withShortcodes();
                });
            }
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function ($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }
        ]
    ]
];
