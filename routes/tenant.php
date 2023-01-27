<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\InstanceController;
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
    'CheckTenantForMaintenanceMode',
])->group(function () {

    // Public
    Route::controller(FrontController::class)->group(function () {
        Route::get('/', 'homePage')->name('homePage');
        Route::get('/about', 'aboutPage')->name('aboutPage');
        Route::get('/contact', 'contactPage')->name('contactPage');
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
            'setting' => SettingController::class,
        ]);

        Route::resource('instance', InstanceController::class)
            ->middleware('isSystemInstance');
    });

});
