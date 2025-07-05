<?php

namespace App\Http\Controllers\Backend\Admin\ProductManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductManagement\CategoryRequest;
use App\Http\Traits\AuditRelationTraits;
use App\Models\Category;
use App\Services\ProductManagement\CategoryService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    use AuditRelationTraits;

    protected function redirectIndex(): RedirectResponse
    {
        return redirect()->route('pm.category.index');
    }

    protected function redirectTrashed(): RedirectResponse
    {
        return redirect()->route('pm.category.trash');
    }

    protected CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public static function middleware(): array
    {
        return [
            'auth:admin', // Applies 'auth:admin' to all methods

            
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = $this->categoryService->getCategories();
            return DataTables::eloquent($query)
                ->editColumn('status', fn($category) => "<span class='badge badge-soft {$category->status_color}'>{$category->status_label}</span>")
                ->editColumn('created_by', fn($category) => $this->creater_name($category))
                ->editColumn('created_at', fn($category) => $category->created_at_formatted)
                ->editColumn('action', fn($category) => view('components.admin.action-buttons', [
                    'menuItems' => $this->menuItems($category),
                ])->render())
                ->rawColumns(['status', 'created_by', 'created_at', 'action'])
                ->make(true);
        }

        return view('backend.admin.product-management.category.index');
    }

    protected function menuItems($model): array
    {
        return [
            [
                'routeName' => 'javascript:void(0)',
                'data-id' => encrypt($model->id),
                'className' => 'view',
                'label' => 'Details',
            ],
            [
                'routeName' => 'pm.category.edit',
                'params' => [encrypt($model->id)],
                'label' => 'Edit',
            ],
            [
                'routeName' => 'pm.category.status',
                'params' => [encrypt($model->id)],
                'label' => $model->status_btn_label,
            ],
            [
                'routeName' => 'pm.category.destroy',
                'params' => [encrypt($model->id)],
                'label' => 'Delete',
                'delete' => true,
            ]

        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('backend.admin.product-management.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        try {
            $validated = $request->validated();
            $file = $request->validated('image') && $request->hasFile('image') ? $request->file('image') : null;
            $this->categoryService->createCategory($validated,$file);
            session()->flash('success', "Category created successfully");
        } catch (\Throwable $e) {
            session()->flash('Category creation failed');
            throw $e;
        }
        return $this->redirectIndex();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $data = $this->categoryService->getCategory($id);
        $data['creater_name'] = $this->creater_name($data);
        $data['updater_name'] = $this->updater_name($data);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $data['category'] = $this->categoryService->getCategory($id);
        return view('backend.admin.product-management.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        try {
            $category = $this->categoryService->getCategory($id);
            $validated = $request->validated();
            $file = $request->validated('image') && $request->hasFile('image') ? $request->file('image') : null;
            $this->categoryService->updateCategory($category, $validated,$file);
            session()->flash('success', "Category updated successfully");
        } catch (\Throwable $e) {
            session()->flash('Category update failed');
            throw $e;
        }
        return $this->redirectIndex();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->categoryService->deleteCategory($this->categoryService->getCategory($id));
            session()->flash('success', "Category deleted successfully");
        } catch (\Throwable $e) {
            session()->flash('Category delete failed');
            throw $e;
        }
        return $this->redirectIndex();
    }

    public function trash(Request $request)
    {
        if ($request->ajax()) {
            $query = $this->categoryService->getCategories()->onlyTrashed();

            return DataTables::eloquent($query)
                ->editColumn('status', fn($category) => "<span class='badge badge-soft {$category->status_color}'>{$category->status_label}</span>")
                ->editColumn('deleted_by', fn($category) => $this->deleter_name($category))
                ->editColumn('deleted_at', fn($category) => $category->deleted_at_formatted)
                ->editColumn('action', fn($category) => view('components.admin.action-buttons', [
                    'menuItems' => $this->trashedMenuItems($category),
                ])->render())
                ->rawColumns(['status', 'deleted_by', 'deleted_at', 'action'])
                ->make(true);
        }

        return view('backend.admin.product-management.category.trash');
    }


    protected function trashedMenuItems($model): array
    {
        return [
            [
                'routeName' => 'pm.category.restore',
                'params' => [encrypt($model->id)],
                'label' => 'Restore',
            ],
            [
                'routeName' => 'pm.category.permanent-delete',
                'params' => [encrypt($model->id)],
                'label' => 'Permanent Delete',
                'p-delete' => true,
            ]

        ];
    }

    public function restore(string $id)
    {
        try {
            $this->categoryService->restore(encrypt($id));
            session()->flash('success', "Category restored successfully");
        } catch (\Throwable $e) {
            session()->flash('Category restore failed');
            throw $e;
        }
        return $this->redirectTrashed();
    }

    public function permanentDelete(string $id): RedirectResponse
    {
        try {
            $this->categoryService->permanentDelete($id);
            session()->flash('success', "Category permanently deleted successfully");
        } catch (\Throwable $e) {
            session()->flash('Category permanent delete failed');
            throw $e;
        }
        return $this->redirectTrashed();
    }
    public function status(string $id)
    {
        $magazine = $this->categoryService->getCategory($id);

        $this->categoryService->toggleStatus($magazine);
        session()->flash('success', 'Category status updated successfully!');
        return redirect()->back();
    }
}
