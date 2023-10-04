<?php

use Botble\Widget\AbstractWidget;

class CategoryListWidget extends AbstractWidget
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
    protected $widgetDirectory = 'category-list';

    /**
     * CategoryList constructor.
     */
    public function __construct()
    {
        parent::__construct([
            'name' => __('Category Featured'),
            'number_display' => 5,
            'description' => __('Category Featured Widget description'),
        ]);
    }
}
