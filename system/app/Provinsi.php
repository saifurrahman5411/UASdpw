<?php
namespace App;

use App\Kabupaten;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent;

class Provinsi extends Model{
	protected $table = 'provinsi';

	function kabupaten(){
		return $this->hasMany(Kabupaten::class, 'id_provinsi');
	}
}