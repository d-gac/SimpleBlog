<?php

use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HeaderController;
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

    Route::controller(FrontController::class)->group(function () {
        Route::get('/', 'homePage')->name('homePage');
        Route::get('post/{slug}', 'postDetail')->name('post.detail');
        Route::get('user/{slug_name}', 'userDetail')->name('user.detail');
    });

    Auth::routes();

});


// Authorized
Route::middleware('auth')->prefix('/admin')->group(function () {

    Route::view('/', 'AdminPanel.Sections.dashboard')->name('admin.dashboard');

    Route::resources([
        'category' => CategoryController::class,
        'tag' => TagController::class,
        'post' => PostController::class,
        'footer' => FooterController::class,
        'header' => HeaderController::class,
    ]);

});




