<?php

namespace Database\Seeders;

use App\Enums\CategoryEnum;
use App\Models\Category;
use App\Models\Product;
use App\Models\SizeProduct;
use App\Services\Product\CreateProductService;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = Category::all();
        $sizes = SizeProduct::where('name', '!=', 'Combo')->get();
        $sizesCombo = SizeProduct::where('name', 'Combo')->first();

        foreach ($categories as $category) {
            for ($i = 1; $i < 10; $i++) {
                $newProduct = [
                    'category' => $category->slug,
                    'description' => fake()->sentence(rand(5, 10)),
                    'inStock' => rand(8, 40),
                    'name' => fake()->name,
                    'picture' => $category->slug . '.png',
                    'additionalProductActive' => false,
                ];

                if ($category->slug === CategoryEnum::Combo->value) {

                    $newProduct['productForCombo'] = [];

                    $randomProducts = Product::inRandomOrder()->with('sizeProducts')->where('category_id', '!=', $sizesCombo->id)->limit(rand(3, 6))->get();

                    foreach ($randomProducts as $randProduct){
                        $newProduct['productForCombo'][] = [
                            'relatedProductId' => $randProduct->id,
                            'sizeProductId' => $randProduct->sizeProducts->random(1)->first()->id,
                        ];
                    }
                    $newProduct['price'] = rand(30,50);
                    CreateProductService::createCombo($newProduct);
                } else {
                    $newProduct['productSizes'] = [];

                    $defProd = 1;

                    $sizesForProduct = $sizes->random(rand(1, 4));

                    foreach ($sizesForProduct as $item) {
                        $newProduct['productSizes'][] = [
                            'size' => $item->id,
                            'price' => rand(5, 50),
                            'gram' => rand(100, 500),
                            'default_product' => $defProd,
                        ];
                        $defProd = 0;
                    }
                    CreateProductService::createProduct($newProduct);
                }
            }
        }
    }
}
