<?php

namespace Botble\Department\Providers;

use Botble\Department\Models\Department;
use Botble\Department\Models\DepartmentItem;
use Botble\Department\Repositories\Caches\DepartmentItemCacheDecorator;
use Botble\Department\Repositories\Eloquent\DepartmentItemRepository;
use Botble\Department\Repositories\Interfaces\DepartmentItemInterface;
use Illuminate\Support\ServiceProvider;
use Botble\Department\Repositories\Caches\DepartmentCacheDecorator;
use Botble\Department\Repositories\Eloquent\DepartmentRepository;
use Botble\Department\Repositories\Interfaces\DepartmentInterface;
use Illuminate\Support\Facades\Event;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class DepartmentServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(DepartmentInterface::class, function () {
            return new DepartmentCacheDecorator(new DepartmentRepository(new Department));
        });

        $this->app->bind(DepartmentItemInterface::class, function () {
            return new DepartmentItemCacheDecorator(new DepartmentItemRepository(new DepartmentItem));
        });

        $this->setNamespace('plugins/department')->loadHelpers();
    }

    public function boot()
    {
        $this
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
            if (defined('LANGUAGE_ADVANCED_MODULE_SCREEN_NAME')) {
                // Use language v2
                \Botble\LanguageAdvanced\Supports\LanguageAdvancedManager::registerModule(Department::class, [
                    'name',
                ]);
            } else {
                // Use language v1
                $this->app->booted(function () {
                    \Language::registerModule([Department::class]);
                });
            }
        }

        Event::listen(RouteMatched::class, function () {
            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-department',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/department::department.name',
                'icon'        => 'fa fa-list',
                'url'         => route('department.index'),
                'permissions' => ['department.index'],
            ]);
        });

        \SlugHelper::registerModule(Department::class);
        \SlugHelper::setPrefix(Department::class, 'bo-mon');

        $this->app->booted(function () {
            $this->app->register(HookServiceProvider::class);
        });
    }
}
