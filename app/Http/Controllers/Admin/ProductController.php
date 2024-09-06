<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductStoreComboRequest;
use App\Http\Requests\Admin\ProductStoreRequest;
use App\Http\Requests\Admin\UploadProductImgRequest;
use App\Models\Category;
use App\Services\ImageService;
use App\Services\Models\ModelProduct;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = ModelProduct::getProducts();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(ProductStoreRequest $request)
    {
        if (ProductService::createProduct($request->validated())) {
            return response()->json('Product created!');
        }
        return response()->json('Server error', 500);
    }

    public function storeCombo(ProductStoreComboRequest $request)
    {
        if (ProductService::createCombo($request->validated())) {
            return response()->json('Combo created!');
        }
        return response()->json('Server error', 500);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function getCurrentTale(Category $category): string
    {
        return ProductService::renderCurrentTable($category->slug);
    }

    public function uploadProductImg(UploadProductImgRequest $request): string
    {
        return ImageService::uploadPhoto($request->productImg, config('paths.temporary'));
    }
}
