<?php 

namespace App\Http\Controllers;
use App\Promo;

class PromoController extends controller{
	function index(){
		$data['list_promo'] = Promo::all();
		return view('promo.index', $data);
	}
	function create(){
		return view('promo.create');
	}
	function store(){
		$promo= new Promo;
		$promo-> nama = request('nama');
		$promo-> harga = request('harga');
		$promo-> berat = request('berat');
		$promo->save();

		return redirect('promo')->with('success', 'data berhasil di tambahkan');
	}
	function show(Promo $promo){
		$data['promo'] = $promo;
		return view('promo.show', $data);
	}
	function edit(Promo $promo){
		$data['promo'] = $promo;
		return view('promo.edit', $data);
	}
	function update(Produk $produk){
		$promo-> nama = request('nama');
		$promo-> harga = request('harga');
		$promo-> berat = request('berat');
		$promo->save();

		return redirect('promo')->with('success', 'data berhasil di edit');
	}
	function destroy(Promo $promo){
		$promo->delete();

		return redirect('promo')->with('success', 'data berhasil di hapus');	
	}
	
}