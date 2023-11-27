<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BusketController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderAdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PolicyCookieController;
use App\Http\Controllers\PolicyPrivController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\ShopAdminController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about');
});

Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact');
});

Route::prefix('policy-cookies')->group(function () {
    Route::get('/', [PolicyCookieController::class, 'index'])->name('cookie');
    Route::get('/create', [PolicyCookieController::class, 'create'])->name('cookie.create');
    Route::post('/store', [PolicyCookieController::class, 'store'])->name('cookie.store');
    Route::get('/edit/{element}', [PolicyCookieController::class, 'edit'])->name('cookie.edit');
    Route::put('/update/{element}', [PolicyCookieController::class, 'update'])->name('cookie.update');
    Route::delete('/delete/{element}', [PolicyCookieController::class, 'delete'])->name('cookie.delete');
});

Route::prefix('policy-priv')->group(function () {
    Route::get('/', [PolicyPrivController::class, 'index'])->name('priv');
    Route::get('/create', [PolicyPrivController::class, 'create'])->name('priv.create');
    Route::post('/store', [PolicyPrivController::class, 'store'])->name('priv.store');
    Route::get('/edit/{element}', [PolicyPrivController::class, 'edit'])->name('priv.edit');
    Route::put('/update/{element}', [PolicyPrivController::class, 'update'])->name('priv.update');
    Route::delete('/delete/{element}', [PolicyPrivController::class, 'delete'])->name('priv.delete');
});

Route::prefix('rule')->group(function () {
    Route::get('/', [RuleController::class, 'index'])->name('rule');
    Route::get('/create', [RuleController::class, 'create'])->name('rule.create');
    Route::post('/store', [RuleController::class, 'store'])->name('rule.store');
    Route::get('/edit/{element}', [RuleController::class, 'edit'])->name('rule.edit');
    Route::put('/update/{element}', [RuleController::class, 'update'])->name('rule.update');
    Route::delete('/delete/{element}', [RuleController::class, 'delete'])->name('rule.delete');
});

Route::prefix('shop')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('shop');
    Route::post('/', [ShopController::class, 'store'])->name('shop.store');
    Route::prefix('product')->group(function () {
        Route::get('/get', [BusketController::class, 'get'])->name('product.get');
        Route::get('{product}', [ProductController::class, 'show'])->name('product.show');
        Route::post('/add/{product}', [BusketController::class, 'add'])->name('product.add');
        Route::post('/minus/{product}', [BusketController::class, 'minus'])->name('product.minus');
        Route::post('/remove/{product}', [BusketController::class, 'remove'])->name('product.remove');
    });
    Route::prefix('busket')->group(function () {
        Route::get('/', [BusketController::class, 'index'])->name('busket');
    });
    Route::prefix('order')->group(function () {
        Route::get('/create', [OrderController::class, 'create'])->name('order.create');
        Route::post('/store', [OrderController::class, 'store'])->name('order.store');
        Route::get('/show/{url}', [OrderController::class, 'show'])->name('order.show');
    });
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile');
    });
});

//LOGGED IN
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::prefix('/')->group(function () {
            Route::get('/', [OrderAdminController::class, 'index'])->name('dashboard');
            Route::get('/show/{order}', [OrderAdminController::class, 'show'])->name('dashboard.order.show');
            Route::put('/update/{order}', [OrderAdminController::class, 'update'])->name('dashboard.order.update');
            Route::delete('/delete/{order}', [OrderAdminController::class, 'delete'])->name('dashboard.order.delete');
            Route::get('/status/{id}/{slug}', [OrderAdminController::class, 'status'])->name('dashboard.order.status');
        });

        Route::prefix('shop')->group(function () {
            Route::get('/', [ShopAdminController::class, 'index'])->name('admin.products');
            Route::get('/create', [ShopAdminController::class, 'create'])->name('admin.product.create');
            Route::post('/store', [ShopAdminController::class, 'store'])->name('admin.product.store');
            Route::get('/edit/{product}', [ShopAdminController::class, 'edit'])->name('admin.product.edit');
            Route::put('/update/{product}', [ShopAdminController::class, 'update'])->name('admin.product.update');
            Route::delete('/delete/{product}', [ShopAdminController::class, 'delete'])->name('admin.product.delete');
        });
    });
});

/*
Route::prefix('shop')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('shop');
    Route::prefix('cart')->group(function () {
        Route::get('/', [NewBusketController::class, 'index'])->name('shop.cart.busket');
        Route::get('get', [NewBusketController::class, 'get'])->name('shop.cart.get');
        Route::post('add/{product}', [NewBusketController::class, 'add'])->name('shop.cart.add');
        Route::post('minus/{product}', [NewBusketController::class, 'minus'])->name('shop.cart.minus');
        Route::post('remove/{product}', [NewBusketController::class, 'remove'])->name('shop.cart.remove');
        Route::get('/create', [OrderController::class, 'create'])->name('account.order.create');
        Route::post('/store', [OrderController::class, 'store'])->name('account.order.store');
        Route::get('/show/{slug}', [OrderController::class, 'show'])->name('account.order.show');
    });
    Route::prefix('product')->group(function () {
        Route::get('{slug}', [ProductController::class, 'show'])->name('shop.product.show');
    });
});
*/