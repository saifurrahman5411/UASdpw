<?php 

namespace App\Http\Controllers;
use App\Produk;

class ProdukController extends controller{
	function index(){
		$user = request()->user();
		$data['list_produk'] = $user->produk;
		return view('produk.index', $data);
	}
	function create(){
		return view('produk.create');
	}
	function store(){

		
		$produk= new Produk;
		$produk-> id_user = request()->user()->id;
		$produk-> nama = request('nama');
		$produk-> harga = request('harga');
		$produk-> berat = request('berat');
		$produk-> stok = request('stok');
		$produk-> deskripsi = request('deskripsi');
		$produk->save();

		$produk->handleUploadeFoto();

		return redirect('admin/produk')->with('success', 'data berhasil di tambahkan');
	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.show', $data);
	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.edit', $data);
	}
	function update(Produk $produk){
		$produk-> nama = request('nama');
		$produk-> harga = request('harga');
		$produk-> berat = request('berat');
		$produk-> stok = request('stok');
		$produk-> deskripsi = request('deskripsi');
		$produk->save();

		$produk->handleUploadeFoto();

		return redirect('admin/produk')->with('success', 'data berhasil di edit');
	}
	function destroy(Produk $produk){
		$produk->handleDelete();
		$produk->delete();
		return redirect('admin/produk')->with('success', 'data berhasil di hapus');	
	}
	
	function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data ['harga_min'] = $harga_min = request('harga_min');
		$data ['harga_max'] = $harga_max = request('harga_max');
		//$data ['list_produk'] = produk::where('nama','like', "%$nama%")->get();
		//$data ['list_produk'] = produk::wherein('stok', $stok)->get();
		//$data ['list_produk'] = produk::whereBetween ('harga', [$harga_min, $harga_max])->get();
		//$data ['list_produk'] = produk::where('stok','<>', $stok)->get();
		//$data ['list_produk'] = produk::whereNotIn('stok', $stok)->get();
		//$data ['list_produk'] = produk::whereNotBetween ('harga', [$harga_min, $harga_max])->get();
		//$data ['list_produk'] = produk::whereNotNull ('stok')->get();
		//$data ['list_produk'] = produk::whereDate ('created_at', '2020-11-15')->get();
		//$data ['list_produk'] = produk::whereYear ('created_at', '2020')->get();
		//$data ['list_produk'] = produk::whereMonth ('created_at', '11')->get();
		//$data ['list_produk'] = produk::whereTime ('created_at', '14:08:57')->get();
		$data ['list_produk'] = produk::whereBetween ('harga', [$harga_min, $harga_max])->whereNotIn('stok', [55])->whereYear('created_at', '2020')->get();
		$data ['nama'] = $nama;
		$data ['stok'] = request('stok');



		return view('produk.index', $data);

	}
}