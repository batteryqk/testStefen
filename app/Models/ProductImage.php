<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends BaseModel
{
   protected $fillable = [
        'sort_order',
        'product_id',
        'image',
        'is_primary',
    ];

    
         public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->appends = array_merge(parent::getAppends(), [

            'modified_image',

        ]);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function scopePrimary(Builder $query): Builder
    {
        return $query->where('is_primary', 1);
    }

    public function getModifiedImageAttribute()
    {
        return storage_url($this->image);
    }
}
