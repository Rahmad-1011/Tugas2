<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;

class authcontroller extends Controller
{
	function showLogin(){
		return view('login_adm');

	}
	
	function create(){
		return view('register_adm');

	}
	function LoginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('admin/beranda')-> with('success', 'Login Berhasil');
			}else{
				return back()-> with('danger', 'Silahkan cek email dan password anda');
			}

	}

	function Register(){
		$user = new user;
		$user-> nama = request('nama');
		$user-> username = request('username');
		$user-> email = request('email');
		$user-> password = bcrypt(request('password'));
		$user-> save();

		return redirect ('/login_adm')-> with ('success', 'Registrasi berhasil');
	}

	function destory(){
		Auth::logout();
		return view('login_adm');

	}

}