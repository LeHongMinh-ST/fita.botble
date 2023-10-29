<?php

namespace Botble\Department\Models;

use Botble\Base\Traits\EnumCastable;
use Botble\Base\Models\BaseModel;
use Botble\Department\Enums\DepartmentStatusEnum;
use Botble\Slug\Models\Slug;

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
        'name',
        'icon',
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

    public function departmentItems()
    {
        return $this->hasMany(DepartmentItem::class)->orderBy('department_items.order');
    }

    public function slugable()
    {
        return $this->morphOne(Slug::class,'reference');
    }

    protected static function boot()
    {
        parent::boot();

        self::deleting(function (Department $department) {
            DepartmentItem::where('department_id', $department->id)->delete();
        });
    }
}
