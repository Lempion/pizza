<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class NutritionalValue extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'energy_value', 'proteins', 'fats', 'carbohydrates'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    protected $hidden = ['created_at', 'updated_at'];
}
