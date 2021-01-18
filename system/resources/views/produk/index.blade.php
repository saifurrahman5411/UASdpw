@inject(timeService', 'App\Services\TimeServices')

@extends('template.base')

@section('content')
 
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card-header">
					<div class="float-right">
						JAM : {{$timeService->showTimeNow()}}
						
					</div>
				    filter

				</div>
				<div class="card-body">
					<form action="{{url('admin/produk/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">nama</label>
							<input type="text" class="form-control" name="nama" value="{{$nama ??''}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label">stok</label>
							<input type="text" class="form-control" name="stok" value="{{$stok ??''}}">
						</div>
						<div class="row">
							<div class="col-md-6">
											<div class="form-group">
										<label for="" class="control-label">harga min</label>
										<input type="text" class="form-control" name="harga_min" value="{{$harga_min ??''}}">
						</div>
							</div>
							<div class="col-md-6">
											<div class="form-group">
										<label for="" class="control-label">harga max</label>
										<input type="text" class="form-control" name="harga_max" value="{{$harga_max ??''}}">
						</div>
						
							</div>



						</div>
						
						<button class="btn btn-dark float-right"><i class="fa-search"></i>Filter</button>
					</form>
					
				</div>
				<div class="card mt-4">
					<div class="card-header">
						Data Produk
						<a href="{{url('admin/produk/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus">  Tambah Data</i></a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Stok</th>
							</thead>
							<tbody>
								@foreach($list_produk as $produk)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
										<a href="{{url('admin/produk', $produk->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
										<a href="{{url('admin/produk', $produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										@include('template.util.delete', ['url' => url('admin/produk', $produk->id)])
										</div>
									</td>
									<td>{{$produk->nama}}</td>
									<td>{{$produk->harga}}</td>
									<td>{{$produk->stok}}</td>
								</tr>
								@endforeach
							</tbody>							
						</table>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection