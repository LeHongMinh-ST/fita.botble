<?php

namespace Botble\Department\Repositories\Eloquent;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Department\Enums\DepartmentStatusEnum;
use Botble\Support\Repositories\Eloquent\RepositoriesAbstract;
use Botble\Department\Repositories\Interfaces\DepartmentInterface;

class DepartmentRepository extends RepositoriesAbstract implements DepartmentInterface
{
    /**
     * {@inheritDoc}
     */
    public function getAllDepartment($perPage = 12, $active = true, array $with = ['slugable'])
    {
        $data = $this->model
            ->with($with)
            ->orderBy('created_at', 'desc');

        if ($active) {
            $data = $data->where('status', DepartmentStatusEnum::ACTIVE);
        }

        return $this->applyBeforeExecuteQuery($data)->paginate($perPage);
    }
}
