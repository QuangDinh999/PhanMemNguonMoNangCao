<?php

use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
    return view('welcome');
});
    Route::prefix('product') -> group(function(){
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
    Route::get('/add', function () {
        return view('product.add');
    })->name('add');
    Route::get('/{id?}', function(string $id = '123'){
        return view('product.productDetail', ['id' => $id]);
    });



    Route::prefix('product')->group(function () {
        Route::controller(ProductController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create')->name('add');
            Route::get('detail/{id?}', 'getDetail');
            Route::post('/store', 'store')->name('store');
        });
    });

    Route::get('login', [\App\Http\Controllers\AuthController::class, 'login']);
    Route::post('checklogin', [\App\Http\Controllers\AuthController::class, 'checkLogin']);
    Route::get('register', [\App\Http\Controllers\AuthController::class, 'register']);
    Route::post('register-action', [\App\Http\Controllers\AuthController::class, 'registerAction']);
});
