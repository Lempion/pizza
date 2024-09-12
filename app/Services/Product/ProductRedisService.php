<?php

namespace App\Services\Product;

use App\Enums\CategoryEnum;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;
use function view;

class ProductRedisService
{

    private const CACHE_LIFETIME = 24 * 60 * 60;

    private const KEY_CATEGORY = 'main_page:category:';
    private const KEY_PRODUCT = 'main_page:products:';

    public static function rememberProduct(int $productId): string
    {
        return Cache::remember(self::KEY_PRODUCT . $productId, self::CACHE_LIFETIME, function () use ($productId) {
            $product = Product::with('category', 'sizeProducts', 'additionalProducts')->where('active', 1)->where('id', $productId)->first();

            $relatedProducts = null;
            if ($product->category->slug === CategoryEnum::Combo->value) {
                $relatedProducts = $product->relatedProducts()->with('sizeProducts')->get();
            }
            return view('components.product-modal', compact('product', 'relatedProducts'))->render();
        });
    }

    public static function rewriteProduct(int $productId): void
    {
        self::destroyProduct($productId);
        self::rememberProduct($productId);
    }

    public static function destroyProduct(int $productId): void
    {
        Cache::forget(self::KEY_PRODUCT . $productId);
    }

    public static function rememberCategory(Category $category): string
    {
        return Cache::remember(self::KEY_CATEGORY . $category->slug, self::CACHE_LIFETIME, function () use ($category) {
            $products = $category->products()->with(['sizeProducts'])->get();
            $anchor = $category->slug;
            $name = $category->name;
            return view('components.products-section', compact('products', 'anchor', 'name'))->render();
        });
    }

    public static function rewriteCategory(Category $category): void
    {
        self::destroyCategory($category->slug);
        self::rememberCategory($category);
    }

    public static function destroyCategory(string $categorySlug): void
    {
        Cache::forget(self::KEY_CATEGORY . $categorySlug);
    }
}
