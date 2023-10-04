<?php

use Botble\Theme\Supports\ThemeSupport;

app()->booted(function () {
    ThemeSupport::registerGoogleMapsShortcode();
    ThemeSupport::registerYoutubeShortcode();
});

add_shortcode('custom-contact-form', 'Custom @Contact form', 'Custom contact form', function () {
    return Theme::partial('short-codes.custom-contact-form');
});
