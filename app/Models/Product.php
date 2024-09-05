<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'in_stock', 'img', 'category_id', 'active'];

    public function relatedProducts(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_combo', 'product_id', 'related_product_id');
    }

    public function additionalProducts(): BelongsToMany
    {
        return $this->belongsToMany(AdditionalProduct::class, 'product_additional_product');
    }

    public function sizeProducts(): BelongsToMany
    {
        return $this->belongsToMany(SizeProduct::class, 'product_size_product')->withPivot(['price', 'discount_price', 'gram', 'default']);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function nutritionalValue(): HasOne
    {
        return $this->hasOne(NutritionalValue::class);
    }

    protected function img(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => asset('storage') . '/' . config('paths.products_img') . '/' . $value,
        );
    }
}
