<?php 

namespace App\Http\Controllers;
use App\Models\User;

class homecontroller extends Controller
{
	
	function showBeranda(){
		return view('beranda');
	}

	function showAdm_promo(){
		return view('adm_promo');
	}
	

}
