<?php

namespace App\Http\Controllers;
use App\Produk;
use App\Provinsi;
class ClientController extends Controller
{
	function home(){
		$data['list_produk'] = produk::all();
		$data['list_produk'] = produk::Paginate(8);
		$list_produk = Produk::all();
		return view('home', $data);

		$produk->handleUploadfoto();
	}


	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('home', $data);
	}
	function filter(){
		$nama = request ('nama');
		$stok = explode(",", request('stok'));
		//$data['harga_min'] = $harga_min = request('harga_min');
		//$data['harga_max'] = $harga_max = request('harga_max');
		$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		//$data['list_produk'] = Produk:: whereIn('stok', $stok)->get();
		//$data['list_produk'] = Produk:: whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
		//$data['list_produk'] = Produk:: whereNotIn('stok', $stok)->get();
		//$data['list_produk'] = Produk:: whereNotBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk:: whereNull('stok')->get();
		//$data['list_produk'] = Produk:: whereNotNull('stok')->get();
		//$data['list_produk'] = Produk:: whereBetween('stok', [$harga_min, $harga_max])->whereNotIn('stok', [2])->whereYear('created_at', '2020')->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');

		return view('home', $data);
	}
}