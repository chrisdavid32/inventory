<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\pageController;
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

Route::view('/', 'home');
Route::get('login', [pageController::class, 'adminlog'])->name('login');
Route::post('user', [pageController::class, 'signin']);
// Route::get('dash', [pageController::class, 'admid']);

Route::get('logout', [pageController::class, 'signout']);
Route::group([
 'middleware' => 'auth'
], function () {
 Route::get('administrator', [adminController::class, 'index']);
 Route::get('catergories', [adminController::class, 'cert']);
 Route::post('addcart', [adminController::class, 'storeCategory']);
 Route::get('deletecart/{id}', [adminController::class, 'destroy']);
 Route::get('product', [adminController::class, 'addProduct']);
 Route::post('store', [adminController::class, 'storeProduct']);
 Route::get('deleteproduct/{id}', [adminController::class, 'destroyProduct']);
 Route::get('deleteproductlist/{id}', [adminController::class, 'destroyProductList']);
 Route::get('productlist', [adminController::class, 'list']);
 Route::get('order', [orderController::class, 'order']);
 Route::post('saveorder', [orderController::class, 'storeOrder']);
 Route::get('pending', [orderController::class, 'pendingOrder']);
 Route::get('cancel/{id}', [orderController::class, 'revertOrder']);
 Route::get('approve/{id}', [orderController::class, 'approved']);
 Route::get('ordercancel/{id}', [orderController::class, 'disapproved']);
 Route::get('deliver', [orderController::class, 'deliverOrder']);
 Route::get('Goodsout', [orderController::class, 'goodsold']);
 Route::get('instock', [orderController::class, 'goodsInstock']);
 Route::get('edits/{id}', [adminController::class, 'editproduct']);
 Route::post('update', [adminController::class, 'updateproduct']);
});
