<?php

namespace Botble\Blog\Enums;

use Botble\Base\Supports\Enum;
use Html;

/**
 * @method static PostBaseStatusEnum ACTIVE()
 * @method static PostBaseStatusEnum INACTIVE()
 */
class PostBaseStatusEnum extends Enum
{
    public const INACTIVE = 'Inactive';
    public const ACTIVE = 'Active';
    
    /**
     * @var string
     */
    public static $langPath = 'core/base::enums.statuses';

    /**
     * @return string
     */
    public function toHtml()
    {
        switch ($this->value) {
            case self::ACTIVE:
                return Html::tag('span', self::ACTIVE()->label(), ['class' => 'label-info status-label'])
                    ->toHtml();
            case self::INACTIVE:
                return Html::tag('span', self::INACTIVE()->label(), ['class' => 'label-warning status-label'])
                    ->toHtml();
            default:
                return parent::toHtml();
        }
    }
}
