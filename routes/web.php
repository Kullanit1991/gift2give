<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('app.home');
});

Route::resource('/', App\Http\Controllers\StarterController::class)->only([
    'index', 'topSale'
]);


Route::get('admin', function () {
    return view('app.admin.dashboard.index');
})->middleware('is_admin');



Route::get('/about', function () {
    return view('app.about.index');
});
Route::resource('/about', App\Http\Controllers\StarterController::class)->only([
    'index', 'show'
]);

Route::get('/contact', function () {
    return view('app.contact.index');
});
Route::resource('/contact', App\Http\Controllers\StarterController::class)->only([
    'index', 'show'
]);
Route::get('/shopping-cart', function () {
    return view('app.shoping-cart.index');
});
Route::get('/check-out', function () {
    return view('app.checkouts.index');
});
// Route::get('/admin', function () {
//     return view('app.admin.dashboard.index');
// });


Route::get('setting-menu', [App\Http\Controllers\MenuManagement::class, 'index'])->middleware('is_admin')->name('setting.menu');

Route::get('setting-menu-add', [App\Http\Controllers\MenuManagement::class, 'add'])->middleware('is_admin');

Route::get('setting-menu-add-submenu', [App\Http\Controllers\MenuManagement::class, 'addSubmenu'])->middleware('is_admin');

Route::post('setting-menu/store', [App\Http\Controllers\MenuManagement::class, 'store'])->middleware('is_admin')->name('setting-menu.store');

Route::post('setting-menu/submenu/store', [App\Http\Controllers\MenuManagement::class, 'storeSubmenu'])->middleware('is_admin')->name('setting-menu.store.submenu');

Route::get('setting-user', [App\Http\Controllers\UserManagement::class, 'index'])->middleware('is_admin');
Route::get('setting-user-edit', [App\Http\Controllers\UserManagement::class, 'edit'])->middleware('is_admin');

Route::get('product',  [App\Http\Controllers\ProductManagement::class, 'index'])->middleware('is_admin')->name('product');
Route::get('product-add',  [App\Http\Controllers\ProductManagement::class, 'create'])->middleware('is_admin');
Route::post('product-store',  [App\Http\Controllers\ProductManagement::class, 'store'])->middleware('is_admin')->name('product.store');

Route::get('top-sale',  [App\Http\Controllers\TopSaleController::class, 'index'])->middleware('is_admin')->name('top-sale');
Route::get('top-sale-add',  [App\Http\Controllers\TopSaleController::class, 'create'])->middleware('is_admin');
Route::get('top-sale-add-type',  [App\Http\Controllers\TopSaleController::class, 'createType'])->middleware('is_admin');
Route::post('top-sale-store',  [App\Http\Controllers\TopSaleController::class, 'store'])->middleware('is_admin')->name('top-sale.store');
Route::post('top-sale-store/categories',  [App\Http\Controllers\TopSaleController::class, 'storeType'])->middleware('is_admin')->name('top-sale.type.store');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
