<?php

app()->booted(function () {


    theme_option()
        ->setField([
            'id'         => 'copyright',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Copyright'),
            'attributes' => [
                'name'    => 'copyright',
                'value'   => __('© :year Your Company. All right reserved.', ['year' => now()->format('Y')]),
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Change copyright'),
                    'data-counter' => 250,
                ],
            ],
            'helper'     => __('Copyright on footer of site'),
        ])
        ->setField([
            'id'         => 'primary_font',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'googleFonts',
            'label'      => __('Primary font'),
            'attributes' => [
                'name'  => 'primary_font',
                'value' => 'Roboto',
            ],
        ])
        ->setField([
            'id'         => 'primary_color',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'customColor',
            'label'      => __('Primary color'),
            'attributes' => [
                'name'  => 'primary_color',
                'value' => '#ff2b4a',
            ],
        ])->setField([
            'id'         => 'short_description',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'textarea',
            'label'      => __('Short Description'),
            'attributes' => [
                'name'    => 'short_description',
                'value'   => '',
                'options' => [
                    'class' => 'form-control',
                    'rows'  => 4,
                ],
            ],
        ])->setField([
            'id'         => 'email',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Email'),
            'attributes' => [
                'name'    => 'email',
                'value'   => '',
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Change email'),
                    'data-counter' => 250,
                ],
            ],
        ])->setField([
            'id'         => 'phone_number',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Phone number'),
            'attributes' => [
                'name'    => 'phone_number',
                'value'   => '',
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Change phone number'),
                    'data-counter' => 250,
                ],
            ],
        ])->setField([
            'id'         => 'address',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'textarea',
            'label'      => __('Address'),
            'attributes' => [
                'name'    => 'address',
                'value'   => '',
                'options' => [
                    'class'        => 'form-control',
                    'rows'  => 4,
                ],
            ],
        ]);
});
