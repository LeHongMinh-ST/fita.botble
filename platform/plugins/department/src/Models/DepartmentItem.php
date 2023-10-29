<?php

namespace Botble\Department\Models;

use Botble\Base\Models\BaseModel;

class DepartmentItem extends BaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'department_items';

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'link',
        'icon',
        'order',
        'department_id',
    ];
}
