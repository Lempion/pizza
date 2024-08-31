<?php

use App\Enums\PermissionEnum;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('admin')->middleware('role:Admin')->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');


    Route::middleware('permission:' . PermissionEnum::Products->value)->group(function () {
        Route::resource('products', ProductController::class);
//        Route::get('create', [ProductController::class, 'index'])->name('admin.products.index');
    });
});

require __DIR__ . '/auth.php';
