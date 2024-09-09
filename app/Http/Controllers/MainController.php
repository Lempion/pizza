<?php

namespace App\Http\Controllers;

use App\Enums\CategoryEnum;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class MainController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        $productsSections = [];

        // редис
        foreach ($categories as $category) {
            $productsSections[] = Cache::remember('main_page:category:' . $category->slug, 24*60*60, function () use ($category) {
                $products = $category->products()->with(['sizeProducts'])->get();
                $anchor = $category->slug;
                $name = $category->name;
                return view('components.products-section', compact('products', 'anchor', 'name'))->render();
            });
        }
        return view('home', compact('productsSections'));
    }

    public function getModalProduct(string $id)
    {
        return Cache::remember('products:id_' . $id, 24*60*60, function () use ($id) {
            $product = Product::with('category', 'sizeProducts')->where('active', 1)->where('id', $id)->first();

            $relatedProducts = null;
            if ($product->category->slug === CategoryEnum::Combo->value) {
                $relatedProducts = $product->relatedProducts()->with('sizeProducts')->get();
            }

            return view('components.product-modal', compact('product', 'relatedProducts'))->render();
        });
    }
}
