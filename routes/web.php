<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\Auth\LoginController;

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

/**Route::get('/', function () {
    return view('welcome');
});**/
Route::get('/', [FrontendController::class, 'index']);

Route::get('/dashboard', [BackendController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentikasi']);
Route::get('/logout', [LoginController::class, 'loginout']);
Route::get('/signup', [LoginController::class, 'signup'])->middleware('guest'); 
Route::post('/signup', [LoginController::class, 'register']);

Route::resource('category', App\Http\Controllers\CategoryController::class);
Route::get('/category/create',[App\Http\Controllers\CategoryController::class,'create']);
Route::post('/category/store',[App\Http\Controllers\CategoryController::class,'store']);
Route::get('/category/edit/{cat_id}',[App\Http\Controllers\CategoryController::class,'edit']);
Route::post('/category/edit/{cat_id}',[App\Http\Controllers\CategoryController::class,'update']);
Route::get('/category/destroy/{cat_id}',[App\Http\Controllers\CategoryController::class,'destroy']);
Route::get('/category_pdf', [App\Http\Controllers\CategoryController::class, 'category_pdf']);

Route::resource('produk', App\Http\Controllers\ProdukController::class);
Route::get('/produk/create',[App\Http\Controllers\ProdukController::class,'create']);
Route::post('/produk/store',[App\Http\Controllers\ProdukController::class,'store']);
Route::get('/produk/edit/{produk_id}',[App\Http\Controllers\ProdukController::class,'edit']);
Route::post('/produk/edit/{produk_id}',[App\Http\Controllers\ProdukController::class,'update']);
Route::get('/produk/destroy/{produk_id}',[App\Http\Controllers\ProdukController::class,'destroy']);
Route::get('/produk_pdf', [App\Http\Controllers\ProdukController::class, 'product_pdf']);

Route::resource('customer', App\Http\Controllers\CustomerController::class);
Route::get('/customer/create',[App\Http\Controllers\CustomerController::class,'create']);
Route::post('/customer/store',[App\Http\Controllers\CustomerController::class,'store']);
Route::get('/customer/edit/{cus_id}',[App\Http\Controllers\CustomerController::class,'edit']);
Route::post('/customer/edit/{cus_id}',[App\Http\Controllers\CustomerController::class,'update']);
Route::get('/customer/destroy/{cus_id}',[App\Http\Controllers\CustomerController::class,'destroy']);
Route::get('/customer_pdf', [App\Http\Controllers\CustomerController::class, 'customer_pdf']);

Route::resource('supplier', App\Http\Controllers\SupplierController::class);
Route::get('/supplier/create',[App\Http\Controllers\SupplierController::class,'create']);
Route::post('/supplier/store',[App\Http\Controllers\SupplierController::class,'store']);
Route::get('/supplier/edit/{supplier_id}',[App\Http\Controllers\SupplierController::class,'edit']);
Route::post('/supplier/edit/{supplier_id}',[App\Http\Controllers\SupplierController::class,'update']);
Route::get('/supplier/destroy/{supplier_id}',[App\Http\Controllers\SupplierController::class,'destroy']);
Route::get('/supplier_pdf', [App\Http\Controllers\SupplierController::class, 'supplier_pdf']);

Route::resource('masuk', App\Http\Controllers\Produk_MasukController::class);
Route::get('/masuk/create',[App\Http\Controllers\Produk_MasukController::class,'create']);
Route::post('/masuk/store',[App\Http\Controllers\Produk_MasukController::class,'store']);
Route::get('/masuk/edit/{product_masuk_id}',[App\Http\Controllers\Produk_MasukController::class,'edit']);
Route::post('/masuk/edit/{Product_masuk_id}',[App\Http\Controllers\Produk_MasukController::class,'update']);
Route::get('/masuk/destroy/{produk_masuk_id}',[App\Http\Controllers\Produk_MasukController::class,'destroy']);
Route::get('/masuk_pdf', [App\Http\Controllers\Produk_MasukController::class, 'produk_masuk_pdf']);
Route::get('/masuk_excel', [App\Http\Controllers\Produk_MasukController::class, 'produk_masuk_excel']);

Route::resource('keluar', App\Http\Controllers\Produk_KeluarController::class);
Route::get('/keluar/create',[App\Http\Controllers\Produk_KeluarController::class,'create']);
Route::post('/keluar/store',[App\Http\Controllers\Produk_KeluarController::class,'store']);
Route::get('/keluar/edit/{product_keluar_id}',[App\Http\Controllers\Produk_KeluarController::class,'edit']);
Route::post('/keluar/edit/{Product_keluar_id}',[App\Http\Controllers\Produk_KeluarController::class,'update']);
Route::get('/keluar/destroy/{produk_keluar_id}',[App\Http\Controllers\Produk_KeluarController::class,'destroy']);
Route::get('/keluar_pdf', [App\Http\Controllers\Produk_KeluarController::class, 'produk_keluar_pdf']);
Route::get('/keluar_excel', [App\Http\Controllers\Produk_KeluarController::class, 'produk_keluar_excel']);

Route::resource('user', App\Http\Controllers\UserController::class);
Route::get('/user/create',[App\Http\Controllers\UserController::class,'create']);
Route::post('/user/store',[App\Http\Controllers\UserController::class,'store']);
Route::get('/user/edit/{user_id}',[App\Http\Controllers\UserController::class,'edit']);
Route::post('/user/edit/{user_id}',[App\Http\Controllers\UserController::class,'update']);
Route::get('/user/destroy/{user_id}',[App\Http\Controllers\UserController::class,'destroy']);
Route::get('/user_pdf', [App\Http\Controllers\UserController::class, 'user_pdf']);