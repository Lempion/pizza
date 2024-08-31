<?php

use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'login'])->name('admin.login');
    Route::post('login', [LoginController::class, 'authorize'])->name('admin.authorize');

    Route::middleware('admin')->group(function () {

    });
});

require __DIR__ . '/auth.php';
