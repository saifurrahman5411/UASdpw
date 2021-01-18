<?php 
namespace App\Http\Controllers;

use App\Produk;
use App\Provinsi;
class HomeController extends Controller{
	function showBeranda(){
		return view('beranda');
	}
	function showKategory(){
		return view('kategory');
	}
	function showProduk(){
		return view('produk');
	}
	function showPromo(){
		return view('promo');
	}
	function showCard(){
		return view('card');
	}
	function showPelanggan(){
		return view('pelanggan');
	}
	function showSupplier(){
		return view('supplier');
	}
	function showCreate(){
		return view('create');
	}
	function showTemplate(){
		return view('template.base');
	}


	function test($produk, $hargaMin = 0, $hargaMax =0){
		if($produk == 'payung'){
		echo  "tampilkan produk payung";	
		}elseif ($produk == 'sepeda') {
		echo  "tampilkan produk sepeda";	
		}
		echo "<br>";
		echo "harga min adalah $hargaMin <br>";
		echo "harga max adalah $hargaMax <br>";
	}
	public function testCollection()
	{

		$list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'Vesps', 'BMW', 'KTM', 'Aprillia'];
		
		$list_bike = collect($list_bike);
		$list_produk = Produk::all();

		// Sorting
		// Sort By Harga Terendah
		// dd($list_produk->sortBy('harga'));
		// Sort By Harga Tertinggi
		//dd($list_produk->sortByDesc('harga'));
		//$data['list'] = $list_produk;
		//return view('test-collection', $data);

		// map

		$map = $list_produk->map(function($item){
			$result['nama'] = $item->nama;
			$result['harga'] = $item->harga;
			//return $result;
			return view('test-collection', $item);
		});

		//dd($map);


		//$sum = $list_produk->sum('harga');
		//dd($sum);
		

		//$sum = $list_produk->max('harga');
		//dd($sum);

		//$sum = $list_produk->min('harga');
		//dd($sum);

		$data['list'] = Produk::Paginate(3);
		return view('test-collection', $data);
		
		
		dd($list_bike, $list_produk);

		
	}
	function testAjax(){
		$data['list_provinsi'] = Provinsi::all();
		return view('test-ajax', $data);
	}
}

