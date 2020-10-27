<?php

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
    return view('home');
});

Route::get('/login', function () {
	return view('login');
});

Route::get('/home', function () {
	return view('home');
});

Route::get('/product', function () {
	return view('product');
});

Route::get('/checkout', function () {
	return view('checkout');
});

Route::get('/register', function () {
	return view('register');
});

Route::get('/admin', function () 
{
	return view('admin');
});

Route::get('/adm_produk', function () 
{
	return view('adm_produk');
});

Route::get('/adm_promo', function () 
{
	return view('adm_promo');
});

Route::get('/login_adm', function () 
{
	return view('login_adm');
});

Route::get('/register_adm', function () 
{
	return view('register_adm');
});
