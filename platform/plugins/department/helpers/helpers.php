<?php

use Botble\Department\Repositories\Interfaces\DepartmentInterface;
use Illuminate\Support\Collection;


if (!function_exists('get_all_department')) {
    /**
     * @param boolean $active
     * @param int $perPage
     * @param array $with
     * @return Collection
     */
    function get_all_department(
        bool  $active = true,
        int   $perPage = 12,
        array $with = ['slugable']
    ) {
        return app(DepartmentInterface::class)->getAllDepartment($perPage, $active, $with);
    }
}
