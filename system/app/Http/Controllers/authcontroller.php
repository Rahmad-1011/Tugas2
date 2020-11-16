<?php

namespace App\Http\Controllers;
use Auth;

class authcontroller extends Controller
{
	function showLogin(){
		return view('login_adm');

	}

	function LoginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('beranda')-> with('success', 'Login Berhasil');
			}else{
				return back()-> with('danger', 'Silahkan cek email dan password anda');
			}

	}

	function Register(){
		return view('register_adm');

	}


}