<?php

namespace App\Services\Main;

use App\Enums\CategoryEnum;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class MainService
{

    private const CACHE_LIFETIME = 24 * 60 * 60;

    public static function getSectionsProductsFromCacheByCategory(): array
    {
        $categories = Category::all();

        $productsSections = [];

        foreach ($categories as $category) {
            $productsSections[] = Cache::remember('main_page:category:' . $category->slug, self::CACHE_LIFETIME, function () use ($category) {
                $products = $category->products()->with(['sizeProducts'])->get();
                $anchor = $category->slug;
                $name = $category->name;
                return view('components.products-section', compact('products', 'anchor', 'name'))->render();
            });
        }
        return $productsSections;
    }

    public static function getModalProductFromCache($productId): string
    {
        return Cache::remember('products:id_' . $productId, 24 * 60 * 60, function () use ($productId) {
            $product = Product::with('category', 'sizeProducts')->where('active', 1)->where('id', $productId)->first();

            $relatedProducts = null;
            if ($product->category->slug === CategoryEnum::Combo->value) {
                $relatedProducts = $product->relatedProducts()->with('sizeProducts')->get();
            }
            return view('components.product-modal', compact('product', 'relatedProducts'))->render();
        });
    }
}
