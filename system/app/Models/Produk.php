<?php

namespace App\Models;
use App\Models\User;
use App\Models\Kategori;

class Produk extends Model{
	protected $table = 'produk';

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}
	function kategori(){
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}
}