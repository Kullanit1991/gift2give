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
Route::get('admin', function () {
    return view('app.admin.dashboard.index');
})->middleware('is_admin');



Route::get('/about', function () {
    return view('app.about.index');
});
Route::get('/contact', function () {
    return view('app.contact.index');
});
Route::get('/shopping-cart', function () {
    return view('app.shoping-cart.index');
});
Route::get('/check-out', function () {
    return view('app.checkouts.index');
});
// Route::get('/admin', function () {
//     return view('app.admin.dashboard.index');
// });


Route::get('setting-menu', [App\Http\Controllers\MenuManagement::class, 'index'])->middleware('is_admin');

Route::get('setting-user', [App\Http\Controllers\UserManagement::class, 'index'])->middleware('is_admin');

Route::get('product',  [App\Http\Controllers\ProductManagement::class, 'index'])->middleware('is_admin');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
