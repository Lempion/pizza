<?php

namespace App\Http\Controllers;

use App\Services\Main\MainService;

class MainController extends Controller
{

    public function index()
    {
        $productsSections = MainService::getSectionsProductsFromCacheByCategory();
        return view('home', compact('productsSections'));
    }

    public function getModalProduct(string $id)
    {
        return MainService::getModalProductFromCache($id);
    }
}
