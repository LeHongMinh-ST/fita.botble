<?php

namespace Botble\Department\Http\Controllers;

use Botble\Base\Events\BeforeEditContentEvent;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Forms\FormBuilder;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Department\Forms\DepartmentItemForm;
use Botble\Department\Http\Requests\DepartmentItemRequest;
use Botble\Department\Repositories\Interfaces\DepartmentItemInterface;
use Botble\Department\Tables\DepartmentItemTable;
use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;

class DepartmentItemController extends BaseController
{
    /**
     * @var DepartmentItemInterface
     */
    protected $departmentItemRepository;

    /**
     * SimpleSliderItemController constructor.
     * @param DepartmentItemInterface $departmentItemRepository
     */
    public function __construct(DepartmentItemInterface $departmentItemRepository)
    {
        $this->departmentItemRepository = $departmentItemRepository;
    }

    /**
     * @param DepartmentItemTable $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(DepartmentItemTable $dataTable)
    {
        return $dataTable->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        return $formBuilder->create(DepartmentItemForm::class)
            ->setTitle(trans('plugins/department::department.create_new_slide'))
            ->setUseInlineJs(true)
            ->renderForm();
    }

    /**
     * @param DepartmentItemRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(DepartmentItemRequest $request, BaseHttpResponse $response)
    {
        $simpleSlider = $this->departmentItemRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(SIMPLE_SLIDER_ITEM_MODULE_SCREEN_NAME, $request, $simpleSlider));

        return $response->setMessage(trans('core/base::notices.create_success_message'));
    }

    /**
     * @param $id
     * @param FormBuilder $formBuilder
     * @param Request $request
     * @return string
     */
    public function edit($id, FormBuilder $formBuilder, Request $request)
    {
        $simpleSliderItem = $this->departmentItemRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $simpleSliderItem));

        return $formBuilder->create(DepartmentItemForm::class, ['model' => $simpleSliderItem])
            ->setTitle(trans('plugins/department::department.edit', ['id' => $simpleSliderItem->id]))
            ->setUseInlineJs(true)
            ->renderForm();
    }

    /**
     * @param $id
     * @param DepartmentItemRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, DepartmentItemRequest $request, BaseHttpResponse $response)
    {
        $simpleSlider = $this->departmentItemRepository->findOrFail($id);
        $simpleSlider->fill($request->input());

        $this->departmentItemRepository->createOrUpdate($simpleSlider);

        event(new UpdatedContentEvent(DEPARTMENT_ITEM_MODULE_SCREEN_NAME, $request, $simpleSlider));

        return $response->setMessage(trans('core/base::notices.update_success_message'));
    }

    /**
     * @return string
     * @throws \Throwable
     */
    public function destroy($id)
    {
        $department = $this->departmentItemRepository->findOrFail($id);

        return view('plugins/department::partials.delete', compact('department'))->render();
    }

    /**
     * @param Request $request
     * @param $id
     * @param BaseHttpResponse $response
     * @return array|BaseHttpResponse
     */
    public function postDelete(Request $request, $id, BaseHttpResponse $response)
    {
        try {
            $simpleSlider = $this->departmentItemRepository->findOrFail($id);
            $this->departmentItemRepository->delete($simpleSlider);

            event(new DeletedContentEvent(DEPARTMENT_ITEM_MODULE_SCREEN_NAME, $request, $simpleSlider));

            return $response->setMessage(trans('core/base::notices.delete_success_message'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage($exception->getMessage());
        }
    }
}
