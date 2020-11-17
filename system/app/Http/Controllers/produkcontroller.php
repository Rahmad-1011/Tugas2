<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class produkcontroller extends Controller {
	function index(){
		$data['list_produk'] = Produk::all();
		return view('Produk.index', $data);
	}

	function create(){
		return view('Produk.create');

	}

	function store(){
		$produk = new produk;
		$produk-> nama = request('nama');
		$produk-> harga = request('harga');
		$produk-> berat = request('berat');
		$produk-> stok = request('stok');
		$produk-> deskripsi = request('deskripsi');
		$produk-> save();

		return redirect ('admin/adm_produk')-> with ('success', 'Data berhasil ditambahkan');

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
		$produk-> harga = request('harga');
		$produk-> berat = request('berat');
		$produk-> stok = request('stok');
		$produk-> deskripsi = request('deskripsi');
		$produk-> save();

		return redirect ('admin/adm_produk')-> with ('success', 'Data berhasil diedit');

	}

	function destroy(Produk $produk){
		$produk->delete();

		return redirect ('admin/adm_produk')-> with ('danger', 'Data berhasil dihapus');

	}
}