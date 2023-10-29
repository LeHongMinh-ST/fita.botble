<?php

return [
    [
        'name' => 'Departments',
        'flag' => 'department.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'department.create',
        'parent_flag' => 'department.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'department.edit',
        'parent_flag' => 'department.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'department.destroy',
        'parent_flag' => 'department.index',
    ],
    [
        'name'        => 'Department Items',
        'flag'        => 'department-item.index',
        'parent_flag' => 'department.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'department-item.create',
        'parent_flag' => 'department-item.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'department-item.edit',
        'parent_flag' => 'department-item.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'department-item.destroy',
        'parent_flag' => 'department-item.index',
    ],
];
