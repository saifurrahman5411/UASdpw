<?php
namespace App;
use App\Desa;
use App\Kabupaten;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent;

class Kecamatan extends Model{
	protected $table = 'kecamatan';

	function desa(){
		return $this->hasMany(Desa::class, 'id_kecamatan');
	}

	function kabupaten(){
		return $this->belongsTo(Kabupaten::class, 'id_kabupaten');
	}
}
