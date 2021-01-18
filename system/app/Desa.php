<?php
namespace App;

use App\Kabupaten;
use App\Kecamatan;
use App\Provinsi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent;

class Desa extends Model{
	protected $table = 'desa';

	function kecamatan(){
		return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
	}
}
