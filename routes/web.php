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
        Route::get('get_current_table_for_create_product/{category:slug}', [ProductController::class, 'getCurrentTale'])->name('get-current-table-for-create-product');
        Route::resource('products', ProductController::class);
//        Route::get('create', [ProductController::class, 'index'])->name('admin.products.index');
    });
});

require __DIR__ . '/auth.php';
