<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/search', [\App\Http\Controllers\ProductController::class, 'search']);
Route::view('/products/search-ui', 'search');
