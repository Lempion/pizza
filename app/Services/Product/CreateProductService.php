<?php

namespace App\Services\Product;

use App\Enums\CategoryEnum;
use App\Models\Category;
use App\Models\Product;
use App\Models\SizeProduct;
use App\Services\ImageService;
use function config;
use function view;

class CreateProductService
{

    public static function createProduct(array $data): bool
    {
        $product = self::createDefaultProduct($data);

        $productSizesArr = self::prepareProductSizeArr($data['productSizes']);

        $product->sizeProducts()->sync($productSizesArr);

        return true;
    }

    public static function createCombo(array $data): bool
    {
        $product = self::createDefaultProduct($data);

        $sizeCombo = SizeProduct::firstOrCreate(['name' => 'Combo'], ['visible' => false]);

        $productSizesArr = self::prepareProductSizeArr([[
            'size' => $sizeCombo->id,
            'price' => $data['price'],
            'discount_price' => null,
            'gram' => 0,
            'default_product' => true,
        ]]);

        $product->sizeProducts()->sync($productSizesArr);

        $relatedProductsArr = self::prepareRelatedProductsForComboArr($data['productForCombo']);

        $product->relatedProducts()->sync($relatedProductsArr);

        return true;
    }

    public static function renderCurrentTable($category): string
    {
        return match ($category) {
            CategoryEnum::Combo->value => self::renderComboTable(),
            default => self::renderDefaultTable()
        };
    }

    private static function renderComboTable(): string
    {
        $products = Product::with('category')->whereHas('category', function ($query) {
            return $query->where('slug', '!=', CategoryEnum::Combo->value);
        })->get();
        return view('components.product-combo', compact('products'))->render();
    }

    private static function renderDefaultTable(): string
    {
        $sizeProducts = SizeProduct::where('visible', true)->get();
        return view('components.product-create-size', compact('sizeProducts'))->render();
    }

    private static function createDefaultProduct(array $data): mixed
    {
        $pictureName = basename($data['picture']);

        ImageService::movePhoto('public/' . config('paths.temporary') . '/' . $pictureName, 'public/' . config('paths.products_img') . '/' . $pictureName);

        return Product::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'in_stock' => $data['inStock'],
            'img' => $pictureName,
            'category_id' => Category::where('slug', $data['category'])->first()->id,
            'active' => true,
        ]);
    }

    private static function prepareProductSizeArr(array $productSizes): array
    {
        $resultArr = [];

        foreach ($productSizes as $productSize) {
            $resultArr[$productSize['size']] = [
                'price' => $productSize['price'],
                'discount_price' => null,
                'gram' => $productSize['gram'],
                'default' => $productSize['default_product'],
            ];
        }
        return $resultArr;
    }

    private static function prepareRelatedProductsForComboArr(array $products): array
    {
        $resultArr = [];

        foreach ($products as $product) {
            $resultArr[$product['relatedProductId']] = [
                'size_product_id' => $product['sizeProductId'],
            ];
        }
        return $resultArr;
    }
}
