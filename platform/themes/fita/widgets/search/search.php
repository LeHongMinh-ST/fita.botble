<?php

use Botble\Widget\AbstractWidget;

class SearchWidget extends AbstractWidget
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
    protected $widgetDirectory = 'search';

    /**
     * Search constructor.
     */
    public function __construct()
    {
        parent::__construct([
            'name' => __('Search'),
            'placeholder' => __('Find your post...'),
            'description' => __('Search Widget description'),
        ]);
    }
}
