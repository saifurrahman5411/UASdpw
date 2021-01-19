<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
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
    return view('welcome');
});
Route::get('beranda',[HomeController:: class,'showBeranda']);
Route::get('beranda/{status}',[HomeController:: class,'showBeranda']);
Route::get('kategory',[HomeController:: class,'showKategory']);
Route::get('promo',[HomeController:: class,'showPromo']);
Route::get('pelanggan',[HomeController:: class,'showPelanggan']);
Route::get('supplier',[HomeController:: class,'showSupplier']);
Route::get('create',[HomeController:: class,'showCreate']);
Route::get('template.base',[HomeController:: class,'showTemplate']);


Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);




Route::get('test/{produk}/{hargaMin?}/{hargaMax?}',[HomeController:: class,'test']);
	
	Route::prefix('admin')->middleware('auth')->group(function(){
	Route::post('produk/filter', [ProdukController::class, 'Filter']);
	Route::resource('produk', ProdukController::class);
	Route::resource('user', UserController::class);
	Route::resource('promo', PromoController::class);


		
			Route::get('produk',[ProdukController:: class,'index']);
			Route::get('produk/create',[ProdukController:: class,'create']);
			Route::post('produk',[ProdukController:: class,'store']);
			Route::get('produk/{produk}',[ProdukController:: class, 'show']);
			Route::get('produk/{produk}/edit',[ProdukController:: class, 'edit']);
			Route::put('produk/{produk}',[ProdukController:: class, 'update']);
			Route::delete('produk/{produk}',[ProdukController:: class, 'destroy']);



			Route::get('user',[UserController:: class,'index']);
			Route::get('user/create',[UserController:: class,'create']);
			Route::post('user',[UserController:: class,'store']);
			Route::get('user/{user}',[UserController:: class, 'show']);
			Route::get('user/{user}/edit',[UserController:: class, 'edit']);
			Route::put('user/{user}',[UserController:: class, 'update']);
			Route::delete('user/{user}',[UserController:: class, 'destroy']);



			Route::get('promo',[PromoController:: class,'index']);
			Route::get('promo/create',[PromoController:: class,'create']);
			Route::post('promo',[PromoController:: class,'store']);
			Route::get('promo/{promo}',[PromoController:: class, 'show']);
			Route::get('promo/{promo}/edit',[PromoController:: class, 'edit']);
			Route::put('promo/{promo}',[PromoController:: class, 'update']);
			Route::delete('promo/{promo}',[PromoController:: class, 'destroy']);

			});

Route::get('/', [ClientController:: class, 'home']);
Route::get('home', [HomeController:: class, 'home']);
Route::get('produk/{produk}', [ClientController:: class, 'filter']);
Route::get('test-ajax', [ClientController:: class, 'test-ajax']);

Route::get('card', [HomeController:: class, 'showCard']);
Route::get('card', [HomeController:: class, 'cardPembelian']);



Route::get('login',[AuthController:: class,'showLogin']);
Route::post('login-pembeli',[AuthController:: class,'LoginProcess'])->name('login');
Route::post('login-penjual',[AuthController:: class,'LoginProcess'])->name('login');
Route::post('login',[AuthController:: class,'LoginProcess'])->name('login');
Route::get('logout',[AuthController:: class,'logout']);

Route::get('test-collection', [HomeController:: class,'testCollection']);
Route::get('test-ajax', [HomeController:: class,'testAjax']);

