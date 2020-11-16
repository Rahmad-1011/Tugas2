<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\clientcontroller;
use App\Http\Controllers\usercontroller;

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

Route::get('/', [clientcontroller::class, 'home']);

Route::get('/login', function () {
	return view('login');
});

Route::get('/home', [clientcontroller::class, 'home']);

Route::get('product/{produk}', [clientcontroller::class, 'show']);

Route::get('/checkout', function () {
	return view('checkout');
});

Route::get('/register', function () {
	return view('register');
});

//produk
Route::get('/beranda', [homecontroller::class, 'showBeranda']);

Route::get('/adm_kategori', [homecontroller::class, 'showAdm_kategori']);
 
Route::get('/adm_produk', [produkcontroller::class, 'index']);

Route::get('/adm_produk/create', [produkcontroller::class, 'create']);

Route::post('/adm_produk', [produkcontroller::class, 'store']);

Route::get('/adm_produk/{produk}', [produkcontroller:: class, 'show']);

Route::get('/adm_produk/{produk}/edit', [produkcontroller:: class, 'edit']);

Route::put('/adm_produk/{produk}', [produkcontroller:: class, 'update']);

Route::delete('/adm_produk/{produk}', [produkcontroller:: class, 'destroy']);

//user 
Route::get('/user', [usercontroller::class, 'index']);

Route::get('/user/create', [usercontroller::class, 'create']);

Route::post('/user', [usercontroller::class, 'store']);

Route::get('/user/{user}', [usercontroller:: class, 'show']);

Route::get('/user/{user}/edit', [usercontroller:: class, 'edit']);

Route::put('/user/{user}', [usercontroller:: class, 'update']);

Route::delete('/user/{user}', [usercontroller:: class, 'destroy']);



Route::get('/adm_promo', [homecontroller::class, 'showAdm_promo']);


//Login_admin

Route::get('/login_adm', [authcontroller::class, 'showLogin']);

Route::post('/login_adm', [authcontroller::class, 'LoginProcess']);

Route::get('/register_adm', [authcontroller::class, 'Register']);


Route::get('/masteradmin', function () 
{
	return view('masteradmin');
});