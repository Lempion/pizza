<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd('Hello');
})->name('home');

require __DIR__ . '/auth.php';
