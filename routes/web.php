<?php

use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('admin')->middleware('role:Admin')->group(function () {

    Route::get('main', [MainController::class, 'index'])->name('admin.main.index');



    Route::middleware('role:admin')->group(function () {

    });
});

require __DIR__ . '/auth.php';
