<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Public\FrontController;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {

    Route::get('/', function () {
        return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
    });
    // Public
    Route::controller(FrontController::class)->group(function () {
        Route::get('/', 'homePage')->name('homePage');
        Route::get('post/{slug}', 'postDetail')->name('post.detail');
        Route::get('user/{slug_name}', 'userDetail')->name('user.detail');
    });
    Auth::routes();

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

});