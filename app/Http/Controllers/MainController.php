<?php

namespace App\Http\Controllers;

use App\Enums\CategoryEnum;
use App\Models\Category;
use App\Models\Product;

class MainController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        $productsSections = [];

        // редис
        foreach ($categories as $category) {
            $products = $category->products()->with(['sizeProducts'])->get();
            $anchor = $category->slug;
            $name = $category->name;
            $productsSections[] = view('components.products-section', compact('products', 'anchor', 'name'))->render();
        }
        return view('home', compact('productsSections'));
    }

    public function getModalProduct(string $id)
    {
        // редис
        $product = Product::with('category', 'sizeProducts')->where('active', 1)->where('id', $id)->first();

        $relatedProducts = null;
        if ($product->category->slug === CategoryEnum::Combo->value) {
            $relatedProducts = $product->relatedProducts()->with('sizeProducts')->get();
        }

        return view('components.product-modal', compact('product', 'relatedProducts'))->render();
    }
}
