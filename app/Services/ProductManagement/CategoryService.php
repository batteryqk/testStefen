<?php

namespace App\Services\ProductManagement;

use App\Http\Traits\FileManagementTrait;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryService
{
    use FileManagementTrait;
    public function getCategories($orderBy = 'sort_order', $order = 'asc')
    {
        return Category::orderBy($orderBy, $order)->latest();
    }
    public function getCategory(string $encryptedId)
    {
        return Category::find(decrypt($encryptedId));
    }
    public function getDeletedCategory(string $encryptedId)
    {
        return Category::onlyTrashed()->find(decrypt($encryptedId));
    }
    public function createCategory(array $data, $file = null)
    {
        return DB::transaction(function () use ($data, $file) {
            if ($file) {
                $data['image'] = $this->handleFileUpload($file, 'categories', $data['name']);
            }
            $data['status'] = Category::STATUS_ACTIVE;
            $data['created_by'] = admin()->id;
            return Category::create($data);
        });
    }
    public function updateCategory(Category $category, array $data,$file = null)
    {
        return DB::transaction(function () use ($category, $data, $file) {
            if ($file) {
                $data['image'] = $this->handleFileUpload($file, 'categories', $data['name']);
                $this->fileDelete($category->image);
            }

            $data['updated_by'] = admin()->id;
            return $category->update($data);
        });
    }
    public function deleteCategory(Category $category)
    {
        $category->update(['deleted_by' => admin()->id]);
        $category->delete();
    }
    public function restore(string $encryptedId)
    {
        $id = decrypt($encryptedId);
        $category = $this->getDeletedCategory($id);
        $category->update(['updated_by' => admin()->id]);
        return $category->restore();
    }

    public function permanentDelete(string  $encryptedId)
    {
        $category = $this->getDeletedCategory($encryptedId);
        if ($category->image) {
            $this->fileDelete($category->image);
        }
        return $category->forceDelete();
    }
    public function toggleStatus(Category $category): void
    {
        $category->update([
            'status' => !$category->status,
            'updated_by' => admin()->id
        ]);
    }
}
