<?php

use App\Http\Traits\AuditColumnsTrait;
use App\Models\Product;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use SoftDeletes, AuditColumnsTrait;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sort_order')->default(0);
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('stock_no')->unique();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->unsignedBigInteger('category_id');
            $table->tinyInteger('status')->default(Product::STATUS_ACTIVE);
            $table->boolean('is_featured')->default(Product::NOT_FEATURED);
            $table->timestamps();
            $table->softDeletes();
            $this->addAdminAuditColumns($table);

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->index(['slug', 'status']);
            $table->index(['is_featured', 'status']);
            $table->index(['price', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
