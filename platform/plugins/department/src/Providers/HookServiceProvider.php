<?php

namespace Botble\department\Providers;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Department\Enums\DepartmentStatusEnum;
use Botble\Department\Repositories\Interfaces\DepartmentInterface;
use Botble\Page\Models\Page;
use Botble\Page\Repositories\Interfaces\PageInterface;
use Botble\Shortcode\Compilers\Shortcode;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Theme;
use Html;

class HookServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (defined('PAGE_MODULE_SCREEN_NAME')) {
            add_filter(PAGE_FILTER_FRONT_PAGE_CONTENT, [$this, 'renderDepartmentPage'], 3, 3);
            add_filter(PAGE_FILTER_PAGE_NAME_IN_ADMIN_LIST, [$this, 'addAdditionNameToPageName'], 147, 2);
        }

        if (function_exists('theme_option')) {
            add_action(RENDERING_THEME_OPTIONS_PAGE, [$this, 'addThemeOptions'], 36);
        }
    }

    /**
     * @param string|null $content
     * @param Page $page
     * @return array|string|null
     */
    public function renderDepartmentPage(?string $content, Page $page)
    {
        if ($page->id == theme_option('department_page_id', setting('department_page_id'))) {
            $view = 'plugins/department::themes.templates.departments';

            if (defined('THEME_OPTIONS_MODULE_SCREEN_NAME')) {
                Theme::asset()
                    ->usePath(false)
                    ->add('department-css', asset('vendor/core/plugins/department/css/department.css'), [], [], '1.0.0');
            }

            $themeView = Theme::getThemeNamespace() . '::views.templates.departments';
            if (view()->exists($themeView)) {
                $view = $themeView;
            }
            return view($view, [
                'departments' => get_all_department(),
            ])
                ->render();
        }

        return $content;
    }

    /**
     * @param string|null $name
     * @param Page $page
     * @return string|null
     */
    public function addAdditionNameToPageName(?string $name, Page $page)
    {
        if ($page->id == theme_option('department_page_id', setting('department_page_id'))) {
            $subTitle = Html::tag('span', trans('plugins/department::base.department_page'), ['class' => 'additional-page-name'])
                ->toHtml();

            if (Str::contains($name, ' —')) {
                return $name . ', ' . $subTitle;
            }

            return $name . ' —' . $subTitle;
        }

        return $name;
    }

    public function addThemeOptions()
    {
        $pages = $this->app->make(PageInterface::class)->pluck('name', 'id', ['status' => BaseStatusEnum::PUBLISHED]);

        theme_option()
            ->setSection([
                'title'      => trans('plugins/department::department.name'),
                'desc'       => 'Theme options for Department',
                'id'         => 'opt-text-subsection-department',
                'subsection' => true,
                'icon'       => 'fa fa-list',
                'fields'     => [
                    [
                        'id'         => 'department_page_id',
                        'type'       => 'customSelect',
                        'label'      => trans('plugins/department::department.base.department_page_id'),
                        'attributes' => [
                            'name'    => 'department_page_id',
                            'list'    => ['' => trans('plugins/department::department.base.select')] + $pages,
                            'value'   => '',
                            'options' => [
                                'class' => 'form-control',
                            ],
                        ],
                    ],
                ]
            ]);
    }
}
