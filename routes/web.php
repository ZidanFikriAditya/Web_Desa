<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\User\AllController::class, 'viewHome']);
Route::get('/post', [\App\Http\Controllers\User\AllController::class, 'viewBlog']);



Route::middleware('guest')->group(function () {

    Route::post('login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
    Route::get('login', [\App\Http\Controllers\Auth\AuthController::class, 'viewLogin'])->name('login');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('post', \App\Http\Controllers\Admin\PostController::class);
    Route::get('blog/get-data', [\App\Http\Controllers\Admin\PostController::class, 'showAll']);
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::post('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
});
