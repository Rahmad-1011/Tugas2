<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\User;
use App\Models\Kategori;

class produkcontroller extends Controller {
	function index(){
		$user = request()->user();
		$data['list_produk'] = $user->produk;
		$data['list_kategori'] = Kategori::all();
		return view('Produk.index', $data);
	}

	function create(){
		$data['list_kategori'] = Kategori::all();
		return view('Produk.create', $data);

	}

	function store(){
		$produk = new produk;
		$produk-> id_user = request()->user()->id;
		$produk-> nama = request('nama');
		$produk-> id_kategori = request('id_kategori');
		$produk-> harga = request('harga');
		$produk-> berat = request('berat');
		$produk-> stok = request('stok');
		$produk-> deskripsi = request('deskripsi');
		$produk-> save();

		return redirect ('admin/produk')-> with ('success', 'Data berhasil ditambahkan');

	}

	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('Produk.show', $data);

	}

	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('Produk.edit', $data);
	}

	function update(Produk $produk){
		$produk-> nama = request('nama');
		$produk-> id_kategori = request('id_kategori');
		$produk-> harga = request('harga');
		$produk-> berat = request('berat');
		$produk-> stok = request('stok');
		$produk-> deskripsi = request('deskripsi');
		$produk-> save();

		return redirect ('admin/produk')-> with ('success', 'Data berhasil diedit');

	}

	function destroy(Produk $produk){
		$produk->delete();

		return redirect ('admin/produk')-> with ('danger', 'Data berhasil dihapus');

	}

	function filter(){
		$kategori = request ('id_kategori');
		$data['id_kategori'] = $kategori;
		$data['list_kategori'] = Kategori::all();
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		$data['list_produk'] = Produk::where('id_kategori', "$kategori")->whereBetween('harga', [$harga_min, $harga_max])->get();
		return view('Produk.index', $data);
	}
}