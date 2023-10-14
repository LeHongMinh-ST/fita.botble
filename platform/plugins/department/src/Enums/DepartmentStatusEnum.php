<?php

namespace Botble\Department\Enums;

use Botble\Base\Supports\Enum;
use Html;

/**
 * @method static DepartmentStatusEnum ACTIVE()
 * @method static DepartmentStatusEnum INACTIVE()
 */
class DepartmentStatusEnum extends Enum
{
    public const ACTIVE = 'active';
    public const INACTIVE = 'inactive';

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
