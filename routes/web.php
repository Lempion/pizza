<?php

use App\Enums\PermissionEnum;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('product_modal/{id}', [MainController::class, 'getModalProduct'])->name('get-modal-product');

Route::prefix('admin')->middleware('role:Admin')->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');


    Route::middleware('permission:' . PermissionEnum::Products->value)->group(function () {
        Route::get('get_current_table_for_create_product/{category:slug}', [ProductController::class, 'getCurrentTale'])->name('get-current-table-for-create-product');
        Route::post('upload_product_img', [ProductController::class, 'uploadProductImg'])->name('upload-product-img');
        Route::post('store_combo', [ProductController::class, 'storeCombo'])->name('products.store-combo');
        Route::resource('products', ProductController::class);
    });
});

require __DIR__ . '/auth.php';
