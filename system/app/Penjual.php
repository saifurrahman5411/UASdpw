<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\UserDetail;

class Penjual extends Authenticatable
{
     protected $table = 'penjual';
    use Notifiable;

    function detail(){
    	return $this->hasOne(UserDetail::class,'id_user');
    }

     function Produk(){
    	return $this->hasMany(Produk::class,'id_user');
    }

    function getJenisKelaminStringAttribute(){
    	return($this->jenis_kelamin == 1) ? "laki-laki" : "perempuan";

    }

    function setPasswordAttribute($value){
    	$this->attributes['password'] = bcrypt($value);
    }

    function setUsernameAttribute($value){
    	$this->attributes['username'] = strtolower($value);
    }

   }