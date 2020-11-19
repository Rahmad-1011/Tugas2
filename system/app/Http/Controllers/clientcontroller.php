<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class clientcontroller extends Controller
{
	function home(){
		$data['list_produk'] = produk::all();
		return view('home', $data);
	}

	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('product', $data);
	}

	function filter(){
		$kategori = request ('kategori');
		$data['list_produk'] = Produk::where('kategori', 'like', "%$kategori%")-> get();
		$data['kategori'] = $kategori;
		return view('home', $data);
	}
}