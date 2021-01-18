<?php
namespace App;

use App\Provinsi;
use App\Kecamatan;
use Illuminate\Database\Eloquent\Factories\HasFactoriy;
use Illuminate\Database\Eloquent;

class Kabupaten extends Model{
	protected $table = 'kabupaten';

	function kecamatan(){
		return $this->hasMany(Kecamatan::class, 'id_kabupaten');
	}

	function provinsi(){
		return $this->belongsTo(Provinsi::class, 'id_provinsi');
	}
}
