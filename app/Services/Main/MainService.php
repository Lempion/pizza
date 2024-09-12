<?php

namespace App\Services\Main;

use App\Models\Category;
use App\Services\Product\ProductRedisService;

class MainService
{
    public static function getSectionsProductsFromCacheByCategory(): array
    {
        $categories = Category::all();

        $productsSections = [];

        foreach ($categories as $category) {
            $productsSections[] = ProductRedisService::rememberCategory($category);
        }
        return $productsSections;
    }

    public static function getModalProductFromCache($productId): string
    {
        return ProductRedisService::rememberProduct($productId);
    }
}
