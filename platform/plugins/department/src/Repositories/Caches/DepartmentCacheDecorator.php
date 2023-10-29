<?php

namespace Botble\Department\Repositories\Caches;

use Botble\Support\Repositories\Caches\CacheAbstractDecorator;
use Botble\Department\Repositories\Interfaces\DepartmentInterface;

class DepartmentCacheDecorator extends CacheAbstractDecorator implements DepartmentInterface
{
    /**
     * {@inheritDoc}
     */
    public function getAllDepartment($perPage = 12, $active = true, array $with = ['slugable'])
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }

}
