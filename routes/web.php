<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\HomeController;
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
Route::get('/send', [HomeController::class, 'send'])->name('home.send');

// Public
Route::prefix('/')->group(function () {

    Route::view('/', 'FrontViews.front-main');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Auth::routes();

});


// Authorized
Route::middleware('auth')->prefix('/admin')->group(function () {

    Route::view('/', 'AdminPanel.Sections.dashboard')->name('admin.dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);

});




