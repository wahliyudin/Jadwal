<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Forms;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('design.googletranslate');
});
Route::get('/design/home-1', function () {
    return view('design.ecommerce.home.home');
});
Route::get('/design/home-2', function () {
    return view('design.ecommerce.home.home_2');
});
Route::get('/design/home-3', function () {
    return view('design.ecommerce.home.home_3');
});
Route::get('/design/shop-grid-left-sidebar', function () {
    return view('design.ecommerce.shop-grid.shop-grid-left-sidebar');
});
Route::get('/design/shop-grid-right-sidebar', function () {
    return view('design.ecommerce.shop-grid.shop-grid-right-sidebar');
});
Route::get('/design/shop-grid-top-sidebar', function () {
    return view('design.ecommerce.shop-grid.shop-grid-top-sidebar');
});
Route::get('/design/shop-grid-no-sidebar', function () {
    return view('design.ecommerce.shop-grid.shop-grid-no-sidebar');
});
Route::get('/design/shop-list-left-sidebar', function () {
    return view('design.ecommerce.shop-list.shop-list-left-sidebar');
});
Route::get('/design/shop-list-right-sidebar', function () {
    return view('design.ecommerce.shop-list.shop-list-right-sidebar');
});
Route::get('/design/shop-list-top-sidebar', function () {
    return view('design.ecommerce.shop-list.shop-list-top-sidebar');
});
Route::get('/design/shop-list-no-sidebar', function () {
    return view('design.ecommerce.shop-list.shop-list-no-sidebar');
});
Route::get('/design/single-product', function () {
    return view('design.ecommerce.single-product');
});
Route::get('/design/cart', function () {
    return view('design.ecommerce.cart');
});
Route::get('/design/checkout/login', function () {
    return view('design.ecommerce.checkout.login');
});
Route::get('/design/checkout/billing', function () {
    return view('design.ecommerce.checkout.billing');
});
Route::get('/forms', Forms::class);
// Route::livewire('/forms', 'forms')->name("forms");
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
