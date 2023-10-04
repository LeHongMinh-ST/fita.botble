<?php

register_page_template([
    'default' => __('Default'),
    'home' => __('Home')
]);


register_sidebar([
    'id' => 'right_sidebar',
    'name' => __('Right sidebar'),
    'description' => __('This is a right sidebar for fita theme'),
]);

RvMedia::setUploadPathAndURLToPublic();
