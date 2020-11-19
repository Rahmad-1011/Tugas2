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
Route::post('/home/filter', [clientcontroller::class, 'filter']);

Route::get('product/{produk}', [clientcontroller::class, 'show']);

Route::get('/checkout', function () {
	return view('checkout');
});

Route::get('/register', function () {
	return view('register');
});


Route::prefix('admin')->group(function(){
	//beranda
	Route::get('/beranda', [homecontroller::class, 'showBeranda']);
	//kategori
	Route::get('/adm_kategori', [kategoricontroller::class, 'kategori']);
	//produk
	Route::resource('adm_produk', produkcontroller::class);
	Route::post('adm_produk/filter', [produkcontroller::class, 'filter']);
	//user 
	Route::resource('user', usercontroller::class);
});




Route::get('/adm_promo', [homecontroller::class, 'showAdm_promo']);


//Login_admin

Route::get('/login_adm', [authcontroller::class, 'showLogin'])->name('login');

Route::post('/login_adm', [authcontroller::class, 'LoginProcess']);

Route::get('/register_adm', [authcontroller::class, 'create']);

Route::post('/register_adm', [authcontroller::class, 'Register']);

Route::get('/logout_adm', [authcontroller::class, 'destory']);

Route::get('/masteradmin', function () 
{
	return view('masteradmin');
});