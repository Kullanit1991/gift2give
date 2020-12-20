<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\FacebookController;

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

Route::get('/',  [App\Http\Controllers\StarterController::class, 'index']);

Route::get('change/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return Redirect::back();
    });

Route::get('admin', function () {
    return view('app.admin.dashboard.index');
})->middleware('is_admin');

Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

Route::get('/about',  [App\Http\Controllers\StarterController::class, 'aboutIndex']);
Route::get('/contact',  [App\Http\Controllers\StarterController::class, 'contactIndex']);

Route::get('/list/{menu}/{submenu}/{id}', [App\Http\Controllers\ShopingGridController::class, 'index']);
Route::get('/check-out', function () {
    return view('app.checkouts.index');
});
Route::get('/view-detail/{productId}/{productname}', [App\Http\Controllers\ShopingGridController::class, 'shopViewIndex']);


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
Route::get('top-sale-edit-type/{id}',  [App\Http\Controllers\TopSaleController::class, 'editType'])->middleware('is_admin');
Route::get('top-sale-delete-type/{id}',  [App\Http\Controllers\TopSaleController::class, 'deleteType'])->middleware('is_admin');
Route::post('top-sale-store/categories/edit',  [App\Http\Controllers\TopSaleController::class, 'storeEditType'])->middleware('is_admin')->name('top-sale.type.edit');

Route::group(['prefix' => 'admin'], function()
{
    Route::get('/setting/home-screen', [App\Http\Controllers\ScreenSetUpController::class, 'homeIndex'])->middleware('is_admin')->name('home-screen');
    
    Route::get('/setting/home-screen/slides', [App\Http\Controllers\ScreenSetUpController::class, 'slidesIndex'])->middleware('is_admin')->name('list-slides');

    Route::get('/setting/home-screen/slides/add', [App\Http\Controllers\ScreenSetUpController::class, 'slidesCreate'])->middleware('is_admin')->name('list-slides.add');

    Route::post('/setting/home-screen/slides/store',  [App\Http\Controllers\ScreenSetUpController::class, 'storeSlides'])->middleware('is_admin')->name('list-slides.store');

    Route::get('/setting/shop-grid-screen', [App\Http\Controllers\ScreenSetUpController::class, 'shopGridIndex'])->middleware('is_admin')->name('shop-grid');
});
