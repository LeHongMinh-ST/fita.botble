<?php

namespace Botble\Department\Repositories\Interfaces;

use Botble\Support\Repositories\Interfaces\RepositoryInterface;

interface DepartmentInterface extends RepositoryInterface
{
    /**
     * @param int $perPage
     * @param bool $active
     * @return mixed
     */
    public function getAllDepartment($perPage = 12, $active = true, array $with = ['slugable']);

}
