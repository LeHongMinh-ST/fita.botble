<?php

use Botble\Theme\Supports\ThemeSupport;

app()->booted(function () {
    ThemeSupport::registerGoogleMapsShortcode();
    ThemeSupport::registerYoutubeShortcode();

    if (is_plugin_active('simple-slider')) {
        add_filter(SIMPLE_SLIDER_VIEW_TEMPLATE, function () {
            return Theme::getThemeNamespace() . '::partials.short-codes.sliders.main';
        }, 120);
    }

    add_shortcode('custom-contact-form', 'Custom Contact form', 'Custom contact form', function () {
        return Theme::partial('short-codes.custom-contact-form');
    });
});


