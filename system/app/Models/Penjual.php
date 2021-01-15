<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\UserDetail;
use App\Models\Produk;

class Penjual extends Authenticatable
{
    protected $table = 'penjual';
    use HasFactory, Notifiable;

    function detail(){
    	return $this->hasOne(UserDetail::class, 'id_penjual');
    }

    function produk(){
    	return $this->hasMany(Produk::class , 'id_penjual');
    }
    function setPasswordAttribute ($value){
    	$this->attributes['password'] = bcrypt($value);
    }
    function setUsernameAttribute ($value){
    	$this->attributes['username'] = strtolower($value);
    }
}
