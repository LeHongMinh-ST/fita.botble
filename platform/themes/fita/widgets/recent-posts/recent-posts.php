<?php

use Botble\Widget\AbstractWidget;

class RecentPostsWidget extends AbstractWidget
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
    protected $widgetDirectory = 'recent-posts';

    /**
     * RecentPosts constructor.
     */
    public function __construct()
    {
        parent::__construct([
            'name' => __('Recent Posts'),
            'description' => __('Recent posts widget.'),
            'number_display' => 5,
        ]);
    }
}
