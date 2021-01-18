<?php
namespace App\Traits\Attributes;

use Illuminate\support\str;


trait ProdukAttributes {

	function getHargaAttribute(){
		return "Rp. ".number_format($this->attributes['harga']);
	}

	function getTanggalprodukAttribute(){
		$tanggal =$this->created_at;
		return strftime("%d %b %Y", strftime($this->created_at));
	}

	function handleUploadeFoto(){
		if(request()->hasFile('foto')){
			$foto = request()->file('foto');
			$destination = "images/produk";
			$randomStr = Str ::random(5);
			$filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->foto = "app/".$url;
			$this->save();


		}
	} 
	function handleDelete(){
		$foto = $this->foto;
		$path = public_path("$foto");
		if(file_exists($path)){
			unlink($path);
		}
		return true;
	}
}