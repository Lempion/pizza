<?php

use App\Models\Product;
use App\Models\SizeProduct;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_size_product', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class)->constrained();
            $table->foreignIdFor(SizeProduct::class)->constrained();
            $table->integer('price');
            $table->integer('discount_price')->nullable();
            $table->integer('gram');
            $table->boolean('default');

            $table->unique(['product_id', 'size_product_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_size_product');
    }
};
