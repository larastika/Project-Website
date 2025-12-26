<?php

use App\Http\Controllers\editor\AuthController;
use App\Http\Controllers\editor\ContactController;
use App\Http\Controllers\editor\MasterHeadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\editor\HomeController;
use App\Http\Controllers\editor\UserController;
use App\Http\Controllers\editor\ProductController;

use App\Http\Controllers\PublicController; // <-- Tambahkan ini
use App\Models\Contact;
use App\Models\Product;

Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'index')->name('public');
    Route::get('data', 'getData')->name('public.data');
    Route::get('detail', 'detail')->name('detail');
    Route::get('product', 'product')->name('product');
});
Route::controller(AuthController::class)->middleware('guest')->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/auth', 'authenticate')->name('login.auth');
});

Route::prefix('editor')->middleware('auth')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('logout', 'logout')->name('logout');
    });
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('editor.home');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index')->name('editor.users');
        Route::get('/users/data', 'getData')->name('editor.users.data');
        Route::post('/users/store', 'storeData')->name('editor.users.store');
        Route::get('/users/detail', 'detail')->name('editor.users.detail');
        Route::post('/users/update', 'updatedata')->name('editor.users.update');
        Route::delete('/users/delete', 'deleteData')->name('editor.users.delete');
    });
    Route::controller(MasterHeadController::class)->group(function () {
        Route::get('/master-head', 'index')->name('editor.master-head');
        Route::get('/master-head/data', 'getData')->name('editor.master-head.data');
        Route::post('/master-head/store', 'storeData')->name('editor.master-head.store');
        Route::get('/master-head/detail', 'detail')->name('editor.master-head.detail');
        Route::post('/master-head/update', 'updatedata')->name('editor.master-head.update');
        Route::delete('/master-head/delete', 'deleteData')->name('editor.master-head.delete');
    });
    Route::controller(ContactController::class)->group(function () {
        Route::get('/contact', 'index')->name('editor.contact');
        Route::get('/contact/data', 'getData')->name('editor.contact.data');
        Route::delete('/contact/delete', 'deleteData')->name('editor.contact.delete');
    });
    Route::controller(ProductController::class)->group(function () {

        Route::get('/product', 'index')->name('editor.product');
        Route::get('/product/data', 'getData')->name('editor.product.data');
        Route::post('/product/store', 'storeData')->name('editor.product.store');
        Route::get('/product/detail', 'detail')->name('editor.product.detail');
        Route::post('/product/update', 'updatedata')->name('editor.product.update');
        Route::delete('/product/delete', 'deleteData')->name('editor.product.delete');
    });
});
