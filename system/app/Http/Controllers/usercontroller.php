<?php

namespace App\Http\Controllers;
use App\Models\User;

class usercontroller extends Controller {
	function index(){
		$data['list_user'] = User::all();
		return view('User.index', $data);
	}

	function create(){
		return view('User.create');

	}

	function store(){
		$user = new user;
		$user-> nama = request('nama');
		$user-> username = request('username');
		$user-> email = request('email');
		$user-> password = bcrypt(request('password'));
		$user-> save();

		return redirect ('admin/user')-> with ('success', 'Data berhasil ditambahkan');

	}


	function show(User $user){
		$data['user'] = $user;
		return view('User.show', $data);

	}

	function edit(User $user){
		$data['user'] = $user;
		return view('User.edit', $data);
	}

	function update(User $user){
		$user-> nama = request('nama');
		$user-> username = request('username');
		$user-> email = request('email');
		if(request('password')) $user-> password = bcrypt(request('password'));
		$user-> save();

		return redirect ('admin/user')-> with ('success', 'Data berhasil diedit');

	}

	function destroy(User $user){
		$user->delete();

		return redirect ('admin/user')-> with ('danger', 'Data berhasil dihapus');

	}
}