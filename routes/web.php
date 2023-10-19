<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;  

Route::get('/', [HomeController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login']);
Route::get('/register/success', [RegisterController::class, 'success'])->name('register-success');

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/home', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::get('/products', [ProductController::class, 'index'])->name('product');
    Route::get('/products/create', [ProductController::class, 'create'])->name('product-create');
    Route::post('/products', [ProductController::class, 'store'])->name('product-store');
    Route::get('/products/{id}', [ProductController::class, 'details'])->name('product-details');
    Route::get('/products/{id}', [ProductController::class,'edit'])->name('product-edit');
    Route::post('/products/{id}', [ProductController::class, 'update'])->name('product-update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product-destroy');
    
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transaction');
    Route::get('/get-product/{id}', [TransactionController::class, 'getProduct'])->name('get-product');
    Route::post('/transaction-store', [TransactionController::class, 'store'])->name('transaction-store');
    Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transaction-create');
    
});

Auth::routes();

