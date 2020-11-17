<?php 

namespace App\Http\Controllers;
use App\Models\User;

class homecontroller extends Controller
{
	
	function showBeranda(){
		return view('beranda');
	}


	function showAdm_kategori(){
		return view('adm_kategori');
	}

	function showAdm_produk(){
		return view('adm_produk');
	}

	function showAdm_promo(){
		return view('adm_promo');
	}
	

}
