<?php

namespace App\Services\Models;

use App\Models\Product;

class ModelProduct
{
    private const PAGINATE_PAGES = 5;

    public static function getProducts()
    {
        return Product::paginate(self::PAGINATE_PAGES)->all();
    }
}
