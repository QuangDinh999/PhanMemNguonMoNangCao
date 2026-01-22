<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('product') -> group(function(){
    Route::get('/', function () {
        return view('product.index');
    });
    Route::get('/add', function () {
        return view('product.add');
    })->name('add');
    Route::get('/{id?}', function(string $id = '123'){
        return view('product.productDetail', ['id' => $id]);
    });
});
