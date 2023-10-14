<?php

namespace Botble\Department\Models;

use Botble\Base\Traits\EnumCastable;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;
use Botble\Department\Enums\DepartmentStatusEnum;

class Department extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'departments';

    /**
     * @var array
     */
    protected $fillable = [
        'code',
        'name',
        'status',
        'created_by',
        'updated_by'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => DepartmentStatusEnum::class,
    ];
}
