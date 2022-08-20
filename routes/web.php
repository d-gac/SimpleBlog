<?php

use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Public\FrontController;
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

    Route::get('/', [FrontController::class, 'homePage'])->name('homePage');
    Route::get('post/{slug}', [FrontController::class, 'postDetail'])->name('homePage');
//    Route::get('/home', [HomeController::class, 'index'])->name('home'); //?
    Auth::routes();

});


// Authorized
Route::middleware('auth')->prefix('/admin')->group(function () {

    Route::view('/', 'AdminPanel.Sections.dashboard')->name('admin.dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('tag', TagController::class);
    Route::resource('post', PostController::class);
    Route::resource('setting', SettingController::class);

});




