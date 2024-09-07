<?php

namespace App\Services\Models;

use App\Models\Product;

class ModelProduct
{
    private const PAGINATE_PAGES = 10;

    public static function getProducts()
    {
        return Product::with(['sizeProducts', 'category'])->paginate(self::PAGINATE_PAGES);
    }
}
