<?php

use Botble\Department\Models\Department;

Route::group(['namespace' => 'Botble\Department\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'departments', 'as' => 'department.'], function () {
            Route::resource('', 'DepartmentController')->parameters(['' => 'department']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'DepartmentController@deletes',
                'permission' => 'department.destroy',
            ]);
        });
    });

    Route::group(['prefix' => 'department-items', 'as' => 'department-item.'], function () {

        Route::resource('', 'DepartmentItemController')->except([
            'index',
            'destroy',
        ])->parameters(['' => 'department-item']);

        Route::match(['GET', 'POST'], 'list/{id}', [
            'as'   => 'index',
            'uses' => 'DepartmentItemController@index',
        ]);

        Route::get('delete/{id}', [
            'as'   => 'destroy',
            'uses' => 'DepartmentItemController@destroy',
        ]);

        Route::delete('delete/{id}', [
            'as'         => 'delete.post',
            'uses'       => 'DepartmentItemController@postDelete',
            'permission' => 'department-item.destroy',
        ]);
    });

    if (defined('THEME_MODULE_SCREEN_NAME')) {
        Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {
            if (\SlugHelper::getPrefix(Department::class, 'bo-mon')) {
                Route::get(\SlugHelper::getPrefix(Department::class, 'bo-mon') . '/{slug}', [
                    'uses' => 'DepartmentController@getBySlug',
                ]);
            }
        });
    }
});


