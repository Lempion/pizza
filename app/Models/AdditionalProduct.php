<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalProduct extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'img', 'price'];

    protected function img(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => asset('storage') . '/' . config('paths.additional_product') . '/' . $value,
        );
    }
}
