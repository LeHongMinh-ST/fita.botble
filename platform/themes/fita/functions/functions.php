<?php

register_page_template([
    'default' => __('Default'),
    'home' => __('Home')
]);

register_sidebar([
    'id'          => 'second_sidebar',
    'name'        => 'Second sidebar',
    'description' => 'This is a sample sidebar for fita theme',
]);

register_sidebar([
    'id' => 'right_sidebar',
    'name' => _('Right sidebar'),
    'description' => 'This is a sample right sidebar for fita theme',
]);

RvMedia::setUploadPathAndURLToPublic();
