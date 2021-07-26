<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'auth.login');
Auth::routes();

Route::middleware('auth')->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('users', UserController::class)->parameters([
        'users' => 'user:username',
    ]);

    Route::prefix('products')->name('products.')->group(function () {
        Route::get('connect', [ProductController::class, 'connect'])->name('connect');
        Route::get('add', [ProductController::class, 'add'])->name('add');
        Route::post('store', [ProductController::class, 'store'])->name('store');
        Route::get('search', [ProductController::class, 'search'])->name('search');
        Route::get('{product}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::patch('{product}/update', [ProductController::class, 'update'])->name('update');
    });
});
