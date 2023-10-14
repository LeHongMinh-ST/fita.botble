<?php

namespace Botble\Department\Models;

use Botble\Base\Models\BaseModel;

class DepartmentTranslation extends BaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'departments_translations';

    /**
     * @var array
     */
    protected $fillable = [
        'lang_code',
        'departments_id',
        'name',
    ];

    /**
     * @var bool
     */
    public $timestamps = false;
}
