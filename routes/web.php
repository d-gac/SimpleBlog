<?php

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


// Public
Route::prefix('/')->group(function () {

    Route::view('/', 'welcome');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Auth::routes();

});


// Authorized
Route::middleware('auth')->prefix('/admin')->group(function () {

    Route::view('/', 'AdminPanel.Sections.dashboard')->name('admin.dashboard');

});




