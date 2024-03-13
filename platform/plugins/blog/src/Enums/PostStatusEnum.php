<?php

namespace Botble\Blog\Enums;

use Botble\Base\Supports\Enum;
use Html;

/**
 * @method static PostStatusEnum ACTIVE()
 * @method static PostStatusEnum INACTIVE()
 */
class PostStatusEnum extends Enum
{
    public const INACTIVE = 'inactive';
    public const ACTIVE = 'active';

    public static $langPath = 'plugins/blog::posts.statuses';

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
