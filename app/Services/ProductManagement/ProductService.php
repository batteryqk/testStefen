<?php

namespace App\Services\ProductManagement;

use App\Http\Traits\FileManagementTrait;
use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ProductService
{
    use FileManagementTrait;

    public function getProducts($orderBy = 'sort_order', $order = 'asc')
    {
        return Product::orderBy($orderBy, $order)->latest();
    }
    public function getProduct(string $encryptedId): Product|Collection
    {
        return Product::findOrFail(decrypt($encryptedId));
    }
    public function getDeletedProduct(string $encryptedId): Product|Collection
    {
        return Product::onlyTrashed()->findOrFail(decrypt($encryptedId));
    }

    public function createProduct(array $data): Product
    {
        return DB::transaction(function () use ($data) {
            $data['status'] = Product::STATUS_ACTIVE;
            $data['is_featured'] = Product::NOT_FEATURED;
            $data['created_by'] = admin()->id;
            $product = Product::create($data);
            return $product;
        });
    }

    public function updateProduct(Product $product, array $data, ): Product
    {
        return DB::transaction(function () use ($product, $data) {
            $data['updated_by'] = admin()->id;
            $product->update($data);
            return $product;
        });
    }

    public function delete(Product $product): void
    {
        $product->update(['deleted_by' => admin()->id]);
        $product->delete();
    }

    public function restore(string $encryptedId): void
    {
        $product = $this->getDeletedProduct($encryptedId);
        $product->update(['updated_by' => admin()->id]);
        $product->restore();
    }

    public function permanentDelete(string $encryptedId): void
    {
        $product = $this->getDeletedProduct($encryptedId);
        $product->forceDelete();
    }

    public function toggleStatus(Product $product): void
    {
        $product->update([
            'status' => !$product->status,
            'updated_by' => admin()->id
        ]);
    }
    public function toggleFeatured(Product $product): void
    {
        $product->update([
            'is_featured' => !$product->is_featured,
            'updated_by' => admin()->id
        ]);
    }
}
