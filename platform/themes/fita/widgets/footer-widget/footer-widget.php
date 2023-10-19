<?php

use Botble\Widget\AbstractWidget;

class FooterWidgetWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * @var string
     */
    protected $frontendTemplate = 'frontend';

    /**
     * @var string
     */
    protected $backendTemplate = 'backend';

    /**
     * @var string
     */
    protected $widgetDirectory = 'footer-widget';

    /**
     * FooterWidget constructor.
     */
    public function __construct()
    {
        parent::__construct([
            'name' => __('Footer Widget'),
            'description' => __('Footer Widget'),
            'footer_menu_id_1' => null,
            'footer_menu_id_2' => null,
            'footer_menu_id_3' => null,
            'footer_menu_label_1' => '',
            'footer_menu_label_2' => '',
            'footer_menu_label_3' => '',
        ]);
    }
}
