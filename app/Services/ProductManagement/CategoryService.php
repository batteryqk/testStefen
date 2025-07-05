<?php

namespace App\Services\ProductManagement;

use App\Models\Category;

class CategoryService
{
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
    public function createCategory(array $data)
    {
        $data['created_by'] = admin()->id;
        return Category::create($data);
    }
    public function updateCategory(Category $category, array $data)
    {
        $data['updated_by'] = admin()->id;
        return $category->update($data);
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
