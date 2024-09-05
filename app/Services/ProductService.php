<?php

namespace App\Services;

use App\Enums\CategoryEnum;
use App\Models\Category;
use App\Models\Product;
use App\Models\SizeProduct;

class ProductService
{

    public static function createProduct($data): bool
    {
        $pictureName = basename($data['picture']);

        $product = Product::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'in_stock' => $data['inStock'],
            'img' => $pictureName,
            'category_id' => Category::where('slug', $data['category'])->first()->id,
            'active' => true,
        ]);

        $preparedProductSizesArr = [];

        foreach ($data['productSizes'] as $productSize) {
            $preparedProductSizesArr[$productSize['size']] = [
                'price' => $productSize['price'],
                'discount_price' => null,
                'gram' => $productSize['gram'],
                'default' => $productSize['default_product'],
            ];
        }

        $product->sizeProducts()->sync($preparedProductSizesArr);

        ImageService::movePhoto('public/' . config('paths.temporary') . '/' . $pictureName, 'public/' . config('paths.products_img') . '/' . $pictureName);

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
        return '';
    }

    private static function renderDefaultTable(): string
    {
        $sizeProducts = SizeProduct::all();
        return view('components.product-create-size', compact('sizeProducts'))->render();
    }
}
