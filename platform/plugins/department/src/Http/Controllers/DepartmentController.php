<?php

namespace Botble\Department\Http\Controllers;

use Botble\ACL\Models\User;
use Botble\Base\Events\BeforeEditContentEvent;
use Botble\Base\Traits\HasDeleteManyItemsTrait;
use Botble\Department\Http\Requests\DepartmentRequest;
use Botble\Department\Models\Department;
use Botble\Department\Repositories\Interfaces\DepartmentInterface;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Department\Repositories\Interfaces\DepartmentItemInterface;
use Botble\Slug\Repositories\Interfaces\SlugInterface;
use Illuminate\Http\Request;
use Exception;
use Botble\Department\Tables\DepartmentTable;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Department\Forms\DepartmentForm;
use Botble\Base\Forms\FormBuilder;
use Illuminate\Support\Facades\Auth;
use Theme;

class DepartmentController extends BaseController
{
    use HasDeleteManyItemsTrait;
    /**
     * @var DepartmentInterface
     */
    protected $departmentRepository;
    protected $departmentItemRepository;

    /**
     * @param DepartmentInterface $departmentRepository
     */
    public function __construct(
        DepartmentInterface $departmentRepository,
        DepartmentItemInterface $departmentItemRepository
    )
    {
        $this->departmentRepository = $departmentRepository;
        $this->departmentItemRepository = $departmentItemRepository;
    }

    /**
     * @param DepartmentTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(DepartmentTable $table)
    {
        page_title()->setTitle(trans('plugins/department::department.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/department::department.create'));

        return $formBuilder->create(DepartmentForm::class)->renderForm();
    }

    /**
     * @param DepartmentRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(DepartmentRequest $request, BaseHttpResponse $response)
    {
        $department = $this->departmentRepository->createOrUpdate(array_merge($request->input(), [
            'created_by' => Auth::id(),
            'updated_by' => Auth::id(),
        ]));

        event(new CreatedContentEvent(DEPARTMENT_MODULE_SCREEN_NAME, $request, $department));

        return $response
            ->setPreviousUrl(route('department.index'))
            ->setNextUrl(route('department.edit', $department->id))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function edit($id, FormBuilder $formBuilder, Request $request)
    {
        $department = $this->departmentRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $department));

        page_title()->setTitle(trans('plugins/department::department.edit') . ' "' . $department->name . '"');

        return $formBuilder
            ->create(DepartmentForm::class, ['model' => $department])
            ->renderForm();
    }

    /**
     * @param int $id
     * @param DepartmentRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, DepartmentRequest $request, BaseHttpResponse $response)
    {
        $department = $this->departmentRepository->findOrFail($id);

        $department->fill($request->input());

        $department = $this->departmentRepository->createOrUpdate($department);

        event(new UpdatedContentEvent(DEPARTMENT_MODULE_SCREEN_NAME, $request, $department));

        return $response
            ->setPreviousUrl(route('department.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function destroy(Request $request, $id, BaseHttpResponse $response)
    {
        try {
            $department = $this->departmentRepository->findOrFail($id);

            $this->departmentRepository->delete($department);

            event(new DeletedContentEvent(DEPARTMENT_MODULE_SCREEN_NAME, $request, $department));

            return $response->setMessage(trans('core/base::notices.delete_success_message'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage($exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     * @throws Exception
     */
    public function deletes(Request $request, BaseHttpResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response
                ->setError()
                ->setMessage(trans('core/base::notices.no_select'));
        }

        foreach ($ids as $id) {
            $department = $this->departmentRepository->findOrFail($id);
            $this->departmentRepository->delete($department);
            event(new DeletedContentEvent(DEPARTMENT_MODULE_SCREEN_NAME, $request, $department));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }

    public function getBySlug($slug, SlugInterface $slugRepository)
    {
        $slug = $slugRepository->getFirstBy(['key' => $slug, 'reference_type' => Department::class]);

        if (!$slug) {
            abort(404);
        }

        $department = $this->departmentRepository->getFirstBy(['id' => $slug->reference_id]);
        if (!$department) {
            abort(404);
        }
        $departmentItems = $this->departmentItemRepository->allBy([
            'department_id' => $department->id
        ]);
        if (!$departmentItems) {
            abort(404);
        }
        do_action(BASE_ACTION_PUBLIC_RENDER_SINGLE, DEPARTMENT_MODULE_SCREEN_NAME, $department);

        return Theme::scope('department-items', compact('departmentItems', 'department'), 'plugins/department::themes.templates.department-items')->render();
    }
}
