<p>
    {{$produk->harga}} |
	Stok : {{$produk->stok}} |
	Berat : {{$produk->berat}} gr |
	Warna : {{$produk->warna}} |
	seller : {{$produk->seller->nama}} 
	Tanggal_produk : {{$produk->created_at->diffforhumans()}}|
</p>