<?php

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Blog\Repositories\Interfaces\CategoryInterface;
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

    add_shortcode('latest-new', 'Latest New', 'Latest New', function ($shortcode) {
        return Theme::partial('short-codes.latest-new', compact('shortcode'));
    });

    shortcode()->setAdminConfig('site-features', function ($attributes) {
        return Theme::partial('short-codes.latest-new-admin-config', compact('attributes'));
    });

    add_shortcode('site-features', __('Site features'), __('Site features'), function ($shortcode) {
        return Theme::partial('short-codes.site-features', compact('shortcode'));
    });

    shortcode()->setAdminConfig('site-features', function ($attributes) {
        return Theme::partial('short-codes.site-features-admin-config', compact('attributes'));
    });

    add_shortcode('about-section', __('About Section'), __('About Section'), function ($shortcode) {
        return Theme::partial('short-codes.about-section', compact('shortcode'));
    });

    add_shortcode('event-section', __('Event Section'), __('Event Section'), function ($shortcode) {
        return Theme::partial('short-codes.event-section', compact('shortcode'));
    });

    shortcode()->setAdminConfig('event-section', function ($attributes) {
        $categories = app(CategoryInterface::class)->pluck('name', 'id',
            ['status' => BaseStatusEnum::PUBLISHED]);
        return Theme::partial('short-codes.event-section-admin-config',
            compact( 'attributes', 'categories'));
    });

    add_shortcode('video-section', __('Video Section'), __('Video Section'), function ($shortcode) {
        return Theme::partial('short-codes.video-section', compact('shortcode'));
    });


});


