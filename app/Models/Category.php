<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name'];

    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }

    protected $hidden = ['created_at', 'updated_at'];
}
