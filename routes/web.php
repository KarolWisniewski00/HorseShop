<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PolicyCookieController;
use App\Http\Controllers\PolicyPrivController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\ShopAdminController;
use App\Http\Controllers\ShopController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about');
});

Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact');
});

Route::prefix('policy-cookies')->group(function () {
    Route::get('/', [PolicyCookieController::class, 'index'])->name('policy-cookie');
});

Route::prefix('policy-priv')->group(function () {
    Route::get('/', [PolicyPrivController::class, 'index'])->name('policy-priv');
});

Route::prefix('rule')->group(function () {
    Route::get('/', [RuleController::class, 'index'])->name('rule');
});

Route::prefix('shop')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('shop');
    Route::prefix('product')->group(function () {
        Route::get('{product}', [ProductController::class, 'show'])->name('product.show');
    });
});

//LOGGED IN
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::prefix('dashboard')->group(function () {

        Route::get('/', function () {
            return view('dashboard');
        })->name('dashboard');

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