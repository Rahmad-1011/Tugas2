<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;

class clientcontroller extends Controller
{
	function home(){
		$data['list_produk'] = Produk::paginate(12);
		$data['list_kategori'] = Kategori::all();
		return view('home', $data);
	}

	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('product', $data);
	}

	function filter(){
		$kategori = request ('id_kategori');
		$data['id_kategori'] = $kategori;
		$data['list_kategori'] = Kategori::all();
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		$data['list_produk'] = Produk::where('id_kategori', "$kategori")->whereBetween('harga', [$harga_min, $harga_max])->get();
		return view('home', $data);
	}

}