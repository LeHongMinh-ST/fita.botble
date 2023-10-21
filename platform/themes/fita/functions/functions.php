<?php

register_page_template([
    'default' => __('Default'),
    'with_right_sidebar' => __('With right sidebar'),
]);


register_sidebar([
    'id' => 'right_sidebar',
    'name' => __('Right sidebar'),
    'description' => __('This is a right sidebar for fita theme'),
]);

register_sidebar([
    'id' => 'footer_sidebar',
    'name' => __('Footer sidebar'),
    'description' => __('This is a footer sidebar for fita theme'),
]);

Form::component('themeIcon', Theme::getThemeNamespace() . '::partials.forms.fields.icons-field', [
    'name',
    'value'      => null,
    'attributes' => [],
]);

RvMedia::setUploadPathAndURLToPublic();
